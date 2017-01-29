@extends('layouts.guest')
@section('title', 'Vocomfest - Gallery')

@section('body')
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<p class="big" style="letter-spacing: 3px;">GALLERY</p>
				<hr class="bl-line-sep">
			</div>
		</div>
	</div>
	<img src="{{ url('assets/img/event-cover.jpg') }}" class="cover-img">
</section>
<section id="news-body">
	<div class="container-fluid pd-bt-20">
		<div class="row pd-bt-20">
			<div class="col-md-12 pd-t-30">
				@foreach($gallery as $key)
				<div class="col-md-3 gallery-content">
					<a href="{{ url('storage/gallery') }}/{{ $key->path }}" data-rel="lightcase">
						<div class="overlay img-overlay" style="background-image : url('{{ url('storage/gallery') }}/{{ $key->path }}')"></div>
						<div class="gal-overlay">
							<div class="olay-content text-center">
								+
							</div>
						</div>
						<img src="{{ asset('assets/img/gallery-img-tr.png') }}" alt="{{ $key->text }}" class="cover-img">
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>

</section>
@endsection