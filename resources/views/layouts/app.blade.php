<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>ETM Sales Transactions</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{ url('/') }}">ETM's Electronic Invoice System</a>
		
			@if (Auth::check())
				<ul class="nav navbar-nav">
						<li><a href="{{ url('login') }}">Dashboard</a></li>
						<li><a href="{{ route('sales.index') }}">Sales Transactions</a></li>
				</ul>
			@endif

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ url('login') }}">Login</a></li>
					<li><a href="{{ url('register') }}">Register</a></li>
				@endif
				@if (Auth::check())
					<li><a href="{{ url('logout') }}">Logout</a></li>
				@endif
			</ul>
		</div>
	</nav>

	<div class="container">
		@yield('content')
	</div>

	<script src="/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>