<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mmobile apps untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
	<meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
	<meta name="author" content="Vocomfest Technical Support Team">
	<meta name="robots" content="index,follow">

	<title>Vocomfest</title>

	<!-- Shortcut icon -->
	<link rel="shortcut icon" type="x-icon" href="{{ url('assets/img/icon-2.png') }}">

	<!-- CSS HERE -->
	<link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/lightcase.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/loader.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/vocomfest-style.css') }}">

	<!-- JAVASCRIPT HERE -->
	<script type="text/javascript" src="{{ url('assets/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/loader.js') }}"></script>
</head>
<body>
<div class="se-pre-con"></div>
<!-- Header, hero content -->
<section id="header">
	<div class="hero-cover">
		<div class="cover-overlay">
			<div class="container text-center wh isCenter">
				<div class="col-md-6 col-sm-12 col-xs-12 force-center">
					<div class="col-sm-10 col-sm-offset-1 pd-bt-20">
						<img src="{{ url('assets/img/logo-wh.png') }}" title="Vocomfest 2017" alt="Vocomfest 2017" class="cover-img">
					</div>
					<h1 class="mont-bold">"Creating Smart Citizen for Social Welfare with Technology"</h1>
					<div class="mg-t-50 pd-t-50">
						<ul class="social-links">
							<li><a href="http://facebook.com/vocomfest" title="Vocomfest 2017"><i class="fa fa-facebook"></a></i></li>
							<li><a href="http://twitter.com/vocomfest" title="Vocomfest 2017"><i class="fa fa-twitter"></a></i></li>
							<li><a href="http://instagram.com/vocomfest" title="Vocomfest 2017"><i class="fa fa-instagram"></a></i></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Navbar -->
<section id="navbar">
	<nav id="main-nav" class="navbar navbar-default pd-bt-15">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="./index.html" class="navbar-brand">
					<img src="{{ url('assets/img/icon-2.png') }}" alt="Vocomfest" class="img-brand">
					<span class="text-brand">VOCOMFEST</span>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-top">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#header">HOME</a></li>
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#events">EVENTS</a></li>
					<li><a href="#timeline">TIMELINE</a></li>
					<li><a href="#news">NEWS</a></li>
					<li><a href="#gallery">GALLERY</a></li>
					<li><a href="#sponsors">SPONSORS</a></li>
					<li><a href="#contact">CONTACT</a></li>
					<li><a href="{{ url('register') }}">REGISTER</a></li>
					<li><a href="{{ url('login') }}">LOGIN</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<nav id="float-nav" class="navbar navbar-default pd-bt-10 animated slideOutUp">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top-float" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="./index.html" class="navbar-brand">
					<img src="{{ url('assets/img/icon-2.png') }}" alt="Vocomfest" class="img-brand">
					<span class="text-brand">VOCOMFEST</span>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-top-float">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#header">HOME</a></li>
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#events">EVENTS</a></li>
					<li><a href="#timeline">TIMELINE</a></li>
					<li><a href="#news">NEWS</a></li>
					<li><a href="#gallery">GALLERY</a></li>
					<li><a href="#sponsors">SPONSORS</a></li>
					<li><a href="#contact">CONTACT</a></li>
					<li><a href="./register.html">REGISTER</a></li>
					<li><a href="./login.html">LOGIN</a></li>
				</ul>
			</div>
		</div>
	</nav>
</section>
<!-- About Us -->
<section id="about">
	<div class="container-fluid pd-bt-20">
		<div class="row pd-bt-20">
			<div class="section-title pd-bt-20 text-center">
				<span class="section-icon">
					<i class="fa fa-user"></i>
				</span>
				<h3 class="mont-bold nowrap">ABOUT US</h3>
				<p class="small subtitle">Mengenal lebih dekat HIMAKOMSI</p>
			</div>
			<div class="col-md-12">
				<div class="col-md-6">
					<img src="{{ url('assets/img/hima-all.jpg') }}" title="Himakomsi SV UGM" alt="Himakomsi SV UGM" class="cover-img">
				</div>
				<div class="col-md-5 pd-bt-20">
					<h4 class="mont-bold about-title">HIMAKOMSI</h4>
					<p>
						HIMAKOMSI (Himpunan Mahasiswa Komputer dan Sistem Informasi) merupakan sebuah wadah bagi mahasiswa Komputer dan Sistem Informasi (KOMSI) yang ingin mengembangkan pengetahuannya dibidang organisasi. Himakomsi sendiri dibentuk pada tahun 2010, setelah berpisah dengan Himakom (Himpunan Mahasiswa Ilmu Komputer). Kegiatan Himakomsi UGM dituangkan dalam bentuk program-program kerja yang bertujuan mendukung Tri Dharma Perguruan Tinggi yang terdiri atas Pendidikan dan Pengajaran, Penelitian, dan Pengabdian kepada Masyarakat.
					</p>
					<p>
						Himakomsi memiliki 5 divisi, yaitu Event Organizer and Network (EON), Talent Entertainment and Art (TEA), Entrepreneurship (EPS), Administrasi Publikasi dan Advokasi (ADPA), dan Study Intra Scientica (SIS). Himakomsi berlokasi di Sekolah Vokasi UGM.
					</p>
					<p>
						Pada kesempatan kali ini Himakomsi menyelenggarakan Vocomfest. Vocomfest (Vocational Computer Festival) merupakan serangkaian acara yang dilakasanakan oleh Himpunan Mahasiswa Komputer dan Sistem Informasi Sekolah Vokasi UGM yang bertujuan untuk mempersiapkan generasi penerus bangsa dalam menghadapi perkembangan teknologi yang semakin canggih.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Trailer -->
<section id="trailer">
	<div class="container pd-bt-30">
		<div class="row pd-bt-30">
			<div class="overlay bk-overlay"></div>
			<div class="col-md-8 col-md-offset-2 text-center wh">
				<h1 class="mont-bold sep-title">Curious about Vocomfest?</h1>
				<p>
					Penasaran dengan perhelatan Vocomfest 2017 ini? Vocomfest kali ini telah menginjak 5 tahun penyelenggaraan Vocomfest loh. Kalau kamu belum tahu Vocomfest, sangat disayangkan. Coba cek aja!
				</p>
				<p class="pd-t-25">
					<a href="http://youtube.com" target="_blank" class="btn btn-sep">WATCH TRAILER <span class="text-right"><i class="fa fa-play"></i></span></a>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- Event Content -->
<section id="events">
	<div class="container-fluid pd-bt-20">
		<div class="row pd-bt-20">
			<div class="section-title pd-bt-20 text-center">
				<span class="section-icon">
					<i class="fa fa-microphone"></i>
				</span>
				<h3 class="mont-bold nowrap">EVENTS</h3>
				<p class="small subtitle">Rangkaian kegiatan Vocomfest 2017</p>
			</div>
			<div class="col-md-12 pd-bt-20">
				<div class="col-md-3 text-center event-point">
					<div class="row pd-bt-15">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{ url('assets/img/wdc.png') }}" title="Web Design Competition" alt="Web Design Competition" class="cover-img">
						</div>
					</div>
					<h4 class="mont-bold">WEB DESIGN COMPETITION</h4>
					<p>
						WDC merupakan lomba membuat desain web untuk seluruh siswa SMA sederajat, dalam lomba WDC kali ini tema yang diambil adalah <span class="special">"Innovative Website to Educate Moral Citizen"</span>
					</p>
					<p>
						<a href="{{ url('wdc') }}" class="btn btn-default btn-sm">READ MORE</a>
					</p>
				</div>
				<div class="col-md-3 text-center event-point">
					<div class="row pd-bt-15">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{ url('assets/img/icpc.png') }}" title="Competitive Programming" alt="Competitive Programming" class="cover-img">
						</div>
					</div>
					<h4 class="mont-bold">COMPETITIVE PROGRAMMING</h4>
					<p>
						International Collegiate Programming Contest (ICPC) merupakan kompetisi pemrograman bagi mahasiswa yang diselenggarakan dibawah naungan Association for Computer Machinery (ACM)
					</p>
					<p>
						<a href="{{ url('icpc') }}" class="btn btn-default btn-sm">READ MORE</a>
				</div>
				<div class="col-md-3 text-center event-point">
					<div class="row pd-bt-15">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{ url('assets/img/madc.png') }}" title="Mobile Apps Development Competition" alt="Mobile Apps Development Competition" class="cover-img">
						</div>
					</div>
					<h4 class="mont-bold">MOBILE APPS DEVELOPMENT COMPETITION</h4>
					<p>
						MADC merupakan lomba membuat aplikasi berbasis platform android untuk seluruh mahasiswa di Indonesia, dengan tema <span class="special">"Impactful Apps for Citizen Mutualism"</span>
					</p>
					<p>
						<a href="{{ url('madc') }}" class="btn btn-default btn-sm">READ MORE</a>
				</div>
				<div class="col-md-3 text-center event-point">
					<div class="row pd-bt-15">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{ url('assets/img/semnas.png') }}" title="Seminar Nasional" alt="Seminar Nasional" class="cover-img">
						</div>
					</div>
					<h4 class="mont-bold">SEMINAR NASIONAL</h4>
					<p>
						Puncak acara Vocomfest sekaligus penutup seluruh rangkaian acara Vocomfest 2017 dengan seminar nasional bertemakan <span class="special">"Improving Indonesia's Economy through Creative Technopreneurship"</span>
					</p>
					<p>
						<a href="{{ url('semnas') }}" class="btn btn-default btn-sm">READ MORE</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Timeline section -->
<section id="timeline">
	<div class="container-fluid pd-bt-20">
		<div class="row pd-bt-20">
			<div class="section-title pd-bt-20 text-center">
				<span class="section-icon">
					<i class="fa fa-calendar"></i>
				</span>
				<h3 class="mont-bold nowrap">TIMELINE</h3>
				<p class="small subtitle">Jadwal pelaksanaan masing-masing kegiatan</p>
			</div>
			<div class="col-md-10 col-md-offset-1 pd-t-20">
				<div>

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs nav-justified" role="tablist" id="myTabs">
				    <li role="presentation" class="active">
				    	<a href="#wdc" aria-controls="home" role="tab" data-toggle="tab">
				    		<span class="tab-title">WDC</span>
				    		<span class="tab-subtitle small">Web Design Competition</span>
				    	</a>
				    </li>
				    <li role="presentation">
				    	<a href="#icpc" aria-controls="profile" role="tab" data-toggle="tab">
				    		<span class="tab-title">ICPC</span>
				    		<span class="tab-subtitle small">Competitive Programming</span>
				    	</a>
				    </li>
				    <li role="presentation">
				    	<a href="#madc" aria-controls="messages" role="tab" data-toggle="tab">
				    		<span class="tab-title">MADC</span>
				    		<span class="tab-subtitle small">Mobile Apps Development Competition</span>
				    	</a>
				    </li>
				    <li role="presentation">
				    	<a href="#semnas" aria-controls="settings" role="tab" data-toggle="tab">
				    		<span class="tab-title">SEMNAS</span>
				    		<span class="tab-subtitle small">Seminar Nasional</span>
				    	</a>
				    </li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="wdc">
				    	<div class="row pd-bt-30">
				    		<div class="col-md-10 col-md-offset-1">
				    			<ul class="event-schedule">
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">1 Februari 2017</span></p>
				    					<h3 class="mont">Pembukaan Pendaftaran</h3>
				    					<p>
				    						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorem id quasi earum suscipit iure, facilis eveniet corrupti, numquam, quidem possimus praesentium cum doloribus voluptas quos ipsa. Error, commodi nostrum!
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">13 Februari 2017</span></p>
				    					<h3 class="mont">Batas Pendaftaran</h3>
				    					<p>
				    						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorem id quasi earum suscipit iure, facilis eveniet corrupti, numquam, quidem possimus praesentium cum doloribus voluptas quos ipsa. Error, commodi nostrum!
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">17 Februari 2017</span></p>
				    					<h3 class="mont">Pengumpulan Proposal</h3>
				    					<p>
				    						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorem id quasi earum suscipit iure, facilis eveniet corrupti, numquam, quidem possimus praesentium cum doloribus voluptas quos ipsa. Error, commodi nostrum!
				    					</p>
				    				</li>
				    			</ul>
				    		</div>
				    	</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="icpc">
				    	<div class="row pd-bt-30">
				    		<div class="col-md-10 col-md-offset-1">
				    			<ul class="event-schedule">
				    				<h1 class="special text-center">
				    					Coming really soon!
				    				</h1>
				    			</ul>
				    		</div>
				    	</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="madc">
				    	<div class="row pd-bt-30">
				    		<div class="col-md-10 col-md-offset-1">
				    			<ul class="event-schedule">
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">1 Februari 2017 - 6 Maret 2017</span></p>
				    					<h3 class="mont">Pendaftaran</h3>
				    					<p>
				    						Pendaftaran online dan pengumpulan proposal dan video secara online.
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">15 Maret 2017</span></p>
				    					<h3 class="mont">Batas Pengumpulan Proposal</h3>
				    					<p>
				    						Batas akhir pengumpulan proposal dan video MADC
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">16 Maret 2017 - 20 Maret 2017</span></p>
				    					<h3 class="mont">Penjurian Tahap 1</h3>
				    					<p>
				    						Penilaian proposal dan video MADC oleh tim penilai
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">20 Maret 2017</span></p>
				    					<h3 class="mont">Pengumuan Tahap 1</h3>
				    					<p>
				    						Pengumuman peserta yang lolos penjurian proposal dan video, selanjutnya peserta bisa mulai mengerjakan dan mengumpulkan aplikasi.
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">20 Maret 2017 - 4 April 2017</span></p>
				    					<h3 class="mont">Pengumpulan Aplikasi</h3>
				    					<p>
				    						Jangka waktu pengumpulan aplikasi yang lolos seleksi tahap 1 yang dikumpulkan secara online
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">4 April 2017 - 7 April 2017</span></p>
				    					<h3 class="mont">Penjurian Tahap 2</h3>
				    					<p>
				    						Penilaian aplikasi oleh tim penilai
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">7 April 2017</span></p>
				    					<h3 class="mont">Pengumuman Finalis</h3>
				    					<p>
				    						Pengumuman 10 aplikasi terbaik yang selanjutnya diundang untuk mengikuti final di Sekolah Vokasi Universitas Gadjah Mada
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">14 April 2017</span></p>
				    					<h3 class="mont">Technical Meeting</h3>
				    					<p>
				    						Technical Meeting Mobile Apps Development Competition di Gedung Perpustakaan Sekolah Vokasi Universitas Gadjah Mada
				    					</p>
				    				</li>
				    				<li>
				    					<p class="mont-bold big"><i class="fa fa-calendar"></i> &nbsp;<span class="blue">15 April 2017</span></p>
				    					<h3 class="mont">Final MADC</h3>
				    					<p>
				    						Babak final Mobile Apps Development Competition sekaligus pengumuman pemenang di akhir acara
				    					</p>
				    				</li>
				    			</ul>
				    		</div>
				    	</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="semnas">
				    	<div class="row pd-bt-30">
				    		<div class="col-md-10 col-md-offset-1">
				    			<ul class="event-schedule">
				    				<h1 class="special text-center">
				    					Coming really soon!
				    				</h1>
				    			</ul>
				    		</div>
				    	</div>
				    </div>
				  </div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Testimonial -->
<section id="testi">
	<div class="container pd-bt-20">
		<div class="row pd-bt-20">
			<div class="overlay bk-overlay"></div>
			<div class="col-md-8 col-md-offset-2 text-center wh">
				<div class="section-title wh pd-bt-20 text-center">
					<h3 class="mont-bold nowrap">TESTIMONIALS</h3>
					<p class="small subtitle">What people say about Vocomfest</p>
				</div>
			</div>
			<div class="col-md-10 owl-carousel" id="testimonies">
				<div class="testimoni">
					<p class="testi-msg text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur optio, ipsam, delectus dolore perspiciatis ratione voluptate est illum, cupiditate eum debitis recusandae dignissimos voluptas dolor in, rem sapiente. Officia, expedita!
						<br>
						<br>
						- Onno W Purbo, <strong>Pakar IT</strong> -
					</p>
					<p class="text-center pd-t-20">
						<img src="{{ url('assets/img/onno.jpg') }}" alt="Onno W Purbo" class="testi-img">
					</p>
				</div>

				<div class="testimoni">
					<p class="testi-msg text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur optio, ipsam, delectus dolore perspiciatis ratione voluptate est illum, cupiditate eum debitis recusandae dignissimos voluptas dolor in, rem sapiente. Officia, expedita!
						<br>
						<br>
						- Wikan Sakarinto, <strong>Pakar IT</strong> -
					</p>
					<p class="text-center pd-t-20">
						<img src="{{ url('assets/img/onno.jpg') }}" alt="Onno W Purbo" class="testi-img">
					</p>
				</div>

				<div class="testimoni">
					<p class="testi-msg text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur optio, ipsam, delectus dolore perspiciatis ratione voluptate est illum, cupiditate eum debitis recusandae dignissimos voluptas dolor in, rem sapiente. Officia, expedita!
						<br>
						<br>
						- Sigit Priyanta, <strong>Pakar IT</strong> -
					</p>
					<p class="text-center pd-t-20">
						<img src="{{ url('assets/img/onno.jpg') }}" alt="Onno W Purbo" class="testi-img">
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- News -->
<section id="news">
	<div class="container-fluid pd-bt-20">
		<div class="row pd-bt-20">
			<div class="section-title pd-bt-20 text-center">
				<span class="section-icon">
					<i class="fa fa-hourglass-half"></i>
				</span>
				<h3 class="mont-bold nowrap">NEWS</h3>
				<p class="small subtitle">Berita terbaru di Vocomfest 2017</p>
			</div>
			<div class="col-md-12 pd-t-30">
				@foreach($news as $key)
				<div class="col-md-3 news-content">
					<a href="{{ url('news') }}/{{ $key->id }}" alt="News Vocomfest" title="{{ $key->title }}">
						<div class="overlay bk-gr-overlay"></div>
						<img src="{{ url('storage/news_thumbs') }}/{{ $key->thumbnail }}" alt="News Vocomfest" class="cover-img">
						<div class="news-desc">
							<h4 class="news-title">{{ $key->title }}</h4>
							<hr class="bl-line-sep">
							<p class="news-date">{{ $key->created_at->format('F jS, Y') }}</p>
						</div>
					</a>
				</div>
				@endforeach
			</div>
			<div class="col-md-12 pd-t-20">
				<p class="text-center">
					<a href="{{ url('news') }}" class="btn btn-more">LOAD MORE &nbsp; <i class="fa fa-arrow-right"></i></a>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- Gallery -->
<section id="gallery">
	<div class="container-fluid pd-bt-20">
		<div class="row pd-bt-20">
			<div class="section-title pd-bt-20 text-center">
				<span class="section-icon">
					<i class="fa fa-camera-retro"></i>
				</span>
				<h3 class="mont-bold nowrap">GALLERY</h3>
				<p class="small subtitle">Dokumentasi kegiatan Vocomfest sebelumnya</p>
			</div>
			<div class="col-md-12 pd-t-30">
				@foreach($gallery as $key)
				<div class="col-md-3 gallery-content">
					<a href="{{ url('storage/gallery') }}/{{ $key->path }}" data-rel="lightcase">
						<div class="gal-overlay">
							<div class="olay-content text-center">
								+
							</div>
						</div>
						<img src="{{ url('storage/gallery') }}/{{ $key->path }}" alt="{{ $key->text }}" class="cover-img">
					</a>
				</div>
				@endforeach
			</div>
			<div class="col-md-12 pd-t-20">
				<p class="text-center">
					<a href="{{ url('gallery-content') }}" class="btn btn-more">LOAD MORE &nbsp; <i class="fa fa-arrow-right"></i></a>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- Register as content separator -->
<section id="daftar">
	<div class="container pd-bt-30">
		<div class="row pd-bt-30">
			<div class="overlay bl-overlay"></div>
			<div class="col-md-8 col-md-offset-2 text-center wh">
				<h1 class="mont-bold sep-title">Register to Vocomfest now</h1>
				<p>
					Jadi gimana? Kamu tertarik untuk jadi bagian dari Vocomfest 2017 ini? Ayo adu kemampuan dan asah bakatmu melalui Vocomfest 2017 ini! Caranya gampang tinggal klik tombol dibawah ini!
				</p>
				<p class="pd-t-25">
					<a href="{{ url('register') }}" class="btn btn-sep-2">REGISTER</a>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- Sponsors -->
<section id="sponsors">
	<div class="container-fluid pd-bt-20">
		<div class="row pd-bt-20">
			<div class="section-title pd-bt-20 text-center">
				<span class="section-icon">
					<i class="fa fa-star"></i>
				</span>
				<h3 class="mont-bold nowrap">SPONSORS</h3>
				<p class="small subtitle">Pihak pihak yang mendukung kegiatan Vocomfest 2017</p>
			</div>
			<div class="col-md-12 pd-t-25">
				<h2 class="mont-bold text-center">SPONSORS</h2>
				<!-- Main sponsors -->
				<div class="row pd-bt-15">
					<div class="col-md-4">
						<img src="{{ url('assets/img/sponsors/main-1.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-4">
						<img src="{{ url('assets/img/sponsors/main-2.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-4">
						<img src="{{ url('assets/img/sponsors/main-3.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
				</div>
				<div class="row pd-bt-15">
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/second-3.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/main-1.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/second-1.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/second-2.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
				</div>
				<div class="row pd-bt-15">
					<div class="col-md-2">
						<img src="{{ url('assets/img/sponsors/main-3.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-2">
						<img src="{{ url('assets/img/sponsors/main-2.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-2">
						<img src="{{ url('assets/img/sponsors/second-1.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-2">
						<img src="{{ url('assets/img/sponsors/second-2.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-2">
						<img src="{{ url('assets/img/sponsors/second-3.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-2">
						<img src="{{ url('assets/img/sponsors/second-4.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
				</div>
				<div class="col-md-12 pd-t-25">
				<h2 class="mont-bold text-center">MEDIA PARTNERS</h2>
				<!-- Media Partners -->
				<div class="row pd-bt-15">
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/second-3.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/main-1.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/second-1.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/second-2.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/main-3.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/main-2.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/second-3.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
					<div class="col-md-3">
						<img src="{{ url('assets/img/sponsors/second-4.jpg') }}" alt="Lorem Ipsum" class="sponsor-image">
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact Us -->
<section id="contact">
	<div id="locationmap"></div>
	<div class="overlay bk-half-overlay"></div>
	<div class="container">
		<div class="loc-frame">
			<h1 class="loc-title">Location</h1>
			<hr class="bl-line-sep">
			<table class="loc-table">
				<tr>
					<td class="col-md-1" valign="top"><i class="blue fa fa-map-marker"></i></td>
					<td class="col-md-11">
						Gedung SV UGM, Sekip Unit I<br>
						Catur Tunggal, Depok<br>
						Sleman, D I Yogyakarta
					</td>
				</tr>
				<tr>
					<td class="col-md-1"><i class="blue fa fa-envelope"></i></td>
					<td class="col-md-11">
						info@vocomfest.com
					</td>
				</tr>
				<tr>
					<td class="col-md-1"><i class="blue fa fa-phone"></i></td>
					<td class="col-md-11">
						(+62) 274 123 4556
					</td>
				</tr>
			</table>
		</div>
	</div>
</section>
<!-- Footer -->
<footer id="footer">
	<!-- Links -->
	<section id="links" class="pd-bt-20">
		<div class="container-fluid">
			<div class="row pd-bt-20">
				<div class="col-md-4">
					<div class="col-md-10">
						<img src="{{ url('assets/img/logo.png') }}" alt="Vocomfest" title="Vocomfest" class="foot-logo mg-bt-20">
						<p class="small">
							Vocational Computer Festival (VOCOMFEST) merupakan salah satu acara terbesar yang diselenggarakan oleh Himpunan Maasiswa Komputer dan Sistem Informasi SV UGM. Mengangkat tema <span class="special">"Creating Smart Citizen for Social Welfare with Technology"</span>
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
					<!-- <table class="recents" cellspacing="3">
						<tr>
							<td class="col-md-3">
								<img src="./assets/img/sep-2.jpg" class="recent-img">
							</td>
							<td class="col-md-9">
								<a href="blog.html" class="recent-link">Lorem Ipsum Dolorsit Amet</a>
								<p class="small mont">1 Februari 2017</p>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">
								<img src="./assets/img/sep-2.jpg" class="recent-img">
							</td>
							<td class="col-md-9">
								<a href="blog.html" class="recent-link">Lorem Ipsum Dolorsit Amet</a>
								<p class="small mont">1 Februari 2017</p>
							</td>
						</tr>
						<tr>
							<td class="col-md-3">
								<img src="./assets/img/sep-2.jpg" class="recent-img">
							</td>
							<td class="col-md-9">
								<a href="blog.html" class="recent-link">Lorem Ipsum Dolorsit Amet</a>
								<p class="small mont">1 Februari 2017</p>
							</td>
						</tr>
					</table>
					-->
				</div>
				<div class="col-md-4">
					<h5 class="mont-bold">
						<i class="fa fa-link"></i> LINKS
					</h5>
					<p>
						<ul class="inlinks">
							<li><a href="#">HOME</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">LOREM</a></li>
							<li><a href="#">IPSUM</a></li>
							<li><a href="#">DOLORSIT</a></li>
							<li><a href="#">AMET</a></li>
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
						<li><a href="http://facebook.com/vocomfest" title="Vocomfest 2017"><i class="fa fa-facebook"></a></i></li>
						<li><a href="http://twitter.com/vocomfest" title="Vocomfest 2017"><i class="fa fa-twitter"></a></i></li>
						<li><a href="http://instagram.com/vocomfest" title="Vocomfest 2017"><i class="fa fa-instagram"></a></i></li>
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
<script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/lightcase.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// scroll spy for navbar
		// $('#float-nav').hide() ;
		$(window).scroll(function(){
			if($(window).scrollTop() > $('#header').innerHeight() + $('#main-nav').innerHeight()){
				$('#float-nav').removeClass('animated slideOutUp') ;
				$('#float-nav').addClass('animated slideInDown') ;
			}else{
				$('#float-nav').removeClass('animated slideInDown') ;
				$('#float-nav').addClass('animated slideOutUp') ;
			}
			// if($(window).scrollTop() > $('#header').innerHeight()){
			// 	$('#navbar').addClass('fixed-nav') ;
			// }else{
			// 	$('#navbar').removeClass('fixed-nav') ;
			// }
		}) ;
		$('body').scrollspy({
			target : '#float-nav'
		}) ;


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
	function initMap() {
	  var map = new google.maps.Map(document.getElementById('locationmap'), {
	    zoom: 16,
	    center: {lat: -7.775068, lng: 110.374328},
	    zoomControl: false,
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
		rotateControl: false,
		fullscreenControl: false
	  });
	  var marker = new google.maps.Marker({
          position: {lat: -7.7742, lng: 110.3747},
          map: map
        });
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4tWhdW76TiS2KYubptsCvfkRpVcjlW0c&callback=initMap"></script>
</body>
</html>
