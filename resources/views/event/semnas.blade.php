@extends('layouts.guest')
@section('title', 'Vocomfest - Seminar Nasional')

@section('body')
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<h2 class="mont-bold sep-title thenNo">SEMNAS</h2>
				<h3 class="mont-bold more-bigger thenSmall">Seminar Nasional</h3>
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
						<li><a href="#three">FAQ</a></li>
					</ul>
		    </div>
		  </div>
		</nav>
<!-- / -->
			</div>
			<div class="col-md-9 text-justify">
				<!-- One -->
				<div id="one" class="divEvent">
					<img src="./assets/img/soon.png" class="news-img-inside">
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$('body').scrollspy({
			target : '#asideNav'
		}) ;
		//fixed nav
        $(window).scroll(function(){
        	if($(window).scrollTop()>320){
        		$('#asideNav').addClass('fixedNav');
        	}
        	if($(window).scrollTop()<320){
        		$('#asideNav').removeClass('fixedNav');
        	}
        });
	})
</script>
@endsection
