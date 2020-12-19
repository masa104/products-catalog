@extends('master')


@section('stylesheet')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<link rel="stylesheet" href="{{ asset('/css/list.min.css') }}">
@endsection

@section('content')

<section class="section py-0">
	<div class="cover-img-box hero-img layered-hero">
		<picture>
			<source media="(min-width: 768px)" srcset="{{ asset('/images/cats/' .$cat->slug . '/hero.jpg') }}">
			<img class="cover-img layered-image" loading="lazy" src="{{ asset('/images/cats/' .$cat->slug . '/main.jpg') }}" alt="{{ $cat->name }}" />
		</picture>
		<div class="layered-text">
			<h1 class="layered-title">{{ $cat->name }}</h1>
			<p class="layered-desc">{{ $cat->desc }}</p>
			<a href="#{{ $cat->slug }}" class="layered-button btn btn-lg btn-dark">Check</a>
		</div>
	</div>
</section>


<section class="section category-list">
	<div class="container">
		<h1 id="{{ $cat->slug }}" class="section-heading">{{ $cat->name }}</h1>
		<div class="grid">
			@foreach($cat->children as $child)
				<article class="card grid-item -num-{{ $loop->index + 1 }}">
					<a class="card-link" href="{{ route('list', [$cat->slug, $child->slug]) }}">
						<div class="cover-img-box">
							<img class="card-img cover-img" loading="lazy" src="{{ asset('/images/cats/' .$child->slug . '/main.jpg') }}" alt="{{ $child->name }}">
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
<script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="{{ asset('/js/hero_anime.js') }}"></script>
@endsection
