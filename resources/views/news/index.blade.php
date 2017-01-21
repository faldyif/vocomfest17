@extends('layouts.guest')
@section('title', 'Vocomfest - News')

@section('body')
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<p class="big" style="letter-spacing: 3px;">LATEST POST</p>
				<hr class="bl-line-sep">
			</div>
		</div>
	</div>
	<img src="{{ url('assets/img/event-cover.jpg') }}" class="cover-img">
</section>
<section id="news-body">
	<div class="container-fluid pd-bt-20">
		<div class="row pd-bt-20">
			<!-- <div class="section-title pd-bt-20 text-center">
				<span class="section-icon">
					<i class="fa fa-hourglass-half"></i>
				</span>
				<h3 class="mont-bold nowrap">NEWS</h3>
				<p class="small subtitle">Lorem Ipsum Dolorsit Amet</p>
			</div> -->
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
		</div>
		</div>
	</div>
</section>
@endsection