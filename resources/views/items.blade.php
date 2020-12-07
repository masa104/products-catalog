@extends('master')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/css/items.min.css') }}">
@endsection

@section('content')

@if(request()->route()->getName() !== 'search')
	<section class="section">
		<div class="container">
			<div class="cover-img-box">
				<img class="cover-img" loading="lazy" src="https://picsum.photos/id/{{ round(rand(100,600)) }}/1920/400" alt="" />
			</div>
		</div>
	</section>
@endif


<section class="section items">
	<div class="container">
		@if(request()->route()->getName() !== 'search')
			<h1 class="section-heading">{{ $cat->name }}</h1>
		@else
			<h1 class="section-heading">Search Results</h1>
			<p>We found {{ $items->count() }} items.</p>
		@endif
		<div class="my-4">
			{{ $items->onEachSide(2)->links() }}
		</div>
		<div class="grid">
			@foreach($items as $item)
				<article class="card grid-item">
					<a class="card-link" href="{{ route('list', [$item->cat->parent->slug, $item->cat->slug, $item->slug]) }}">
						<div class="cover-img-box">
							<img class="card-img cover-img" loading="lazy" src=" https://picsum.photos/id/{{ round(rand(1, 500)) }}/500/250" alt="{{ $item->name }}">
						</div>
						<div class="card-body">
							<h1 class="h4 card-title">{{ $item->name }}</h1>
							<p class="">{{ $item->desc }}</p>
						</div>
					</a>
				</article>
			@endforeach
		</div>
	</div>
</section>


@endsection
