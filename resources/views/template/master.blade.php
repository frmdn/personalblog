<!DOCTYPE html>
<html>
<head>
	<title>Gus Yasin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

	<nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
		<div class="container">
			<a class="navbar-brand" href="/">Taj Maimoen Yasin</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="latest">Latest</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="policy">Policy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact">Contact</a>
					</li>
				</ul>
				@if (Auth::check())
				<a class="nav-link ml-auto" href="/logout">{{ Auth::user()->name }}</a>
				@endif
			</div>
		</div>
	</nav>

	@yield('content')

	<footer class="footer">
		<div class="container text-center">
			<p>Gus Yasin &copy; 2018</p>
			<a href="#">Privacy Policy</a>
			<a href="#">Terms</a>
		</div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>