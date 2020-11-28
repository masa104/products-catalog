@extends('master')

@section('content')
<h1 class="mt-5">Our Products</h1>

<p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
<style>
	.grid {
		display: grid;
		grid-template-columns: repeat(1, 1fr);
		grid-gap: 1.5rem;
	}

	@@media (min-width: 992px) {
		.grid {
			grid-template-columns: repeat(2, 1fr);
		}
	}

</style>
<div class="grid">
	@for($i = 0; $i < 6; $i++)
		<div class="card" style="">
			<div class="row no-gutters">
				<div class="col-4">
					<img src="https://picsum.photos/id/{{ rand(1, 10) * $i }}/300/300" class="card-img" alt="...">
				</div>
				<div class="col-8">
					<div class="card-body">
						<h5 class="card-title">
							<a href="{{ route('detail') }}">Card title</a>
						</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>


					</div>
				</div>
			</div>
		</div>
	@endfor
</div>


@endsection
