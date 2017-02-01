<?php
	$user = Auth::user();
	$arr_type = array("", "Website", "Proposal", "Aplikasi");
	$arr_jml_bayar = array(0, 0, 100000, 50000, 50000);
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
?>

@extends('layouts.main')
@section('title', 'Vocomfest - Dashboard')

@section('body')
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
				<span>Keuta Tim</span>
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
					<li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					@if(Auth::user()->role_id != 4)
					<li class="active"><a href="{{ url('dashboard/team') }}"><i class="fa fa-users"></i><span>Team Members</span></a></li>
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
			<h2 class="mont-bold">Anggota Tim</h2>
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
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
		<div class="row">
			<div class="sec-content-db add-member" style="display: block;">
				@if($user->team->verified == 0)
				<button id="myBtn" type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#editTeam"><i class="fa fa-edit"></i></button>
				@endif
			</div>
		</div>
		<div class="row">
		 	<section class="col-md-3 col-sm-3 col-xs-6 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<figure class="img-profile">
						<img src="{{ url('assets/img/leader.jpg') }}">
					</figure>
					<span class="text-center">
						<p class="blue mg-t-15">Ketua Tim</p>
						<p class="nomag mont-bold">{{ $user->team->leader_name }}</p>
						<p class="nomag">{{ $user->email }}</p>
						<p class="nomag">+62 {{ Auth::user()->team->leader_phone }}</p>
						@if($user->team->leader_identity != NULL)
						<p class="nomag"><a href="{{ url('storage/identity_scans') }}/{{ $user->team->leader_identity }}" data-rel="lightcase">Scan Identitas</a></p>
						@endif
					</span>
				</div>
			</section>
			@if($user->team->member1_name != "")
			<section class="col-md-3 col-sm-3 col-xs-6 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<figure class="img-profile">
						<img src="{{ url('assets/img/member.jpg') }}">
					</figure>
					<span class="text-center">
						<p class="blue mg-t-15">Anggota</p>
						<p class="nomag mont-bold">{{ $user->team->member1_name }}</p>
						<p class="nomag">{{ $user->team->member1_email }}</p>
						<p class="nomag">+62 {{ $user->team->member1_phone }}</p>
						@if($user->team->member1_identity != NULL)
						<p class="nomag"><a href="{{ url('storage/identity_scans') }}/{{ $user->team->member1_identity }}" data-rel="lightcase">Scan Identitas</a></p>
						@endif
					</span>
				</div>
			</section>
			@endif
			@if($user->team->member2_name != "")
			<section class="col-md-3 col-sm-3 col-xs-6 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<figure class="img-profile">
						<img src="{{ url('assets/img/member.jpg') }}">
					</figure>
					<span class="text-center">
						<p class="blue mg-t-15">Anggota</p>
						<p class="nomag mont-bold">{{ $user->team->member2_name }}</p>
						<p class="nomag">{{ $user->team->member2_email }}</p>
						<p class="nomag">+62 {{ $user->team->member2_phone }}</p>
						@if($user->team->member2_identity != NULL)
						<p class="nomag"><a href="{{ url('storage/identity_scans') }}/{{ $user->team->member2_identity }}" data-rel="lightcase">Scan Identitas</a></p>
						@endif
					</span>
				</div>
			</section>
			@endif
			@if($user->role_id == 3 && $user->team->member3_name != "")
			<section class="col-md-3 col-sm-3 col-xs-6 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<figure class="img-profile">
						<img src="{{ url('assets/img/member.jpg') }}">
					</figure>
					<span class="text-center">
						<p class="blue mg-t-15">Anggota</p>
						<p class="nomag mont-bold">{{ $user->team->member3_name }}</p>
						<p class="nomag">{{ $user->team->member3_email }}</p>
						<p class="nomag">+62 {{ $user->team->member3_phone }}</p>
						@if($user->team->member3_identity != NULL)
						<p class="nomag"><a href="{{ url('storage/identity_scans') }}/{{ $user->team->member3_identity }}" data-rel="lightcase">Scan Identitas</a></p>
						@endif
					</span>
				</div>
			</section>
			@endif
			<section class="col-md-3 col-sm-3 col-xs-6 pd-t-15 pd-lr-15">
			</section>
		</div>
	</div>
</section>
<!-- Add Members -->

<div id="editTeam" class="modal fade">
	<div class="modal-dialog" style="width: 80%">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Edit Team Details</h3>
			</div>
			<div class="modal-body">
				<div class="alert alert-warning">
				  <strong>Perhatian!</strong> Anda harus menyimpan data terlebih dahulu sebelum menguncinya.
				</div>
				<div class="col-md-12">
					@if($user->role_id == 2)
						{{ Form::model($user->team, array('route' => array('webteam.update', $user->team->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Nama Ketua : </label>
									{{ Form::text('leader_name', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label class="control-label">Email Ketua : </label>
									<input type="text" name="team" id="team" value="{{ $user->email }}" class="form-control" disabled>
								</div>
								<div class="form-group">
									<label for="amout" class="control-label">Nomor Handphone Ketua : </label>
									<div class="input-group">
										<span class="input-group-addon">+62</span>
										{{ Form::text('leader_phone', null, array('class' => 'form-control')) }}
									</div>
								</div>
								<div class="form-group">
									<label for="payment" class="control-label">Scan Identitas Ketua :</label>
									<input type="file" id="identity" name="id_leader" class="form-control" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Anggota #1 Name : </label>
									{{ Form::text('member1_name', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label class="control-label">Anggota #1 Email : </label>
									{{ Form::email('member1_email', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label for="amout" class="control-label">Anggota #1 Phone Number : </label>
									<div class="input-group">
										<span class="input-group-addon">+62</span>
										{{ Form::text('member1_phone', null, array('class' => 'form-control')) }}
									</div>
								</div>
								<div class="form-group">
									<label for="payment" class="control-label">Anggota #1 Scan Identitas :</label>
									<input type="file" id="identity" name="id_member1" class="form-control" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Anggota #2 Name : </label>
									{{ Form::text('member2_name', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label class="control-label">Anggota #2 Email : </label>
									{{ Form::email('member2_email', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label for="amout" class="control-label">Anggota #2 Phone Number : </label>
									<div class="input-group">
										<span class="input-group-addon">+62</span>
										{{ Form::text('member2_phone', null, array('class' => 'form-control')) }}
									</div>
								</div>
								<div class="form-group">
									<label for="payment" class="control-label">Anggota #2 Scan Identitas :</label>
									<input type="file" id="identity" name="id_member2" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-info" value="Simpan" />
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#lockAlertModal">
									Kunci Data
								</button>
							</div>
						{{ Form::close() }}
					@else
						{{ Form::model($user->team, array('route' => array('mobileteam.update', $user->team->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Leader Name : </label>
									{{ Form::text('leader_name', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label class="control-label">Leader Email : </label>
									<input type="text" name="team" id="team" value="{{ $user->email }}" class="form-control" disabled>
								</div>
								<div class="form-group">
									<label for="amout" class="control-label">Leader Phone Number : </label>
									<div class="input-group">
										<span class="input-group-addon">+62</span>
										{{ Form::text('leader_phone', null, array('class' => 'form-control')) }}
									</div>
								</div>
								<div class="form-group">
									<label for="payment" class="control-label">Leader Scan Identitas :</label>
									<input type="file" id="identity" name="id_leader" class="form-control" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Anggota #1 Name : </label>
									{{ Form::text('member1_name', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label class="control-label">Anggota #1 Email : </label>
									{{ Form::email('member1_email', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label for="amout" class="control-label">Anggota #1 Phone Number : </label>
									<div class="input-group">
										<span class="input-group-addon">+62</span>
										{{ Form::text('member1_phone', null, array('class' => 'form-control')) }}
									</div>
								</div>
								<div class="form-group">
									<label for="payment" class="control-label">Anggota #1 Scan Identitas :</label>
									<input type="file" id="identity" name="id_member1" class="form-control" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Anggota #2 Name : </label>
									{{ Form::text('member2_name', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label class="control-label">Anggota #2 Email : </label>
									{{ Form::email('member2_email', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label for="amout" class="control-label">Anggota #2 Phone Number : </label>
									<div class="input-group">
										<span class="input-group-addon">+62</span>
										{{ Form::text('member2_phone', null, array('class' => 'form-control')) }}
									</div>
								</div>
								<div class="form-group">
									<label for="payment" class="control-label">Anggota #2 Scan Identitas :</label>
									<input type="file" id="identity" name="id_member2" class="form-control" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Anggota #3 Name : </label>
									{{ Form::text('member3_name', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label class="control-label">Anggota #3 Email : </label>
									{{ Form::email('member3_email', null, array('class' => 'form-control')) }}
								</div>
								<div class="form-group">
									<label for="amout" class="control-label">Anggota #3 Phone Number : </label>
									<div class="input-group">
										<span class="input-group-addon">+62</span>
										{{ Form::text('member3_phone', null, array('class' => 'form-control')) }}
									</div>
								</div>
								<div class="form-group">
									<label for="payment" class="control-label">Anggota #3 Scan Identitas :</label>
									<input type="file" id="identity" name="id_member3" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-info" value="Simpan" />
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#lockAlertModal">
									Kunci Data
								</button>
							</div>
						{{ Form::close() }}
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
								
<!-- /add members-->
<!-- Modals -->
@if($user->team->verified == 0)
<div id="lockAlertModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Kunci Data</h3>
			</div>
			<div class="modal-body">
				<div class="alert alert-warning">
				  <strong>Warning!</strong> Apakah anda yakin untuk mengunci data? Data yang sudah dikunci sudah tidak dapat diubah lagi.
				</div>
				<a href="{{ url('dashboard/team/lock') }}" class="btn btn-info">Ya, Data saya sudah lengkap</a>
				<a data-toggle="modal" data-target="#lockAlertModal" href="{{ url('dashboard/team/lock') }}" class="btn btn-info">Batal</a>
			</div>
		</div>
	</div>
</div>
@endif
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
							<input type="file" id="payment" name="proof" class="form-control"accept=".jpg, .jpeg, .png, .gif" />
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
							<label for="fileLink" class="control-label">Link {{ $arr_type[$type] }}  * :</label>
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
<script type="text/javascript">
	$("document").ready(function(){
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
	}) ;
</script>
@endif
@endsection
