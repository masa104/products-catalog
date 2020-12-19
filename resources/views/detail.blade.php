@extends('master')

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('/css/detail.min.css') }}">
@endsection

@section('content')

<section class="section item-summary">
	<div class="container">
		<div class="outline">
			<h2 class="h4 mb-1 text-black-50">{{ $item->cat->name }}</h2>
			<h1 class="item-summary-heading">
				{{ $item->name }}
				<span class="h3 d-md-inline d-block">{{ $item->model }}</span>
			</h1>

			<div class="grid">
				<p class="">{{ $item->desc }}</p>
				<div class="icons">
					@foreach($item->icons as $icon)
						<img loading="lazy" src="{{ asset('/images/icons/' . $icon->slug . '.jpg') }}" alt="{{ $icon->name }}" title="{{ $icon->name }}" width="64" height="64">
					@endforeach
				</div>
			</div>
		</div>

		<div class="cover-img-box hero-img">
			<picture>
				<source loading="lazy" media="(min-width: 768px)" srcset="{{ asset('/images/items/' .$item->slug . '/hero.jpg') }}" width="1200" height="630">
				<img loading="lazy" class="cover-img" src="{{ asset('/images/items/' .$item->slug . '/main.jpg') }}" alt="{{ $item->name }}" width="600" height="315">
			</picture>
		</div>
	</div>
</section>

<section class="section features scroll-trigger">
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
						<img loading="lazy" class="cover-img" src="{{ asset('/images/items/' . $item->slug . '/feature_' . $loop->iteration . '.jpg') }}" alt="{{ $feature->heading }}" width="600" height="400">
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
					<th class="w-25 border-top-0" scope="row">Color</th>
					<td class="border-top-0">{{ $item->color }}</td>
				</tr>
				<tr>
					<th class="w-25" scope="row">Width</th>
					<td>{{ $item->width }}mm</td>
				</tr>
				<tr>
					<th class="w-25" scope="row">Height</th>
					<td>{{ $item->height }}mm</td>
				</tr>
				<tr>
					<th class="w-25" scope="row">Depth</th>
					<td>{{ $item->depth }}mm</td>
				</tr>
				<tr>
					<th class="w-25" scope="row">Weight</th>
					<td>{{ $item->weight }}g</td>
				</tr>
				@foreach($item->specs as $spec)
					<tr>
						<th scope="row">{{ Str::ucfirst($spec->heading) }}</th>
						<td>{{ $spec->content }}</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<h1 class="section-heading">Share</h1>
		<div class="social-btns text-center">
			<ul>
				<li>
					<a class="btn btn-lg twitter" href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $item->name }}" rel="nofollow noopener noreferrer" target="_blank">
						<img loading="lazy" src="{{ asset('/images/twitter.svg') }}" alt="Twitter" width="32" height="32">
						<span>Twitter</span>
					</a>
				</li>
				<li>
					<a class="btn btn-lg facebook" href="https://www.facebook.com/share.php?u={{ request()->fullUrl() }}" rel="nofollow noopener noreferrer" target="_blank">
						<img loading="lazy" src="{{ asset('/images/facebook.svg') }}" alt="Facebook" width="32" height="32">
						<span>Facebook</span>
					</a>
				</li>
				<li>
					<a class="btn btn-lg pocket" href="https://getpocket.com/edit?url={{ request()->fullUrl() }}&title={{ $item->name }}" rel="nofollow noopener noreferrer" target="_blank">
						<img loading="lazy" src="{{ asset('/images/pocket.svg') }}" alt="Pocket" width="32" height="32">
						<span>Pocket</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>
@endsection

@section('script')
<script src="{{ asset('/js/detail_anime.js') }}"></script>
@endsection
