@extends('layouts.main')
@section('title', 'Vocomfest - Create News')

@section('body')
<section id="aside" class="col-md-2 col-sm-2 nopad">
	<div id="logo" class="pd-20">
		<div class="row force-center">
			<a href="{{ url('adminvocomfest17') }}">
				<img src="{{ url('assets/img/logoDb.png') }}" alt="Vocomfest">
			</a>
		</div>
	</div>
	<div id="bAside" class="pd-bt-20">
		<div id="user" class="text-center mg-b-20 pd-20">
			<div class="users-icon sep-title">
				<i class="fa fa-users"></i>
			</div>
			<h3>Administrator</h3>
			<hr class="line-db">
			<span>Hello, </span>
			<h4 class="nomag">{{ Auth::user()->name }}</h4>
		</div>
		<!-- nav -->
		<div id="navigation">
			<nav class="navbar navbar-default navbar-default-blue">
			  <div class="container-fluid nopad">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#asideNav">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			    </div>
			    <div class="collapse navbar-collapse nopad" id="asideNav">
			      <ul class="nav nav-db">
					<li><a href="{{ url('adminvocomfest17') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					<li><a href="{{ url('adminvocomfest17/team') }}"><i class="fa fa-users"></i><span>Teams</span></a></li>
					<!-- <li><a href="#"><i class="fa fa-microphone"></i><span>Events</span></a></li> -->
					<li class="active"><a href="{{ url('adminvocomfest17/news') }}"><i class="fa fa-hourglass-half"></i><span>News</span></a></li>
					<li><a href="{{ url('adminvocomfest17/gallery') }}"><i class="fa fa-camera"></i><span>Gallery</span></a></li>
					<li><a href="{{ url('adminvocomfest17/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payments</span></a></li>
					<li><a href="{{ url('adminvocomfest17/submission') }}"><i class="fa fa-upload"></i><span>Uploads</span></a></li>
				</ul>
			    </div>
			  </div>
			</nav>
		</div>
		<!-- /nav -->
	</div>
</section>
<section id="content" class="col-md-10 col-sm-10 nopad">
	<header class="header-db">
		<img src="{{ url('assets/img/event-cover.jpg') }}" alt="News Vocomfest" class="cover-img">
		<div class="overlay bk-gr-overlay" style=""></div>
		<section class="header-text">
			<div class="top-header">
				<span>Hello, {{ Auth::user()->name }} | <a class="a-fa" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
	        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	            {{ csrf_field() }}
	        </form>
				</span>
			</div>
			<h2 class="mont-bold">News</h2>
			<hr class="bl-line-sep">
		</section>
	</header>
	<!-- NEWS CONTENT -->
	<div class="content-db">
		<div class="row">
			<section class="col-md-12 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<div class="div-content-db">
						{!! Form::open(array('route' => 'news.store', 'enctype' => 'multipart/form-data')) !!}
							<h3 class="nomag">Add New Post</h3>
							<div class="row mg-t-20">
								<div class="col-md-8">
									<input type="text" name="title" id="title" placeholder="Enter News Title Here" class="form-control">
								</div>
								<div class="col-md-4 text-right">
									<span>Image Thumbnail : </span>
									<label>
										<input type="file" name="thumbnail" class="form-control" />
									</label>
								</div>
							</div>
							<div class="row mg-t-20">
								<div class="col-md-12">
									<textarea name="content" class="tinymce"></textarea>
								</div>
							</div>
							<div class="row mg-t-20">
								<div class="col-md-12">
		                            <label>
		                            	<input type="submit" value="Publish" name="" class="btn btn-sm btn-info">
		                            </label>
								</div>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</section>
		</div>
	</div>
<!-- /NEWS CONTENT -->
</section>
@endsection