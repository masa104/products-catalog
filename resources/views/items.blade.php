@extends('master')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/items.min.css') }}">
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


<section class="section items">
	<div class="container">
		@if(Route::currentRouteName() === 'list')
			<h1 id="{{ $cat->slug }}" class="section-heading">{{ $cat->name }}</h1>
		@else
			<h1 class="section-heading">Search Results</h1>
		@endif

		@if(!$items->total())
			<p>Sorry, Not found.</p>
		@else
			<p>
				Displaying <span class="font-weight-bold text-primary">{{ $items->firstItem() }} - {{ $items->lastItem() }}</span> of <span class="font-weight-bold text-primary">{{ $items->total() }}</span> items.
			</p>
		@endif

		<div class="my-4">
			{{ $items->onEachSide(2)->links() }}
		</div>

		<div class="grid">
			@foreach($items as $item)
				<article class="card grid-item">
					<a class="card-link" href="{{ route('list', [$item->cat->parent->slug, $item->cat->slug, $item->slug]) }}">
						<div class="cover-img-box">
							<img loading="lazy" class="card-img cover-img" src="{{ asset('/images/items/' . $item->slug . '/main.jpg' ) }}" alt="{{ $item->name }}" width="600" height="315">
						</div>
						<div class="card-body">
							<h1 class="h4 card-title">{{ $item->name }}</h1>
							<p class="">{{ $item->desc }}</p>
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
@endsection
