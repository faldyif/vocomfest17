@extends('layouts.main')
@section('title', 'Vocomfest - Team List')

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
					<li class="active"><a href="{{ url('adminvocomfest17/team') }}"><i class="fa fa-users"></i><span>Teams</span></a></li>
					<!-- <li><a href="#"><i class="fa fa-microphone"></i><span>Events</span></a></li> -->
					<li><a href="{{ url('adminvocomfest17/news') }}"><i class="fa fa-hourglass-half"></i><span>News</span></a></li>
					<li><a href="{{ url('adminvocomfest17/gallery') }}"><i class="fa fa-camera"></i><span>Gallery</span></a></li>
					<li><a href="{{ url('adminvocomfest17/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payments</span></a></li>
					<li><a href="{{ url('adminvocomfest17/submission') }}"><i class="fa fa-upload"></i><span>Uploads</span></a></li>
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
			<h2 class="mont-bold">Teams</h2>
			<hr class="bl-line-sep">
		</section>
	</header>
	<div class="content-db">
@if (Session::has('message'))
<div class="row">
    <div class="alert alert-success">
        <div class="sb-msg"><i class="icon-thumbs-up"></i>{{ Session::get('message') }}</div>
    </div>
</div>
@endif
		<div class="row">
			<section id="teams" class="pd-bt-20">
				<div class="col-md-12 pd-lr-15 pd-bt-15">
					<div class="sec-content-db">
						<div class="div-content-db">
							<!-- Content goes here -->
							<form>
								<div class="panel panel-default">
									<div class="panel-heading">
										Teams
									</div>
									<div class="panel-body">
										<a class="btn btn-info" href="{{ url('adminvocomfest17/download/wdc') }}">Download WDC</a>
										<a class="btn btn-info" href="{{ url('adminvocomfest17/download/madc') }}">Download MADC</a>
										<table class="table table-hover table-bordered table-striped">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Tim</th>
													<th>Kategori</th>
													<th>Status</th>
													<th>Dokumen Identitas</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 0 ;?>
												@foreach($team as $key)
												<div id="dummy{{ $key->id }}" style="width: 0; height: 0"></div>
												<tr>
													<td>{{ ++$no }}</td>
													<td><a href="{{ url('adminvocomfest17/team') }}/{{ $key->id }}" class="special blue">{{ $key->name }}</a></td>
													<td>{{ $key->getKategori() }}</td>
													<td>{!! $key->getPhase() !!}</td>
													<td>{!! $key->verify() !!}</td>
													<td>
														@if($key->role_id == 2)
														@if($key->team->progress != 1 && $key->team->progress != 4)
														<a title="Lolos Babak Selanjutnya" href="{{ url('adminvocomfest17/team/pass') }}/{{ $key->id }}" class="btn btn-success btn-sm"><i class="fa fa-arrow-up"></i></a>
														@endif
														@if($key->team->progress != 1 && $key->team->progress != 2)
														<a title="Mundurkan Satu Babak" href="{{ url('adminvocomfest17/team/unpass') }}/{{ $key->id }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
														@endif
														@else
														@if($key->team->progress != 1 && $key->team->progress != 5)
														<a title="Lolos Babak Selanjutnya" href="{{ url('adminvocomfest17/team/pass') }}/{{ $key->id }}" class="btn btn-success btn-sm"><i class="fa fa-arrow-up"></i></a>
														@endif
														@if($key->team->progress != 1 && $key->team->progress != 2)
														<a title="Mundurkan Satu Babak" href="{{ url('adminvocomfest17/team/unpass') }}/{{ $key->id }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
														@endif
														@endif
														<a title="View" href="{{ url('adminvocomfest17/team') }}/{{ $key->id }}" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-eye"></i></a>
														<a title="Delete" href="#" class="btn btn-danger btn-sm delete-btn" 
														onclick="
														$().ready(function(e){
															swal({
																title : 'Are you sure?',
																text : 'You will not be able to recover this object',
																type : 'warning',
																showCancelButton : true,
																confirmButtonColor: '#DD6B55',
																confirmButtonText: 'Yes, delete it!',
																cancelButtonText: 'No, cancel it!',
																closeOnConfirm: false,
																closeOnCancel: false,
																showLoaderOnConfirm : true
															},
																function(isConfirm){
																	if(isConfirm){
																		$.get('<?php echo url('adminvocomfest17/team/delete/').'/'.$key->id ?>', function(){
																				swal({
																					title : 'Deleted',
																					text : 'The team data has been deleted',
																					type : 'success'
																				},function(){
																					location.reload();
																				});
																		}) ;
																	}else{
																		swal('Cancelled', 'Your imaginary file is safe :)', 'error');
																	}
																}
															)

														}) ;
														"><i class="fa fa-trash"></i></a>
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