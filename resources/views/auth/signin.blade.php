<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('user/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('user/css/style.css')}}">
	</head>

	<body>
@if(Session::has('erreur'))
<div class="alert alert-danger" role="alert">
	{{Session::get('erreur')}}
</div>
@endif
		

		<div class="wrapper" style="background-image: url('{{asset('user/images/bg-registration-form-2.jpg')}}');">
			<div class="inner">
				<form action="{{route('signin')}}" method="POST">
					@csrf
					<h3>Login</h3>
					<div class="form-group">

					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox">I don't have account
							<span class="checkmark"></span>
                            
						</label>
					</div>
					<button>Login</button>
				</form>
			</div>
		</div>
		
	</body>
</html>