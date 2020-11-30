@extends('master')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/detail.min.css') }}">
@endsection

@section('content')

<div class="pb-2">
	<div class="container">
		<div class="outline">
			<div>
				<p>Sub Category</p>
				<h1>Item Name</h1>
				<p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui deleniti molestias accusamus praesentium unde quo deserunt debitis laudantium, magni nulla?</p>
			</div>
			<div class="icons">
				@for($i = 0; $i < 5; $i++)
					<img src="https://picsum.photos/id/{{ rand(100,600) }}/64/64" alt="...">
				@endfor
			</div>
		</div>
	</div>
</div>

<div class="py-4">
	<div class="container">
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" data-interval="10000">
					<img src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" />
				</div>
				{{-- <div class="carousel-item" data-interval="2000">
					<img src="https://picsum.photos/id/{{ rand(100,600) }}/1200/630" alt="" />
			</div>
			<div class="carousel-item">
				<img src="https://picsum.photos/id/{{ rand(100,600) }}/1200/630" alt="" />
			</div> --}}
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

<div class="py-4">
	<div class="container">
		<h1>Features</h1>
		<div class="features">
			@for($i = 0; $i < 3; $i++)
				@php
					$num = ($i + 1) % 2 !== 0 ? 'odd' : 'even';
				@endphp
				<div class="feature -num-{{ $num }}">
					<div class="sentense">
						<h3>Lorem ipsum dolor sit.</h3>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, rem doloremque veniam aperiam asperiores necessitatibus doloribus ut autem nulla temporibus? Numquam illum consectetur ipsam beatae est accusantium soluta quas nihil eius facilis dolorem deleniti id, assumenda iusto pariatur distinctio reprehenderit vel impedit dolorum? Sint obcaecati error quasi, odit reiciendis similique unde asperiores dicta! Molestias corporis rerum aperiam laborum vel quasi.</p>
					</div>
					<div class="main-image">
						<img src="https://picsum.photos/id/{{ rand(100,600) }}/600/400" alt="...">
					</div>
				</div>
			@endfor
		</div>
	</div>
</div>

<div class="py-4">
	<div class="container">
		<h1>Specs</h1>
		<div class="optional-specs">
			<table class="table table-sm">
				<tr>
					<th>thead</th>
					<td>tbody</td>
				</tr>
				<tr>
					<th>thead</th>
					<td>tbody</td>
				</tr>
				<tr>
					<th>thead</th>
					<td>tbody</td>
				</tr>
				<tr>
					<th>thead</th>
					<td>tbody</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div class="py-4">
	<div class="container">
		<div class="social-btns">
			<ul>
				<li><button class="btn btn-sm btn-primary">Twitter</button></li>
				<li><button class="btn btn-sm btn-info">Instagram</button></li>
				<li><button class="btn btn-sm btn-success">Facebook</button></li>
			</ul>
		</div>
	</div>
</div>

@endsection
