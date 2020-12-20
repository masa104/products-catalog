<!DOCTYPE html>
<html lang="ja">

<head>
	<!-- <meta name="robots" content="noindex, noindex" /> -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		@if(Route::currentRouteName() === 'search')
			{{ Breadcrumbs::view('partials.page_title', 'search', request()->keyword) }}
		@elseif(Route::currentRouteName() === 'list')
			@if(isset($cat))
				{{ Breadcrumbs::view('partials.page_title', 'hierarchy', $cat) }}
			@else
				{{ Breadcrumbs::view('partials.page_title', 'hierarchy', $item->cat, $item) }}
			@endif
		@endif
		{{ config('app.name') }}
	</title>
	<meta name="description" content="{{ $meta_desc ?? config('app.name') }}">
	<meta property="og:title" content="{{ $meta_title ?? config('app.name') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ request()->fullUrl() }}">
	<meta property="og:image" content="https://www.irisohyama.co.jp/common/images/fb.png">
	<meta property="og:site_name" content={{ config('app.name') }}>
	<meta property="og:description" content="{{ $meta_desc ?? config('app.name') }}">
	<meta property="og:locale" content="ja_JP">
	<meta property="fb:app_id" content="">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="{{ $meta_title ?? config('app.name') }}">
	<meta name="twitter:description" content="{{ $meta_desc ?? config('app.name') }}">
	<meta name="twitter:image" content="https://www.irisohyama.co.jp/common/images/fb.png">
	<meta name="twitter:url" content="{{ request()->fullUrl() }}">

	<link rel="canonical" href="{{ request()->fullUrl() }}">
	<link rel="apple-touch-icon" href="./icon.png">
	<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/cosmo/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="{{ asset('/css/style.min.css') }}">
	@yield('stylesheet')
</head>

<body id="js-page-top">

	@include('partials/header')

	<!-- Begin page content -->
	<main role="main" class="main">
		@yield('content')
	</main>
	<!-- End page content -->

	<!-- Fixed footer -->
	<footer class="footer bg-dark">
		<div class="container text-center">
			<span class="text-white">&copy; 2020 Created By M.K.</span>
		</div>
	</footer>

	<span id="gotop" href="#js-page-top">▲</span>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

	@yield('script')

	<script src="{{ asset('/js/gotop.js') }}"></script>
</body>

</html>
