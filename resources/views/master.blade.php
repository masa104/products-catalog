<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, noindex">
	<!-- Google Tag Manager -->
	<script async>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NTVPCDX');
	</script>
	<!-- End Google Tag Manager -->
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
		{{ config('app.base_title') }}
	</title>
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="{{ config('app.twitter_account') }}">
	<meta name="twitter:creator" content="{{ config('app.twitter_account') }}">
	<meta name="twitter:url" content="{{ request()->fullUrl() }}">
	<meta name="twitter:title" content="{{ $meta_title ?? config('app.base_title') }}">
	<meta name="twitter:description" content="{{ $meta_desc ?? config('app.description') }}">
	<meta name="twitter:image" content="{{ $meta_image }}">

	<!-- Facebook OGP -->
	<meta property="og:type" content="website">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:site_name" content="{{ config('app.site_name') }}">
	<meta property="og:url" content="{{ request()->fullUrl() }}">
	<meta property="og:title" content="{{ $meta_title ?? config('app.base_title') }}">
	<meta property="og:description" content="{{ $meta_desc ?? config('app.description') }}">
	<meta property="og:image" content="{{ $meta_image }}">

	<link href="{{ request()->fullUrl() }}" rel="canonical">
	<link href="{{ asset('/favicon.ico') }}" rel="shortcut icon">

	<link href="//cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/cosmo/bootstrap.min.css" rel="stylesheet">
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" /> --}}
	<link href="{{ asset('/css/style.min.css') }}" rel="stylesheet">

	@yield('stylesheet')
</head>

<body id="js-page-top">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTVPCDX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	@include('partials/header')

	<!-- Begin page content -->
	<main role="main" class="main">
		@yield('content')
	</main>
	<!-- End page content -->

	<!-- Fixed footer -->
	<footer class="footer bg-dark">
		<div class="container text-center">
			<span class="text-white">&copy; 2020<br>Masapochi All Rights Reserved</span>
			<div class="tac mt-3">
				<a class="mr-2" href="https://twitter.com/__masapochi__" target="_blank" rel="noopener noreferrer">
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
	</footer>

	<span id="gotop" href="#js-page-top">▲</span>

	<script defer src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script defer src="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

	@yield('script')

	<script async src="{{ asset('/js/gotop.js') }}"></script>
</body>

</html>
