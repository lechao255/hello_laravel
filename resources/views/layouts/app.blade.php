<!DOCTYPE html>
<html>
<head>
	<title>Myweb</title>
</head>
<body style="padding: 10px 50px 10px 50px;border-bottom:  1px solid #eeeeee">
	<!-- public header -->
	<div style="display: inline-block;">
		<a href="{{ route('myspace') }}">Myspace</a>
	</div>

	<div style="display: inline-block;margin-left: 20px;">
		<a href="{{ route('news') }}">News</a>
	</div>

	<div style="text-align: center;">
		@yield('content')
	</div>
	
	<!-- public footer -->
	<div style="padding:10px 50px 10px 50px;background-color: gray;">
		<p>contact me : 6429291</p>
	</div>
</body>
</html>