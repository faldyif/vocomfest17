@extends('layouts.main')
@section('title', 'Vocomfest - News List')

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
		<img src="../assets/img/event-cover.jpg" alt="News Vocomfest" class="cover-img">
		<div class="overlay bk-gr-overlay"  style=""></div>
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

@if (Session::has('message'))
<div class="row">
    <div class="alert alert-success">
        <div class="sb-msg"><i class="icon-thumbs-up"></i>{{ Session::get('message') }}</div>
    </div>
</div>
@endif
		<div class="row">
			<section class="col-md-12 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<div class="div-content-db">
						<a href="{{ url('adminvocomfest17/news/create') }}" class="btn btn-default btn-sm">Add News <i class="fa fa-plus"></i></a>
						<br>
					<form>
						<p class="mg-bt-10"> All ({{ $news->count() }})</p>
						<!-- NEWS TABLE -->
						<div class="panel panel-default">
	                        <div class="panel-heading">
	                            News
	                        </div>
	                        <div class="panel-body">
	                            <div class="table-responsive">
	                                <table class="table table-striped table-bordered table-hover" id="news-table">
	                                    <thead>
	                                        <tr>
	                                            <th>Title</th>
	                                            <th>Author</th>
	                                            <th>Date</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    	@foreach($news as $key)
	                                        <tr class="odd gradeX">
	                                            <td>
	                                            	<strong><a href="{{ url('adminvocomfest17/news') }}/{{ $key->id }}/edit">{{ $key->title }}</a></strong>
	                                            	<br>
	                                            	<span>
	                                            		<a href="{{ url('news') }}/{{ $key->id }}">View</a> |
	                                            		<a href="{{ url('adminvocomfest17/news') }}/{{ $key->id }}/edit">Edit</a> | <a href="{{ url('adminvocomfest17/news/delete') }}/{{ $key->id }}">Delete</a>
	                                            	</span>
	                                            </td>
	                                            <td>Administrator</td>
	                                            <td>
	                                            	Published
	                                            	<br>
	                                            	<span>
	                                            		{{ $key->created_at }}
	                                            	</span>
	                                            </td>
	                                        </tr>
	                                        @endforeach
	                                    </tbody>
	                                </table>
	                                <div class="row nomag">
		                            	<div class="col-md-6 nopad">
			                            	<span>Showing 1 to {{ $news->count() }} from {{ $news->count() }} entries</span>
		                            	</div>
		                            </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- /NEWS TABLE -->
	                </form>
					</div>
				</div>
			</section>
		</div>
	</div>
<!-- /NEWS CONTENT -->
</section>
@endsection