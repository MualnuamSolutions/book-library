<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{{get_setting('site_title')}}</title>
	<!--ICONS-->
	<link type="text/css" href="{{ asset('templates/libero/icons/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
	<!--CUSTOM CSS-->
	<link media="screen, print" type="text/css" href="{{ asset('templates/libero/css/print.css') }}" rel="stylesheet" />
</head>
<body>
@yield('content')
</body>
</html>