<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Administrator Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css').'/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css').'/main.css';?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

        

    <div class="container">
      <div class="starter-template">
        <br>
        <br>

        <h1 id="adminlogin_header">Admin Login</h1>
        <form class="form-horizontal" id="admin_form" role="form" method="post" action="<?php echo site_url('/doAdminLogin');?>/">
              <div class="form-group">
                <div class="col-sm-8">
                  <input type="username" class="form-control" name="admin_name" placeholder="Name" required autofocus>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="admin_password" placeholder="Password" required>
                </div>
              </div>
              
              <div class="lead">
                <button class="btn btn-default" type="submit" role="button">Login</button>
              </div>
        </form>
        <?php
          if($message != null) {
            echo $message; 
          }
        ?>
        <br><br><a href="#">Back to previous page</a>
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div id="footer">
      <div class="container">
        <p class="text-muted">Mapala UI Photo Library © 2014 by <a href="http://twitter.com/nadafadhila">@nadafadhila</a><br><a href="http://getbootstrap.com">Bootstrap</a></p>
      </div>
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js').'/jquery.min.js';?>"></script>
    <script src="<?php echo base_url('assets/js').'/bootstrap.min.js';?>"></script>
  </body>
</html>
