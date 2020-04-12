<!DOCTYPE html>
<html lang="en">
<head>
	<title>Leaderboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts2/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor2/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor2/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor2/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css2/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css2/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name</th>
								<th class="column2">Score</th>
								{{-- <th class="column3">Contact Number</th>
								<th class="column4">Marks</th>
								<th class="column4"></th> --}}
								
							</tr>
						</thead>
						<tbody>

							@foreach($leaders as $tarun)
								<tr>
									<td class="column1">{{$tarun->name}}</td>
									<td class="column2">{{$tarun->score}}</td>
									{{-- <td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									 --}}
								</tr>
								@endforeach
								
								
								
						</tbody>
					</table>


				</div>
				<div style="margin-top: 70px; margin-left: 540px;">
				<button><a href="/logout" style="font-family: cursive;font-size: 50px;color: red;">Logout</a></button>
			</div>
			</div>

		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="{{asset('vendor2/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor2/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor2/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor2/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js2/main.js')}}"></script>

</body>
</html>