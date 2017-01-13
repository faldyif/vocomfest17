@extends('layouts.main')
@section('title', 'Vocomfest - Admin Dashboard')

@section('body')
<section id="aside" class="col-md-2 col-sm-2 nopad">
	<div id="logo" class="pd-20">
		<div class="row force-center">
			<a href="../index.html">
				<img src="../assets/img/logoDb.png" alt="Vocomfest">
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
			<h2 class="mont-bold">Dashboard</h2>
			<hr class="bl-line-sep">
		</section>
	</header>
	<div class="content-db">
		<div class="row">
			<section id="summary">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 sum-content">
							<h2 class="mont-bold blue"><i class="fa fa-user"></i> {{ \App\User::where('role_id', 2)->count() }}</h2>
							<p>Pendaftar WDC</p>
						</div>
						<div class="col-md-4 sum-content">
							<h2 class="mont-bold emerald"><i class="fa fa-user"></i> {{ \App\User::where('role_id', 3)->count() }}</h2>
							<p>Pendaftar MADC</p>
						</div>
						<div class="col-md-4 sum-content">
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
													<th class="col-md-3">Team name</th>
													<th>Category</th>
													<th>Recent status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Grafika Coding Addict</td>
													<td>Web Design Competition</td>
													<td><span class="label label-success">Finalist</span></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Pejuang Kode</td>
													<td>Web Design Competition</td>
													<td><span class="label label-default">Registered</span></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Ganteng Ganteng Programmer</td>
													<td>ACM - ICPC</td>
													<td><span class="label label-warning">Paid</span></td>
												</tr>
												<tr>
													<td>4</td>
													<td>Al Ittihadu Assasu An Najah</td>
													<td>Mobile Apps Design Competition</td>
													<td><span class="label label-confirm">Confirmed</span></td>
												</tr>
												<tr>
													<td>5</td>
													<td>Katanya Programmer</td>
													<td>ACM - ICPC</td>
													<td><span class="label label-info">Batch 1 Passed</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-md-6">
										<h4>Payments</h4>
										<table class="table table-hover table-striped table-responsive">
											<thead>
												<tr>
													<th>No</th>
													<th>Team name</th>
													<th>Category</th>
													<th>Amount</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Grafika Coding Addict</td>
													<td>Web Design Competition</td>
													<td>75.000,00 IDR</td>
													<td>Paid</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Pejuang Kode</td>
													<td>Web Design Competition</td>
													<td>75.000,00 IDR</td>
													<td>Registered</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Ganteng Ganteng Programmer</td>
													<td>ACM - ICPC</td>
													<td>100.000,00 IDR</td>
													<td>Paid</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Al Ittihadu Assasu An Najah</td>
													<td>Mobile Apps Design Competition</td>
													<td>20.000,00 IDR</td>
													<td>Confirmed</td>
												</tr>
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
		            data: [20,20,10]

		        }, {
		            name: 'MADC',
		            data: [30,5,2]

		        }, {
		            name: 'Semnas',
		            data: [42,80,20]

		        }]
		    });
		});

	}) ;
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

@endsection
