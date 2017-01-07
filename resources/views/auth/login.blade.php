@extends('layouts.main')
@section('title', 'Login Vocomfest')

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
					<div class="col-md-5">
						Email
					</div>
					<div class="col-md-7">
						: <input type="text" placeholder="email" name="email">
					</div>
				</div>
				<div class="row mg-b-20">
					<div class="col-md-5">
						Password
					</div>
					<div class="col-md-7">
						: <input type="password" placeholder="password" name="password">
					</div>
				</div>
				<div class="row">
					<label>
						<div class="col-md-6 col-md-offset-6">
							<input type="checkbox" name="remember">
						Remember me
						</div>
					</label>
				</div>
				<div class="row">
					<div class="col-md-6 force-center">
						<button class="btn btn-more mg-bt-15" type="submit">
              LOGIN
            </button>
					</div>
				</div>
				<p class="text-center ">Forgot Password? <a href="">Click here</a>!</p>
				<p class="text-center ">Don't have any account? <a href="./register.html">Register</a>! or back to <a href="./index.html">home</a>?</p>
			</form>
		</div>
	</div>
</div>
@endsection
