<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Buku Tamu</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css').'/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css').'/cover.css';?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <ul class="nav masthead-nav">
                <li><a href="<?php echo base_url();?>">Beranda</a></li>
                <li class="active"><a href="<?php echo site_url('/guest_login');?>">Buku Tamu</a></li>
                <li><a href="<?php echo site_url('/contact');?>">Kontak</a></li>
              </ul>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
          

          <div class="inner_cover">
            <h1 id="guestlogin_header">Buku Tamu</h1>
            <p class="detail">Tolong isi dengan <b>nama</b> dan <b>asal institusi/kota</b>-mu <br>terlebih dahulu ya sebelum mulai melihat koleksi :)</p>
            
            <form class="form-horizontal" id="guest_form" role="form" method="post" action="<?php echo site_url('/doGuestLogin');?>/">
              <div class="form-group">
                <div class="col-sm-9">
                  <input type="username" class="form-control" name="guest_name" placeholder="Nama" required autofocus>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-9">
                  <input type="username" class="form-control" name="guest_institution" placeholder="Institusi atau kota" required>
                </div>
              </div>
        
              <div class="lead">
                <button class="btn btn-default" type="submit" role="button">Masuk</button>
              </div>
            </form>
          </div>
        </div>
          <!-- HTML to write -->
          

          <div class="mastfoot">
            <div class="inner">
              <p><b>Mapala UI Photo Library</b> © 2014 oleh <a href="http://www.twitter.com/nadafadhila">@nadafadhila</a><br><a href="http://getbootstrap.com">Bootstrap</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js').'/jquery.min.js';?>"></script>
    <script src="<?php echo base_url('assets/js').'/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url('assets/js').'/docs.min.js';?>"></script>
    <script src="tooltip.js">$('#example').tooltip(options)</script>
  </body>
</html>
