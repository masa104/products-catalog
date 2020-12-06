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
		<h1 class="section-heading">{{ $cat->name }}</h1>
		<div class="grid">
			@foreach($children as $child)
				<article class="card grid-item -num-{{ $loop->index + 1 }}">
					<a class="card-link" href="{{ route('list', [$cat->slug, $child->slug]) }}">
						<div class="cover-img-box">
							<img class="card-img cover-img" src=" https://picsum.photos/id/{{ rand(10, 50) * ($child->id) }}/500/250" alt="...">
						</div>
						<div class="card-body">
							<h1 class="h4 card-title">{{ $child->name }}</h1>
							<p class="">{{ $child->desc }}</p>
							<span class="btn btn-sm btn-primary">See All</span>
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
