@extends('master')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('/css/home.min.css') }}">
@endsection

@section('content')
{{-- <div class="section">
	<div class="container">

		<div class="swiper-container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<img class="swiper-lazy" data-src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" />
<div class="swiper-lazy-preloader"></div>
</div>
<div class="swiper-slide">
	<img class="swiper-lazy" data-src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" />
	<div class="swiper-lazy-preloader"></div>
</div>
<div class="swiper-slide">
	<img class="swiper-lazy" data-src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" />
	<div class="swiper-lazy-preloader"></div>
</div>
</div>
<!-- If we need pagination -->
<div class="swiper-pagination"></div>

<!-- If we need navigation buttons -->
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

</div>

</div>
</div> --}}

<section class="section py-0">
	<div class="cover-img-box hero-img layered-hero">
		<picture>
			<source media="(min-width: 768px)" srcset="https://picsum.photos/id/{{ round(rand(1, 100)) }}/1920/1080">
			<img class="cover-img layered-image" loading="lazy" src="{{ asset('/images/hero/home_1200x400_sp.jpg') }}" alt="" />
		</picture>
		<div class="layered-text">
			<h1 class="layered-title">Lorem, ipsum dolor.</h1>
			<p class="layered-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, recusandae!</p>
			<a href="#find-items" class="layered-button btn btn-lg btn-dark">Find !</a>
		</div>
	</div>
</section>


<section class="section home">
	<div class="container">
		<h1 id="find-items" class="section-heading">Find Items</h1>
		<div class="grid">
			@foreach($cats as $cat)
				<article class="card grid-item">
					<a class="card-link" href="{{ route('list', [$cat->slug]) }}">
						<div class="cover-img-box">
							<img loading="lazy" src="{{ asset('/images/cats/' .$cat->slug . '/main.jpg') }}" class="card-img cover-img" alt="{{ $cat->name }}">
						</div>
						<div class="card-body">
							<h1 class="h5 card-title mb-0">{{ $cat->name }}</h1>
						</div>
					</a>
				</article>
			@endforeach
		</div>
	</div>
</section>

<section class="section new-arrivals">
	<div class="container">
		<h1 class="section-heading">New Arrivals</h1>
		<div class="grid">
			@foreach($items as $item)
				<article class="card grid-item -num-{{ $loop->index % 5 + 1 }}">
					<a class="card-link" href="{{ route('list', [$item->cat->parent->slug, $item->cat->slug, $item->slug]) }}">
						<div class="cover-img-box">
							<img class="card-img cover-img" loading="lazy" src="{{ asset('/images/items/' . $item->slug . '/main.jpg') }}" alt="{{ $item->name }}">
						</div>
						<div class="card-body">
							<p class="mb-2"><small class="px-2 border border-danger text-danger">New</small></p>
							<p class="mb-1 text-black-50">{{ $item->cat->name }}</p>
							<h1 class="h4 card-title">{{ $item->name }}</h1>
							<p class="mb-0">
								Sales on <span class="font-weight-bold text-danger">{{ $item->release_date_month_date }}</span>
							</p>
						</div>
					</a>
				</article>
			@endforeach
		</div>
	</div>
</section>

@endsection

@section('script')
<script src="{{ asset('/js/hero_anime.js') }}"></script>
<script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('/js/swiper.js') }}"></script>
@endsection
