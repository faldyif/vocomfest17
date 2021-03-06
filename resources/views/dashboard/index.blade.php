<?php
	$user = Auth::user();
	$arr_type = array("", "source code Website", "Proposal", "Aplikasi");
	$arr_jml_bayar = array(0, 0, 75000, 25000, 35000);
	$arr_progress = array("", "Menunggu pembayaran", "Seleksi website", "Seleksi proposal", "Seleksi aplikasi", "Finalis", "Penukaran Tiket", "Tiket sudah diambil");
	$arr_submission_type = array(0, 0, 1, 2, 3, 0, 0);
	$type = 0;
	$progress;
	$due;
    $now = \Carbon\Carbon::now('Asia/Jakarta');
	if ($user->role_id == 2) {
        if($user->team->progress == 1) {
        	$progress = 1;
        } else if($user->team->progress == 2) {
            $type = 1; // web
            $progress = 2;
            $due = \Carbon\Carbon::createFromDate(2017, 3, 21, 'Asia/Jakarta');
        } else if($user->team->progress == 3) {
        	$progress = 5;
        }
    } else if($user->role_id == 3) {
    	if($user->team->progress == 1) {
    		$progress = 1;
        } else if($user->team->progress == 2) {
            $type = 2; // proposal
            $progress = 3;
            $due = \Carbon\Carbon::createFromDate(2017, 3, 16, 'Asia/Jakarta');
        } else if ($user->team->progress == 3) {
            $type = 3; // aplikasi
            $progress = 4;
            $due = \Carbon\Carbon::createFromDate(2017, 4, 5, 'Asia/Jakarta');
        } else if($user->team->progress == 4) {
        	$progress = 5;
        }
    } else {
    	if($user->team->progress == 1) {
    		$progress = 1;
        } else if($user->team->progress == 2) {
            $progress = 6;
        } else if ($user->team->progress == 3) {
            $progress = 7;
        }
    }
    $news = \App\News::take(3)->latest()->get();
?>

@extends('layouts.main')
@section('title', 'Vocomfest - Dashboard')

@section('body')
<!-- Modals -->
@if($user->team->progress == 1)
<div id="paymentModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Payment Upload</h3>
			</div>
			<div class="modal-body">
				@if ($user->team->verified == 0 && Auth::user()->role_id != 4)
				<div class="alert alert-danger">
					<p><strong>Data tim anda belum dikunci!</strong></p>
					<p>Lengkapi terlebih dahulu identitas diri (Kartu tanda mahasiswa / Kartu pelajar) dan kunci untuk dapat melanjutkan ke tahap pembayaran. Klik di<a href="{{ url('dashboard/team') }}">sini</a> untuk melakukannya.</p>
				</div>
				@else
				<div class="alert alert-info">
					<p>Silahkan membayar sebesar Rp {{ number_format($arr_jml_bayar[$user->role_id], 2) }} ke rekening dibawah ini. Jika sudah, lakukan konfirmasi pembayaran pada form yang telah disediakan.</p>
					<br/>
					<strong>Daftar Bank Vocomfest</strong>
					<p>Bank BRI: 0033-01-071149-50-9 (a/n. Naila Elma Nuarisya)</p>
				</div>
				<div class="col-md-8">
					{!! Form::open(array('route' => 'payment.store', 'enctype' => 'multipart/form-data')) !!}
						<div class="form-group">
							<label class="control-label">Nama Tim * : </label>
							<input type="text" name="team" id="team" value="{{ $user->name }}" class="form-control" disabled>
						</div>
						<div class="form-group">
							<label for="payment" class="control-label">Bukti pembayaran (jpeg, png, bmp, gif, atau svg) * :</label>
							<input type="file" id="payment" name="proof" class="form-control" accept=".jpg, .jpeg, .png, .gif" />
						</div>
						<div class="form-group">
							<label class="control-label">Keterangan Tambahan (opsional) : </label>
							<textarea name="description" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-info" value="Submit" />
						</div>
					{!! Form::close() !!}
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endif
@if(($progress == 2 || $progress == 3 || $progress == 4) && $now->diffInDays($due, false) > 0)
<div id="uploadModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">File Upload</h3>
			</div>
			<div class="modal-body">
				<div class="col-md-8">
					{!! Form::open(array('route' => 'submission.store', 'enctype' => 'multipart/form-data')) !!}
						<div class="form-group">
							<label class="control-label">{{ Auth::user()->name }}  * : </label>
							<input type="text" name="team" id="team" value="{{ Auth::user()->name }}" class="form-control" disabled>
						</div>
						<div class="form-group">
							<label for="fileLink" class="control-label">Link {{ $arr_type[$type] }} (dengan http:// atau https://)  * :</label>
							<input type="text" id="fileLink" name="path_url" class="form-control" />
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-info" value="Submit" />
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<section id="aside" class="col-md-2 col-sm-2 nopad">
	<div id="logo" class="pd-20">
		<div class="row force-center">
			<a href="{{ url('') }}">
				<img src="{{ url('assets/img/logoDb.png') }}" alt="Vocomfest">
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
				<span>Ketua Tim</span>
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
					<li class="active"><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					@if(Auth::user()->role_id != 4)
					<li><a href="{{ url('dashboard/team') }}"><i class="fa fa-users"></i><span>Team Members</span></a></li>
					@endif
					@if(Auth::user()->role_id == 2)
					<li><a href="{{ url('wdc') }}"><i class="fa fa-microphone"></i><span>Event</span></a></li>
					@elseif(Auth::user()->role_id == 3)
					<li><a href="{{ url('madc') }}"><i class="fa fa-microphone"></i><span>Event</span></a></li>
					@else
					<li><a href="{{ url('semnas') }}"><i class="fa fa-microphone"></i><span>Event</span></a></li>
					@endif
					<li><a href="{{ url('news') }}"><i class="fa fa-hourglass-half"></i><span>News</span></a></li>
					@if($user->team->progress == 1)
					<li><a href="#" data-toggle="modal" data-target="#paymentModal"><i class="fa fa-credit-card-alt"></i><span>Payment</span></a></li>
					@endif
					@if($progress == 2 || $progress == 3 || $progress == 4)
					<li><a href="#" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-upload"></i><span>Upload</span></a></li>
					@endif
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
			<h2 class="mont-bold">Dashboard</h2>
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
@if ($user->team->verified == 0 && Auth::user()->role_id != 4)
<div class="row">
    <div class="alert alert-danger">
        <div class="sb-msg"><p><strong>Tim anda belum terverifikasi</strong></p>
        <p>Lengkapi terlebih dahulu identitas diri (Kartu tanda mahasiswa / Kartu pelajar) dan kunci sehingga kami bisa memverifikasi tim anda. Klik di<a href="{{ url('dashboard/team') }}">sini</a> untuk melakukannya.</p></div>
    </div>
</div>
@endif
		<div class="row">
		<!-- 1# section -->
			<section class="col-md-6 beFull pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<span class="title-sec-db"><i class="fa fa-hourglass-half"></i>News</span>
					@if($news->count() >= 1)
					<div class="div-content-db">
						<a href="{{ url('news') }}/{{$news->first()->id}}" alt="News Vocomfest" title="{{$news->first()->title}}" target="_blank">
							<div class="news-db"  style="">
								<div class="overlay bk-gr-overlay"  style=""></div>
								<img src="{{ url('storage/news_thumbs') }}/{{ $news->first()->thumbnail }}" alt="News Vocomfest" class="cover-img">
								<div class="news-desc">
									<h4 class="news-title">{{ $news->first()->title }}</h4>
									<hr class="bl-line-sep">
									<p class="news-date">{{ $news->first()->created_at->format('F jS, Y') }}</p>
								</div>
							</div>
						</a>
					</div>
					@endif
					@if($news->count() >= 2)
					<div class="row pd-t-15">
						<div class="col-md-6 add-pd-b">
							<a href="{{ url('news') }}/{{$news[1]->id}}" alt="News Vocomfest" title="{{$news[1]->title}}" target="_blank">
								<div class="news-db">
									<div class="overlay bk-gr-overlay"></div>
									<img src="{{ url('storage/news_thumbs') }}/{{ $news[1]->thumbnail }}" alt="News Vocomfest" class="cover-img">
									<div class="news-desc">
									<h4 class="news-title">{{ $news[1]->title }}</h4>
									<hr class="bl-line-sep">
									<p class="news-date">{{ $news[1]->created_at->format('F jS, Y') }}</p>
									</div>

								</div>
							</a>
						</div>
						@if($news->count() >= 3)
						<div class="col-md-6">
							<a href="{{ url('news') }}/{{$news[2]->id}}" alt="News Vocomfest" title="{{$news[2]->title}}" target="_blank">
								<div class="news-db">
									<div class="overlay bk-gr-overlay"></div>
									<img src="{{ url('storage/news_thumbs') }}/{{ $news[2]->thumbnail }}" alt="News Vocomfest" class="cover-img">
									<div class="news-desc">
									<h4 class="news-title">{{ $news[2]->title }}</h4>
									<hr class="bl-line-sep">
									<p class="news-date">{{ $news[2]->created_at->format('F jS, Y') }}</p>
									</div>
								</div>
							</a>
						</div>
						@endif
					</div>
					@endif
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
						<p class="mg-bt-20">Web Design Competition (WDC) merupakan bagian dari seluruh rangkaian acara Vocomfest 2017 sekaligus membuka serangkaian acara Vocomfest 2017. Dalam kompetisi ini peserta diajak turut serta menuangkan ide kreatifnya untuk memberikan pengajaran kepada masyarakat melalui desain web...</p>
						<div>
							<a href="{{ url('wdc') }}" class="btn btn-default btn-sm">READ MORE</a>
						</div>
					</div>
					@elseif(Auth::user()->role_id == 3)
					<div class="div-content-db">
						<h2 class="mont-bold blue nomag">MADC</h2>
						<h3 class="mont normal nomag">Mobile App Development Competition</h3>
						<p class="mg-bt-20">Mobile Apps Development Competition (MADC) merupakan rangkaian acara kedua dari VOCOMFEST 2017, MADC merupakan kompetisi membangun aplikasi mobile berbasis platform Android yang bertujuan memberikan konstribusi bagi generasi baru developer aplikasi mobile.</p>
						<div>
							<a href="{{ url('madc') }}" class="btn btn-default btn-sm">READ MORE</a>
						</div>
					</div>
					@else
					<div class="div-content-db">
						<h2 class="mont-bold blue nomag">Semnas</h2>
						<h3 class="mont normal nomag">Seminar Nasional</h3>
						<p class="mg-bt-20">Puncak acara Vocomfest sekaligus penutup seluruh rangkaian acara Vocomfest 2017 dengan seminar nasional bertemakan <span class="special">"Improving Indonesia's Economy through Creative Technopreneurship"</span> </p>
						<div>
							<a href="{{ url('semnas') }}" class="btn btn-default btn-sm">READ MORE</a>
						</div>
					</div>
					@endif
				</div>
				<div class="row pd-bt-20">
				@if(Auth::user()->role_id != 4)
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
											<p class="nomag mont-bold">Ketua Tim</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->leader_name }}</span> | {{ Auth::user()->email }}</p>
											<p class="nomag">+62 {{ Auth::user()->team->leader_phone }}</p>
										</div>
									</span>
								</div>
								@if(Auth::user()->team->member1_name != "")
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Anggota 1</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member1_name }}</span> | {{ Auth::user()->team->member1_email }}</p>
											<p class="nomag">+62 {{ Auth::user()->team->member1_phone }}</p>
										</div>
									</span>
								</div>
								@endif
								@if(Auth::user()->team->member2_name != "")
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Anggota 2</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member2_name }}</span> | {{ Auth::user()->team->member2_email }}</p>
											<p class="nomag">+62 {{ Auth::user()->team->member2_phone }}</p>
										</div>
									</span>
								</div>
								@endif
							@elseif(Auth::user()->role_id == 3)
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/leader.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Ketua Tim</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->leader_name }}</span> | {{ Auth::user()->email }}</p>
											<p class="nomag">+62 {{ Auth::user()->team->leader_phone }}</p>
										</div>
									</span>
								</div>
								@if(Auth::user()->team->member1_name != "")
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Anggota 1</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member1_name }}</span> | {{ Auth::user()->team->member1_email }}</p>
											<p class="nomag">+62 {{ Auth::user()->team->member1_phone }}</p>
										</div>
									</span>
								</div>
								@endif
								@if(Auth::user()->team->member2_name != "")
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Member 2</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member2_name }}</span> | {{ Auth::user()->team->member2_email }}</p>
											<p class="nomag">+62 {{ Auth::user()->team->member2_phone }}</p>
										</div>
									</span>
								</div>
								@endif	
								@if(Auth::user()->team->member3_name != "")
								<div class="row content-center team-sec">
									<figure class="col-md-3 col-sm-4 col-sm-offset-2 col-xs-4 img-profile">
										<img src="./assets/img/member.jpg">
									</figure>
									<span class="col-md-9 col-sm-4 col-xs-6 span-right">
										<div class="pd-l-15">
											<p class="nomag mont-bold">Anggota 3</p>
											<p class="nomag"><span class="blue">{{ Auth::user()->team->member3_name }}</span> | {{ Auth::user()->team->member3_email }}</p>
											<p class="nomag">+62 {{ Auth::user()->team->member3_phone }}</p>
										</div>
									</span>
								</div>
								@endif
							@else
								...
							@endif
						</div>
					</section>
				<!-- /team members -->
				@else
				<!-- Ticket code -->
					<section class="col-md-7 add-pd-b sec-team">
						<div class="sec-content-db">
							<span class="title-sec-db"><i class="fa fa-users"></i>Kode Penukaran</span>
							@if($progress == 1)
								<div class="row content-center team-sec">
									Selesaikan pembayaran terlebih dahulu.
								</div>
							@elseif($progress == 6)
								<div class="row content-center">
									<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl={{ $user->team->hash }}&choe=UTF-8">
									
								</div>
								<div class="row content-center" style="padding-top:0">
									<p>{{ $user->team->hash }}</p>
								</div>
								<div class="row content-center">
									<p>Silahkan tunjukkan kode diatas saat penukaran kepada panitia.</p>
								</div>
							@else
								<div class="row content-center team-sec">
									Tiket anda sudah diambil.
								</div>
							@endif
						</div>
					</section>
				<!-- /ticket code -->
				@endif
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
										<p class="nomag">Status : {{ $arr_progress[$progress] }}
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
												Unpaid (<a href="#" data-toggle="modal" data-target="#paymentModal">Bayar</a>)
											@else
												Paid
											@endif
										</p>
									</div>
								</span>
							</div>
							@if($progress == 2 || $progress == 3 || $progress == 4)
							<div class="row content-center">
								<div class="col-md-3 col-xs-4 i-center">
								<i class="fa fa-upload he-1"></i>
								</div>
								<span class="col-md-9 col-xs-8 span-right">
									<div class="pd-l-15">
										<p class="nomag mont-bold">File {{ $arr_type[$type] }}</p>
										<p class="nomag">Status : 
										@if(\App\Submission::where('user_id', Auth::user()->id)->where('type', $arr_submission_type[$progress])->count() >= 1)
											Submitted (<a target="_blank" href="{{ \App\Submission::where('user_id', Auth::user()->id)->where('type', $arr_submission_type[$progress])->latest()->first()->path_url }}">Link</a>)
											</p>
										    @if($now->diffInDays($due, false) > 0)
											<p><a href="#" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-edit"></i>Revisi</a></p>
										    @endif
										@else
											Belum mensubmit
											</p>
											<p><a href="#" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-edit"></i>Upload</a></p>
										@endif
									</div>
								</span>
							</div>
							@endif
						</div>
					</section>
				<!-- /Progress -->
				</div>
			</section>
		<!-- /2# section -->
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
		$("#aside").niceScroll({
			cursorcolor : 'rgba(0,0,0,0.5)',
			cursorwidth : '3px',
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
		                '<td style="padding:0"><b>{point.y:.0f} orang</b></td></tr>',
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
		            name: 'ICPC',
		            data: [20,15,19]

		        }, {
		            name: 'MADC',
		            data: [30,5,0]

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
