<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<title>App Name - @yield('title')</title>


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />


    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

	@if ( Config::get('app.debug') )
	  <script type="text/javascript">
	    document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
	  </script>
	@endif

</head>
<body>
	<header>
		<div class="logo">
			Growing
		</div>
		<nav class="menu">
           <ul>
           	<li>Talleres</li>
           	<li>Quienes Somos</li>
           </ul>
		</nav>
	</header>

    <div class="container">
    	@yield("content")
    </div>

	<footer>
	</footer>
</body>
</html>