@extends('layouts.guest')
@section('title', 'Vocomfest - ACM ICPC')

@section('body')
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<h2 class="mont-bold sep-title thenNo">ICPC</h2>
				<h3 class="mont-bold more-bigger thenSmall">Competitive Programming</h3>
				<hr class="bl-line-sep thenNo">
			</div>
		</div>
	</div>
	<img src="./assets/img/event-cover.jpg" class="cover-img">
</section>
<section id="news-body">
	<div class="container pd-bt-20 padNav">
		<div class="row pd-bt-20">
			<div class="pd-bt-20 col-md-3 padNav">

<!-- Aside Nav -->
		<nav class="navbar navbar-default navbar-side-default">
		  <div class="container-fluid nopad">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#asideNav">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <div class="collapse navbar-collapse nopad navEvent" id="asideNav">
		      <ul class="nav text-right mont-bold">
						<li><a href="#one">Deskripsi</a></li>
						<li><a href="#two">Pendaftaran</a></li>
						<li><a href="#three">Informasi Teknis</a></li>
						<li><a href="#four">FAQ</a></li>
					</ul>
		    </div>
		  </div>
		</nav>
<!-- / -->
			</div>
			<div class="col-md-9 text-justify">
			<!-- One -->
			<div id="one" class="divEvent">
				<h3 class="mont-bold">Deskripsi</h3>
				<hr class="bl-line-sep">
				<p class="text-center">
					<img src="./assets/img/news-cover.jpg" class="news-img-inside">
					<span class="small">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</span>
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<!-- /one -->
			<!-- two -->
			<div id="two" class="divEvent">
				<h3 class="mont-bold">Syarat dan Ketentuan</h3>
				<hr class="bl-line-sep">
				<h4>Syarat Peserta</h4>
					<ol>
						<li>Vix no sapientem salutatus maiestatis</li>
						<li>Vix no sapientem salutatus maiestatis</li>
						<li>Vix no sapientem salutatus maiestatis</li>
					</ol>
				<h4>Syarat Peserta</h4>
					<ol>
						<li>Vix no sapientem salutatus maiestatis
							<ul>
								<li>Alii torquatos ea est.</li>
								<li>Facer congue nominavi et mea, at quo falli erant. <br>Ea nullam nominavi maiestatis has, no sit mundi labitur ponderum, cu eripuit efficiendi vel. Id quo accusam luptatum cotidieque. Iriure disputationi vix et, his timeam bonorum cu, at cum suas modus philosophia. Et tation mentitum atomorum sed, est ne quod mundi probatus, porro invenire mediocrem eos eu. Harum principes conclusionemque in per, detraxit vituperatoribus no eos.</li>
							</ul>
						</li>
						<li>Vix no sapientem salutatus maiestatis</li>
						<li>Vix no sapientem salutatus maiestatis</li>
					</ol>
			</div>
			<!-- /two -->
			<!-- three -->
			<div id="three" class="divEvent pd-b-20">
				<h3 class="mont-bold">Jadwal Alur Perlombaan</h3>
				<hr class="bl-line-sep">
				<h4>Syarat Peserta</h4>
					<ol>
						<li>Vix no sapientem salutatus maiestatis</li>
						<li>Vix no sapientem salutatus maiestatis</li>
						<li>Vix no sapientem salutatus maiestatis</li>
					</ol>
				<h4>Syarat Peserta</h4>
					<ol>
						<li>Vix no sapientem salutatus maiestatis
							<ul>
								<li>Alii torquatos ea est.</li>
								<li>Facer congue nominavi et mea, at quo falli erant. <br>Ea nullam nominavi maiestatis has, no sit mundi labitur ponderum, cu eripuit efficiendi vel. Id quo accusam luptatum cotidieque. Iriure disputationi vix et, his timeam bonorum cu, at cum suas modus philosophia. Et tation mentitum atomorum sed, est ne quod mundi probatus, porro invenire mediocrem eos eu. Harum principes conclusionemque in per, detraxit vituperatoribus no eos.</li>
							</ul>
						</li>
						<li>Vix no sapientem salutatus maiestatis</li>
						<li>Vix no sapientem salutatus maiestatis</li>
					</ol>
			</div>
			<!-- /three -->
			</div>
		</div>
	</div>
</section>
@endsection
