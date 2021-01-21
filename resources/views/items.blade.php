@extends('master')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/pages/items.min.css') }}">
@endsection

@section('content')

@if(Route::currentRouteName() === 'list')
	<section class="section hero py-0">
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
@endif


<section class="section items scroll-trigger">
	<div class="container">
		@if(Route::currentRouteName() === 'list')
			<h1 id="{{ $cat->slug }}" class="section-heading">{{ $cat->name }}</h1>
		@else
			<h1 class="section-heading">Search Results</h1>
		@endif

		@if(!$items->total())
			<div class="text-center">
				<p>Sorry, Not found.</p>
				<p><a href="{{ route('home') }}" class="btn btn-primary">Back To Home</a></p>
			</div>
		@else
			@component('components.pagination', ['items' => $items])
			@endcomponent
		@endif

		<div class="grid mb-4">
			@foreach($items as $item)
				<article class="card grid-item">
					<a class="card-link" href="{{ route('list', [$item->cat->parent->slug, $item->cat->slug, $item->slug]) }}">
						<div class="cover-img-box">
							<img loading="lazy" class="card-img cover-img thumb-img"" src=" {{ asset('/images/items/' . $item->slug . '/main.jpg' ) }}" alt="{{ $item->name }}" width="600" height="315">
						</div>
						<div class="card-body">
							<h1 class="h4 card-title">{{ $item->name }}</h1>
							<p class="">{{ $item->desc }}</p>
						</div>
					</a>
				</article>
			@endforeach
		</div>

		@if($items->total() > 6)
			@component('components.pagination', ['items' => $items])
			@endcomponent
		@endif
	</div>
</section>


@endsection

@section('script')
<script src="{{ asset('/js/card_anime.js') }}"></script>
<script src="{{ asset('/js/hero_anime.js') }}"></script>
@endsection
