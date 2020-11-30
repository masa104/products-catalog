@extends('master')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/items.min.css') }}">
@endsection

@section('content')

<div class="pb-4">
	<div class="container">
		<h2 class="">Sub Category 1</h2>
		<div class="grid">
			@for($j = 0; $j < 8; $j++)
				@php
					$random=rand(100, 500) * $j;
				@endphp
				<div class="grid__inner bg-white">
					<div class="main-image">
						<img src=" https://picsum.photos/id/{{ $random }}/500/250" alt="...">
					</div>
					<div class="card-body">
						<h3 class="">Card title</h3>
						<p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						<a href="{{ route('detail') }}" class="btn btn-sm btn-primary">See Detail</a>
					</div>
				</div>
			@endfor
		</div>
	</div>
</div>


@endsection
