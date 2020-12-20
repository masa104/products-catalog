@extends('master')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/home.min.css') }}">
@endsection

@section('content')

<section class="section py-0">
	<div class="cover-img-box hero-img layered-hero">
		<picture>
			<source loading="lazy" media="(min-width: 768px)" srcset="{{ asset('/images/items/' . $items->random()->slug . '/hero.jpg') }}" width="1920" height="1080">
			<img loading="lazy" class="cover-img layered-image" src="{{ asset('/images/items/' . $items->random()->slug . '/main.jpg') }}" alt="{{ $items->random()->name }}" width="600" height="315">
		</picture>
		<div class="layered-text">
			<h1 class="layered-title">{{ config('app.name') }}</h1>
			<p class="layered-desc">This is "Products Catalog Demo" by using Lorem Ipsum.<br>You can find products from category list or by keywords.</p>
			<a href="#find-items" class="layered-button btn btn-lg btn-dark">Find !</a>
		</div>
	</div>
</section>


<section class="section home scroll-trigger">
	<div class="container">
		<h1 id="find-items" class="section-heading">Find Items</h1>
		<div class="grid">
			@foreach($cats as $cat)
				<article class="card grid-item">
					<a class="card-link" href="{{ route('list', [$cat->slug]) }}">
						<div class="cover-img-box">
							<img loading="lazy" class="card-img cover-img thumb-img" src="{{ asset('/images/cats/' .$cat->slug . '/main.jpg') }}" alt="{{ $cat->name }}" width="600" height="315">
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

<section class="section new-arrivals scroll-trigger">
	<div class="container">
		<h1 class="section-heading">Pickups</h1>
		<div class="grid">
			@foreach($items as $item)
				<article class="card grid-item -num-{{ $loop->index % 5 + 1 }}">
					<a class="card-link" href="{{ route('list', [$item->cat->parent->slug, $item->cat->slug, $item->slug]) }}">
						<div class="cover-img-box">
							<img loading="lazy" class="card-img cover-img thumb-img" src="{{ asset('/images/items/' . $item->slug . '/main.jpg') }}" alt="{{ $item->name }}" width="600" height="315">
						</div>
						<div class="card-body">
							@if($loop->iteration <= 5 )
								<p class="mb-2"><small class="px-2 py-1 bg-danger text-white font-weight-bold">New</small></p>
							@endif
							<p class="mb-1 text-black-50">{{ $item->cat->name }}</p>
							<h1 class="h4 card-title">{{ $item->name }}</h1>
							<p class="mb-0">
								Sales on <span class="text-danger">{{ $item->release_date_month_date }}</span>
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
<script src="{{ asset('/js/card_anime.js') }}"></script>
<script src="{{ asset('/js/hero_anime.js') }}"></script>
@endsection
