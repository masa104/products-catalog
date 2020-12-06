@extends('master')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/items.min.css') }}">
@endsection

@section('content')

<section class="section">
	<div class="container">
		<div class="cover-img-box">
			<img class="cover-img" src="https://picsum.photos/id/{{ rand(100,600) }}/1920/400" alt="" />
		</div>
	</div>
</section>


<section class="section items">
	<div class="container">
		<h1 class="section-heading">{{ $cat->name }}</h1>
		<div class="grid">
			@foreach($items as $item)
				<article class="card grid-item">
					<a class="card-link" href="{{ route('list', [$cat->parent->slug, $cat->slug, $item->slug]) }}">
						<div class="cover-img-box">
							<img class="card-img cover-img" src=" https://picsum.photos/id/{{ rand(100, 500) }}/500/250" alt="...">
						</div>
						<div class="card-body">
							<h1 class="h4 card-title">{{ $item->name }}</h1>
							<p class="">{{ $item->desc }}</p>
							<span class="btn btn-sm btn-primary">See Detail</span>
						</div>
					</a>
				</article>
			@endforeach
			@for($j = 0; $j < 8; $j++)
				@php
					$random=rand(100, 500) * $j;
				@endphp

			@endfor
		</div>
	</div>
</section>


@endsection
