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
<section class="user-profile section-sm bg-gray">
	<div class="container ">
		<!-- <div class="row">
				<div class="col-md-12">
					<div class="search-result bg-gray">
						<h2>热门设备限时促销</h2>
						<p>截止时间：2019年3月1日~2019年6月1日</p>
					</div>
				</div>
			</div> -->
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<!-- <div class="profile-thumb">
								<img src="user-thumb.jpg" tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/user/user-thumb.jpg"
									alt="" class="rounded-circle">
							</div> -->
						<!-- User Name -->
						<h1 class="text-center">产品中心</h1>
						<p>最新产品</p>
					</div>
					<div class="widget category-list">
						<h4 class="widget-header">所有分类</h4>
						<ul class="category-list">
							<li><a href="category.html"
									tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/category.html">点胶机
									<span>93</span></a></li>
							<li><a href="category.html"
									tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/category.html">涂胶机
									<span>233</span></a></li>
							<li><a href="category.html"
									tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/category.html">灌胶机
									<span>183</span></a></li>
							<li><a href="category.html"
									tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/category.html">混胶机
									<span>121</span></a></li>
							<li><a href="category.html"
									tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/category.html">发泡机
									<span>245</span></a></li>
							<li><a href="category.html"
									tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/category.html">浇注机
									<span>84</span></a></li>
						</ul>
					</div>

					<div class="widget category-list">
						<h4 class="widget-header">最新产品</h4>
						<ul class="category-list">
							<li><a href="category.html"
									tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/category.html">今年
									<span>120</span></a></li>
							<li><a href="category.html"
									tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/category.html">本月
									<span>40</span></a></li>
							<li><a href="category.html"
									tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/category.html">本周
									<span>81</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="product-grid-list">
					<div class="row">
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="">
											<img class="card-img-top img-fluid" src="provice/r4.png"
												tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/products/products-1.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="">点胶机</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href=""><i class="fa fa-folder-open-o"></i>待售</a>
											</li>
											<li class="list-inline-item">
												<a href=""><i class="fa fa-calendar"></i>2019年3月7日</a>
											</li>
										</ul>
										<p class="card-text">物美价廉，赶紧进店咨询吧！</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="">
											<img class="card-img-top img-fluid" src="provice/r4.png"
												tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/products/products-1.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="">点胶机</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href=""><i class="fa fa-folder-open-o"></i>待售</a>
											</li>
											<li class="list-inline-item">
												<a href=""><i class="fa fa-calendar"></i>2019年3月7日</a>
											</li>
										</ul>
										<p class="card-text">物美价廉，赶紧进店咨询吧！</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="">
											<img class="card-img-top img-fluid" src="provice/r4.png"
												tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/products/products-1.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="">点胶机</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href=""><i class="fa fa-folder-open-o"></i>待售</a>
											</li>
											<li class="list-inline-item">
												<a href=""><i class="fa fa-calendar"></i>2019年3月7日</a>
											</li>
										</ul>
										<p class="card-text">物美价廉，赶紧进店咨询吧！</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="">
											<img class="card-img-top img-fluid" src="provice/r4.png"
												tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/products/products-1.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="">点胶机</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href=""><i class="fa fa-folder-open-o"></i>待售</a>
											</li>
											<li class="list-inline-item">
												<a href=""><i class="fa fa-calendar"></i>2019年3月7日</a>
											</li>
										</ul>
										<p class="card-text">物美价廉，赶紧进店咨询吧！</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="">
											<img class="card-img-top img-fluid" src="provice/r4.png"
												tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/products/products-1.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="">点胶机</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href=""><i class="fa fa-folder-open-o"></i>待售</a>
											</li>
											<li class="list-inline-item">
												<a href=""><i class="fa fa-calendar"></i>2019年3月7日</a>
											</li>
										</ul>
										<p class="card-text">物美价廉，赶紧进店咨询吧！</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="">
											<img class="card-img-top img-fluid" src="provice/r4.png"
												tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/products/products-1.jpg"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="">点胶机</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href=""><i class="fa fa-folder-open-o"></i>待售</a>
											</li>
											<li class="list-inline-item">
												<a href=""><i class="fa fa-calendar"></i>2019年3月7日</a>
											</li>
										</ul>
										<p class="card-text">物美价廉，赶紧进店咨询吧！</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('js')

@endsection