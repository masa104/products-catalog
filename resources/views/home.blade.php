@extends('master')

@section('content')


<div class="mb-5">
	<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active" data-interval="10000">
				<img src="https://picsum.photos/id/{{ rand(100,600) }}/1200/400" alt="" />
			</div>
			<div class="carousel-item" data-interval="2000">
				<img src="https://picsum.photos/id/{{ rand(100,600) }}/1200/400" alt="" />
			</div>
			<div class="carousel-item">
				<img src="https://picsum.photos/id/{{ rand(100,600) }}/1200/400" alt="" />
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

<h1>商品を探す</h1>

<div class="cat-grid">
	@for($i = 0; $i < 10; $i++)
		<div class="card">
			<span data-toggle="modal" data-target="#staticBackdrop{{ $i }}">
				<img src="https://picsum.photos/id/{{ rand(1, 10) * $i }}/500/250" class="card-img" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
				</div>
			</span>
		</div>
	@endfor
	<div class="bg-dark text-white"><a href="">商品カテゴリ一覧</a></div>
</div>


<style>
	.grid,
	.cat-grid {
		display: grid;
		grid-gap: 1rem;
	}

	.grid {
		grid-template-columns: repeat(1, 1fr);

	}

	.cat-grid {
		grid-template-columns: repeat(4, 1fr);
	}

	@@media (min-width: 992px) {
		.grid {
			grid-template-columns: repeat(3, 1fr);
			grid-auto-rows: 320px;
		}
	}

	.grid__inner .image {
		overflow: hidden;
	}

	.grid__inner--1 {
		grid-column: 1 / 3;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
	}

	.grid__inner--1 .image {
		grid-column: 1 / 2;
	}

	.grid__inner .image img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

</style>
{{-- <div class="tab-content bg-light" id="informationTabContent">
	<div class="tab-pane fade show active p-3" id="pickup" role="tabpanel" aria-labelledby="pickup-tab">
		<div class="grid">
@for($i = 0; $i < 10; $i++) <a href="{{ route('detail') }}" class="grid__inner grid__inner--{{ $i % 5 + 1 }} bg-white">
				<div class="image">
					<img class="" src="https://picsum.photos/id/{{ rand(1, 100) * $i+ 1 }}/585/365" alt="...">
</div>
<div class="card-body">
	<p>Lorem ipsum dolor sit amet.</p>
	<h1 class="">Card title</h1>
</div>
</a>
@endfor
</div>
</div>
<div class="tab-pane fade p-3" id="category" role="tabpanel" aria-labelledby="category-tab">

</div>

</div> --}}



<div class="modal fade" id="staticBackdrop0" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				Category 1
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="cat-grid">
					@for($i = 0; $i < 6; $i++) <div class="card">
						<a href="{{ route('list') }}">
							<img src="https://picsum.photos/id/{{ rand(1, 10) * $i }}/500/250" class="card-img" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
							</div>
						</a>
				</div>
				@endfor
			</div>
		</div>
	</div>
</div>

@endsection
