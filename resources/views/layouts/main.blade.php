<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mmobile apps untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
	<meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
	<meta name="author" content="Vocomfest Technical Support Team">
	<meta name="robots" content="index,follow">

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
	<link rel="stylesheet" href="{{ url('/assets/css/sweetalert.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/vocomfest-style.css') }}">

	<!-- JAVASCRIPT HERE -->
	<script type="text/javascript" src="{{ url('/assets/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ url('/assets/js/loader.js') }}"></script>
	<script type="text/javascript" src="{{ url('/assets/js/sweetalert.min.js') }}"></script>

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

@yield('body')

<!-- JAVASCRIPT HERE -->
<script type="text/javascript" src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/lightcase.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/js/owl.carousel.min.js') }}"></script>

<script type="text/javascript" src="{{ url('/assets/plugins/tinymce/tinymce.min.js') }}" ></script>
<script type="text/javascript" src="{{ url('/assets/plugins/tinymce/init-tinymce.js') }}" ></script>

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

		$("#aside").niceScroll({
			cursorcolor : 'rgba(0,0,0,0.5)',
			cursorwidth : '3px',
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
