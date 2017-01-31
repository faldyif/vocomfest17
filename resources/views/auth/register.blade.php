@extends('layouts.main')
@section('title', 'Vocomfest - Pendaftaran')

@section('body')
<div class="wrapLogin">
	<!-- HEADER -->
	<header id="sign-header">
		<a href="{{ url('/') }}" class="navbar-brand">
			<img src="{{ url('/assets/img/icon-2.png') }}" alt="Vocomfest" class="img-brand">
			<span class="text-brand mont-bold">VOCOMFEST</span>
		</a>
	</header>
	<!-- REGISTER -->
	<div class="container col-md-12 col-xs-12">
		<h1 class="mg-b-15 text-center blue mont-bold he-1">Pendaftaran Vocomfest</h1>
		<!-- FORM REGISTER -->
		<div class="mg-b-10 col-md-12">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="myTabs">
				<li role="presentation" class="active">
					<a href="#competitions" aria-controls="home" role="tab" data-toggle="tab">
						<span class="mont-bold big">Perlombaan</span>
					</a>
				</li>
				<li role="presentation">
					<a href="#semnas" aria-controls="profile" role="tab" data-toggle="tab">
						<span class="mont-bold big">Seminar Nasional</span>
					</a>
				</li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<!-- Tab1 -->
				<div role="tabpanel" class="tab-pane active" id="competitions">
					<!-- Main Form -->
					<div class="col-md-12 wrapReg">
						<form class="sign-form" role="form" method="POST" action="{{ url('/register') }}">
							{{ csrf_field() }}
							<input type="hidden" name="type" value="competition">
							<div class="row">
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Nama Tim
									</div>
									<div class="col-md-7">
										: <input type="text" placeholder="nama tim" name="name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Email ketua
									</div>
									<div class="col-md-7">
										: <input type="email" placeholder="email" name="email">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Password
									</div>
									<div class="col-md-7">
										: <input type="password" placeholder="password" name="password">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Konfirmasi Password
									</div>
									<div class="col-md-7">
										: <input type="password" placeholder="confirm password" name="password_confirmation">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Nama Instansi
									</div>
									<div class="col-md-7">
										: <input type="text" placeholder="Nama Instansi" name="instance_name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Alamat Instansi
									</div>
									<div class="col-md-7">
										: <input type="text" placeholder="Alamat Instansi" name="instance_address">
									</div>
								</div>
							</div>

							<div class="row">
								<div  class="col-md-12">
									<label class="col-xs-12 col-md-4 col-sm-4 mg-b-20">
										<input type="radio" name="competition" value="2" id="wdc" class="event-category" checked> <span>Web Design Competition</span>
									</label>
									<label class="col-xs-12 col-md-4 col-sm-4 mg-b-20">
										<input type="radio" name="competition" value="3" id="madc" class="event-category"> <span>Mobile Apps Development Competition</span>
									</label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Nama Ketua
									</div>
									<div class="col-md-7">
										: <input type="text" placeholder="Nama Ketua" name="leader_name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Nomor Handphone
									</div>
									<div class="inNum col-md-7">
										: +62 <input type="number" placeholder="Nomor Handphone" name="leader_phone">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6 mg-b-20">
									<h4 class="mont">Data Anggota #1</h4>
									<div class="col-md-12 mg-b-20">
										<div class="row">
											<div class="col-md-5">
												Nama Anggota
											</div>
											<div class="col-md-7">
												: <input type="text" placeholder="Nama Anggota" name="member1_name">
											</div>
										</div>
									</div>
									<div class="col-md-12 mg-b-20">
										<div class="row">
											<div class="col-md-5">
												Email Anggota
											</div>
											<div class="col-md-7">
												: <input type="email" placeholder="Email Anggota" name="member1_email">
											</div>
										</div>
									</div>
									<div class="col-md-12 mg-b-20">
										<div class="row">
											<div class="col-md-5">
												Nomor Handphone
											</div>
											<div class="inNum col-md-7">
												: +62 <input type="number" placeholder="Nomor Handphone" name="member1_phone">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mg-b-20">
									<h4 class="mont">Data Anggota #2</h4>
									<div class="col-md-12 mg-b-20">
										<div class="row">
											<div class="col-md-5">
												Nama Anggota
											</div>
											<div class="col-md-7">
												: <input type="text" placeholder="Nama Anggota" name="member2_name">
											</div>
										</div>
									</div>
									<div class="col-md-12 mg-b-20">
										<div class="row">
											<div class="col-md-5">
												Email Anggota
											</div>
											<div class="col-md-7">
												: <input type="email" placeholder="Email Anggota" name="member2_email">
											</div>
										</div>
									</div>
									<div class="col-md-12 mg-b-20">
										<div class="row">
											<div class="col-md-5">
												Nomor Handphone
											</div>
											<div class="inNum col-md-7">
												: +62 <input type="number" placeholder="Nomor Handphone" name="member2_phone">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mg-b-20" id="newmember">
									<h4 class="mont">Data Anggota #3</h4>
									<div class="col-md-12 mg-b-20">
										<div class="row">
											<div class="col-md-5">
												Nama Anggota
											</div>
											<div class="col-md-7">
												: <input type="text" placeholder="Nama Anggota" name="member3_name">
											</div>
										</div>
									</div>
									<div class="col-md-12 mg-b-20">
										<div class="row">
											<div class="col-md-5">
												Email Anggota
											</div>
											<div class="col-md-7">
												: <input type="email" placeholder="Email Anggota" name="member3_email">
											</div>
										</div>
									</div>
									<div class="col-md-12 mg-b-20">
										<div class="row">
											<div class="col-md-5">
												Phone Number
											</div>
											<div class="inNum col-md-7">
												: +62 <input type="number" placeholder="Nomor Handphone" name="member3_phone">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<button class="no-m btn btn-more mg-bt-15" type="submit"> DAFTAR </button>
								</div>
							</div>

						</form>
					</div>
					<!-- End of Main Form-->
				</div>
				<!-- End of Tab1 -->
				<!-- Tab2 -->
				<div role="tabpanel" class="tab-pane" id="semnas">
					<!-- Main Form -->
					<div class="col-md-12 wrapReg">
						<h1 class="special">We are coming really soon</h1>
						<!-- <form role="form" method="POST" action="{{ url('/register') }}">
				            {{ csrf_field() }}
				            <input type="hidden" name="type" value="seminar">
							<div class="row">
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Nama Lengkap
									</div>
									<div class="col-md-7">
										: <input type="text" placeholder="Full Name" name="name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Alamat Email
									</div>
									<div class="col-md-7">
										: <input type="email" placeholder="email" name="email">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Nomor Handphone
									</div>
									<div class="inNum col-md-7">
										: +62 <input type="text" placeholder="phone number" name="phone">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Kategori
									</div>
									<div class="col-md-7">
										: 	<select name="category" required>
												<option value="1">Mahasiswa/Pelajar</option>
												<option value="2">Umum</option>
											</select>
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Password
									</div>
									<div class="col-md-7">
										: <input type="password" placeholder="password" name="password">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 mg-b-20">
									<div class="col-md-5">
										Konfirmasi Password
									</div>
									<div class="col-md-7">
										: <input type="password" placeholder="confirm password" name="password_confirmation">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<input class="no-m btn btn-more mg-bt-15" type="submit" value="REGISTER" name="">
								</div>
							</div>

						</form> -->
					</div>
					<!-- End of Main Form-->
				</div>
				<!-- End of Tab2 -->
			</div>
		</div>
		<!-- END OF FORM REGISTER -->

		<!-- Footer -->
		<p class="text-center ">Ingin kembali ke <a href="{{ url('/') }}">beranda</a>? Atau sudah punya akun? <a href="{{ url('/login') }}">Login di sini</a>.</p>
	</div>
</div>
@endsection
