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
	<label>PASSWORD</label>
	<input type="text" name="password">
	<button type="submit">Signin</button>
</form>
</body>
</html>