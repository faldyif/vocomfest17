@extends('layouts.guest')
@section('title', 'Vocomfest - News')

@section('body')
@if($news->count() != 0)
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<p class="big" style="letter-spacing: 3px;">LATEST POST</p>
				<hr class="bl-line-sep">
				<h2 class="news-title"><a href="{{ url('news').'/'.$news->first()->id }}">{{ $news->first()->title }}</a></h2>
				<p class="news-date big">{{ $news->first()->created_at->format('F jS, Y') }}</p>
			</div>
		</div>
	</div>
	<img src="{{ url('storage/news_thumbs') }}/{{ $news->first()->thumbnail }}" class="cover-img">
	<!-- <img src="./assets/img/event-cover.jpg" class="cover-img"> -->
</section>
@else
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<p class="big" style="letter-spacing: 3px;">NEWS</p>
			</div>
		</div>
	</div>
	<img src="./assets/img/event-cover.jpg" class="cover-img">
</section>
@endif
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
						<div class="overlay img-overlay" style="background-image : url('{{ url('storage/news_thumbs') }}/{{ $key->thumbnail }}')"></div>
						<div class="overlay bk-gr-overlay"></div>
						<img src="{{ asset('assets/img/news-img-tr.png') }}" alt="{{ $key->title }}" class="cover-img">
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