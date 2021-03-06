@extends('layouts.main')
@section('title', 'Vocomfest - Login')

@section('body')
<div class="wrapLogin">
  <!-- HEADER -->
  <header id="sign-header">
    <a href="{{ url('/') }}" class="navbar-brand">
    	<img src="{{ url('assets/img/icon-2.png') }}" alt="Vocomfest" class="img-brand">
    	<span class="text-brand mont-bold">VOCOMFEST</span>
    </a>
  </header>
  <!-- LOGIN -->
	<div class="container isCenter col-md-12 col-xs-12">
		<h1 class="blue text-center mont-bold he-1">Login to Vocomfest</h1>
		<div class="wrapForm col-md-4 col-sm-8 force-center">
      @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
			<form class="sign-form" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="row mg-b-20">
					<div class="col-md-4">
						Email
					</div>
					<div class="col-md-8">
						: <input type="text" placeholder="email" name="email">
					</div>
				</div>
				<div class="row mg-b-20">
					<div class="col-md-4">
						Password
					</div>
					<div class="col-md-8">
						: <input type="password" placeholder="password" name="password">
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-4">
						<input type="checkbox" name="remember" id="remember">
							<label for="remember"> Ingat saya </label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 force-center">
						<button class="btn btn-more mg-bt-15" type="submit">
              LOGIN
            </button>
					</div>
				</div>
				<p class="text-center ">Lupa password? <a href="{{ url('password/reset') }}">Klik disini</a>!</p>
				<p class="text-center ">Belum punya akun? <a href="{{ url('register') }}">Register</a>! atau kembali ke <a href="{{ url('/') }}">halaman utama</a>?</p>
			</form>
		</div>
	</div>
</div>
@endsection
