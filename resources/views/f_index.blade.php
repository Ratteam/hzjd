@extends('layout')

@section('title', '')

@section('css')

<!-- 轮播图 -->
<link rel="stylesheet" type="text/css" href="css/style1.css">
<script src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/rvc.js"></script>
<!-- 3d翻转 -->
<link rel="stylesheet" href="css/demo1.css">
@endsection

@section('content')
<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>惠众机电，智造机床。</h1>
					<p>咸安区惠众机电设备厂是一家集研发、生产、营销、服务为一体的现代化公司。 <br>
						公司专业制造销售聚氨酯点胶机,聚氨酯灌胶机,聚氨酯三维密封条涂胶机,聚氨酯混胶机,聚氨酯高中低压发泡机,聚氨酯高中低温浇注机等产品。为满足客户对产品的特殊要求，本公司愿为您量身定做个性化产品。
					</p>
					<div class="short-popular-category-list text-center">
						<h2>品质保证</h2>
						<p style="color:white">
							<!-- <a href="" style="color:white"><i class="fa fa-bed"></i> 30天无理由退货</a> -->
							<a href="" style="color:white"><i class="fa fa-grav"></i> 送货上门</a>
							<a href="" style="color:white"><i class="fa fa-coffee"></i> 免费技术支持</a>
						</p>
					</div>
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<form action="#">
						<div class="row">
							<!-- Store Search -->
							<div class="col-lg-6 col-md-12">
								<div class="block d-flex">
									<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search"
										placeholder="姓名">
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="block d-flex">
									<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search"
										placeholder="电话">
									<!-- Search Button -->
									<button class="btn btn-main">留下联系方式</button>
								</div>
							</div>
						</div>
					</form>

				</div>

			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>最新产品</h2>
					<p>诚信、务实、开拓、创新.</p>
				</div>
			</div>
		</div>
		<div class="rvc" id="rvc1">
			<div class="rvc-wrapper ">
				<ul>
					<li>
						<div class="img-wrapper card">
							<div class="thumb-content">
								<a href=""><img src="./provice/p1.png"></a>
							</div>
							<div class="card-body">
								<h4 class="card-title"><a href="">全自动三维常量涂胶机</a></h4>
								<p class="card-text">
									此款设备主要应用于机柜、配电柜、控制柜、防爆柜、高低压柜、开关柜等行业的密封。应用领域：广泛用于机箱机柜，汽车，钣金，锁具，电子，电器柜体密封，照明密封，空调制冷密封，空气净化，过滤器等行业。
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="img-wrapper card">
							<div class="thumb-content">
								<a href=""><img src="./provice/p2.png"></a>
							</div>
							<div class="card-body">
								<h4 class="card-title"><a href="">微量精密密封涂胶机</a></h4>
								<p class="card-text">
									微量精密密封涂胶机采用现场密封点胶浇注成型的技术，加工的密封条最细可达2mm,特别适用于小型工件的密封。应用领域：广泛用于机箱机柜，汽车，钣金，锁具，电子，电器柜体密封，照明密封，空调制冷密封，空气净化，过滤器等行业。
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="img-wrapper card">
							<div class="thumb-content">
								<a href=""><img src="./provice/p3.png"></a>
							</div>
							<div class="card-body">
								<h4 class="card-title"><a href="">全自动三维常量涂胶机</a></h4>
								<p class="card-text">
									此款设备主要应用于机柜、配电柜、控制柜、防爆柜、高低压柜、开关柜等行业的密封。应用领域：广泛用于机箱机柜，汽车，钣金，锁具，电子，电器柜体密封，照明密封，空调制冷密封，空气净化，过滤器等行业。
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="img-wrapper card">
							<div class="thumb-content">
								<a href=""><img src="./provice/p1.png"></a>
							</div>
							<div class="card-body">
								<h4 class="card-title"><a href="">全自动三维常量涂胶机</a></h4>
								<p class="card-text">
									此款设备主要应用于机柜、配电柜、控制柜、防爆柜、高低压柜、开关柜等行业的密封。应用领域：广泛用于机箱机柜，汽车，钣金，锁具，电子，电器柜体密封，照明密封，空调制冷密封，空气净化，过滤器等行业。
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="img-wrapper card">
							<div class="thumb-content">
								<a href=""><img src="./provice/p1.png"></a>
							</div>
							<div class="card-body">
								<h4 class="card-title"><a href="">全自动三维常量涂胶机</a></h4>
								<p class="card-text">
									此款设备主要应用于机柜、配电柜、控制柜、防爆柜、高低压柜、开关柜等行业的密封。应用领域：广泛用于机箱机柜，汽车，钣金，锁具，电子，电器柜体密封，照明密封，空调制冷密封，空气净化，过滤器等行业。
								</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="rvc-prv"><img src="img/prv_icon.png"></div>
			<div class="rvc-next"><img src="img/next_icon.png"></div>
		</div>
	</div>
</section>
<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section" style="background-color:#FFF">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>热门产品</h2>
					<p>诚信、务实、开拓、创新.</p>
				</div>
				<!-- Container End -->
				<div class="wrapper">
					<ul>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/a/a1.jpg'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/a/a2.jpg'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/a/a3.jpg'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/a/a4.jpg'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/a/a5.jpg'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/a/a6.jpg'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/a/a7.jpg'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/a/a8.jpg'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/a/a9.jpg'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/r4.png'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/r4.png'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
						<li>
							<div class='picBox'>
								<div class='show'>
									<img height='170px' width='170px' src='./provice/r4.png'>
								</div>
								<div class='hide'>
									<h3>
										配电箱柜
									</h3>
								</div>
							</div>
						</li>
					</ul>
				</div>
</section>

@endsection

@section('js')
<!--百度统计-->

<!-- 轮播图 -->
<script type="text/javascript">
	var _hmt = _hmt || [];
	(function () {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?c28c334b0dc95116e389a241b4d5a77a";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
	$('#rvc1').rvc({
		liNum: 3, //2~5之间的整数
		spaceBetween: 30, //li项之间的距离
		plr: 20, //当屏幕小于1024时，rvc的padding-left，padding-right值
		time: 400, //动画时间
		prv: '.rvc-prv', //前一个按钮
		next: '.rvc-next' //下一个按钮
	})
</script>
<!-- 3d翻转 -->
<script src="js/demo1.js"></script>
@endsection