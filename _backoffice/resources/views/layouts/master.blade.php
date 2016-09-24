<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<title>v0.1 - Backoffice</title>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ route('home') }}">Backoffice</a>
			</div>
			<div class="nav navbar-nav navbar-right">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li><a href="{{ route('categorias.index') }}">Categorías</a></li>
			</div>
		</div>
	</nav>

	<main>
		<div class="container">
			@yield('content')
		</div>
	</main>
</body>
</html>