<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php echo base_url("asset/img/logojadi.png")?>"  rel="icon">
	<title>SIGN UP - STASIANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/css/login.css")?>">
<!--===============================================================================================-->
</head>
<body>
	<?php echo form_open('STASIANA_Login/masuk') ?>

					<div class="body"></div>
					<div class="grad"></div>
					<div class="header">
						<div style="font-weight: bold">STAS<span style="font-weight: bold">IANA</span></div>
					</div>
					<br>
					<div class="login">
						<span>Nama Lengkap</span><br>
							<input type="text" name="nama_lengkap" id="nama_lengkap"><br>
						<span>E-Mail</span><br>
							<input type="email" name="email" id="email"><br>
						<span>Password</span><br>
							<input type="password" name="password" id="password"><br>
						<button class="login100-form-btn" name="login" value="Login">SIGN UP</button>
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