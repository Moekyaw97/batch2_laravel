<!DOCTYPE html>
<html>
<head>
	<title>Backend @yield('title')</title>
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="{{ asset('js/app.js') }}" defer></script>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('icofont/icofont.min.css') }}">

</head>
<body>
	<div class="container">

	@yield('content')

</div>
<script type="text/javascript" src="{{asset('frontend_template/vendor/jquery/jquery.min.js')}}"></script>
@yield('script')
</body>
</html>