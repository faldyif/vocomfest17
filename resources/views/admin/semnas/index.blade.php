@extends('layouts.main')
@section('title', 'Vocomfest - Pendaftar Semnas')

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
					<li><a href="{{ url('adminvocomfest17/submission') }}"><i class="fa fa-upload"></i><span>Uploads</span></a></li>
					<li class="active"><a href="{{ url('adminvocomfest17/semnas') }}"><i class="fa fa-users"></i><span>Semnas Attenders</span></a></li>
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
			<h2 class="mont-bold">Semnas Attenders</h2>
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
										Semnas Attenders
									</div>
									<div class="panel-body">
										<table class="table table-hover table-bordered table-striped">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama</th>
													<th>Email</th>
													<th>No. Telp</th>
													<th>Kategori</th>
													<th>Progress</th>
												</tr>
											</thead>
											<tbody>
												@foreach($team as $key)
												<tr>
													<td>{{ $loop->iteration }}</td>
													<td>{{ $key->name }}</td>
													<td>{{ $key->email }}</td>
													<td>+62 {{ $key->team->phone }}</td>
													<td>
														@if($key->team->category == 1)
														Mahasiswa / Pelajar
														@else
														Umum
														@endif
													</td>
													<td>
														@if($key->team->progress == 1)
														Belum Bayar
														@elseif($key->team->progress == 2)
														Belum Ambil Tiket
														@else
														Sudah Ambil Tiket
														@endif
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