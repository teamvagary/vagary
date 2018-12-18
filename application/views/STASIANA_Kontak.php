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
        <h1><a href="<?php echo base_url ("index.php/STASIANA_ControllerMasyarakat") ?>" class="scrollto">STASIANA</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url ("index.php/STASIANA_ControllerMasyarakat") ?>">Home</a></li>
          <li><a href="STASIANA_ControllerMasyarakat#informasi">Informasi</a></li>
          <li><a href="<?php echo ("STASIANA_ControllerMasyarakat/laporkan") ?>">Laporkan Lokasi</a></li>
          <li><a href="<?php echo base_url("index.php/STASIANA_ControllerMasyarakat/kontak")?>">Kontak</a></li>
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
      Berita Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 id="informasi" class="section-title">KONTAK</h3>
          <span class="section-divider"></span>
      </div>
      <center>
          <div class="col-lg-10 content wow fadeInRight" style="margin-left: 20px">
          <table>
    <tr>
      <td>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31732.28652874628!2d106.86863!3d-6.192804000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x26ba158b7a7b4745!2sGraha+Badan+Nasional+Penanggulangan+Bencana!5e0!3m2!1sid!2sid!4v1544432617648" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     
        <p>Alamat : Jl. Pramuka Kav.38 Jakarta Timur</p>
        <p>Fax. (021) 21281200</p>
        <p>Telp. (021) 29827793</p><br><br>
      </td>
      <td>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.003411629054!2d106.87200631401781!3d-6.5212493952829895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c0e7a6b123f1%3A0xbf5fa4f0b5c62e3e!2sIna+-+DRTG+Badan+Nasional+Penanggulangan+Bencana+(BNPB)!5e0!3m2!1sen!2sid!4v1544953113019" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    
        <h4><center> PUSAT PENDIDIKAN DAN PELATIHAN PENANGGULANGAN</center></h4>
        <h4><center>BADAN NASIONAL PENANGGULANGAN BENCANA</center></h4><br>
        <p>Kawasan Pusat Misi Pemeliharaan Perdamaian</p>
        <p>(Komplek IPSC)</p>
        <p>Alamat : Jl. Anyer Desa Tangkil Sentul,</p>
        <p>Kabupaten Bogor - Provinsi Jawa Barat 16810</p>
        <p>Telp. (021) 29618775</p>
        <p>Fax. (021) 29618775</p>
      </td>
    </tr>
  </table>
      </center>
      </div>
    </section><!-- #about -->
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
