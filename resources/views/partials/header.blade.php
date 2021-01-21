<header class="">
	<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #222">
		<div class="container">
			<a class="navbar-brand" href="/">
				<!-- <img src="{{ asset('/images/logo.svg') }}" alt=""> -->
				<h1 class="h3 mb-0">
					<span>Products Catalog</span><small>by Masapochi</small>
				</h1>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<form action="{{ route('search') }}" class="form-inline ml-auto mt-2 mt-md-0">
					<input class="form-control mr-sm-2" type="search" name="keyword" value="{{ request()->get('keyword', '') }}" placeholder="Search Items..." aria-label="Search Items..." required>
					<button class="btn btn-outline-light font-weight-bold my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>
	@if(Route::currentRouteName() === 'search')
	{{ Breadcrumbs::view('partials.breadcrumbs', 'search', request()->keyword) }}
	@elseif(Route::currentRouteName() === 'list')
	@if(isset($cat))
	{{ Breadcrumbs::view('partials.breadcrumbs', 'hierarchy', $cat) }}
	@else
	{{ Breadcrumbs::view('partials.breadcrumbs', 'hierarchy', $item->cat, $item) }}
	@endif
	@endif
</header>
