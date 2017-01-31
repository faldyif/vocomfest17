@extends('layouts.guest')
@section('title', 'Vocomfest - Gallery')

@section('body')
@if($gallery->count() != 0)
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<p class="big" style="letter-spacing: 3px;">GALLERY</p>
				<hr class="bl-line-sep">
				<h2 class="news-title"><a href="{{ url('storage/gallery') }}/{{ $gallery->first()->path }}" data-rel="lightcase">{{ $gallery->first()->text }}</a></h2>
				<p class="news-date big">{{ $gallery->first()->created_at->format('F jS, Y') }}</p>
			</div>
		</div>
	</div>
	<img src="{{ url('storage/gallery') }}/{{ $gallery->first()->path }}" class="cover-img">
	<!-- <img src="./assets/img/event-cover.jpg" class="cover-img"> -->
</section>
@else
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<p class="big" style="letter-spacing: 3px;">GALLERY</p>
			</div>
		</div>
	</div>
	<img src="./assets/img/event-cover.jpg" class="cover-img">
</section>
@endif
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