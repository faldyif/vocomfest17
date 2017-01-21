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
				<span>Hello, Administrator Name | <a class="a-fa" href="./login.html"><i class="fa fa-sign-out"></i> Logout</a></span>
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
										<div class="row nomag pd-b-10">
			                            	<div class="col-md-6 nopad">
				                            	<label>
				                            		<select class="form-control input-sm">
				                            			<option value="5">5</option>
				                            			<option value="10">10</option>
				                            			<option value="15">15</option>
				                            			<option value="20">20</option>
				                            		</select> 
				                            	</label>
				                            		<span>records per page</span>
			                            	</div>
			                            	<div class="col-md-6 nopad text-right">
			                            		<label>
			                            			<input type="text" id="input-search" name="" class="form-control input-sm">
			                            		</label>
			                            		<label>
			                            			<input type="submit" value="Search" name="" class="btn btn-sm btn-info">
			                            		</label>
			                            	</div>
			                            </div>
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
												@foreach($team as $key)
												<tr>
													<td>1</td>
													<td><a href="{{ url('adminvocomfest17/team') }}/{{ $key->id }}" class="special blue">{{ $key->name }}</a></td>
													<td>{{ $key->getKategori() }}</td>
													<td>{!! $key->getPhase() !!}</td>
													<td>{!! $key->verify() !!}</td>
													<td>
														@if($key->team->verified == 1)
														<a title="Verify Team" href="{{ url('adminvocomfest17/team/verify') }}/{{ $key->id }}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
														@elseif($key->team->verified == 2)
														<a title="Unverify Team" href="{{ url('adminvocomfest17/team/unverify') }}/{{ $key->id }}" class="btn btn-warning btn-sm"><i class="fa fa-remove"></i></a>
														@endif
														<a title="View" href="{{ url('adminvocomfest17/team') }}/{{ $key->id }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
														<a title="Delete" href="{{ url('adminvocomfest17/team/delete') }}/{{ $key->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
														</form-->
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
										<div class="row nomag">
			                            	<div class="col-md-6 nopad">
				                            	<span>Showing 1 to 4 from 4 entries</span>
			                            	</div>
			                            	<div class="col-md-6 nopad text-right">
			                            		<ul class="pagination nomag">
			                            			<li class="disabled"><a href="#">Prev</a></li>
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#">5</a></li>
													<li><a href="#">Next</a></li>
												</ul>
			                            	</div>
			                            </div>
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