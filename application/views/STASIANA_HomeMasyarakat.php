<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>STASIANA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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
          <li class="menu-active"><a href="#intro">Home</a></li>
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

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text" style="margin-top: 150px">
      <h2>Welcome to</h2>
      <img src="<?php echo base_url ("asset/img/logojadi.png")?>" style="width:320px; height:180px">
      <p>Laporkan lokasi bencana yang ada disekitar anda, kita akan membantu anda.</p> <br> <br> <br>
      <a href="#about" class="btn-get-started scrollto">Go</a>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 id="informasi" class="section-title">Informasi Lokasi Bencana</h3>
          <span class="section-divider"></span>
      </div>
      <center>
          <div class="col-lg-10 content wow fadeInRight" style="margin-left: 20px">
            <div class="row">

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img src="<?php echo base_url('asset/img/square-tsunami.jpg')?>" class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>Tsunami</a>
              </h4>
              <p class="card-text" style="font-style: italic;">Lokasi: Jl. Kedondong no. 14 </p>
                <p>Terjadi banjir sebanyak tiga kali di 2 tahun terakhir ini. </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img src="<?php echo base_url('asset/img/square-flood.png')?>" class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>Banjir</a>
              </h4>
              <p class="card-text" style="font-style: italic;">Lokasi: Jl. Kedondong no. 14 </p>
                <p>Terjadi banjir sebanyak tiga kali di 2 tahun terakhir ini. </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img src="<?php echo base_url('asset/img/square-earthquake.jpg')?>" class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>Gempa Bumi</a>
              </h4>
              <p class="card-text" style="font-style: italic;">Lokasi: Jl. Kedondong no. 14 </p>
                <p>Terjadi gempa sebanyak tiga kali di 2 tahun terakhir ini.  </p>
            </div>
          </div>
        </div>
      </div>
        
         <ul class="col-lg-12 col-sm-6 pagination justify-content-center" style="margin-top: 20px">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

      </div>
      </center>
      </div>
    </section><!-- #about -->


    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Our Team</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            "Coming together is a beginning. Keeping together is progress. Working together is success." <br> 
            ㅡHenry Ford
        </p>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url("asset/img/square-ajeng.jpg")?>" style="width: 350px; height: 350px" alt=""></div>
              <h4>Ajengsari Rahmayanti</h4>
              <span>17523106</span>
              <div class="social">
                <a href="https://querencias.weebly.com"><i>Blog</i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url("asset/img/lisa-square.png")?>" style="width: 350px; height: 350px"  alt=""></div>
              <h4>Rezky Ayu Wulandari</h4>
              <span>17523100</span>
              <div class="social">
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url("asset/img/jisoo-square.jpg")?>" style="width: 350px; height: 350px"  alt=""></div>
              <h4>Qonita Alimatu Yassaroh</h4>
              <span>17523107</span>
              <div class="social">
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Avilon&Vagary</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
            Designed by <a href="https://bootstrapmade.com/">Avilon&Vagary</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

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
