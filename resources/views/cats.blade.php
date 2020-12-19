@extends('master')


@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/list.min.css') }}">
@endsection

@section('content')

<section class="section py-0">
	<div class="cover-img-box hero-img layered-hero">
		<picture>
			<source loading="lazy" media="(min-width: 768px)" srcset="{{ asset('/images/cats/' .$cat->slug . '/hero.jpg') }}" width="1920" height="1080">
			<img loading="lazy" class="cover-img layered-image" src="{{ asset('/images/cats/' .$cat->slug . '/main.jpg') }}" alt="{{ $cat->name }}" width="600" height="315">
		</picture>
		<div class="layered-text">
			<h1 class="layered-title">{{ $cat->name }}</h1>
			<p class="layered-desc">{{ $cat->desc }}</p>
			<a href="#{{ $cat->slug }}" class="layered-button btn btn-lg btn-dark">Check</a>
		</div>
	</div>
</section>


<section class="section category-list scroll-trigger">
	<div class="container">
		<h1 id="{{ $cat->slug }}" class="section-heading">{{ $cat->name }}</h1>
		<div class="grid">
			@foreach($cat->children as $child)
			<article class="card grid-item -num-{{ $loop->index + 1 }}">
				<a class="card-link" href="{{ route('list', [$cat->slug, $child->slug]) }}">
					<div class="cover-img-box">
						<img loading="lazy" class="card-img cover-img thumb-img" src="{{ asset('/images/cats/' .$child->slug . '/main.jpg') }}" alt="{{ $child->name }}" width="600" height="315">
					</div>
					<div class="card-body">
						<h1 class="h4 card-title">{{ $child->name }}</h1>
						<p class="">{{ $child->desc }}</p>
					</div>
				</a>
			</article>
			@endforeach
		</div>
	</div>
</section>


@endsection

@section('script')
<script src="{{ asset('/js/card_anime.js') }}"></script>
<script src="{{ asset('/js/hero_anime.js') }}"></script>
@endsection
