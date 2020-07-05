@extends('layout')
@section('title', '咸安区惠众机电设备厂')
@section('css')

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
<section class="user-profile dashboard section bg-gray">
	<!-- Container Start -->
	<div class="container ">
		<!-- Row Start -->
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
						<h1 class="text-center">成功案例</h1>
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
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">最新交易</h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>图片</th>
								<th>型号</th>
								<th class="text-center">名称</th>
								<th class="text-center">查看详情</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="product-thumb">
									<img width="220px" height="auto" src="provice/a/a7.jpg"
										tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/products/products-1.jpg"
										alt="image description"></td>
								<td class="product-details">
									<h3 class="title">点胶机2.0</h3>
									<span class="add-id"><strong>产品ID:</strong>ng3D5hAMHPajQrM</span>
									<span><strong>生产日期: </strong><time>2019年3月7日</time> </span>
									<span class="status active"><strong>状态</strong>已交付</span>
									<span class="location"><strong>地点</strong>咸宁市</span>
								</td>
								<td class="product-category"><span class="categories">点胶机</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Tooltip on top"
													class="view" href="">
													<i class="fa fa-eye"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td class="product-thumb">
									<img width="220px" height="auto" src="provice/a/a8.jpg"
										tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/products/products-1.jpg"
										alt="image description"></td>
								<td class="product-details">
									<h3 class="title">点胶机2.0</h3>
									<span class="add-id"><strong>产品ID:</strong>ng3D5hAMHPajQrM</span>
									<span><strong>生产日期: </strong><time>2019年3月7日</time> </span>
									<span class="status active"><strong>状态</strong>已交付</span>
									<span class="location"><strong>地点</strong>咸宁市</span>
								</td>
								<td class="product-category"><span class="categories">点胶机</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Tooltip on top"
													class="view" href="">
													<i class="fa fa-eye"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>

							<tr>
								<td class="product-thumb" style="padding-right:20px;">
									<img width="220px" height="auto" src="provice/a/a9.jpg"
										tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/products/products-1.jpg"
										alt="image description"></td>
								<td class="product-details">
									<h3 class="title">终极点胶机</h3>
									<span class="add-id"><strong>设备ID:</strong> ng3D5hAMHPajQrM</span>
									<span><strong>生产日期: </strong><time>Jun 27, 2017</time> </span>
									<span class="status active"><strong>状态</strong>Active</span>
									<span class="location"><strong>地点</strong>Dhaka,Bangladesh</span>
								</td>
								<td class="product-category"><span class="categories">点胶机</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Tooltip on top"
													class="view" href="">
													<i class="fa fa-eye"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
@endsection
@section('js')

@endsection