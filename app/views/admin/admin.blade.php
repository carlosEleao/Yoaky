<!DOCTYPE HTML>
<html>
	<head>
		<title>Administration Area</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="description" content="">
		<meta name="keywords" content=""/>

		{{ HTML::style('lib/semantic/css/semantic.min.css') }}
		{{ HTML::style('css/admin/admin.css') }}
		@yield('stylesheet')

		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('lib/semantic/javascript/semantic.min.js') }}
		@yield('script')
	</head>

	<body id="admin">

		@section('header')
			<div class="ui small inverted menu">
			  <a class="active item" href="<?php echo URL::to('admin'); ?>">
			    <i class="home icon"></i> Home
			  </a>
			  <a class="item" href="<?php echo URL::to('adminProblem'); ?>">
			    <i class="browser icon"></i> Problems
			  </a>
			  <a class="item" href="<?php echo URL::to('adminUser'); ?>">
			    <i class="users icon"></i> Users
			  </a>
			  <div class="right menu">
			    <div class="item">
			        <div class="ui red button">Logout</div>
			    </div>
			  </div>
			</div>
		@show


		<div id="content">
			<div class="ui page grid overview segment">
				<div class="ui two wide column">
				</div>
				@yield('content')
				<div class="ui two wide column">
				</div>
			</div>
		</div>

		@section('footer')
			<footer>
				
			</footer>
		@show

	</body>
</html>