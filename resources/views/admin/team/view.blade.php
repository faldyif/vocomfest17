@extends('layouts.main')
@section('title', 'Vocomfest - ' . $team->name)

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
		<img src="{{ url('assets/img/event-cover.jpg') }}" alt="News Vocomfest" class="cover-img">
		<div class="overlay bk-gr-overlay"  style=""></div>
		<section class="header-text">
			<div class="top-header">
				<span>Hello, {{ Auth::user()->name }} | <a class="a-fa" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
			        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
			            {{ csrf_field() }}
			        </form>
	        </span>
			</div>
			<h2 class="mont-bold">Team {{ $team->name }}</h2>
			<hr class="bl-line-sep">
		</section>
	</header>
	<div class="content-db">
		<div class="row">
			<aside id="side-profile">
				<div class="col-md-3 pd-15">
					<div class="sec-content-db">
						<figure class="img-profile">
							<img src="{{ url('assets/img/leader.jpg') }}">
						</figure>
						<div class="text-center">
							<h3 class="mont-bold">{{ $team->name }}</h3>
							<hr class="bl-line-sep" style="margin : 10px auto ;">
							<p class="nomag">{{ $team->email }}</p>
							<p>{!! $team->getPhase() !!}</p>
						</div>
					</div>
				</div>
			</aside>
			<section id="body-profile">
				<div class="col-md-9 pd-15">
					<div class="sec-content-db">
						<div class="div-content-db">
							<div class="row">
								<div class="col-md-12">
									<h3 class="nowrap">About Team</h3>
									<div class="row pd-bt-20">
										<div class="col-md-6">
											<table class="table">
												<tr>
													<td>Nama tim</td>
													<td>:</td>
													<td>{{ $team->name }}</td>
												</tr>
												<tr>
													<td>Email tim</td>
													<td>:</td>
													<td>{{ $team->email }}</td>
												</tr>
												<tr>
													<td>Contact person leader</td>
													<td>:</td>
													<td>+62 {{ $team->team->leader_phone }}</td>
												</tr>
											</table>
										</div>
										<div class="col-md-6">
											<table class="table">
												<tr>
													<td class="col-md-4">Kategori</td>
													<td>:</td>
													<td>{{ $team->getKategori() }}</td>
												</tr>
												<tr>
													@if($team->role_id == 2)
													<td class="col-md-4">Asal Sekolah</td>
													@elseif($team->role_id == 3)
													<td class="col-md-4">Asal Universitas</td>
													@endif
													<td>:</td>
													@if($team->role_id == 2)
													<td>{{ $team->team->school_name }}</td>
													@elseif($team->role_id == 3)
													<td>{{ $team->team->instance_name }}</td>
													@endif
												</tr>
												<tr>
													@if($team->role_id == 2)
													<td>Alamat Sekolah</td>
													@elseif($team->role_id == 3)
													<td>Alamat Universitas</td>
													@endif
													<td>:</td>
													@if($team->role_id == 2)
													<td>{{ $team->team->school_address }}</td>
													@elseif($team->role_id == 3)
													<td>{{ $team->team->instance_address }}</td>
													@endif
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h3>Team Member</h3>
						</div>
						<section class="col-md-4 col-sm-4 col-xs-6 pd-t-15 pd-lr-15">
							<div class="sec-content-db">
								<figure class="img-profile">
									@if($team->team->leader_identity == NULL)
										<img src="{{ url('assets/img/leader.jpg') }}">
									@else
										<a href="{{ url('storage/identity_scans') }}/{{ $team->team->leader_identity }}" data-rel="lightcase">
										<img src="{{ url('storage/identity_scans') }}/{{ $team->team->leader_identity }}">
										</a>
									@endif
								</figure>
								<span class="text-center">
									<p class="blue mg-t-15">Leader</p>
									<p class="nomag mont-bold">{{ $team->team->leader_name }}</p>
									<p class="nomag">{{ $team->email }}</p>
									<p class="nomag">{{ $team->leader_phone }}</p>
								</span>
							</div>
						</section>
						@if($team->team->member1_name != "")
						<section class="col-md-4 col-sm-4 col-xs-6 pd-t-15 pd-lr-15">
							<div class="sec-content-db">
								<figure class="img-profile">
									@if($team->team->member1_identity == NULL)
										<img src="{{ url('assets/img/leader.jpg') }}">
									@else
										<a href="{{ url('storage/identity_scans') }}/{{ $team->team->member1_identity }}" data-rel="lightcase">
										<img src="{{ url('storage/identity_scans') }}/{{ $team->team->member1_identity }}">
										</a>
									@endif
								</figure>
								<span class="text-center">
									<p class="blue mg-t-15">Member 1</p>
									<p class="nomag mont-bold">{{ $team->team->member1_name }}</p>
									<p class="nomag">{{ $team->team->member1_email }}</p>
									<p class="nomag">{{ $team->member1_phone }}</p>
								</span>
							</div>
						</section>
						@endif
						@if($team->team->member2_name != "")
						<section class="col-md-4 col-sm-4 col-xs-6 pd-t-15 pd-lr-15">
							<div class="sec-content-db">
								<figure class="img-profile">
									@if($team->team->member2_identity == NULL)
										<img src="{{ url('assets/img/leader.jpg') }}">
									@else
										<a href="{{ url('storage/identity_scans') }}/{{ $team->team->member2_identity }}" data-rel="lightcase">
										<img src="{{ url('storage/identity_scans') }}/{{ $team->team->member2_identity }}">
										</a>
									@endif
								</figure>
								<span class="text-center">
									<p class="blue mg-t-15">Member 2</p>
									<p class="nomag mont-bold">{{ $team->team->member2_name }}</p>
									<p class="nomag">{{ $team->team->member2_email }}</p>
									<p class="nomag">{{ $team->member2_phone }}</p>
								</span>
							</div>
						</section>
						@endif
						@if($team->team->role_id == 3 && $member3_name != "")
						<section class="col-md-4 col-sm-4 col-xs-6 pd-t-15 pd-lr-15">
							<div class="sec-content-db">
								<figure class="img-profile">
									@if($team->team->member2_identity == NULL)
										<img src="{{ url('assets/img/leader.jpg') }}">
									@else
										<a href="{{ url('storage/identity_scans') }}/{{ $team->team->member3_identity }}" data-rel="lightcase">
										<img src="{{ url('storage/identity_scans') }}/{{ $team->team->member3_identity }}">
										</a>
									@endif
								</figure>
								<span class="text-center">
									<p class="blue mg-t-15">Member 3</p>
									<p class="nomag mont-bold">{{ $team->team->member3_name }}</p>
									<p class="nomag">{{ $team->team->member3_email }}</p>
									<p class="nomag">{{ $team->member3_phone }}</p>
								</span>
							</div>
						</section>
						@endif
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
@endsection