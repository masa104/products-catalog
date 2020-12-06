@extends('master')


@section('stylesheet')
{{-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<link rel="stylesheet" href="{{ asset('/css/list.min.css') }}"> --}}
@endsection

@section('content')
<style>
	ul,
	li {
		list-style: none;
	}

</style>
<ul>
	@foreach($cats as $cat)
		<li>{{ $cat->name }}(id: {{ $cat->id }}, parent: {{ $cat->parent }})</li>
		@if($cat->children->count())
			<li>
				<ul>
					@foreach($cat->children as $child)
						<li>　{{ $child->name }}(id: {{ $child->id }}, parent: {{ $child->parent }})</li>
						@if($child->children->count())
							<li>
								<ul>
									@foreach($child->children as $grandChild)
										<li>　　{{ $grandChild->name }}(id: {{ $grandChild->id }}, parent: {{ $grandChild->parent }})</li>
									@endforeach
								</ul>
							</li>
						@endif
					@endforeach
				</ul>
			</li>
		@endif

	@endforeach
</ul>
@endsection
