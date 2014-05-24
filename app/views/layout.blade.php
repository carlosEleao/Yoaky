<!DOCTYPE HTML>
<html>
	<head>
		<title>Changing the world with ideas - Yoaky</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-16374407-6', 'yoaky.com');
		  ga('send', 'pageview');
		</script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="index loading">
		@section('header')
            <header id="header">
                <h1 id="logo"><a href="/">Yoaky <span>Changing the world with ideas</span></a></h1>
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="index.html">Home</a></li>
                        <li class="submenu">
                            <a href="">Problems</a>
                            <ul>
                                <li>{{ HTML::link('/problem', 'Problems')}} </li>
                                <!-- <li><a href="">Local problems</a></li> -->
                                <li><a href="">Submit a problem</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="button special">Sign Up</a></li>
                    </ul>
                </nav>
            </header>
        @show

		@yield('content')

		@section('footer')
             <footer id="footer">
            
                <ul class="icons">
                    <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
                    <li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
                </ul>
                
                <span class="copyright">&copy; Yoaky. All rights reserved.</a>.</span>
            
            </footer>
        @show
	</body>
</html>
