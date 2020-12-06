@extends('master')

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('/css/detail.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endsection

@section('content')

<section class="section item-summary">
	<div class="container">
		<div class="outline">
			<h2 class="h4 mb-1 text-black-50">{{ $item->cat->name }}</h2>
			<h1 class="item-summary-heading">{{ $item->name }} <span class="h3">{{ $item->model }}</span></h1>
			<div class="grid">
				<p class="">{{ $item->desc }}</p>
				<div class="icons">
					@for($i = 0; $i < 5; $i++)
						<img src="https://picsum.photos/id/{{ round(rand(100,600)) }}/64/64" alt="...">
					@endfor
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="swiper-container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide"><img src="https://picsum.photos/id/{{ round(rand(100,600)) }}/1920/400" alt="" /></div>
				<div class="swiper-slide"><img src="https://picsum.photos/id/{{ round(rand(100,600)) }}/1920/400" alt="" /></div>
				<div class="swiper-slide"><img src="https://picsum.photos/id/{{ round(rand(100,600)) }}/1920/400" alt="" /></div>
			</div>

			<div class="swiper-pagination"></div>

			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

		</div>

	</div>
</section>

<section class="section features">
	<div class="container">
		<h1 class="section-heading">Features</h1>
		<div class="grid">
			@foreach($item->features as $feature)
				@php
					$num = ($loop->index + 1) % 2 !== 0 ? 'odd' : 'even';
				@endphp
				<article class="feature -num-{{ $num }}">
					<div class="sentence">
						<h1 class="feature-heading h2">{{ $feature->heading }}</h1>
						<p>{{ $feature->content }}</p>
					</div>
					<div class="cover-img-box">
						<img class="cover-img" src="https://picsum.photos/id/{{ round(rand(1,600)) }}/600/400" alt="{{ $feature->heading }}">
					</div>
				</article>
			@endforeach
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<h1 class="section-heading">Specs</h1>
		<div class="specs table-responsive">
			<table class="table">
				<tr>
					<th class="table-secondary" scope="row">Color</th>
					<td class="table-light">{{ $item->color }}</td>
				</tr>
				<tr>
					<th class="table-secondary" scope="row">Width</th>
					<td class="table-light">{{ $item->width }}mm</td>
				</tr>
				<tr>
					<th class="table-secondary" scope="row">Height</th>
					<td class="table-light">{{ $item->height }}mm</td>
				</tr>
				<tr>
					<th class="table-secondary" scope="row">Depth</th>
					<td class="table-light">{{ $item->depth }}mm</td>
				</tr>
				<tr>
					<th class="table-secondary" scope="row">Weight</th>
					<td class="table-light">{{ $item->weight }}g</td>
				</tr>
			</table>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<h1 class="section-heading">Share</h1>
		<div class="social-btns text-center">
			<a class="btn btn-lg twitter" href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $item->name }}" rel="nofollow" target="_blank">
				<img src="{{ asset('/images/twitter.svg') }}" alt="Twitter"> Twitter
			</a>
			<a class="btn btn-lg facebook" href="https://www.facebook.com/share.php?u={{ request()->fullUrl() }}" rel="nofollow" target="_blank">
				<img src="{{ asset('/images/facebook.svg') }}" alt="Facebook"> Facebook
			</a>
			<a class="btn btn-lg pocket" href="https://getpocket.com/edit?url={{ request()->fullUrl() }}&title={{ $item->name }}" rel="nofollow" rel="nofollow" target="_blank">
				<img src="{{ asset('/images/pocket.svg') }}" alt="Pocket"> Pocket
			</a>
		</div>
	</div>
</section>


@endsection

@section('script')
<script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('/js/swiper.js') }}"></script>
@endsection
