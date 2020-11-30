@extends('master')


@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/list.min.css') }}">
@endsection

@section('content')

<div class="pb-4">
	<div class="container">
		<div class="jumbotron bg-primary">
			<h1 class="display-4">Hello, world!</h1>
			<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
		</div>
	</div>
</div>

<div class="py-4 container">
	<h1 class="">Category 1</h1>
	<div class="grid">
		@for($j = 0; $j < 4; $j++)
			@php
				$random = rand(100, 500) * $j;
			@endphp
			<div class="grid__inner grid__inner--{{ $j }} bg-white">

				<div class="main-image">
					<img src=" https://picsum.photos/id/{{ $random }}/500/250" alt="...">
				</div>
				<div class="card-body body">
					<h3 class="">Sub Category {{ $j + 1 }}</h3>
					<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, aperiam.</p>
					<a href="{{ route('items') }}" class="btn btn-sm btn-primary">See All</a>
				</div>
			</div>

		@endfor
	</div>
</div>


@endsection
