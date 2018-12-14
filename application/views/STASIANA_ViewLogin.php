<!DOCTYPE html>
<html lang="en">
<head>
	<title>STASIANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url("assets/Login_v18/images/icons/favicon.ico")?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/vendor/bootstrap/css/bootstrap.min.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/fonts/font-awesome-4.7.0/css/font-awesome.min.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/vendor/animate/animate.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/vendor/css-hamburgers/hamburgers.min.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/vendor/animsition/css/animsition.min.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/vendor/select2/select2.min.css")?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/vendor/daterangepicker/daterangepicker.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/css/util.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Login_v18/css/main.css")?>">
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						<h1>Login</h1>
					</span>

					<div class="wrap-input100 validate-input" >
           				<input class="input100" type="email" name="email">
				        <span class="focus-input100"></span>
				        <span class="label-input100">Email</span>
          			</div>
          
          
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="pass">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

          <div class="container-login100-form-btn" style="margin-top: 10px; margin-bottom: 10px">
            <button id="$level='user'" class="login100-form-btn">
              Login
            </button>
          </div>

           <div class="container-login100-form-btn" style="margin-top: 10px; margin-bottom: 10px">
            <button id="$slevel=admin" class="login100-form-btn">
              Login as BPBD
            </button>
          </div>		

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
					
							<a href="<?php echo base_url('login/signup') ?>">kkk</a>
						</span>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?php echo base_url("assets/Login_v18/vendor/jquery/jquery-3.2.1.min.js")?>"></script>
	<script src="<?php echo base_url("assets/Login_v18/vendor/animsition/js/animsition.min.js")?>"></script>
	<script src="<?php echo base_url("assets/Login_v18/vendor/bootstrap/js/popper.js")?>"></script>
	<script src="<?php echo base_url("assets/Login_v18/vendor/bootstrap/js/bootstrap.min.js")?>"></script>
	<script src="<?php echo base_url("assets/Login_v18/vendor/select2/select2.min.js")?>"></script>
	<script src="<?php echo base_url("assets/Login_v18/vendor/daterangepicker/moment.min.js")?>"></script>
	<script src="<?php echo base_url("assets/Login_v18/vendor/daterangepicker/daterangepicker.js")?>"></script>
	<script src="<?php echo base_url("assets/Login_v18/vendor/countdowntime/countdowntime.js")?>"></script>
	<script src="<?php echo base_url("assets/Login_v18/js/main.js")?>"></script>

</body>
</html>