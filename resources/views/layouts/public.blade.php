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
		<div id="logo" class="logo">

		</div>

        <div id="toggle-menu">Menú</div>
	    <nav>
	       <ul class="menu">
	       	<li><a href="#">Talleres</a></li>
	       	<li><a href="#">Entrevistas</a></li>
	       	<li><a href="#">Quiénes Somos</a></li>
	       </ul>
	    </nav>

	</header>



    <div class="container">
    	@yield("content")
    </div>

	<footer>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    {!! HTML::script('js/menu.js') !!}
    {!! Html::script('js/menu.js',array(), true) !!}

    {!! HTML::script('js/app.js') !!}
    {!! Html::script('js/app.js',array(), true) !!}

</body>
</html>