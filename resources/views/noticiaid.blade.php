	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar una noticia</title>
</head>
<body>
	<h1>
		{{ $news-> titule }}
	</h1>
	<hr>
	<p>
		 {{$news-> content }}
		<br>
		<hr>
		 {{$news-> date}}
	</p>
	<hr>
	{{$news -> source }}
	<p>
	</p>
	<hr>
{{$news -> category -> name}}
<hr>
<img src="{{asset('/' . $image->name_i)}}"
</body>
</html>

	
	