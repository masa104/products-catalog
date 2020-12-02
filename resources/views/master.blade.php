<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>商品情報デモ</title>

	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<link rel="apple-touch-icon" href="./icon.png">
	<link rel="shortcut icon" href="./favicon.ico">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/cosmo/bootstrap.min.css">
	{{-- <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="{{ asset('/css/style.min.css') }}">
	@yield('stylesheet')
</head>

<body class="d-flex flex-column h-100">

	@include('partials/header')

	<!-- Begin page content -->
	<main role="main" class="flex-shrink-0" style="margin-bottom: 7rem;">


		@yield('content')

	</main>
	<!-- End page content -->

	<!-- Fixed footer -->
	<footer class="footer py-3 bg-dark">
		<div class="container text-center">
			<span class="text-white">Created By Masatoshi Kokaji &copy; 2020</span>
		</div>
	</footer>
	<a id="gotop" href="#">▲</a>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>


	@yield('script')
	<script>
		$(document).ready(function () {

		});

	</script>
	<script src="{{ asset('/js/gotop.js') }}"></script>
</body>

</html>
