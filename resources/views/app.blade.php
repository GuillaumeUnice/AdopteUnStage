<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adopte un stage</title>

	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
  <div class="header">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand" href="#">AdoptUnStage</a> -->
				<a class="navbar-brand" height="10"  weight ="10" href="#"><img src="{{ asset('/uploads/app/images/head.png') }}"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	</div>
		
	@if (Auth::guest())
	@else
	{{--<div class="wmenu">
		<dl>
			<dt class="user"><a href="#">Informations</a></dt>
			<dd><a href="">Profil</a></dd>
			<dd><a href="">Modifier</a></dd>
		</dl>
		<dl>
			<dt class="edit"><a href="#">Postuler un stage</a></dt>
			<dd><a href="">Télecharger un CV</a></dd>
		</dl>
	</div>--}}
	    @yield('menu')
	@endif
	
	@yield('content')

	<div class="footer">
		<div class="panel-footer">
			<p class="text-center small ">
				I - Adopte Un Stage
			</p>
			<p class="text-center small ">
				Projet Innovation -Polytech Nice Sophia
			</p>

		</div>
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
