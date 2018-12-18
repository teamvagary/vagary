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

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
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
          <li><a href="#DataLaporan">Data</a></li>
          <li class="menu-has-children"><a href="">Validasi</a>
            <ul>
              <li><a href="<?php echo base_url ("index.php/STASIANA_ControllerAdmin/rekapitulasi") ?>"> Rekapitulasi</a></li>
              <li><a href="<?php echo base_url ("index.php/STASIANA_ControllerAdmin/Edit") ?>">Ubah Status</a></li>
            </ul>
          </li>
          <li><a href="">Kontak</a></li>
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
      <p>Laporkan lokasi bencana yang ada disekitar anda, kita akan membantu anda.</p>
      <h6 style="font-style: italic; font-size: 14px"><center> You're an admin.</center></h6>
       <br> <br> <br>
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
          <h3 id="DataLaporan" class="section-title">Data Laporan</h3>
          <span class="section-divider"></span>
      </div>

        <div class="row" style="margin-top: 7px">

          <center>
          <div class="col-lg-11 content wow fadeInRight" style="margin-left: 20px">
            <?php if($this->session->flashdata('msg-success')): ?>
              <div class="alert alert-success"><?echo $this->session->flashdata('msg-success') ?></div>
            <?php endif?>
            <table border="1">
                <tr>
                  <th width="30">ID</th>
                  <th width="50">Tanggal</th>
                  <th width="50">Jenis Bencana</th>
                  <th width="50">Provinsi</th>
                  <th width="50">Kota/Kabupaten</th>
                  <th width="50">Kecamatan</th>
                  <th width="50">Alamat Lengkap</th>
                  <th width="50">Deskripsi Bencana</th>
                  <th width="50">Gambar Bencana</th>
                  <th width="50">Status Lokasi</th>
                  <th width="50">Action</th>
                </tr>
                <?php 
                $id_laporan = 1;
                foreach($laporan as $l){ 
                ?>
                <tr>
                  <td><?php echo $id_laporan++ ?></td>
                  <td><?php echo $l->id_laporan ?></td>
                  <td><?php echo $l->tanggal ?></td>
                  <td><?php echo $l->jenis_bencana ?></td>
                  <td><?php echo $l->provinces_name ?></td>
                  <td><?php echo $l->regencies_name ?></td>
                  <td><?php echo $l->kecamatan ?></td>
                  <td><?php echo $l->alamat_lengkap ?></td>
                  <td><?php echo $l->deskripsi_bencana ?></td>
                  <td><img src="<?php '".base_url("asset/img/" .$l->image)."'?>" width='100' height='100'></td>
                  <td><?php echo $l->status_bencana ?></td>
                  <td><?php echo anchor('STASIANA_ControllerAdmin/Edit/'.$l->id_laporan,'Edit'); ?></td>
                </tr>
                <?php } ?>
              </table>
              
      </div>
      </center>
      </div>
    </section><!-- #about -->


    <!--==========================
      Our Team Section
    ============================-->
    
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
