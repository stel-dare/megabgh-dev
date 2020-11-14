<!DOCTYPE html>
<html lang="en">
<head>
	<title>MEGABGH - REGISTER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/auth_styles/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post" action="register_user">
					<span class="login100-form-title p-b-33">
						Create An Account
					</span>
					<div class="wrap-input100 validate-input" data-validate = "First Name cannot be blank">
						<input class="input100" type="text" name="fName" placeholder="First Name" required>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Last Name cannot be blank">
						<input class="input100" type="text" name="lName" placeholder="Last Name" required>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Username cannot be blank">
						<input class="input100" id="username" type="text" name="username" placeholder="Username" onkeyup="document.getElementById('username_taken_label').classList.add('d-none');" required>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
						<?php if($username_or_email_taken==='username'): ?>
					<label for="username" id="username_taken_label" class="alert alert-danger w-100"><i class="fa fa-exclamation-circle pr-2"></i>Username is taken</label>
						<?php endif;  ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" id="email" type="email" name="email" placeholder="Email" onkeyup="document.getElementById('email_taken_label').classList.add('d-none');" required>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
						<?php if($username_or_email_taken==='email'): ?>
					<label for="email" id="email_taken_label" class="alert alert-danger w-100"><i class="fa fa-exclamation-circle pr-2"></i>Email is taken</label>
						<?php endif;  ?>
					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type="submit">
							Create Account
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Already have an account?
						</span>

						<a href="login" class="txt2 hov1">
							Log in here
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="assets/auth_styles/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/auth_styles/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/auth_styles/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/auth_styles/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/auth_styles/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/auth_styles/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/auth_styles/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/auth_styles/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<!-- <script src="auth_styles/js/main.js"></script> -->

</body>
</html>