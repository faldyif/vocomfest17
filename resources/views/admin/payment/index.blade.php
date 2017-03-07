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
					<li class="active"><a href="{{ url('adminvocomfest17/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payments</span></a></li>
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
		<img src="../assets/img/event-cover.jpg" alt="Payment" class="cover-img">
		<div class="overlay bk-gr-overlay"  style=""></div>
		<section class="header-text">
			<div class="top-header">
				<span>Hello, {{ Auth::user()->name }} | <a class="a-fa" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
	        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	            {{ csrf_field() }}
	        </form>
				</span>
			</div>
			<h2 class="mont-bold">Payment</h2>
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
			<section id="pay">
				<div class="col-md-12 pd-15">
					<div class="sec-content-db">
						<div class="div-content-db">
							<form>
								<div class="panel panel-default">
									<div class="panel-heading">
										All payments
									</div>
									<div class="panel-body">
										<a class="btn btn-info" href="{{ url('adminvocomfest17/download/payment') }}">Download Payment List</a>
			                            <table class="table table-bordered table-striped table-hover">
			                            	<thead>
			                            		<tr>
			                            			<th>No</th>
			                            			<th>Nama Tim</th>
			                            			<th>Kategori</th>
			                            			<th>Keterangan</th>
			                            			<th class="col-md-3">Bukti Bayar</th>
			                            			<th>Status</th>
			                            			<th>Waktu Konfirmasi</th>
			                            			<th>Aksi</th>
			                            		</tr>
			                            	</thead>
			                            	<tbody>
			                            		@foreach($payment as $key)
			                            		<tr>
			                            			<td>{{ (($payment->currentPage() - 1 ) * $payment->perPage() ) + $loop->iteration }}</td>
			                            			@if(\App\User::where('id', $key->user_id)->first()->role_id != 4)
			                            				<td><a href="{{ url('adminvocomfest17/team') }}/{{ \App\User::where('id', $key->user_id)->first()->id }}" class="special blue">{{ \App\User::where('id', $key->user_id)->first()->name }}</a></td>
			                            			@else
			                            				<td>{{ \App\User::where('id', $key->user_id)->first()->name }}</td>
			                            			@endif
			                            			<td>{{ \App\User::where('id', $key->user_id)->first()->getKategori() }}</td>
			                            			<td>{{ $key->description }}</td>
			                            			<td>
			                            				<a href="{{ url('storage/payment_proofs') }}/{{ $key->proof }}" data-rel="lightcase">
															<img src="{{ url('storage/payment_proofs') }}/{{ $key->proof }}" class="cover-img">
														</a>
			                            			</td>
			                            			@if(\App\User::where('id', $key->user_id)->first()->team->progress == 1)
			                            			<td>Belum Dikonfirmasi</td>
			                            			@else
			                            			<td>Terbayar</td>
			                            			@endif
			                            			<td>{{ $key->created_at->diffForHumans() }}</td>
			                            			<td>
			                            				@if(\App\User::where('id', $key->user_id)->first()->team->progress == 1)
			                            				<a href="{{ url('adminvocomfest17/payment/confirm') }}/{{ $key->id }}" class="btn btn-success btn-sm" alt="Confirm Payment"><i class="fa fa-check"></i></a>
			                            				@endif
														<a href="{{ url('storage/payment_proofs') }}/{{ $key->proof }}" data-rel="lightcase" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
														<a href="#" class="btn btn-danger btn-sm" onclick="
															$().ready(function(){
																swal({
																	title : 'Are you sure?',
																	text : 'You will not be able to recover this',
																	type : 'warning',
																	showCancelButton : true,
																	confirmButtonColor : '#DD6B55',
																	confirmButtonText : 'Yes, delete it!',
																	cancelButtonText : 'No, cancel it!',
																	closeOnConfirm : false,
																	closeOnCancel : false,
																	showLoaderOnConfirm : true
																},
																	function(isConfirm){
																		if(isConfirm){
																			$.get('<?php echo url('adminvocomfest17/payment/delete').'/'.$key->id ;?>', function(){
																				swal({
																					title : 'Deleted',
																					text : 'Your transfer proof has been deleted',
																					type : 'success'
																				}, function(){
																					location.reload() ;
																				}) ;
																			}) ;
																		}else{
																			swal('Canceled', 'Your image is safe!', 'error') ;
																		}
																	}
																)
															}) ;
														"><i class="fa fa-trash"></i></a>
			                            			</td>
			                            		</tr>
			                            		@endforeach
			                            		{!! $payment->render() !!}
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