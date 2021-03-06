<!DOCTYPE html>
<html lang="en">
<head>
	<title>MEGABGH - LOGIN</title>
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
				<form class="login100-form validate-form" method="post" action="auth_user">
					<span class="login100-form-title p-b-33">
						 Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" id="email" placeholder="Email" onkeyup="document.getElementById('wrong_email_label').classList.add('d-none');" required>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

						<?php if($email_or_password_wrong==='email'): ?>
					<label for="email" id="wrong_email_label" class="alert alert-danger w-100"><i class="fa fa-exclamation-circle pr-2"></i>Wrong email</label>
						<?php endif;  ?>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password" onkeyup="document.getElementById('wrong_password_label').classList.add('d-none');" required>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

						<?php if($email_or_password_wrong==='password'): ?>
					<label for="password" id="wrong_password_label" class="alert alert-danger w-100"><i class="fa fa-exclamation-circle pr-2"></i>Wrong password.</label>
						<?php endif;  ?>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type="submit">
							Sign in
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="email" class="txt2 hov1">
							Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Don't have an account?
						</span>

						<a href="register" class="txt2 hov1">
							Create an account
						</a>
					</div>
					<input type="text" name="refer" value="<?=$refer_user?>" style="display:none;">
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