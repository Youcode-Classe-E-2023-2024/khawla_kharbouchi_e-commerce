<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('admin/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
		<style>
			body{
				cursor: url("image.png"), auto;
			}
		</style>
	</head>

	<body>
		@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
@endif

		<div class="wrapper" style="background-image: url('{{asset('admin/images/bg-registration-form-2.jpg')}}');">
			<div class="inner">

				<form action="{{route('register')}}" method="POST">
					@csrf
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text" name="First_Name" class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" name="Last_Name" class="form-control">
						</div>
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
							<input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>
					<button>Register Now</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>