@extends('layout')
@section('title', '咸安区惠众机电设备厂')
@section('css')

@endsection
@section('content')
<!--================================
=            Page Title            =
=================================-->
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
=            Blog Section            =
===================================-->

<section class="user-profile blog section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="sidebar">
					<!-- Search Widget -->
					<div class="widget search p-0">
						<div class="input-group">
							<input type="text" class="form-control" id="expire" placeholder="搜索...">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
						</div>
					</div>
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">分类</h5>
						<ul class="category-list">
							<li><a href="">公告 <span class="float-right">(2)</span></a></li>
							<li><a href="">新闻 <span class="float-right">(5)</span></a></li>
							<li><a href="">科技<span class="float-right">(7)</span></a></li>
							<li><a href="">文章<span class="float-right">(3)</span></a></li>
							<li><a href="">趋势<span class="float-right">(9)</span></a></li>
						</ul>
					</div>
					<!-- Archive Widget -->
					<div class="widget archive">
						<!-- Widget Header -->
						<h5 class="widget-header">年份</h5>
						<ul class="archive-list">
							<li><a href="">2019年</a></li>
							<li><a href="">2018年</a></li>
							<li><a href="">2016年</a></li>
							<li><a href="">2015年</a></li>
							<li><a href="">2014年</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<!-- Article 01 -->
				<article>
					<!-- Post Image -->
					<!-- <div class="image">
		<img src="img/post-1.jpg" tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/blog/post-1.jpg" alt="article-01">
	</div> -->
					<!-- Post Title -->
					<h3>春节放假通知</h3>
					<ul class="list-inline">
						<li class="list-inline-item">作者：<a href="">Admin</a></li>
						<li class="list-inline-item">2019年2月3日</li>
					</ul>
					<!-- Post Description -->
					<p class="">春节放假七天，节假日后正常上班，请大家安排好工作</p>
					<!-- Read more button -->
					<a href="" class="btn btn-transparent">Read More</a>
				</article>
				<!-- Article 01 -->
				<article>
					<!-- Post Image -->
					<!-- <div class="image">
		<img src="img/post-1.jpg" tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/blog/post-1.jpg" alt="article-01">
	</div> -->
					<!-- Post Title -->
					<h3>春节放假通知</h3>
					<ul class="list-inline">
						<li class="list-inline-item">作者：<a href="">Admin</a></li>
						<li class="list-inline-item">2019年2月3日</li>
					</ul>
					<!-- Post Description -->
					<p class="">春节放假七天，节假日后正常上班，请大家安排好工作</p>
					<!-- Read more button -->
					<a href="" class="btn btn-transparent">Read More</a>
				</article>
				<!-- Article 01 -->
				<article>
					<!-- Post Image -->
					<!-- <div class="image">
		<img src="img/post-1.jpg" tppabs="http://demo.cssmoban.com/cssthemes5/twts_171_classimax/images/blog/post-1.jpg" alt="article-01">
	</div> -->
					<!-- Post Title -->
					<h3>春节放假通知</h3>
					<ul class="list-inline">
						<li class="list-inline-item">作者：<a href="">Admin</a></li>
						<li class="list-inline-item">2019年2月3日</li>
					</ul>
					<!-- Post Description -->
					<p class="">春节放假七天，节假日后正常上班，请大家安排好工作</p>
					<!-- Read more button -->
					<a href="" class="btn btn-transparent">Read More</a>
				</article>

				<!-- Pagination -->
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>

		</div>
	</div>
</section>

@endsection
@section('js')

@endsection