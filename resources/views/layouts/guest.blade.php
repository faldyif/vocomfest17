<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mmobile apps dan competitive programming untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
	<meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
	<meta name="author" content="Vocomfest Technical Support Team">
	<meta name="robots" content="noindex,nofollow">

	<title>@yield('title')</title>

	<!-- Shortcut icon -->
	<link rel="shortcut icon" type="x-icon" href="{{ url('/assets/img/icon-2.png') }}">

	<!-- CSS HERE -->
	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/lightcase.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/loader.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/vocomfest-style.css') }}">

	<!-- JAVASCRIPT HERE -->
	<script type="text/javascript" src="{{ url('/assets/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ url('/assets/js/loader.js') }}"></script>

  <!-- Scripts -->
  <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
  </script>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<header id="header">
	<!-- Navbar -->
	<section id="navbar">
		<nav id="main-nav" class="navbar navbar-default pd-bt-15 padNav">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="{{ url('/') }}" class="navbar-brand">
						<img src="{{ url('/assets/img/icon-2.png') }}" alt="Vocomfest" class="img-brand">
						<span class="text-brand">VOCOMFEST</span>
					</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-top">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ url('/') }}#header">HOME</a></li>
						<li><a href="{{ url('/') }}#about">ABOUT</a></li>
						<li><a href="{{ url('/') }}#events">EVENTS</a></li>
						<li><a href="{{ url('/') }}#timeline">TIMELINE</a></li>
						<li><a href="{{ url('/') }}#news">NEWS</a></li>
						<li><a href="{{ url('/') }}#gallery">GALLERY</a></li>
						<li><a href="{{ url('/') }}#sponsors">SPONSORS</a></li>
						<li><a href="{{ url('/') }}#contact">CONTACT</a></li>
						@if(Auth::guest())
						<li><a href="{{ url('register') }}">REGISTER</a></li>
						<li><a href="{{ url('login') }}">LOGIN</a></li>
						@else
						<li><a href="{{ url('dashboard') }}">DASHBOARD</a></li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</section>
</header>

@yield('body')

<footer id="footer">
	<!-- Links -->
	<section id="links" class="pd-bt-20">
		<div class="container-fluid">
			<div class="row pd-bt-20">
				<div class="col-md-4">
					<div class="col-md-10">
						<img src="{{ url('assets/img/logo.png') }}" alt="Vocomfest" title="Vocomfest" class="foot-logo mg-bt-20">
						<p class="small">
							Vocational Computer Festival (VOCOMFEST) merupakan salah satu acara terbesar yang diselenggarakan oleh Himpunan Mahasiswa Ilmu Komputer dan Sistem Informasi SV UGM. Mengangkat tema <span class="special">"Creating Smart Citizen for Social Welfare with Technology"</span>
						</p>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<h5 class="mont-bold">
						<i class="fa fa-comments"></i> RECENT POST
					</h5>
					@foreach(\App\News::limit(3)->latest()->get() as $key)
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<img src="{{ url('storage/news_thumbs') }}/{{ $key->thumbnail }}" class="recent-img">
						</div>
						<div class="col-md-9 col-sm-8">
							<a href="{{ url('news') }}/{{ $key->id }}" class="recent-link">{{ $key->title }}</a>
							<p class="small mont">{{ $key->created_at->format('F jS, Y') }}</p>
						</div>
					</div>
					@endforeach
				</div>
				<div class="col-md-4">
					<h5 class="mont-bold">
						<i class="fa fa-link"></i> LINKS
					</h5>
					<p>
						<ul class="inlinks">
							<li><a href="{{ url('/') }}">HOME</a></li>
							<li><a href="{{ url('/wdc') }}">WDC</a></li>
							<li><a href="{{ url('/madc') }}">MADC</a></li>
							<li><a href="{{ url('/icpc') }}">ICPC</a></li>
							<li><a href="{{ url('/semnas') }}">SEMNAS</a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Copyright -->
	<section id="copyright" class="blue">
		<div class="container-fluid">
			<div class="row pd-bt-10">
				<div class="col-md-3">
					<ul class="social-links">
						<li><a href="http://facebook.com/vocomfest" title="Vocomfest 2017" target="_blank"><i class="fa fa-facebook"></a></i></li>
						<li><a href="http://twitter.com/vocomfest" title="Vocomfest 2017" target="_blank"><i class="fa fa-twitter"></a></i></li>
						<li><a href="http://instagram.com/vocomfest" title="Vocomfest 2017" target="_blank"><i class="fa fa-instagram"></a></i></li>
					</ul>
				</div>
				<div class="col-md-3 pull-right text-right">
					<p class="small nowrap">
						Made with <i class="fa fa-heart red"></i> in Yogyakarta
						<br>by Vocomfest Technical Support
					</p>
				</div>
			</div>
		</div>
	</section>
</footer>

<!-- JAVASCRIPT HERE -->
<script type="text/javascript" src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/lightcase.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// wow js
		new WOW().init() ;

		//lightcase lightbox
		$('a[data-rel^=lightcase]').lightcase();

		$('#testimonies').owlCarousel({
			singleItem : true,
			autoPlay : true,
			slideSpeed : 200
		}) ;
		// nicescroll js
		$("html").niceScroll({
			cursorcolor : 'rgba(0,0,0,0.5)',
			cursorwidth : '5px',
			cursorborder : 'none',
			cursorborderradius : '0px' ,
			zindex : '101'
		}) ;

		//tabs bootstrap
		$('#myTabs a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})

		$('#newmember').hide() ;
		$('.event-category').on('click', function() {
			if($('#madc').is(':checked')){
				$('#newmember').fadeIn('fast') ;
			}else{
				$('#newmember').fadeOut('fast') ;
			}
		});


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
</body>
</html>
