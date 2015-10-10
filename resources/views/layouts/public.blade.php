<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<title>App Name - @yield('title')</title>

    {!! Html::style("css/app.css",array(), true) !!}
    {!! Html::style("css/app.css") !!}


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

		</div>
		<nav class="menu">
           <ul>
           	<li><a href="#">Talleres</a></li>
           	<li><a href="#">Acerca de</a></li>
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