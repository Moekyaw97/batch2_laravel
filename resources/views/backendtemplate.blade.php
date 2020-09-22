<!DOCTYPE html>
<html>
<head>
	<title>Backend @yield('title')</title>
	

	<script src="{{ asset('js/app.js') }}" defer></script>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('icofont/icofont.min.css') }}">

</head>
<body>
	<div class="container">

	@yield('content')
</div>
</body>
</html>