@extends('layouts.guest')
@section('title', 'Vocomfest - Mobile Apps Development Competition')

@section('body')
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<h2 class="mont-bold sep-title thenNo">MADC</h2>
				<h3 class="mont-bold more-bigger thenSmall">Mobile Apps Development Competition</h3>
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
					<img src="./assets/img/madc-cover.jpg" class="news-img-inside">
					<span class="small">
						Mobile Apps Development Competition Vocational Computer Festival 2017
					</span>
				</p>
				<p>
					Mobile Apps Development Competition (MADC) merupakan rangkaian acara kedua dari VOCOMFEST 2017, MADC merupakan kompetisi membangun aplikasi mobile berbasis platform Android yang bertujuan memberikan konstribusi bagi generasi baru developer aplikasi mobile.
				</p>
				<p>
<<<<<<< HEAD
					MADC ditujukan untuk mahasiswa aktif sarjana dan diploma diseluruh Indonesia. Peserta berkompetisi dalam tim yang beranggotakan maksimal empat orang. MADC ini dilaksanakan dalam 3 babak, yaitu babak penyisihan proposal, peserta mengirimkan proposal tentang aplikasi yang akan dikembangkan, peserta yang lolos seleksi proposal selanjutnya masuk ke babak penyisihan aplikasi dengan mingirimkan prototype atau aplikasi jadi untuk diseleksi lagi menuju babak final. Terakhir babak final, peserta melakukan presentasi di depan dewan juri serta menampilkan karya mereka di Expo MADC.
=======
					MADC ditujukan untuk mahasiswa aktif sarjana dan diploma diseluruh Indonesia. Peserta berkompetisi dalam tim yang beranggotakan maksimal empat orang. MADC ini dilaksanakan dalam 3 babak, yaitu babak penyisihan proposal, peserta mengirimkan proposal tentang aplikasi yang akan dikembangkan, peserta yang lolos seleksi proposal selanjutnya masuk ke babak penyisihan aplikasi dengan mingirimkan prototype atau aplikasi jadi dan video demo aplikasi untuk diseleksi lagi menuju babak final. Terakhir babak final, peserta melakukan presentasi di depan dewan juri serta menampilkan karya mereka di Expo MADC.
>>>>>>> 4715a90a422aad1e9f7884f81b3ef2a328012383
				</p>

				<h4>Tema</h4>
				<p class="special">"Impactful Apps for Citizen Mutualism"</p>

				<h4>Hadiah</h4>
				<p>
					<table class="table">
						<tr>
							<th class="col-md-3">Juara I</th>
							<td>Rp1.500.000,00</td>
						</tr>
						<tr>
							<th>Juara II</th>
							<td>Rp1.000.000,00</td>
						</tr>
						<tr>
							<th>Best Application</th>
							<td>Rp500.000,00</td>
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
						<li>Peserta merupakan mahasiswa aktif D1/D2/D3/D4/S1.</li>
						<li>Peserta harus mengisi pendaftaran dengan lengkap dan memberikan informasi yang dapat dipertanggungjawabkan.</li>
						<li>Peserta harus melakukan registrasi terlebih dahulu sebelum mengirimkan proposal ide aplikasi.</li>
						<li>Peserta merupakan tim yang beranggotakan maksimal 4 orang dalam satu universitas.</li>
						<li>Jumlah tim dalam satu universitas tidak dibatasi.</li>
						<li>Satu orang tidak boleh terdaftar di lebih dari 1 tim.</li>
						<li>Pergantian anggota tim selama kompetisi tidak diperkenankan.</li>
						<li><strong>Peraturan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</strong></li>
					</ol>

				<h4>Syarat Proposal dan Aplikasi</h4>
				<ol>
					<li>Proposal ide aplikasi yang diajukan merupakan ide orisinal dengan <span class="special">tidak menjiplak</span> aplikasi yang sudah ada.</li>
					<li>Proposal ide aplikasi harus bisa direalisasikan menjadi bentuk aplikasi yang  mempunyai nilai artistik, imajinatif, dan inovatif.</li>
					<li>Proposal ide aplikasi <span class="special">belum pernah</span> diikut sertakan dalam kompetisi manapun.</li>
					<li>Proposal ide aplikasi yang diajukan mengacu kepada tema yang telah ditentukan yaitu <span class="special">“Impactful Apps for Citizen Mutualism”</span> referensi aplikasi seperti aplikasi berjenis crowd sourcing, fund raising, dan lainnya yang mempunyai fungsional dua arah / antar pengguna.</li>
					<li>Proposal ide aplikasi tidak mengandung unsur SARA  (Suku, Agama, Ras, dan Antar Golongan).</li>
					<li>Proposal ide aplikasi tidak mengandung unsur kejahatan dan pornografi.</li>
					<li>Segala bentuk plagiarisme akan menyebabkan peserta didiskualifikasi.</li>
					<li>Aplikasi harus dibuat untuk Platform Android minimal berjalan di OS 5.0 Jelly Bean.</li>
					<li><strong>Peraturan yang belum tercantum akan ditambahkan kemudian hari bila diperlukan.</strong></li>
				</ol>

				<h4>Ketentuan Proposal</h4>
					<ol>
						<li>Nama aplikasi.</li>
						<li>Deskripsi aplikasi.</li>
<<<<<<< HEAD
						<li>Latar belakang aplikasi (eritakan latar belakang yang mendorong anda untuk membuat aplikasi tersebut).</li>
						<li>Tujuan pembuatan aplikasi(Ceritakan tujuan anda membuat aplikasi tersebut.).</li>
						<li>Teknologi yang digunakan(Sebutkan teknologi (software) yang menunjang pengembangan aplikasi anda).</li>
						<li>Dokumentasi (bisa berupa mock up atau desain aplikasi yang akan diterapkan pada aplikasi anda).</li>
						<li>Penjelasan fitur yang akan digunakan(Jelaskan fitur fitur apa saja yang akan anda gunakan dalam aplikasi yang anda kembangkan secara singkat).</li>
=======
						<li>Latar belakang aplikasi. (ceritakan latar belakang yang mendorong anda untuk membuat aplikasi tersebut)</li>
						<li>Tujuan pembuatan aplikasi. (ceritakan tujuan anda membuat aplikasi tersebut)</li>
						<li>Teknologi yang digunakan. (sebutkan teknologi (software) yang menunjang pengembangan aplikasi anda)</li>
						<li>Dokumentasi (bisa berupa mock up atau desain aplikasi yang akan diterapkan pada aplikasi anda).</li>
						<li>Penjelasan fitur yang akan digunakan. (jelaskan fitur fitur apa saja yang akan anda gunakan dalam aplikasi yang anda kembangkan secara singkat)</li>
>>>>>>> 4715a90a422aad1e9f7884f81b3ef2a328012383
						<li>Proposal ide aplikasi dikumpulkan dengan format .pdf.</li>
					</ol>

				<h4>Ketentuan Video</h4>
				<p>Sebelum pengumpulan aplikasi, peserta harus mengupload video demo ke youtube dan kirim link video demo bersamaan dengan mengirim file aplikasi tersebut. Ketentuan mengenai video demo yang akan diupload sebagai berikut :</p>
				<ol>
					<li>Video dapat di rekam dari emulator, misalnya menggunakan aplikasi screen recording seperti camstudio, Camtasia dll. Bisa juga dengan device asli menggunakan kamera.</li>
					<li>Video mempertunjukkan dengan singkat dan jelas penggunaan aplikasi tersebut. Disarankan untuk mendemokan semua fitur aplikasi anda dalam video.</li>
					<li>Dibuat semenarik mungkin.</li>
					<li>Format video dianjurkan yang umum digunakan seperti .avi atau .mp4.</li>
					<li>Durasi video maksimal 5 menit.</li>
					<li>Untuk diperhatikan sebagai openingnya, panitia akan menyediakan opening video berdurasi beberapa detik untuk disematkan dalam video demo aplikasi anda.</li>
				</ol>
			</div>
			<!-- /two -->
			<!-- three -->
			<div id="three" class="divEvent pd-b-20">
				<h3 class="mont-bold">Pendaftaran</h3>
				<hr class="bl-line-sep">
				<h4>Biaya</h4>
					<p>Biaya Pendaftaran lomba adalah Rp. 25.000 / Tim</p>

				<h4>Periode</h4>
					<p>Tanggal : 1 Februari – 6 Maret 2017</p>

				<h4>Syarat Pendaftaran</h4>
					<ul>
						<li>Menentukan nama tim, ketua tim, dan anggota tim</li>
						<li>Mempersiapkan :
							<ol>
								<li>Scan ktm semua anggota</li>
							</ol>
						</li>
					</ul>
					<p class="small">Catatan : Nama tim dilarang menggunakan bahasa mengandung hinaan, provokasi dan SARA.</p>

				<h4>Mekanisme Pendaftaran</h4>
					<h5>Online</h5>
					<ol>
						<li>Peserta melakukan pendaftaran di <a href="http://www.vocomfest.com/register">www.vocomfest.com/register</a></li>
						<li>Peserta melengkapi data tim dan mengupload scan Kartu Tanda Mahasiswa.</li>
						<li>Setelah melengkapi data tim dengan sebenar-benarnya peserta dapat mengunci detail tim.</li>
<<<<<<< HEAD
						<li>Peserta melakukan pembayaran sebesar Rp. 25.000 di transfer ke nomor rekening : (Bank BRI) 0033-01-071149-50-9 (a/n. Naila Elma Nuarisya)</li>
=======
						<li>Peserta melakukan pembayaran sebesar Rp, 25.000 ditransfer ke nomor rekening : (Bank BRI) 0033-01-071149-50-9 (a/n. Naila Elma Nuarisya).</li>
>>>>>>> 4715a90a422aad1e9f7884f81b3ef2a328012383
						<li>Peserta dapat mengupload scan Bukti Pembayaran.</li>
						<li>Setelah mengupload scan Bukti Pembayaran, menunggu diverifikasi oleh panitia untuk selanjutnya peserta dapat mengupload link drive Proposalnya.</li>
					</ol>

					<h5>Offline</h5>
					<ol>
						<li>Periode pendaftaran	: 1 Februari – 6 Maret 2017</li>
						<li>Lokasi pendaftaran	: Lobby KPTU SV UGM, Gedung Sekolah Vokasi Sekip I.</li>
						<li>Waktu pendaftaran	:
								<ul>
									<li>Pukul 09.00 – 17.00 WIB setiap hari Senin – Jumat</li>
									<li>Pukul 09.00 – 13.00 WIB di hari Sabtu</li>
								</ul>
						</li>
						<li>Menyiapkan berkas pendaftaran untuk diletakkan pada formulir pendaftaran, yaitu:
							<ul>
<<<<<<< HEAD
								<li>Fotocopy ktm semua anggota</li>
=======
								<li>Scan ktm semua anggota</li>
>>>>>>> 4715a90a422aad1e9f7884f81b3ef2a328012383
							</ul>
						</li>
						<li>Kemudian mengisi formulir yang disediakan serta membayar biaya pendaftaran.</li>
						<li>Jika berkas telah sesuai persyaratan dan lengkap, peserta akan mendapatkan email konfirmasi bahwa sudah terdaftar sebagai peserta MADC Vocomfest 2017.</li>
					</ol>

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
				<h3 class="mont-bold">Pengumpulan Karya</h3>
				<hr class="bl-line-sep">
				<h4>Proposal</h4>
					<p>
<<<<<<< HEAD
						Proposal ide diupload ke Google Drive dalam bentuk pdf dengan nama file:
						<br><span class="special">[MADC17]_[Nama Karya]_[Nama Tim].pdf</span>
						<br>Kemudian link drive dikirim ke website <a href="http://www.vocomfest.com/dashboard">vocomfest.com/dashboard</a>
						<br>Contoh : MADC17_AplikasiX_Tim1.pdf
					</p>
				<h4>Aplikasi/Prototype</h4>
					<p>Aplikasi jadi/protype dalam bentuk executable file (.APK) beserta link video demo apps (format .txt .doc atau .docx) dimasukan kedalam satu folder dengan nama folder: <span class="special">Nama_tim(spasi)Nama_aplikasi</span> dan diupload ke Google Drive. Kemudian link drive dikirim ke website <a href="http://www.vocomfest.com/dashboard">vocomfest.com/dashboard</a></p>
=======
						Proposal ide diupload ke google drive dalam bentuk pdf dengan nama file:  Kemudian link drive dikirim ke website <a href="http://www.vocomfest.com/dashboard">vocomfest.com/dashboard</a>
						<br><span class="special">[MADC17]_[Nama Karya]_[Nama Tim].pdf.</span>
						<br>Contoh : MADC17_AplikasiX_Tim1.pdf
					</p>
				<h4>Aplikasi/Prototype</h4>
					<p>Aplikasi jadi/protype dalam bentuk executable file (.APK) beserta link video demo apps (format .txt .doc atau .docx) dimasukan kedalam satu folder dengan nama folder : <span class="special">Nama_tim(spasi)Nama_aplikasi</span>dan diupload ke google drive. Kemudian link drive dikirim ke website <a href="http://www.vocomfest.com/dashboard">vocomfest.com/dashboard</a></p>
>>>>>>> 4715a90a422aad1e9f7884f81b3ef2a328012383
					<p>Folder yang akan di kirimkan harus di zip terlebih dahulu. Yang harus ada dalam folder zip tersebut adalah :</p>
					<ul>
						<li>Executable file (.APK)</li>
						<li>Tutorial singkat aplikasi (format .txt .doc atau .docx)</li>
						<li>Screenshoot aplikasi</li>
						<li>Deskripsi singkat aplikasi dan target device yang akan dipakai untuk aplikasi (format .txt .doc atau .docx)</li>
						<li>Link video demo apps (format .txt .doc atau .docx)</li>
					</ul>
					<p>
						Catatan: Untuk link file yang telah diupload di Google Drive diubah menjadi shareable link sehingga dapat diakses oleh publik.
					</p>
			</div>
			<!-- /four -->
			<!-- five -->
			<div id="five" class="divEvent pd-b-20">
				<h3 class="mont-bold">Kriteria Penilaian</h3>
				<hr class="bl-line-sep">
				<h4>Proposal</h4>
					<ol>
						<li>Originalitas ide</li>
						<li>Inovasi dan solusi</li>
						<li>Tata bahasa penulisan</li>
						<li>Layout</li>
					</ol>
				<h4>Video</h4>
					<ol>
						<li>Kualitas</li>
						<li>Konten</li>
						<li>Kreatifitas</li>
						<li>Jumlah viewer, like, dan comment</li>
					</ol>

				<h4>Aplikasi</h4>
					<ol>
						<li>Kesesuaian aplikasi dengan ide</li>
						<li>Fitur dan desain</li>
						<li>Fungsionalitas</li>
					</ol>
			</div>
			<!-- /five -->
			<!-- six -->
			<div id="six" class="divEvent pd-b-20">
				<h3 class="mont-bold">Frequently Asked Questions</h3>
				<hr class="bl-line-sep">
				<blockquote>
					<p class="special">Madc itu apa?</p>
					<p class="small">MADC merupakan kompetisi membangun aplikasi mobile berbasis platform Android dan merupakan salah satu rangkaian acara terbesar KOMSI SV UGM yaitu VOCOMFEST.</p>
				</blockquote>
				<blockquote>
					<p class="special">Ada tahapannya ga?</p>
					<p class="small">Ada tiga tahap,yaitu pertama tahap seleksi proposal, kedua tahap seleksi aplikasi, dan ketiga babak final.</p>
				</blockquote>
				<blockquote>
					<p class="special">Tempatnya dimana?</p>
					<p class="small">Babak Final MADC di Yogyakarta tepatnya di hall Gedung Perpustakaan SV UGM</p>
				</blockquote>
				<blockquote>
					<p class="special">Berapa tim yang lolos ke babak final?</p>
					<p class="small">10 tim terbaik bedasarkan seleksi aplikasi yang sudah lolos babak sebelumnya (seleksi proposal dan video).</p>
				</blockquote>
				<blockquote>
					<p class="special">Berapa tim yang lolos ke babak final?</p>
					<p class="small">10 tim terbaik bedasarkan seleksi aplikasi yang sudah lolos babak sebelumnya (seleksi proposal dan video).</p>
				</blockquote>
				<blockquote>
					<p class="special">Ada biaya pendaftarannya ga?</p>
					<p class="small">Biaya pendaftaran cuma Rp.20.000/Tim hehe</p>
				</blockquote>
				<blockquote>
					<p class="special">Babak finalnya kapan?</p>
					<p class="small">16 April 2017</p>
				</blockquote>
				<blockquote>
					<p class="special">MADC keren ya?</p>
					<p>Woh jelassss!</p>
				</blockquote>
			</div>
			<!-- /six -->
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
