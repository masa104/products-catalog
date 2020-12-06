@extends('master')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('/css/home.min.css') }}">
@endsection

@section('content')
<div class="section">
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
</div>

<section class="section home">
	<div class="container">
		<h1 class="section-heading">Search Items</h1>
		<div class="grid">
			@foreach($cats as $cat)
				<article class="card grid-item">
					<a class="card-link" href="{{ route('category', ['firstCat' => $cat->slug]) }}">
						<div class="cover-img-box">
							<img src="https://picsum.photos/id/{{ rand(1, 10) }}/500/250" class="card-img cover-img" alt="{{ $cat->name }}">
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
			@for($i = 0; $i < 10; $i++)
				<article class="card grid-item -num-{{ $i % 5 + 1 }}">
					<a class="card-link" href="{{ route('detail') }}">
						<div class="cover-img-box">
							<img class="card-img cover-img" src="https://picsum.photos/id/{{ rand(1, 100) * $i+ 1 }}/500/240" alt="...">
						</div>
						<div class="card-body">
							<p><small class="px-2 border border-danger text-danger">New</small></p>
							<p class="mb-1">Lorem ipsum dolor sit amet.</p>
							<h1 class="h4 card-title">Item {{ $i + 1 }}</h1>
							<p class="text-danger mb-0">Sales on 12/1</p>
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
<script src="{{ asset('/js/swiper.js') }}"></script>
@endsection
