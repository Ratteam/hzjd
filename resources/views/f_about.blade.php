@extends('layout')

@section('title', '咸安区惠众机电设备厂')

@section('css')
<!--引用百度地图API-->
<style type="text/css">
	html,
	body {
		margin: 0;
		padding: 0;
	}

	.iw_poi_title {
		color: #CC5522;
		font-size: 14px;
		font-weight: bold;
		overflow: hidden;
		padding-right: 13px;
		white-space: nowrap
	}

	.iw_poi_content {
		font: 12px arial, sans-serif;
		overflow: visible;
		padding-top: 4px;
		white-space: -moz-pre-wrap;
		word-wrap: break-word
	}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
@endsection

@section('content')
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
					<form>
						<div class="form-row">

							<div class="form-group col-md-3">
								<input type="text" class="form-control" id="inputCategory4" placeholder="姓名：">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control" id="inputLocation4" placeholder="电话：">
							</div>
							<div class="form-group col-md-4">
								<input type="text" class="form-control" id="inputtext4" placeholder="邮箱：">
							</div>
							<div class="form-group col-md-2">
								<button type="submit" class="btn btn-primary">留下联系方式</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<!-- <div class="profile-thumb">
								<img src="user-thumb.jpg" tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/user/user-thumb.jpg"
								 alt="" class="rounded-circle">
							</div> -->
						<!-- User Name -->
						<h1 class="text-center">公司简介</h1>
						<p>咸宁惠众机电设备厂</p>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li>
								<a href="/" tppabs="">
									<h3><i class="fa fa-university"></i>首页</h3>
								</a></li>
							<li>
								<a href="/f_success" tppabs="">
									<h3><i class="fa fa-user"></i>成功案例</h3>
								</a>
							</li>
							<li>
								<a href="/f_category" tppabs="">
									<h3><i class="fa fa-product-hunt"></i>产品中心</h3>
								</a>
							</li>
							<li>
								<a href="/f_news" tppabs="">
									<h3><i class="fa fa-desktop"></i>新闻中心</h3>
								</a>
							</li>
							<li>
								<a href="/f_about" tppabs="">
									<h3><i class="fa fa-heart"></i>关于我们</h3>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<!-- Edit Personal Info -->
				<div class="widget personal-info">
					<!-- 地图 -->
					咸安区慧众机械厂家直销,十余年点胶机开发经验,专业为您实现点胶自动化作业.
					<hr>
					公司拥有一批经验丰富的焊接、机械、电子、机电一体化等专业技术人才和高素质的设备售后调试工程师，

					长期致力于点胶设备及点胶配件的研发、制造，积累了丰富的实践经验，

					可以在焊接技术、点胶技术及应用领域为广大用户提供先进、实用、可靠的产品及服务。同时，公司与国内多所著名高校长期保持良好的科研合作关系。
					<hr>
					D7300N桌上型自动点胶机参数：型号Y&D7300N加工范围300/300/100负载10kg/5kg

					移动速度0.1-800/500解析能力0.01mm/Axis重复精度+/-0.01mm/Axis程序记录容量至少100组、

					每组4000points数据储存方式CFCard显示方式TeachPendantLCD马达系统三相微步进精密马达
					<hr>
					自2010年成立以来，公司秉持“诚信、务实、开拓、创新.”的核心价值观，坚持科技创新，拥有聚氨酯密封、

					丁基胶密封涂胶、硅酮胶涂胶、热熔胶涂胶、焊缝胶密封等各种单、双组份密封自动化产品，广泛应用于汽车、电气（器）、家电、电子、制冷、净化、过滤器、新能源等各行业。
					<hr>
					惠众以其特有的“创新”精神，利用我们多年的专业经验，以及对客户要求的深刻理解，不断满足客户对产品多样化和高品质的追求，持续为客户创造更大的价值。

				</div>
			</div>

			<div class="widget personal-info">
				<div class="row">
					<div class="col-md-12">
						<div class="search-result">
							<h2>公司地址：</h2>
							<p>咸宁市咸安区永安办事处宝塔加油站107国道旁供销物流园对面</p>
						</div>
					</div>
				</div>
				<!-- 地图 -->
				<div style="width:1100px;height:550px;border:#ccc solid 1px;" id="dituContent"></div>
			</div>

		</div>
	</div>
</section>
@endsection

@section('js')
<!-- 地图 -->
<script type="text/javascript">
	//创建和初始化地图函数：
	function initMap() {
		createMap(); //创建地图
		setMapEvent(); //设置地图事件
		addMapControl(); //向地图添加控件
		addMarker(); //向地图中添加marker
	}

	//创建地图函数：
	function createMap() {
		var map = new BMap.Map("dituContent"); //在百度地图容器中创建一个地图
		var point = new BMap.Point(114.2730993217, 29.8876383964); //定义一个中心点坐标
		map.centerAndZoom(point, 17); //设定地图的中心点和坐标并将地图显示在地图容器中
		window.map = map; //将map变量存储在全局
	}

	//地图事件设置函数：
	function setMapEvent() {
		map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
		map.enableScrollWheelZoom(); //启用地图滚轮放大缩小
		map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
		map.enableKeyboard(); //启用键盘上下左右键移动地图
	}

	//地图控件添加函数：
	function addMapControl() {
		//向地图中添加缩放控件
		var ctrl_nav = new BMap.NavigationControl({
			anchor: BMAP_ANCHOR_BOTTOM_LEFT,
			type: BMAP_NAVIGATION_CONTROL_LARGE
		});
		map.addControl(ctrl_nav);
		//向地图中添加缩略图控件
		var ctrl_ove = new BMap.OverviewMapControl({
			anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
			isOpen: 1
		});
		map.addControl(ctrl_ove);
		//向地图中添加比例尺控件
		var ctrl_sca = new BMap.ScaleControl({
			anchor: BMAP_ANCHOR_BOTTOM_LEFT
		});
		map.addControl(ctrl_sca);
	}

	//标注点数组
	var markerArr = [{
		title: "咸安区惠众机械加工厂",
		content: "咸宁市咸安区永安办事处宝塔加油站107国道旁供销物流园对面",
		point: "114.2730993217|29.8876383964",
		isOpen: 1,
		icon: {
			w: 23,
			h: 25,
			l: 46,
			t: 21,
			x: 9,
			lb: 12
		}
	}];
	//创建marker
	function addMarker() {
		for (var i = 0; i < markerArr.length; i++) {
			var json = markerArr[i];
			var p0 = json.point.split("|")[0];
			var p1 = json.point.split("|")[1];
			var point = new BMap.Point(p0, p1);
			var iconImg = createIcon(json.icon);
			var marker = new BMap.Marker(point, {
				icon: iconImg
			});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title, {
				"offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)
			});
			marker.setLabel(label);
			map.addOverlay(marker);
			label.setStyle({
				borderColor: "#808080",
				color: "#333",
				cursor: "pointer"
			});

			(function () {
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click", function () {
					this.openInfoWindow(_iw);
				});
				_iw.addEventListener("open", function () {
					_marker.getLabel().hide();
				})
				_iw.addEventListener("close", function () {
					_marker.getLabel().show();
				})
				label.addEventListener("click", function () {
					_marker.openInfoWindow(_iw);
				})
				if (!!json.isOpen) {
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
		}
	}
	//创建InfoWindow
	function createInfoWindow(i) {
		var json = markerArr[i];
		var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title +
			"</b><div class='iw_poi_content'>" + json.content + "</div>");
		return iw;
	}
	//创建一个Icon
	function createIcon(json) {
		var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w, json.h), {
			imageOffset: new BMap.Size(-json.l, -json.t),
			infoWindowOffset: new BMap.Size(json.lb + 5, 1),
			offset: new BMap.Size(json.x, json.h)
		})
		return icon;
	}

	initMap(); //创建和初始化地图
</script>
@endsection