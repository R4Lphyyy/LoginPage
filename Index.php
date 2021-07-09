<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Design.css">

</head>
<body>

	<div class="container">
		<div class="row content">
			<div class="col-md-6 mb-3">
				<img src="logo1.jpg" class="img-fluid" alt="image">
				</div>
					<div class="col-md-6">
						<h3 class="signin-text mb-3">Login Here</h3>
					<form>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="username" name="username" class="form-control" placeholder="Enter Username">
						</div>				
						<div class="form-group">
							<label for="password">Password</label>		
							<input type="password" name="password" class="form-control" placeholder="Enter Password">		
						</div>
					 	<div class="form-group form check">
							<input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
							<label class="form-check-label" for="checkbox">Remember Me</label>
						</div>
							<button class="btn btn-class">Login</button>
					</form>
	 		</div>
		</div>
	</div>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>