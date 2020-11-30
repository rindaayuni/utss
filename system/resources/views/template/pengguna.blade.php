<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<title>Concept - Bootstrap 4 Admin Dashboard Template</title>

<header>
	<nav class="navbar navbar-inverse navbar-static-top" role="Navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Tugas Blog</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Home</a></li>
				
				<li><a href="{{url('logout')}}">Logout</a></li>
			</ul>
		</div>
	</nav>
</header>

@yield('profil')

@yield('content')

<footer class="navbar-inverse">
	<div class="container-fluid text-center">
		<p class="text-muted">© Informatika 2020.</p>
	</div>
</footer>