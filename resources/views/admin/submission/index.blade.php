@extends('layouts.main')
@section('title', 'Vocomfest - Payment Confirmation')

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
					<li><a href="{{ url('adminvocomfest17/news') }}"><i class="fa fa-hourglass-half"></i><span>News</span></a></li>
					<li><a href="{{ url('adminvocomfest17/gallery') }}"><i class="fa fa-camera"></i><span>Gallery</span></a></li>
					<li><a href="{{ url('adminvocomfest17/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payments</span></a></li>
					<li class="active"><a href="{{ url('adminvocomfest17/submission') }}"><i class="fa fa-upload"></i><span>Uploads</span></a></li>
					<li><a href="{{ url('adminvocomfest17/semnas') }}"><i class="fa fa-users"></i><span>Semnas Attenders</span></a></li>
					<li><a href="{{ url('adminvocomfest17/semnas/create') }}"><i class="fa fa-check"></i><span>SemnasVerifier™</span></a></li>
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
		<img src="../assets/img/event-cover.jpg" alt="Submission" class="cover-img">
		<div class="overlay bk-gr-overlay"  style=""></div>
		<section class="header-text">
			<div class="top-header">
				<span>Hello, {{ Auth::user()->name }} | <a class="a-fa" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
	        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	            {{ csrf_field() }}
	        </form>
				</span>
			</div>
			<h2 class="mont-bold">Submission</h2>
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
			<section id="files">
				<div class="col-md-12 pd-15">
					<div class="sec-content-db">
						<div class="div-content-db">
							<form>
								<div class="panel panel-default">
									<div class="panel-heading">
										All file upload
									</div>
									<div class="panel-body">
			                            <table class="table table-responsive table-striped table-hover table-bordered">
			                            	<thead>
			                            		<tr>
			                            			<th>No</th>
			                            			<th>Nama Tim</th>
			                            			<th>Kategori</th>
			                            			<th>Tahap</th>
			                            			<th>File URL</th>
			                            			<th>Aksi</th>
			                            		</tr>
			                            	</thead>
			                            	<tbody>
			                            		<?php $it = 1; ?>
			                            		@foreach($submission as $key)
			                            		<tr>
			                            			<td>{{ $it++ }}</td>
			                            			<td>{{ \App\User::where('id', $key->user_id)->first()->name }}</td>
			                            			<td>{{ \App\User::where('id', $key->user_id)->first()->getKategori() }}</td>
			                            			<td>{!! \App\User::where('id', $key->user_id)->first()->getPhase() !!}</td>
			                            			<td>{{ $key->path_url }}</td>
			                            			<td>
			                            				<a target="_blank" href="{{ $key->path_url }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
			                            				<a href="{{ url('adminvocomfest17/submission/delete') }}/{{ $key->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
			                            			</td>
			                            		</tr>
			                            		@endforeach
			                            	</tbody>
			                            </table>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
@endsection