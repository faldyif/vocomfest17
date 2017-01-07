@extends('layouts.main')
@section('title', 'Vocomfest - Dashboard')

@section('body')
<!-- Modals -->
<div id="uploadModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">File Upload</h3>
			</div>
			<div class="modal-body">
				<div class="col-md-8">
					<form method="POST" action="">
						<div class="form-group">
							<label class="control-label">{{ Auth::user()->name }} : </label>
							<input type="text" name="team" id="team" value="Your {{ Auth::user()->name }}" class="form-control" disabled>
						</div>
						<div class="form-group">
							<label for="file" class="control-label">Document :</label>
							<input type="file" id="file" name="fileUpload" class="form-control" />
						</div>
						<div class="form-group">
							<label for="payment" class="control-label"><span class="text-center">- or -</span></label>
						</div>
						<div class="form-group">
							<label for="fileLink" class="control-label">Document link :</label>
							<input type="text" id="fileLink" name="fileLink" class="form-control" />
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-info" value="Submit" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<section id="aside" class="col-md-2 col-sm-2 nopad">
	<div id="logo" class="pd-20">
		<div class="row force-center">
			<a href="./index.html">
				<img src="./assets/img/logoDb.png" alt="Vocomfest">
			</a>
		</div>
	</div>
	<div id="bAside" class="pd-bt-20">
		<div id="user" class="text-center mg-b-20 pd-20">
			<div class="users-icon sep-title">
				<i class="fa fa-users"></i>
			</div>
			<h3>{{ Auth::user()->name }}</h3>
			<hr class="line-db">
			@if(Auth::user()->role_id != 4)
				<span>Leader</span>
				<h4 class="nomag">{{ Auth::user()->team->leader_name }}</h4>
			@endif
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
					<li class="active"><a href="./dashboard.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					<li><a href="./dashboard-user.html"><i class="fa fa-users"></i><span>Team Members</span></a></li>
					<li><a href="./event-wdc.html"><i class="fa fa-microphone"></i><span>Event</span></a></li>
					<li><a href="./news.html"><i class="fa fa-hourglass-half"></i><span>News</span></a></li>
					<li><a href="#" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-upload"></i><span>Upload</span></a></li>
				</ul>
			    </div>
			  </div>
			</nav>
			<!--
			<nav>
				<ul class="nav nav-db">
					<li class="active"><a href=""><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					<li><a href=""><i class="fa fa-users"></i><span>Team Members</span></a></li>
					<li><a href=""><i class="fa fa-microphone"></i><span>Event</span></a></li>
					<li><a href=""><i class="fa fa-hourglass-half"></i><span>News</span></a></li>
					<li><a href=""><i class="fa fa-credit-card-alt"></i><span>Payment</span></a></li>
					<li><a href=""><i class="fa fa-upload"></i><span>Upload</span></a></li>
				</ul>
			</nav>
			-->
		</div>
		<!-- /nav -->
	</div>
</section>
<section id="content" class="col-md-10 col-sm-10 nopad">
	<header class="header-db">
		<img src="./assets/img/event-cover.jpg" alt="News Vocomfest" class="cover-img">
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
		<!-- 1# section -->
			<section class="col-md-6 beFull pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<span class="title-sec-db"><i class="fa fa-hourglass-half"></i>News</span>
					<div class="div-content-db">
						<a href="blog.html" alt="News Vocomfest" title="News Vocomfest">
							<div class="news-db"  style="">
								<div class="overlay bk-gr-overlay"  style=""></div>
								<img src="./assets/img/news-img.jpg" alt="News Vocomfest" class="cover-img">
								<div class="news-desc">
									<h4 class="news-title">Lorem Ipsum Dolorsit Amet</h4>
									<hr class="bl-line-sep">
									<p class="news-date">1 Februari 2017</p>
								</div>
							</div>
						</a>
					</div>
					<div class="row pd-t-15">
						<div class="col-md-6 add-pd-b">
							<a href="blog.html" alt="News Vocomfest" title="News Vocomfest">
								<div class="news-db">
									<div class="overlay bk-gr-overlay"></div>
									<img src="./assets/img/news-img.jpg" alt="News Vocomfest" class="cover-img">
									<div class="news-desc">
										<h4 class="news-title">Lorem Ipsum Dolorsit Amet</h4>
										<hr class="bl-line-sep">
										<p class="news-date">1 Februari 2017</p>
									</div>

								</div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="blog.html" alt="News Vocomfest" title="News Vocomfest">
								<div class="news-db">
									<div class="overlay bk-gr-overlay"></div>
									<img src="./assets/img/news-img.jpg" alt="News Vocomfest" class="cover-img">
									<div class="news-desc">
										<h4 class="news-title">Lorem Ipsum Dolorsit Amet</h4>
										<hr class="bl-line-sep">
										<p class="news-date">1 Februari 2017</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
		<!-- /1# section -->
		<!-- 2# section -->
			<section class="col-md-6 beFull pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<span class="title-sec-db"><i class="fa fa-microphone"></i>Event</span>
					@if(Auth::user()->role_id == 2)
					<div class="div-content-db">
						<h2 class="mont-bold blue nomag">WDC</h2>
						<h3 class="mont normal nomag">Web Design Competition</h3>
						<p class="mg-bt-20">Lorem ipsum dolor sit amet, labore aliquam mnesarchum pri ei, in vim dicit petentium, feugiat utroque facilisis no vim. Vidit dolores noluisse usu cu, an voluptua expetenda expetendis mel, malis lobortis torquatos et mea. </p>
						<div>
							<a href="./event-wdc.html" class="btn btn-default btn-sm">READ MORE</a>
						</div>
					</div>
					@elseif(Auth::user()->role_id == 3)
					<div class="div-content-db">
						<h2 class="mont-bold blue nomag">MADC</h2>
						<h3 class="mont normal nomag">Mobile App Development Competition</h3>
						<p class="mg-bt-20">Lorem ipsum dolor sit amet, labore aliquam mnesarchum pri ei, in vim dicit petentium, feugiat utroque facilisis no vim. Vidit dolores noluisse usu cu, an voluptua expetenda expetendis mel, malis lobortis torquatos et mea. </p>
						<div>
							<a href="./event-wdc.html" class="btn btn-default btn-sm">READ MORE</a>
						</div>
					</div>
					@else
					<div class="div-content-db">
						<h2 class="mont-bold blue nomag">Semnas</h2>
						<h3 class="mont normal nomag">Seminar Nasional</h3>
						<p class="mg-bt-20">Lorem ipsum dolor sit amet, labore aliquam mnesarchum pri ei, in vim dicit petentium, feugiat utroque facilisis no vim. Vidit dolores noluisse usu cu, an voluptua expetenda expetendis mel, malis lobortis torquatos et mea. </p>
						<div>
							<a href="./event-wdc.html" class="btn btn-default btn-sm">READ MORE</a>
						</div>
					</div>
					@endif
				</div>
				<div class="row pd-bt-20">
				<!-- Team Members -->
					<section class="col-md-7 add-pd-b sec-team">
						<div class="sec-content-db">
							<span class="title-sec-db"><i class="fa fa-users"></i>Team Members</span>
							@if(Auth::user()->role_id == 2)
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/leader.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Leader Name</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->leader_name }}</span> | {{ Auth::user()->email }}</p>
										</div>
									</span>
								</div>
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Member Name</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member1_name }}</span> | {{ Auth::user()->team->member1_email }}</p>
										</div>
									</span>
								</div>
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Member Name</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member2_name }}</span> | {{ Auth::user()->team->member2_email }}</p>
										</div>
									</span>
								</div>
							@elseif(Auth::user()->role_id == 3)
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Member Name</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member1_name }}</span> | {{ Auth::user()->team->member1_email }}</p>
										</div>
									</span>
								</div>
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Member Name</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member2_name }}</span> | {{ Auth::user()->team->member2_email }}</p>
										</div>
									</span>
								</div>
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Member Name</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member3_name }}</span> | {{ Auth::user()->team->member3_email }}</p>
										</div>
									</span>
								</div>
							@else
								...
							@endif
						</div>
					</section>
				<!-- /team members -->
				<!-- Progress -->
					<section class="col-md-5">
						<div class="sec-content-db">
							<span class="title-sec-db"><i class="fa fa-bar-chart"></i>Progress</span>
							<div class="row content-center">
								<div class="col-md-3 col-xs-4 i-center">
								<i class="fa fa-user he-1"></i>
								</div>
								<span class="col-md-9 col-xs-8 span-right">
									<div class="pd-l-15">
										<p class="nomag mont-bold">Progress</p>
										<p class="nomag">Status :
											@if(Auth::user()->role_id != 4)
												@if(Auth::user()->team->progress == 1)
													Registered
												@elseif(Auth::user()->team->progress == 2)
													Waiting for submission
												@elseif(Auth::user()->team->progress == 3)
													Proposal selection passed
												@elseif(Auth::user()->team->progress == 4)
													Finalist
												@else
													Winner
												@endif
											@endif
										</p>
									</div>
								</span>
							</div>
							<div class="row content-center">
								<div class="col-md-3 col-xs-4 i-center">
								<i class="fa fa-credit-card-alt he-1"></i>
								</div>
								<span class="col-md-9 col-xs-8 span-right">
									<div class="pd-l-15">
										<p class="nomag mont-bold">Payment</p>
										<p class="nomag">Status :
											@if(Auth::user()->team->progress == 1)
												Unpaid
											@else
												Paid
											@endif
										</p>
									</div>
								</span>
							</div>
							<div class="row content-center">
								<div class="col-md-3 col-xs-4 i-center">
								<i class="fa fa-upload he-1"></i>
								</div>
								<span class="col-md-9 col-xs-8 span-right">
									<div class="pd-l-15">
										<p class="nomag mont-bold">Website File</p>
										<p class="nomag">Status : -</p>
										<p><a href="#" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-edit"></i>Upload</a></p>
									</div>
								</span>
							</div>
						</div>
					</section>
				<!-- /Progress -->
				</div>
			</section>
		<!-- /2# section -->
		</div>
	</div>
</section>
@endsection
