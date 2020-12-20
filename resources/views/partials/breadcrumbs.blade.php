@if(count($breadcrumbs))
	<div class="bg-secondary">
		<div class="container p-0">
			<nav class="breadcrumbs" aria-label="breadcrumb">
				<ol class="breadcrumb bg-secondary">
					@foreach($breadcrumbs as $breadcrumb)
						@if($breadcrumb->url && !$loop->last)
							<li class="breadcrumb-item">
								<a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
							</li>
						@else
							<li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->title }}</li>
						@endif
					@endforeach
				</ol>
			</nav>
		</div>
	</div>
@endif
