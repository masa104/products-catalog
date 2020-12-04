@extends('master')

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('/css/detail.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endsection

@section('content')

<section class="section item-summary">
	<div class="container">
		<div class="outline">
			<h2 class="h4 mb-1 text-black-50">Sub Category</h2>
			<h1 class="display-4">Item Name</h1>
			<div class="grid">
				<p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui deleniti molestias accusamus praesentium unde quo deserunt debitis laudantium, magni nulla?</p>
				<div class="icons">
					@for($i = 0; $i < 5; $i++)
						<img src="https://picsum.photos/id/{{ rand(100,600) }}/64/64" alt="...">
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
				<div class="swiper-slide"><img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" /></div>
				<div class="swiper-slide"><img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" /></div>
				<div class="swiper-slide"><img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" /></div>
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
			@for($i = 0; $i < 3; $i++)
				@php
					$num = ($i + 1) % 2 !== 0 ? 'odd' : 'even';
				@endphp
				<article class="feature -num-{{ $num }}">
					<div class="sentense">
						<h1 class="h2">Lorem ipsum dolor sit.</h1>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, rem doloremque veniam aperiam asperiores necessitatibus doloribus ut autem nulla temporibus? Numquam illum consectetur ipsam beatae est accusantium soluta quas nihil eius facilis dolorem deleniti id, assumenda iusto pariatur distinctio reprehenderit vel impedit dolorum? Sint obcaecati error quasi, odit reiciendis similique unde asperiores dicta! Molestias corporis rerum aperiam laborum vel quasi.</p>
					</div>
					<div class="cover-img-box">
						<img class="cover-img" src="https://picsum.photos/id/{{ rand(100,600) }}/600/400" alt="...">
					</div>
				</article>
			@endfor
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<h1 class="section-heading">Specs</h1>
		<div class="specs table-responsive">
			<table class="table">
				@for($i = 0; $i < 7; $i++)
					<tr>
						<th class="table-secondary" scope="row">Lorem</th>
						<td class="table-light">
							Lorem ipsum dolor sit.
						</td>
						<th class="table-secondary" scope="row">Lorem</th>
						<td class="table-light">
							Lorem ipsum dolor sit amet consectetur.
						</td>
					</tr>
				@endfor
			</table>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<h1 class="section-heading">Share</h1>
		<div class="social-btns text-center">
			<a class="btn btn-lg twitter" href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text=[PAGE_TITLE]" rel="nofollow" target="_blank">
				<img src="{{ asset('/images/twitter.svg') }}" alt="Twitter"> Twitter
			</a>
			<a class="btn btn-lg facebook" href="https://www.facebook.com/share.php?u={{ request()->fullUrl() }}" rel="nofollow" target="_blank">
				<img src="{{ asset('/images/facebook.svg') }}" alt="Facebook"> Facebook
			</a>
			<a class="btn btn-lg pocket" href="https://getpocket.com/edit?url={{ request()->fullUrl() }}&title={ページのタイトル}" rel="nofollow" rel="nofollow" target="_blank">
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
