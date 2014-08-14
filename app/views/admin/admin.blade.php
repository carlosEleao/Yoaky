<!DOCTYPE HTML>
<html>
	<head>
		<title>Administration Area</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="description" content="">
		<meta name="keywords" content=""/>

 		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="{{{URL::to('lib/semantic/css/semantic.min.css')}}}"/>
		<link rel="stylesheet" type="text/css" href="{{{URL::to('css/admin/admin.css')}}}"/>

		<script src="js/jquery.min.js"></script> 
	</head>

	<body id="admin">

		@section('header')
			<header id="header">
				  <h1>Yoaky</h1>
			</header>
		@show


		<div id="content">
			@yield('content')
		</div>

		@section('footer')
			<footer>
				
			</footer>
		@show

	</body>
</html>