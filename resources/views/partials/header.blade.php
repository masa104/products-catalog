<header class="">
	<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #222">
		<div class="container">
			<a class="navbar-brand" href="{{ config('app.url') }}">
				<!-- <img src="{{ asset('/images/logo.svg') }}" alt=""> -->
				<h1 class="h3 mb-0">
					<span>{{ config('app.name') }}</span><small>by Masapochi</small>
				</h1>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<form action="{{ route('search') }}" class="form-inline ml-auto mt-2 mt-md-0 mr-md-4">
					<input class="form-control mr-sm-2" type="search" name="keyword" value="{{ request()->get('keyword', '') }}" placeholder="Search Items..." aria-label="Search Items..." required>
					<button class="btn btn-outline-light font-weight-bold my-2 my-sm-0" type="submit">Search</button>
				</form>
				<div class="navbar-sns my-2 my-md-0">
					<a class="mr-1" href="https://twitter.com/__masapochi__" target="_blank" rel="noopener noreferrer">
						<img src="{{ asset('/images/sns/twitter_gray.svg') }}" alt="Twitter" width="32" height="32">
					</a>
					<a href="https://github.com/masapochi/products-catalog" target="_blank" rel="noopener noreferrer">
						<img src="{{ asset('/images/sns/github_gray.svg') }}" alt="Github" width="32" height="32">
					</a>
					<a href="{{ config('app.domain') }}" target="_blank" rel="noopener noreferrer">
						<img src="{{ asset('/images/sns/mail_gray.svg') }}" alt="Mail" width="32" height="32">
					</a>
				</div>
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
