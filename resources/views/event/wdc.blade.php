@extends('layouts.guest')
@section('title', 'Vocomfest - Web Design Competition')

@section('body')
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<h2 class="mont-bold sep-title thenNo">WDC</h2>
				<h3 class="mont-bold more-bigger thenSmall">Web Design Competition</h3>
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
						<li class="active"><a href="#one">Deskripsi</a></li>
						<li><a href="#two">Syarat dan Ketentuan</a></li>
						<li><a href="#three">Pendaftaran</a></li>
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
						<li>Peserta Web Design Competition adalah satu tim yang terdiri dari maksimal 3 orang.</li>
						<li>Peserta merupakan siswa SMA/SMK sederajat dan masih berstatus pelajar.</li>
						<li>Setiap Sekolah diperbolehkan untuk mendaftarkan lebih dari satu tim.</li>
						<li>Tidak diperkenankan ada peserta yang terdaftar dalam dua tim yang berbeda.</li>
						<li>Satu tim harus berasal dari sekolah yang sama.</li>
						<li>Tim mendaftar secara online di website <a href="./register.html">www.vocomfest.com/register</a> atau mendaftar pada stand di lobby KPTU Sekolah Vokasi Universitas Gadjah Mada Sekip Unit I Yogyakarta.</li>
						<li>Peserta harus melunasi biaya pendaftaran sebesar Rp 75.000,00.</li>
						<li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
					</ol>
				<h4>Ketentuan Web</h4>
					<ol>
						<li>Bentuk web yang dibuat merupakan sebuah web statis tetapi peserta diperkenankan untuk membuat dalam bentuk web dinamis selama seluruh syarat lainnya terpenuhi.
							<ul>
								<li>
									<h5>Web Statis</h5>
									<p>Web statis adalah website yang mana pengguna tidak bisa mengubah konten dari web tersebut secara langsung menggunakan browser. Interaksi yang terjadi antara pengguna dan server hanyalah seputar pemrosesan link saja. Halaman-halaman web tersebut tidak memiliki database, data dan informasi dalam web statis tidak berubah-ubah kecuali diubah syntaxnya.</p>
								</li>
								<li>
									<h5>Web Dinamis </h5>
									<p>Dalam web dinamis, yang terjadi pada antara pengguna dan server sangat kompleks. Seseorang dapat mengubah konten dari halaman tertentu dengan menggunakan browser. Web dinamis memiliki data dan informasi yang berbeda-beda tergantung include apa yang disampaikan.</p>
								</li>
							</ul>
							Dengan kriteria penilaian seperti yang tercantum dibawah, peserta sudah cukup mengirim web statis saja.
						</li>
						<li>Teknik pembuatan web bebas.</li>
						<li>Dilarang menggunakan framework css (bootstrap, foundation, less framework, amazium, skeleton, dan lain-lain) maupun template dari orang lain.</li>
						<li>Website yang dibuat oleh peserta harus interaktif dan informatif.</li>
						<li>Design sesuai dengan tema.</li>
						<li>Website yang diikut sertakan dalam lomba belum pernah diikut sertakan pada kompetisi manapun.</li>
						<li>Panitia VOCOMFEST 2017 berhak mendiskualifikasi peserta jika diketahui Hak Atas Kekayaan Intelektualnya diragukan, sedang dalam sengketa, mengambil karya orang lain, atau mendapat klaim dari pihak lain.</li>
						<li>Website yang diperlombakan menjadi hak milik peserta.</li>
						<li>
							Konten website
							<ul>
								<li>
									<h5>Home</h5>
									<p>Informasi umum website.</p>
								</li>
								<li>
									<h5>Lorem</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. </p>
								</li>
								<li>
									<h5>Ipsum</h5>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</li>
							</ul>
						</li>
						<li>
							Fitur Website
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod								tempor incididunt ut labore et dolore magna aliqua. </li>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod								tempor incididunt ut labore et dolore magna aliqua. </li>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod								tempor incididunt ut labore et dolore magna aliqua. </li>
							</ul>
						</li>
						<li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
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
