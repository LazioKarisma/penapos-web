<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="_token" content="{{csrf_token()}}" />

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}"> -->

    <!-- CSFR token for ajax call -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	
	<link href="{{ URL::asset('public/css/app.css') }}" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

	<title>{{ $title }}</title>
</head>
<body>
	 @yield('content')
</body>
</html>