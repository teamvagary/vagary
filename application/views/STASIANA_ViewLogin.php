<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php echo base_url("asset/img/logojadi.png")?>" rel="icon">
	<title>LOGIN - STASIANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/css/login.css")?>">
<!--===============================================================================================-->
</head>
<body>
	<?php echo form_open('STASIANA_Login/prosesLogin') ?>

					<div class="body"></div>
					<div class="grad"></div>
					<div class="header">
						<div style="font-weight: bold">STAS<span style="font-weight: bold">IANA</span></div>
					</div>
					<br>
					<div class="login">
							<input type="email" name="email" placeholder="E-Mail">
							<input type="password" placeholder="Password" name="pass"><br>
							<button class="login100-form-btn" name="login" value="Login">LOGIN</button>
					<div class="text-center p-t-90">
						<a class="txt1" href="<?php echo base_url ("index.php/STASIANA_Login/signup") ?>">
							Don't have an account? Sign Up.
						</a>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<?php echo form_close() ?>

<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/loginvendor/jquery/jquery-3.2.1.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/loginvendor/animsition/js/animsition.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/loginvendor/bootstrap/js/popper.js")?>"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/loginvendor/select2/select2.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/loginvendor/daterangepicker/moment.min.js")?>"></script>
	<script src="<?php echo base_url("asset/loginvendor/daterangepicker/daterangepicker.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/loginvendor/countdowntime/countdowntime.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/js/login.js")?>"></script>


</body>
</html>
