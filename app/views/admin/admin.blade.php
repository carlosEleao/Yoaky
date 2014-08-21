<!DOCTYPE HTML>
<html>
	<head>
		<title>Administration Area</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="description" content="">
		<meta name="keywords" content=""/>

 		<link href='http://fonts.googleapis.com/css?family=SourceSansPro:400,700|OpenSans:300italic,400,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="{{{URL::to('lib/semantic/css/semantic.min.css')}}}"/>
		<link rel="stylesheet" type="text/css" href="{{{URL::to('css/admin/admin.css')}}}"/>
		@yield('stylesheet')

		<script src="{{{URL::to('js/jquery.min.js')}}}"></script> 
		<script src="{{{URL::to('lib/semantic/javascript/semantic.min.js')}}}"></script>
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
			<div class="ui column grid">
			    <div class="two wide column">
			    </div>
				@yield('content')
				<div class="two wide column">
			    </div>
			</div>
		</div>

		@section('footer')
			<footer>
				
			</footer>
		@show

	</body>
</html>