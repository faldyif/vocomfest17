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
						<li><a href="#two">Syarat dan Ketentuan</a></li>
						<li><a href="#three">Pendaftaran</a></li>
						<li><a href="#four">Informasi Teknis</a></li>
						<li><a href="#five">FAQ</a></li>
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
					International Collegiate Programming Contest (ICPC atau ACM-ICPC) merupakan kompetisi pemrograman antar universitas yang diselenggarakan di bawah asuhan Association for Computing Machinery (ACM). Kompetisi ini terdiri dari tingkatan-tingkatan tertentu. Mulai dari provincial (wilayah dalam negara), regional (antar negara regional), dan world final.
				</p>
				<p>
					Vocomfest Programming Contest merupakan salah satu kompetisi pemrograman berbasis ACM-ICPC tingkat provincial. Kompetisi ini diselenggarakan oleh Himpunan Mahasiswa Komputer dan Sistem Informasi Sekolah Vokasi Universitas Gadjah Mada. Tiga finalis teratas akan langsung masuk ACM-ICPC 2017 tingkat regional Jakarta.
				</p>
				<p>
					ICPC ditujukan untuk mahasiswa aktif S1, S2 dan diploma diseluruh Indonesia. Peserta berkompetisi dalam tim yang beranggotakan maksimal tiga orang. ICPC ini dilaksanakan dalam 2 babak, yaitu babak penyisihan dan babak final.Info lebih lanjut, dapat dilihat pada tautan berikut. (<a href="http://icpc.baylor.edu" target="_blank">http://icpc.baylor.edu</a>)
				</p>

				<h4>Hadiah</h4>
				<p>
					<table class="table">
						<tr>
							<th class="col-md-3">Juara I</th>
							<td>Rp2.000.000,00</td>
						</tr>
						<tr>
							<th>Juara II</th>
							<td>Rp1.500.000,00</td>
						</tr>
						<tr>
							<th>Juara III</th>
							<td>Rp1.000.000,00</td>
						</tr>
					</table>
				</p>

				<h4>Contact Person</h4>
				<address>
					<p class="special">Asti Nugraheni</p>
					<p>HP	: 087736283156</p>
					<p>LINE	: astinugraheni</p>
				</address>

			</div>
			<!-- /one -->
			<!-- two -->
			<div id="two" class="divEvent">
				<h3 class="mont-bold">Syarat dan Ketentuan</h3>
				<hr class="bl-line-sep">
				<h4>Syarat Peserta</h4>
					<ol>
						<li>Peserta merupakan mahasiswa aktif Diploma/S1/S2.</li>
						<li>Peserta harus melakukan registrasi terlebih dahulu.</li>
						<li>Peserta harus mengisi pendaftaran dengan lengkap dan memberikan informasi yang dapat dipertanggungjawabkan.</li>
						<li>Peserta merupakan tim yang beranggotakan 3 orang dalam satu universitas.</li>
						<li>Jumlah tim dalam satu universitas tidak dibatasi.</li>
						<li>Satu orang tidak boleh terdaftar di lebih dari 1 tim.</li>
						<li><strong>Untuk persyaratan lebih lanjut, silahkan periksa di dokumen <a href="http://icpc.baylor.edu/regionals/rules/EligibilityDecisionTree-2016.pdf">berikut</a>.</strong></li>
					</ol>
			</div>
			<!-- /two -->
			<!-- three -->
			<div id="three" class="divEvent pd-b-20">
				<h3 class="mont-bold">Pendaftaran</h3>
				<hr class="bl-line-sep">

				<h4>Biaya</h4>
					<p>Biaya Pendaftaran lomba adalah Rp. 100.000 / Tim</p>

				<h4>Periode</h4>
					<p><em>Coming really soon!</em></p>

				<h4>Mekanisme Pendaftaran</h4>
					<p><em>Coming really soon!</em></p>

				<h4>Contact Person</h4>
				<address>
					<p class="special">Nitha Huwaida</p>
					<p>HP	: 085700697207</p>
					<p>line	: nithahuwaida</p>
				</address>
			</div>
			<!-- /three -->
			<!-- four -->
			<div id="four" class="divEvent pd-b-20">
				<h3 class="mont-bold">Informasi Teknis</h3>
				<hr class="bl-line-sep">

				<h4>Overview</h4>
					<p>Setiap tim diberikan beberapa paparan permasalahan yang masing-masing akan disertai dengan contoh input/output-nya. Program yang dikirimkan peserta akan diuji oleh juri dengan menggunakan set data khusus (tidak diberikan kepada peserta). Untuk setiap program yang gagal, juri hanya akan memberitahukan status kesalahan program tersebut tanpa menginformasikan detil atau testcase yang membuat program tersebut gagal. Tim yang menyelesaikan soal paling banyak dengan jumlah pinalti waktu terkecil akan keluar sebagai pemenang kontes ini.</p>
					<p>Kontes ini serupa dengan ACM-ICPC baik dari segi sistem maupun jenis soal yang diperlombakan. Peserta bisa mempersiapkan diri dengan berlatih dari online-judge yang ada, antara lain:</p>
					<ul>
						<li><a href="http://uva.onlinejudge.org/">UVa Online Judge</a></li>
						<li><a href="http://poj.org/">PKU Online Judge</a></li>
						<li><a href="http://acm.tju.edu.cn/">TJU Online Judge</a></li>
						<li><a href="http://spoj.pl/">SPOJ</a></li>
					</ul>

				<h4>Soal</h4>
					<p>
						Setiap soal akan diberikan dalam bahasa Inggris dan akan berisi:<br>
						Deskripsi Soal		:	latar belakang dan paparan masalah. <br>
						Spesifikasi Input	:	spesifikasi untuk input, batasan/constrain dan formatnya. <br>
						Spesifikasi Output	:	spesifikasi untuk output dan formatnya. <br>
						Contoh Input-Output	:	contoh input/output yang harus dihasilkan oleh program.
					</p>

				<h4>Materi</h4>
					<p>Secara garis besar materi soal yang akan dikeluarkan serupa dengan kontes ACM-ICPC. Berikut adalah beberapa topik yang termasuk tapi tidak terbatas pada materi:</p>
					<ul>
						<li>Adhoc</li>
						<li>Sorting, Searching</li>
						<li>Divide and Conquer</li>
						<li>Dynamic Programming</li>
						<li>Greedy Algorithm</li>
						<li>Graph Theory</li>
						<li>Mathematics/Number Theory</li>
						<li>Computational Geometry</li>
						<li>String Manipulation</li>
						<li>Data Structure</li>
					</ul>

				<h4>Jumlah Soal dan Durasi</h4>
					<p>Qualification round 	: 5-6 soal, 5 jam</p>
					<p>Final round			: 8-10 soal, 5 jam</p>
				<h4>Input - Output</h4>
					<p>
						Program/RUN yang dikirimkan harus membaca dari standard input dan menulis ke standard output.
					</p>
				<h4>Bahasa Pemrograman</h4>
					<p>
						Bahasa pemrograman yang digunakan adalah C/C++ atau Java (lihat ketentuan compiler di bawah). Peserta bebas memilih salah satu dari bahasa tersebut untuk menyelesaikan masing-masing soal.
					</p>
				<h4>Compiler</h4>
					<p>
						Pilihan compiler yang disediakan adalah:<br>
						C/C++	:	GCC (MinGW dengan IDE DevC++)<br>
						Java	:	Java 6
					</p>
				<h4>RUN</h4>
					<p>RUN adalah program jawaban yang dikirimkan oleh peserta kepada juri. Setiap RUN akan dinilai dan hasilnya akan diberitahukan langsung kepada peserta tersebut ketika kontes berjalan. RUN yang benar akan disebut sebagai ACCEPTED sementara yang salah akan disebut sebagai REJECTED. Setiap Rejected Run akan disertai salah satu informasi berikut:</p>
					<ul>
						<li>Wrong Answer (output program salah)</li>
						<li>Run-Time Error (program mengalami crash/run-time error ketika dijalankan)</li>
						<li>Time Limit Exceeded (lihat ketentuan mengenai Batasan Waktu)</li>
						<li>Compile Error (program tidak berhasil di compile)</li>

					</ul>
				<h4>Batasan Waktu (Time Limit)</h4>
					<p>
						Batasan Waktu RUN adalah waktu eksekusi maksimum yang diizinkan pada sebuah RUN untuk menghasilkan output dari semua input yang diuji. RUN yang tidak berhenti/terminate setelah melebihi batas waktu akan dianggap REJECTED dan diberi status Time Limit Exceeded. Batasan Waktu RUN akan dicantumkan di setiap soal.
					</p>
				<h4>Permintaan Klarifikasi</h4>
					<p>
						Setiap tim boleh mengajukan klarifikasi soal ketika kontes berlangsung dengan menggunakan sistem yang tersedia. Jika tim juri setuju bahwa soal tersebut mengandung pernyataan ambigu atau ada kesalahan, maka klarifikasi tersebut akan diinformasikan ke semua tim.
					</p>
				<h4>Permintaan Klarifikasi(Babak Final)</h4>
					<p><em>Coming really soon!</em></p>
				<h4>Perlengkapan Peserta (Babak Final)</h4>
					<ol>
						<li>Tidak diperbolehkan membawa barang elektronik dalam bentuk apapun (handphone, kamus elektronik, disket, flash disk, kalkulator, dll). Peserta bisa menitipkan tas dan barang-barangnya di ruangan kontes.</li>
						<li>Peserta diperbolehkan membawa kamus dalam bentuk buku tercetak (bukan digital).</li>
						<li>Peserta diperbolehkan membawa alat-alat tulis (pen, pensil, penggaris, busur, jangka, dll), kecuali kertas kosong.</li>
						<li>Setiap tim akan disediakan kertas kosong (untuk coretan) oleh panitia.</li>
						<li>Setiap tim diperbolehkan membawa referensi tercetak dengan ketentuan:
							<ul>
								<li>Tidak lebih dari 25 halaman, single-sided, ukuran letter/quarto atau A4, dengan nomor halaman dicantumkan di sudut kanan atas dan nama universitas dicantumkan di sudut kiri atas.</li>
								<li>Teks dan ilustrasi harus bisa dibaca oleh orang dengan penglihatan normal tanpa pembesaran dari jarak 0.5 meter.</li>
								<li>Dokumen boleh disatukan dalam 1 folder/binder dengan nama universitas tercetak/tertulis di bagian depan folder/binder.</li>
								<li>Materi referensi boleh diperbanyak maksimal menjadi 3 buah dengan isi yang sama.</li>
							</ul>
						</li>

					</ol>
			</div>
			<!-- /four -->
			<!-- five -->
			<div id="five" class="divEvent pd-b-20">
				<h3 class="mont-bold">Frequently Asked Questions</h3>
				<hr class="bl-line-sep">
				<blockquote>
					<p class="special">ICPC itu apa ?</p>
					<p class="small">ICPC merupakan kompetisi pemrograman yang merupakan salah satu rangkaian acara terbesar KOMSI SV UGM yaitu VOCOMFEST</p>
				</blockquote>
				<blockquote>
					<p class="special">Ada tahapannya ga?</p>
					<p class="small">Ada dua tahap, yaitu pertama seleksi dan kedua babak final.</p>
				</blockquote>
				<blockquote>
					<p class="special">Tempatnya dimana?</p>
					<p class="small">Babak Final ICPC di Yogyakarta tepatnya di Universitas Gadjah Mada</p>
				</blockquote>
				<blockquote>
					<p class="special">Ada biaya pendaftarannya ga?</p>
					<p class="small">Biaya pendaftaran Rp.100.000/Tim</p>
				</blockquote>
				<blockquote>
					<p class="special">Babak finalnya kapan?</p>
					<p class="small">15 April 2017</p>
				</blockquote>
				<blockquote>
					<p class="special">ICPC keren ya?</p>
					<p>Woh jelas!</p>
				</blockquote>
			</div>
			<!-- /five -->
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
