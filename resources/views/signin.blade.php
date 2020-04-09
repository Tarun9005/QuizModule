<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Signin</h1>

<form method="POST" action="/login">
	{{csrf_field()}}
	<label>email</label>
	<input type="text" name="email">
	<label>Zeal id</label>
	<input type="text" name="zealid">
	<button>Signin</button>
</form>
</body>
</html>