<!DOCTYPE html>
<html>
<head>
	<title>STASIANA | SIGN-UP</title>
</head>
<body style="background: linear-gradient(to bottom, #CAA052 0%, #FFFFB1 100%); height: 1080px;">
	<table>
	<tr>
		<td>
			<table>
			<tr>
				<td>
					<img src="https://querencias.weebly.com/uploads/1/2/1/8/121871693/logoutama_orig.png" style="width: 640px; height: 360px">
				</td>
			</tr>
		</table>
		</td>
		<td>
			<style>
				.vl {
				    border-left: 1px solid grey;
				    height: 650px;
				    margin-right: 40px; 
				    margin-left: 10px;
				}
			</style>

			<div class="vl"></div>
		</td>
		<td>
		<table>
			<tr>
				<td>
					<form action="<?php echo base_url('index.php/'). ('STASIANA_Controller/sign_up'); ?>" method="post">
						<div>
							<div>Username</div>
							<div><input type="text" name="username" style="width: 300px; height: 30px"></div><br>
						</div>
						<div>
							<div>Password</div>
							<div><input type="password" name="password" style="width: 300px; height: 30px"></div><br>
						</div>
						<div>
							<div></div> 
							<table>
								<tr>
									<td>
										<input name="btn-back" type="submit" value="BACK" style="background-color: #CAA052;margin-right: 7px; width: 120px; height: 30px; border-width: 0px; margin-left: 45px; margin-right: 10px">
										<input name="btn-signup" type="submit" value="SIGN UP" style="background-color: #CAA052;margin-right: 7px; width: 120px; height: 30px; border-width: 0px">
									</td>
								</tr>
							</table>
					</form>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</body>
</html>