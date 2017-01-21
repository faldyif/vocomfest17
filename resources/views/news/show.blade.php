@extends('layouts.guest')
@section('title', 'Vocomfest - ACM ICPC')

@section('body')
<section id="news-cover">
	<div class="overlay bk-overlay">
		<div class="news-container">
			<div class="news-desc">
				<h2 class="news-title">{{ $news->title }}</h2>
				<hr class="bl-line-sep">
				<p class="news-date big">{{ $news->created_at->format('F jS, Y') }}</p>
			</div>
		</div>
	</div>
	<img src="{{ url('storage/news_thumbs') }}/{{ $news->thumbnail }}" class="cover-img">
</section>
<section id="news-body">
	<div class="container pd-bt-20">
		<div class="row pd-bt-20">
			<div class="col-md-10 col-md-offset-1 text-justify">
				{!! $news->content !!}
			</div>
		</div>
	</div>
</section>
@endsection
