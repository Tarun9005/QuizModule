<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="/register">

		{{csrf_field()}}

		<input type="text" name="uname">
		<label>email</label>
		<input type="text" name="email">
		<label>Branch</label>
		<input type="text" name="branch">
		<label>Zealid</label>
		<input type="text" name="zealid">
		<label>Contact</label>
		<input type="text" name="contact">
		<button>Signup</button>
	</form>

</body>
</html>