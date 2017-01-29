<?php
	$users = \App\User::whereIn('role_id', [2,3,4]);
	$feb = $users->whereMonth('created_at', '2')->get();
	$wdcfeb = $feb->where('role_id', 2)->count();	
	$madcfeb = $feb->where('role_id', 3)->count();	
	$semnasfeb = $feb->where('role_id', 4)->count();	
	$mar = $users->whereMonth('created_at', '3')->get();
	$wdcmar = $mar->where('role_id', 2)->count();	
	$madcmar = $mar->where('role_id', 3)->count();	
	$semnasmar = $mar->where('role_id', 4)->count();	
	$apr = $users->whereMonth('created_at', '4')->get();
	$wdcapr = $apr->where('role_id', 2)->count();	
	$madcapr = $apr->where('role_id', 3)->count();	
	$semnasapr = $apr->where('role_id', 4)->count();
?>
@extends('layouts.main')
@section('title', 'Vocomfest - Admin Dashboard')

@section('body')
<section id="aside" class="col-md-2 col-sm-2 nopad">
	<div id="logo" class="pd-20">
		<div class="row force-center">
			<a href="../index.html">
				<img src="{{ asset('assets/img/logoDb.png') }}" alt="Vocomfest">
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
					<li class="active"><a href="{{ url('adminvocomfest17') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					<li><a href="{{ url('adminvocomfest17/team') }}"><i class="fa fa-users"></i><span>Teams</span></a></li>
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
		<img src="{{ asset('assets/img/event-cover.jpg') }}" alt="News Vocomfest" class="cover-img">
		<div class="overlay bk-gr-overlay"  style=""></div>
		<section class="header-text">
			<div class="top-header">
				<span>Hello, {{ Auth::user()->name }} | <a class="a-fa" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
	        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	            {{ csrf_field() }}
	        </form>
				</span>
			</div>
			<h2 class="mont-bold">Dashboard</h2>
			<hr class="bl-line-sep">
		</section>
	</header>
	<div class="content-db">
		<div class="row">
			<section id="summary">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 sum-content" style="width: 31%">
							<h2 class="mont-bold blue"><i class="fa fa-user"></i> {{ \App\User::where('role_id', 2)->count() }}</h2>
							<p>Pendaftar WDC</p>
						</div>
						<div class="col-md-4 sum-content" style="width: 31%">
							<h2 class="mont-bold emerald"><i class="fa fa-user"></i> {{ \App\User::where('role_id', 3)->count() }}</h2>
							<p>Pendaftar MADC</p>
						</div>
						<div class="col-md-4 sum-content" style="width: 31%">
							<h2 class="mont-bold turq"><i class="fa fa-user"></i> {{ \App\User::where('role_id', 4)->count() }}</h2>
							<p>Pendaftar Seminar Nasional</p>
						</div>
					</div>
				</div>
			</section>
			<section id="chart" class="pd-bt-10">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 dash-frame">
							<div id="chart-container" class="pd-bt-15" style="width :100% ; height : 400px ;"></div>
						</div>
					</div>
				</div>
			</section>
			<section id="activity" class="pd-bt-10">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 dash-frame">
							<div class="dash-header">
								<h3 class="mont">Recent Activity</h3>
								<hr class="bl-line-sep">
							</div>
							<div class="dash-body">
								<div class="row">
									<div class="col-md-6">
										<h4>Registered Teams</h4>
										<table class="table table-hover table-striped table-responsive">
											<thead>
												<tr>
													<th>No</th>
													<th class="col-md-3">Team/Person name</th>
													<th>Category</th>
													<th>Recent status</th>
												</tr>
											</thead>
											<tbody>
												@foreach(\App\User::whereIn('role_id', [2,3,4])->latest()->get() as $key)
												<tr>
													<td>{{ $loop->iteration }}</td>
													<td>{{ $key->name }}</td>
													<td>{{ $key->getKategori() }}</td>
													<td>{!! $key->getPhase() !!}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
									<div class="col-md-6">
										<h4>Payments</h4>
										<table class="table table-hover table-striped table-responsive">
											<thead>
												<tr>
													<th>No</th>
													<th>Team/person name</th>
													<th>Category</th>
													<th>Amount</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
			                            		@foreach(\App\PaymentConfirmation::latest()->get() as $key)
												<tr>
													<td>{{ $loop->iteration }}</td>
													<td>{{ \App\User::where('id', $key->user_id)->first()->name }}</td>
													<td>{{ \App\User::where('id', $key->user_id)->first()->getKategori() }}</td>
													<td>Rp {{ number_format($key->amount, 2) }}</td>
													<td>
														@if(\App\User::where('id', $key->user_id)->first()->team->progress == 1)
														Waiting for verification
														@else
														Verified
														@endif
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		// wow js
		new WOW().init() ;

		$('[data-toggle="tooltip"]').tooltip() ;

		//lightcase lightbox
		$('a[data-rel^=lightcase]').lightcase();

		// nicescroll js
		$("html").niceScroll({
			cursorcolor : 'rgba(0,0,0,0.5)',
			cursorwidth : '5px',
			cursorborder : 'none',
			cursorborderradius : '0px' ,
			zindex : '101'
		}) ;

		// to ease when click '#' url
		$(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });

        $(function () {
		    Highcharts.chart('chart-container', {
		        chart: {
		            type: 'column'
		        },
		        title: {
		            text: 'Statistik Pendaftar'
		        },
		        subtitle: {
		            text: 'sumber : data panitia'
		        },
		        xAxis: {
		            categories: [
		                'Feb',
		                'Mar',
		                'Apr',
		            ],
		            crosshair: true
		        },
		        yAxis: {
		            min: 0,
		            title: {
		                text: 'Jumlah Pendaftar'
		            }
		        },
		        tooltip: {
		            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		                '<td style="padding:0"><b>{point.y:.0f} ekor</b></td></tr>',
		            footerFormat: '</table>',
		            shared: true,
		            useHTML: true
		        },
		        plotOptions: {
		            column: {
		                pointPadding: 0.2,
		                borderWidth: 0
		            }
		        },
		        series: [{
		            name: 'WDC',
		            data: [{{ $wdcfeb }},{{ $wdcmar }},{{ $wdcapr }}]

		        }, {
		            name: 'MADC',
		            data: [{{ $madcfeb }},{{ $madcmar }},{{ $madcapr }}]

		        }, {
		            name: 'Semnas',
		            data: [{{ $semnasfeb }},{{ $semnasmar }},{{ $semnasapr }}]

		        }]
		    });
		});

	}) ;
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

@endsection
