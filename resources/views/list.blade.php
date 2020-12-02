@extends('master')


@section('stylesheet')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<link rel="stylesheet" href="{{ asset('/css/list.min.css') }}">
@endsection

@section('content')

<section class="section">
	<div class="container">
		<div class="swiper-container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide"><img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" /></div>
				<div class="swiper-slide"><img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" /></div>
				<div class="swiper-slide"><img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" /></div>
				...
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

		</div>
	</div>
</section>

<section class="section category-list">
	<div class="container">
		<h1 class="section-heading">Category 1</h1>
		<div class="grid">
			@for($j = 0; $j < 4; $j++)
				@php
					$random = rand(100, 500) * $j;
				@endphp
				<article class="card grid-item -num-{{ $j + 1 }}">
					<a class="card-link" href="{{ route('items') }}">
						<div class="cover-img-box">
							<img class="card-img cover-img" src=" https://picsum.photos/id/{{ $random }}/500/250" alt="...">
						</div>
						<div class="card-body">
							<h1 class="h4 card-title">Sub Category {{ $j + 1 }}</h1>
							<p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, aperiam.</p>
							<span class="btn btn-sm btn-primary">See All</span>
						</div>
					</a>
				</article>
			@endfor
		</div>
	</div>
</section>


@endsection

@section('script')
<script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
	var mySwiper = new Swiper('.swiper-container', {
		// Optional parameters
		loop: true,

		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

	})

</script>
@endsection
