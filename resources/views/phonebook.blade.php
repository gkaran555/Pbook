<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<div id="app">
		<Myheader></Myheader>
		<div class="container">
			<router-view></router-view>
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>