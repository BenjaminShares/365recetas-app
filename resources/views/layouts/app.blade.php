<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>365recetas App</title>

		<!-- css -->
		<link href="https://fonts.googleapis.com/css?family=Italiana" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/app.css">
	</head>
	<body>
			
			<!-- header -->
			<div id="site-header">
				@include('partials.header')
			</div>

			<!-- main -->
			<div id="site-main">
				@yield('content')
			</div>

			<!-- footer -->
			<div id="site-footer">
				@include('partials.footer')
			</div>

			<!-- JS -->
			<script src="js/app.js"></script>

	</body>
</html>