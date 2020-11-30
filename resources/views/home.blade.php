@extends('master')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/home.min.css') }}">
@endsection

@section('content')
<div class="pb-5">
	<div class="container">
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" data-interval="10000">
					<img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" />
				</div>
				<div class="carousel-item" data-interval="2000">
					<img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" />
				</div>
				<div class="carousel-item">
					<img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" />
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>

<div class="py-5" style="background-color: #dcdcdc;">
	<div class="container">
		<h1>Find Items</h1>
		<div class="cat-grid">
			@for($i = 0; $i < 8; $i++)
				<div class="card border-0">
					<a href="{{ route('list') }}">
						<img src="https://picsum.photos/id/{{ rand(1, 10) * $i }}/500/250" class="card-img" alt="...">
						<div class="card-body">
							<h5 class="card-title">Category {{ $i + 1 }}</h5>
						</div>
					</a>
				</div>
			@endfor
		</div>
	</div>
</div>

<div class="py-5">
	<div class="container">
		<h1>New Arrivals</h1>
		<div class="grid">
			@for($i = 0; $i < 10; $i++) <a href="{{ route('detail') }}" class="grid__inner grid__inner--{{ $i % 5 + 1 }} bg-white">
				<div class="main-image">
					<img class="" src="https://picsum.photos/id/{{ rand(1, 100) * $i+ 1 }}/585/365" alt="...">
				</div>
				<div class="card-body">
					<p>Lorem ipsum dolor sit amet.</p>
					<h1 class="">Item {{ $i + 1 }}</h1>
				</div>
				</a>
			@endfor
		</div>
	</div>
</div>

@endsection
