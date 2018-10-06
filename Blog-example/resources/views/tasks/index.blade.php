<html>
<head>
	<title></title>
</head>
<body>
	@foreach ($tasks as $task)
		<ul>
			<li> <a href='/task/{{$task->id}}'>{{$task->body}}</a></li>
		</ul>
	@endforeach
</body>
</html>