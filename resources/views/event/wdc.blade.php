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
						<li><a href="#one">Deskripsi</a></li>
						<li><a href="#two">Syarat dan Ketentuan</a></li>
						<li><a href="#three">Pendaftaran</a></li>
						<li><a href="#four">Pengumpulan Karya</a></li>
						<li><a href="#five">Kriteria Penilaian</a></li>
						<li><a href="#six">FAQ</a></li>
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
						Web Design Competition Vocational Computer Festival 2017
					</span>
				</p>
				<p>
					Web Design Competition (WDC) merupakan bagian dari seluruh rangkaian acara Vocomfest 2017 sekaligus membuka serangkaian acara Vocomfest 2017. Dalam kompetisi ini peserta diajak turut serta menuangkan ide kreatifnya untuk memberikan pengajaran kepada masyarakat melalui desain web. Seperti halnya tema dari WDC pada Vocomfest 2017 kali ini yaitu <span class="special">"Innovative Website to Educate Moral Citizen"</span>. Jadi dalam WDC kali ini mengajak para peserta untuk membuat desain web yang bisa mengedukasi masyarakat secara luas bukan hanya tentang e-school ataupun e-learning yang sudah beredar di kalangan pelajar saat ini.
				</p>
				<p>
					WDC ditujukan untuk seluruh siswa SMA sederajat di seluruh Indonesia tidak dibatasi pada level kemampuan manapun. Dalam kompetisi ini dapat diikuti oleh individu maupun oleh tim dengan anggota maksimum 3 orang setiap tim nya. Dalam pelaksanaannya akan terdapat 2 babak, yaitu babak penyisihan dan babak final. 10 tim dengan desain terbaik akan diundang untuk mempresentasikan karyanya di hadapan juri dan HIMAKOMSI secara langsung di Universitas Gadjah Mada.
				</p>

				<h4>Tema</h4>
				<p class="special">"Innovative Website to Educate Moral Citizen"</p>

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
						<li>Peserta Web Design Competition adalah satu tim yang terdiri dari maksimal 3 orang dari 1 sekolah yang sama.</li>
						<li>Peserta merupakan siswa SMA/SMK sederajat dan masih berstatus pelajar aktif.</li>
						<li>Setiap Sekolah diperbolehkan untuk mendaftarkan lebih dari satu tim.</li>
						<li>Tidak diperkenankan ada peserta yang terdaftar dalam dua tim yang berbeda.</li>
						<li>Tim mendaftar secara online di website <a href="./register.html">www.vocomfest.com/register</a> atau mendaftar pada stand di lobby KPTU Sekolah Vokasi Universitas Gadjah Mada Sekip Unit I Yogyakarta.</li>
						<li>Peserta harus melunasi biaya pendaftaran sebesar Rp 75.000,00.</li>
						<li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
						<li>Peraturan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
					</ol>
				<h4>Ketentuan Web</h4>
					<p>Bentuk web yang dibuat merupakan sebuah web statis dengan penjelasannya sebagai berikut:</p>
					<p>
						Web statis adalah website yang mana pengguna tidak bisa mengubah konten dari web tersebut secara langsung menggunakan browser. Interaksi yang terjadi antara pengguna dan server hanyalah seputar pemrosesan link saja. Halaman-halaman web tersebut tidak memiliki database, data dan informasi dalam web statis tidak berubah-ubah kecuali diubah syntaxnya.
					</p>
					<p>Dengan ketentuan penilaian seperti yang tercantum dibawah ini : </p>
					<ol>
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
									<h5>Laman Edukatif</h5>
									<p>Berisi tentang kisah atau cerita yang dapat mempengaruhi pembacanya untuk bisa memperbaiki moralnya, kisah atau cerita yang dituliskan dapat berupa fiksi ataupun non-fiksi. Contoh: Cerita mengenai bagaimana etika berpendapat didalam sebuah organisasi. </p>
								</li>
								<li>
									<h5>Galeri Inspiratif</h5>
									<p>Berisi foto atau poster hasil karya sendiri yang bertujuan untuk mengajak masyarakat agar berbuat baik.</p>
								</li>
								<li>
									<h5>Lain lain</h5>
									<p>Peserta dapat berinovasi dengan menambahkan konten lain selama sesuai dengan tema.</p>
								</li>
							</ul>
						</li>
						<li>
							Fitur Website
							<ul>
								<li>Dapat menampilkan halaman untuk menambahkan cerita pada laman edukatif</li>
								<li>Dapat menampilkan halaman untuk menambahkan foto pada gallery inspiratif</li>
								<li>Dapat berbagi cerita dan foto inspiratif ke sosial media.</li>
								<li>Dapat menampilkan fitur-fitur lainnya sesuai kebutuhan.</li>
							</ul>
						</li>
						<li>Ketentuan dan persyaratan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</li>
					</ol>
			</div>
			<!-- /two -->
			<!-- three -->
			<div id="three" class="divEvent pd-b-20">
				<h3 class="mont-bold">Pendaftaran</h3>
				<hr class="bl-line-sep">
				<h4>Biaya</h4>
					<p>Biaya Pendaftaran lomba adalah Rp. 75.000 / Tim</p>

				<h4>Periode</h4>
					<p>Tanggal : 1 Februari – 15 Maret 2017</p>

				<h4>Syarat Pendaftaran</h4>
					<ul>
						<li>Menentukan nama tim, ketua tim, dan anggota tim</li>
						<li>Mempersiapkan :
							<ol>
								<li>Scan kartu pelajar semua anggota</li>
							</ol>
						</li>
					</ul>
					<p class="small">Catatan : Nama tim dilarang menggunakan bahasa mengandung hinaan, provokasi dan SARA.</p>

				<h4>Mekanisme Pendaftaran</h4>
					<h5>Online</h5>
					<ol>
						<li>Peserta melakukan pendaftaran di <a href="http://www.vocomfest.com/register">www.vocomfest.com/register</a></li>
						<li>Peserta melengkapi data tim dan mengupload scan Kartu Pelajar.</li>
						<li>Setelah melengkapi data tim dengan sebenar-benarnya peserta dapat mengunci detail tim.</li>
						<li>Peserta melakukan pembayaran sebesar Rp, 75.000 di transfer ke nomor rekening : (Bank BRI) 0033-01-071149-50-9 (a/n. Naila Elma Nuarisya)</li>
						<li>Peserta mengupload scan Bukti Pembayaran.</li>
						<li>Setelah mengupload scan Bukti Pembayaran, menunggu diverifikasi oleh panitia untuk selanjutnya peserta dapat mengupload link drive hasil karyanya.</li>
					</ol>

					<h5>Offline</h5>
					<ol>
						<li>Periode pendaftaran	: 1 Februari – 15 Maret 2017</li>
						<li>Lokasi pendaftaran	: Lobby KPTU SV UGM, Gedung Sekolah Vokasi Sekip I.</li>
						<li>Waktu pendaftaran: </li>
							<ul>
								<li>Pukul 09.00 – 17.00 WIB setiap hari Senin – Jumat.</li>
								<li>Pukul 09.00 – 13.00 WIB di hari Sabtu.</li>
							</ul>
						<li>Kemudian mengisi formulir yang disediakan serta membayar biaya pendaftaran.</li>
						<li>Jika berkas telah sesuai persyaratan dan lengkap, peserta akan mendapatkan email konfirmasi bahwa sudah terdaftar sebagai peserta Vocomfest 2017 di bidang lomba Web Design Competition.</li>
					</ol>

				<h4>Contact Person</h4>
				<address>
					<p class="special">Nitha Huwaida</p>
					<p>HP	: 085700697207</p>
					<p>line	: nithahuwaida</p>
				</address>
			</div>
			<!-- /three -->
			<!-- Four -->
			<div id="four" class="divEvent pd-b-20">
				<h3 class="mont-bold">Pengumpulan Karya</h3>
				<hr class="bl-line-sep">
				<p>
					Hasil karya diupload ke Google Drive dimasukan ke dalam satu folder dengan nama folder:
					<br><span class="special">WDC_nama tim</span>
					<br>Contoh : WDC_TimA. Kemudian link drive dikirim ke website <a href="www.vocomfest.com/dashboard">www.vocomfest.com/dashboard</a>
				</p>
				<p>Folder yang akan di kirimkan harus di zip terlebih dahulu. Yang <span class="special">harus</span> ada dalam folder zip tersebut adalah:</p>
					<ul>
						<li>Screenshot website</li>
						<li>File website disimpan dalam satu folder dengan nama folder <strong>WDC_nama tim_nama website</strong>, kemudian dikompres dengan format zip.</li>
					</ul>
				<p class="small">Catatan : Untuk link file yang telah diupload di Google Drive diubah menjadi shareable link sehingga dapat diakses oleh publik.</p>
			</div>
			<!-- /Four -->
			<!-- Five -->
			<div id="five" class="divEvent pd-b-20">
				<h3 class="mont-bold">Kriteria Penilaian</h3>
				<hr class="bl-line-sep">
				<ol>
					<li>Desain interface web,  layout dan navigasi</li>
					<li>Fitur dan inovasi web</li>
					<li>Kecepatan akses</li>
					<li>Kesesuaian tema</li>
					<li>Konten Website</li>
					<li>Estetika</li>
					<li>Fungsionalitas</li>
				</ol>
			</div>
			<!-- /Five -->
			<!-- Six -->
			<div id="six" class="divEvent pd-b-20">
				<h3 class="mont-bold">Frequently Asked Questions</h3>
				<hr class="bl-line-sep">
				<blockquote>
					<p class="special">WDC itu apa?</p>
					<p class="small">WDC merupakan kompetisi mendesain website yang merupakan salah satu rangkaian acara terbesar KOMSI SV UGM yaitu VOCOMFEST.</p>
				</blockquote>
				<blockquote>
					<p class="special">Ada tahapannya ga?</p>
					<p class="small">Ada dua tahap,yaitu pertama tahap seleksi website tahap awal, dan yang kedua seleksi final dengan mempresentasikan website yang telah dibuat.</p>
				</blockquote>
				<blockquote>
					<p class="special">Tempatnya dimana?</p>
					<p class="small">Babak Final WDC di Yogyakarta tepatnya di hall Gedung Perpustakaan SV UGM</p>
				</blockquote>
				<blockquote>
					<p class="special">Berapa tim yang lolos ke babak final?</p>
					<p class="small">10 tim terbaik bedasarkan seleksi tahap awal yang sudah lolos. </p>
				</blockquote>
				<blockquote>
					<p class="special">Apakah boleh mengubah website kita apabila sudah lolos seleksi dan menuju tahap final?</p>
					<p class="small">Boleh, tapi tidak keseluruhan, mungkin lebih mudahnya dapat dikatakan menyempurnakan website yang lolos tersebut apabila memang masih banyak kekurangannya. </p>
				</blockquote>
				<blockquote>
					<p class="special">Ada biaya pendaftarannya ga?</p>
					<p class="small">Biaya pendaftaran cuma Rp.75.000/Tim hehe</p>
				</blockquote>
				<blockquote>
					<p class="special">Babak finalnya kapan?</p>
					<p class="small">9 April 2017</p>
				</blockquote>
				<blockquote>
					<p class="special">WDC keren ya?</p>
					<p>Iya dong, mantap jiwa...</p>
				</blockquote>
			</div>
			<!-- /Six -->
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
