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
				<div class="twelve wide column">
					<div class="ui message" style="display: none;">
						<i class="close icon"></i>
						<div class="header"></div>
						<p></p>
					</div>
					@yield('content')
				</div>
				<div class="ui two wide column">
				</div>
			</div>
		</div>

		@section('footer')
			<footer>
				
			</footer>
		@show

		<script type="text/javascript">
			var _baseUrl = '{{URL::to("/")}}';
		</script>
		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('lib/semantic/javascript/semantic.min.js') }}
		{{ HTML::script('js/admin/common.js')}}
		@yield('script')

	</body>
</html>