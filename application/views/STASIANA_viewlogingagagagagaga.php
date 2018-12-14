<!DOCTYPE html>
<html>
<head>
	<title>STASIANA | LOGIN</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body style="background: linear-gradient(to bottom, #CAA052 0%, #FFFFB1 100%); height: 1080px; margin: 20px">
	<table>
	<tr>
		<td style="margin-top: 100px;margin-bottom: 150px; margin-left:50px;" >
			<table>
			<tr>
				<td>
					<h3 style="margin-left: 30px;">Selamat datang!</h3>
				</td>
			</tr>
			<tr>
				<td>
					<img src="https://querencias.weebly.com/uploads/1/2/1/8/121871693/logoutama_orig.png" style="width: 640px; height: 360px">
				</td>
			</tr>
			<tr>
				<td>
					<h3 style="font-family: sans-serif; margin-left: 30px"> Sebuah website yang dapat digunakan sebagai jembatan antara <br>
						BPBD dengan Masyarakat Indonesia dalam melaporkan lokasi <br>
						rawan bencana yang ada disekitar daerahnya. <br>
					</h3>
				</td>
			</tr>
			<tr>
				<td>
					<h4 style="margin-left: 30px;">Masuk untuk mulai melaporkan lokasi rawan bencana disekitar anda! </h4>
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
		<td style="margin: 150px">
		<table style="align-items: center;">
			<tr>
				<td>
					<form action="<?php echo base_url('index.php/'). ('STASIANA_Controller/aksi_login'); ?>" method="post">
						<div>
							<div>USERNAME</div>
							<div><input type="text" name="username" style="width: 300px; height: 30px" ></div> <br>
						</div>
						<div>
							<div>PASSWORD</div>
							<div><input type="password" name="password"  style="width: 300px; height: 30px"></div> <br>
						</div>
						<div>
							<div></div>
							<table>
								<tr>
									<td>	
										<input name="btn-user" type="submit" value="LOGIN" style="background-color: #CAA052;margin-right: 7px; width: 120px; height: 30px; border-width: 0px" > ATAU
										<input name="btn-bpbd" type="submit" value="LOGIN AS BPBD" style="background-color: #CAA052; margin-left: 7px; width: 120px; height: 30px; border-width: 0px ">
									</td>
								</tr>
								<tr>
									<td>Don't have account? <?php echo anchor('STASIANA_Controller/indexx','Sign Up'); ?></td>
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