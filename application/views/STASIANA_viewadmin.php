<!DOCTYPE html>
<html>
<head>
	<title>Membuat login dengan codeigniter | www.malasngoding.com</title>
</head>
<body>
	<h1 action="<?php echo base_url('index.php/STASIANA_Controllerrr/index'); ?>">Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("username"); ?></h2>
	<a href="<?php echo base_url ('STASIANA_Controller/logout'); ?>">Logout</a>
</body>
</html>