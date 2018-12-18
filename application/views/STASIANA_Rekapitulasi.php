<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>STASIANA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url("asset/img/logojadi.png")?>" rel="icon">
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

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
	<?php
        foreach($rekap as $data){
            $provinsi[] = $data->provinsi;
            $kejadian[] = (float) $data->kejadian;
        }
    ?>
<body>
     <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?php echo base_url ("index.php/STASIANA_ControllerAdmin") ?>" class="scrollto">STASIANA</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="<?php echo base_url ("asset/img/jisoo.jpg")?>" alt="" title=""></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url ("index.php/STASIANA_ControllerAdmin") ?>">Home</a></li>
          <li><a href="<?php echo base_url("index.php/STASIANA_ControllerAdmin/rekapitulasi")?>">Data</a></li>
          <li class="menu-has-children"><a href="">Validasi</a>
            <ul>
              <li><a href="<?php echo base_url ("index.php/STASIANA_ControllerAdmin/rekapitulasi") ?>"> Rekapitulasi</a></li>
              <li><a href="<?php echo base_url ("index.php/STASIANA_ControllerAdmin/Edit") ?>">Ubah Status</a></li>
            </ul>
          </li>
          <li class="nav-user dropdown"><a href="#" data-toggle="dropdown">
            <img class="nav-avatar" src="<?php echo base_url("asset/img/user.png")?>"/>
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url("index.php/STASIANA_ControllerMasyarakat/logout")?>">Logout</a></li>
              </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


	<canvas id="canvas" width="1500" height="750" style="background-color: #caa052"  ></canvas>

	<!--Load chart js-->
	<script type="text/javascript" src="<?php echo base_url().'asset/chartjs/chart.min.js'?>"></script>
	<script>

            var lineChartData = {
                labels : <?php echo json_encode($provinsi);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(140,0,26,0.9)",
                        strokeColor: "#0000",
                        pointColor: "#8c001a",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($kejadian);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
        
   	</script>
    </div>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
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