<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Welcome</title>

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
                <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo site_url('/guest_login');?>">Guest Login</a></li>
                <li><a href="<?php echo site_url('/contact');?>">Contact</a></li>
              </ul>
            </div>
          </div>
          
          <div class="inner cover">
            <h1 class="cover-heading" id="hi">Mapala UI Photo Library</h1>
            <p class="detail">Hi, selamat datang di <b>Mapala UI Photo Library</b>!</p>
            <p class="lead">
              <a href="<?php echo site_url('/guest_login');?>" class="btn btn btn-default">Guest</a>
              <a href="<?php echo site_url('/admin_login');?>" class="btn btn btn-default">Admin</a>
            </p>
          </div>
          <!-- HTML to write -->
          

          <div class="mastfoot">
            <div class="inner">
              <p><b>Mapala UI Photo Library</b> © 2014 by <a href="http://www.twitter.com/nadafadhila">@nadafadhila</a><br><a href="http://getbootstrap.com">Bootstrap</a></p>
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
  </body>
</html>
