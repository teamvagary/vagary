<!DOCTYPE html>
<html lang="en">
<head>
	<title>STASIANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--================================================================================================-->

	<link rel="icon" type="image/png" href="<?php echo base_url("asset/form/images/icons/favicon.ico")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/form/vendor/bootstrap/css/bootstrap.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/form/vendor/animate/animate.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/form/vendor/css-hamburgers/hamburgers.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/form/vendor/select2/select2.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/form/css/util.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asset/form/css/main.css")?>">
	<link rel="stylesheet" href="<?php echo base_url("asset/form/upload/css/style.css")?>">
<!--===============================================================================================-->
<link href="<?php echo base_url("//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css")?>" rel="stylesheet">
<script src="<?php echo base_url("//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js")?>"></script>
<link rel="stylesheet" href="<?php echo base_url("css/formm.css")?>">


  <!-- Favicons -->
  <link href="asset/img/logoutama.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url("asset/lib/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url("asset/lib/animate/animate.min.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("asset/lib/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("asset/lib/ionicons/css/ionicons.min.css")?>" rel="stylesheet">
  <link href="<?php echo base_url("asset/lib/magnific-popup/magnific-popup.css")?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url("asset/css/STASIANA.css") ?>" rel="stylesheet">
</head>
<body>
<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">STASIANA</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo ("index") ?>">Home</a></li>
          <li><a href="#informasi">Informasi</a></li>
          <li><a href="<?php echo ("STASIANA_ControllerMasyarakat/laporkan") ?>">Laporkan Lokasi</a></li>
          <li class="menu-has-children"><a href="">Data</a>
            <ul>
              <li><a href="">Rekapitulasi</a></li>
              <li><a href="#">Status</a></li>
            </ul>
          </li>
          <li><a href="">Kontak</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


	<div class="container-contact100" style=" background: linear-gradient(45deg, rgba(202, 160, 82, 0.6), rgba(255, 255, 177, 0.6));">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="<?php echo base_url('index.php/'). 'STASIANA_ControllerMasyarakat/melaporkan'; ?>" method="post">
				<span class="contact100-form-title">
					Form Laporan
				</span>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Wajib diisi">
					<span class="label-input100">Jenis Bencana *</span>
					<input class="input100" type="text" name="jenis_bencana" placeholder="Longsor, Banjir, Gunung Merapi, dll.">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Wajib diisi">
					<span class="label-input100">Tanggal*</span>
					<input class="input100" type="date" name="tanggal">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Wajib diisi">
					<span class="label-input100">Provinsi *</span>
					<input class="input100" type="text" name="provinces_name">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Wajib diisi">
					<span class="label-input100">Kabupaten/Kota*</span>
					<input class="input100" type="text" name="regencies_name">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Wajib diisi">
					<span class="label-input100">Kecamatan*</span>
					<input class="input100" type="text" name="kecamatan">
				</div>

				<div class="wrap-input100" data-validate = "Wajib diisi">
					<span class="label-input100">Alamat Lengkap</span>
					<textarea class="input100" type="text" name="alamat_lengkap" placeholder="Jalan, Desa, Kelurahan, Kecamatan, Kabupaten/Kota, Provinsi, Kode Pos"></textarea> 
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Deskripsi Bencana</span>
					<textarea class="input100" name="deskripsi_bencana" placeholder="e.g Dalam kurun waktu xx bulan telah terjadi Longsor pada daerah xxxx pada tanggal dd/mm/yyyy dengan korban xx orang"></textarea>
				</div>
			<center>
			<div class="fileupload fileupload-new" data-provides="fileupload"> 
				    <span class="btn btn-primary btn-file"><span class="fileupload-new">Select file</span>
				    <span class="fileupload-exists">Change</span>         <input type="file" name="gambar_bencana" /></span>
				    <span class="fileupload-preview"></span>
				    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
			</div>
			</center>

  <script src="<?php echo base_url("http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js")?>"></script>
    <script  src="<?php echo base_url("js/index.js")?>"></script>
      <script  src="<?php echo base_url("upload/js/index.js")?>"></script>



				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							Submit
						</button>
					</div>
				</div>
			</form>
			<div>
				<a  href="<?php echo ("index") ?>">Back</a>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/form/vendor/jquery/jquery-3.2.1.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/form/vendor/bootstrap/js/popper.js")?>"></script>
	<script src="<?php echo base_url("asset/form/vendor/bootstrap/js/bootstrap.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/form/vendor/select2/select2.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("asset/form/js/main.js")?>"></script>

	<script src="<?php echo base_url('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')?>"></script>
    <script  src="<?php echo base_url("js/formm.js")?>"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="<?php echo base_url("https://www.googletagmanager.com/gtag/js?id=UA-23581568-13")?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
 <script src="<?php echo base_url("asset/lib/jquery/jquery.min.js") ?>"></script>
  <script src="<?php echo base_url("asset/lib/jquery/jquery-migrate.min.js") ?>"></script>
  <script src="<?php echo base_url("asset/lib/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <script src="<?php echo base_url("asset/lib/easing/easing.min.js") ?>"></script>
  <script src="<?php echo base_url("asset/lib/wow/wow.min.js") ?>"></script>
  <script src="<?php echo base_url("asset/lib/superfish/hoverIntent.js") ?>"></script>
  <script src="<?php echo base_url("asset/lib/superfish/superfish.min.js") ?>"></script>
  <script src="<?php echo base_url("asset/lib/magnific-popup/magnific-popup.min.js") ?>"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url("asset/contactform/contactform.js") ?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url("asset/js/main.js") ?>"></script>
</body>
</html>
