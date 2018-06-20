<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Journal</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="/css/open-iconic-bootstrap.css" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	@if (request()->is('login') || request()->is('register'))
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
	@else
	<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
	@endif

</head>
<body>
	@if (Auth::check())
		@include ('layouts.header')

		<div class="container-fluid">
			<div class="row">
				@include ('layouts.sidebar')

				@yield ('content')
			</div>
		</div>
	@else
		@yield('authentication')
	@endif

	<!-- Bootstrap 4 Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
