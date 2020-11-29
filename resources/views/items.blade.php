@extends('master')

@section('content')

<style>
	.grid {
		display: grid;
		grid-template-columns: repeat(1, 1fr);
		grid-template-rows: auto;
		grid-gap: 3rem;
	}

	@@media (min-width: 992px) {
		.grid {
			grid-template-columns: repeat(4, 1fr);
		}

		.grid h1 {
			grid-column: 1 / 3;
		}

		.main-image {
			width: 100%;
			height: auto;
			object-fit: contain;
		}

		/*


		.grid__inner--0 {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-template-rows: auto;
			grid-gap: 1.5rem;
		}

		.grid__inner--0 {
			grid-column: 1 / 3;
		}

		.grid__inner--0 .main-image {
			grid-column: 1 / 3;

		}

		.grid__inner--0 .body {
			grid-column: 3 / 4;
		} */
	}

</style>


<h1 class="display-4">Sub Category 1</h1>
<div class="grid">
	@for($j = 0; $j < 8; $j++)
		@php
			$random=rand(100, 500) * $j;
		@endphp
		<div class="grid__inner">
			<img class="main-image" src=" https://picsum.photos/id/{{ $random }}/500/250" alt="...">
			<div class="body">
				<h5 class="">Card title</h5>
				<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, aperiam.</p>
				<a href="{{ route('detail') }}" class="btn btn-sm btn-primary">See All</a>
			</div>
		</div>

	@endfor
</div>


@endsection
