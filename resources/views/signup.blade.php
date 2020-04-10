<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Electrino Quiz Module</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:400,600,800,300'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.min2.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

  </style>
</head>

<body>
	 <div class="view" style="background-image: url('{{ asset('img/xx.jpg') }}'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn">
        <h1 class="mb-4">
          <strong style="font-family: cursive;">Welcome to online Quiz:</strong>
        </h1>

        <h4>
          <strong>An interactive quiz from Electrino!!</strong>
        </h4>

        <p class="mb-4 d-none d-md-block">
          <strong><i>It's an interactive quiz consisting of questions from various sectors like web, electronics and general aptitude.</strong></i>
        </p>

	<form method="POST" action="/register">
		<div class="form-group" style="margin-top: 40px;">

		{{csrf_field()}}
		
<label for="formGroupExampleInput"><b>Name:</b></label>
		<input type="text" name="uname">
	
		<label for="formGroupExampleInput"><b>Email:</b></label>
		<input type="text" name="email">
		<label><b>Branch:</b></label>
		<input type="text" name="branch">
		<label><b>Password:</b></label>
		<input type="Password" name="password">
		<label><b>Contact:</b></label>
		<input type="text" name="contact">
	<br>
	<br>
		<button class="btn blue-gradient mt-4 ml-1" type="submit">Signup</button>
	</form>
</div>

</body>
</html>