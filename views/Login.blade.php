<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	
  <title>Login</title>
</head>
<body>
	
	<div class="vh-100 d-flex justify-content-center align-items-center">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-12 col-md-8 col-lg-6">
					<div class="card bg-white">
						<div class="card-body p-5">
							<form class="mb-3 mt-md-4">
								<h2 class="fw-bold mb-2 text-uppercase ">TR</h2>
								<p class=" mb-5">Please enter your login and password!</p>
								<div class="mb-3">
									<label for="email" class="form-label ">Email address</label>
									<input type="email" class="form-control" id="email" placeholder="name@example.com">
								</div>
								<div class="mb-3">
									<label for="password" class="form-label ">Password</label>
									<input type="password" class="form-control" id="password" placeholder="*******">
								</div>
								<p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
								<div class="d-grid">
									<button class="btn btn-outline-dark" type="submit">Login</button>
								</div>
							</form>
							<div>
								<p class="mb-0  text-center">Don't have an account? <a href="signup.html" class="text-primary fw-bold">Sign
										Up</a></p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>