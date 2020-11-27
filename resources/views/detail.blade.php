@extends('master')

@section('content')


<h1 class="mt-5"></h1>

<style>
	/* .hero {
		display: grid;
		grid-template-columns: 1fr 2fr;
		align-items: center;
		border: 1px solid #eee;
  } */

</style>


<div class="hero">
	<h1 class="display-4">Card Title</h1>
	<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
	{{-- <img src="https://picsum.photos/id/{{ rand(100,600) }}/500/250" class="card-img" alt="..."> --}}
</div>


<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active" data-interval="10000">
			<img src="https://picsum.photos/id/{{ rand(100,600) }}/1200/630" alt="" />
		</div>
		<div class="carousel-item" data-interval="2000">
			<img src="https://picsum.photos/id/{{ rand(100,600) }}/1200/630" alt="" />
		</div>
		<div class="carousel-item">
			<img src="https://picsum.photos/id/{{ rand(100,600) }}/1200/630" alt="" />
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



<style>
	.specs {
		display: grid;
		grid-template-columns: 1fr 3fr;
		align-items: start;
		grid-gap: 1.5rem;
	}

	.specs img {
		width: 100%;
		height: auto;
		object-fit: contain;
	}

	.icons img {
		width: 64px;
		height: 64px;
	}

</style>

<div class="specs">
	<div>
		<a class="grouped_elements" rel="group1" href="https://picsum.photos/id/{{ rand(100,600) }}/250/250">
			<img src="https://picsum.photos/id/{{ rand(100,600) }}/250/250" alt="" />
		</a>
	</div>
	<div class="p-3">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi eius facere reprehenderit possimus accusamus assumenda consequatur aspernatur amet iste sit beatae corrupti doloribus, praesentium sint dolore, ullam consequuntur deleniti voluptate minus non libero ad unde. Suscipit distinctio impedit minima sit.</p>
		<div class="icons">
			@for($i = 0; $i < 5; $i++)
				<img src="https://picsum.photos/id/{{ rand(100,600) }}/64/64" alt="...">
			@endfor
		</div>
	</div>

</div>
<style>
	.features {
		display: grid;
		grid-template-columns: 1fr;
		grid-gap: 1.5rem;
	}

	.feature {
		display: grid;
		grid-template-columns: 2fr 1fr;
		align-items: start;
		grid-gap: 1.5rem;


	}

	.feature img {
		width: 100%;
		height: auto;
		object-fit: contain;
	}

</style>
<div class="features">
	@for($i = 0; $i < 3; $i++)
		<div class="feature">
			<div>
				<h1>Lorem ipsum dolor sit.</h1>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet natus reiciendis corporis possimus officia quo voluptatem similique. Explicabo, eum reiciendis!</p>
			</div>
			<img src="https://picsum.photos/id/{{ rand(100,600) }}/700/350" alt="...">
		</div>
	@endfor
</div>

<div class="optional-specs">
	<table class="table table-sm">
		<thead>
			<tr>
				<th>thead</th>
				<th>thead</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>tbody</td>
				<td>tbody</td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>thead</th>
				<th>thead</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>tbody</td>
				<td>tbody</td>
			</tr>
		</tbody>
	</table>
	<table class="table table-sm">
		<thead>
			<tr>
				<th>optional-thead1</th>
				<th>optional-thead2</th>
				<th>optional-thead3</th>
				<th>optional-thead4</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>optional-tbody1</td>
				<td>optional-tbody2</td>
				<td>optional-tbody3</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="social-btns">
	<ul>
		<li><a href="" class="btn btn-sm btn-primary">Twitter</a></li>
		<li><a href="" class="btn btn-sm btn-primary">Instagram</a></li>
		<li><a href="" class="btn btn-sm btn-primary">Facebook</a></li>
	</ul>
</div>

@endsection
