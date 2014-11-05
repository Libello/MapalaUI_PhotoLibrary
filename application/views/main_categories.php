<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Mapala UI Photo Library</title>

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

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="col-lg-10">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('/home');?>"><img src="../assets/ico/home.png" width="100px"></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a id="nav_name" href="<?php echo site_url('/home');?>">Home</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/search');?>">Search</a></li>
              <li class="active"><a id="nav_name" href="<?php echo site_url('/gallery');?>">Gallery</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/guestToAdmin');?>">Admin Page</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/others');?>">Others</a></li>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
        <div class="col-lg-2">
          <div class="col-lg-3">
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="width:40px; height:60px;">
                    <span class=" glyphicon glyphicon-user"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url('/logout');?>">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
          <div class="col-lg-3">
              <p class="nav navbar-nav" id="logged_in_as">
                Logged in as <b><?php echo $name;?></b>
                <br>from <?php echo $institution;?>
              </p>                
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="starter-template">

        <h1 id="categories_header">Select Categories</h1>
        <hr>
        <br>
        <div class="row">
          <div class="col-xs-10 col-md-4">
            <a href="<?php echo site_url('/category_detail');?>" class="thumbnail">
              <img src="../assets/img/category1.png"/>
            </a>
          </div>
          <div class="col-xs-10 col-md-4">
            <a href="<?php echo site_url('/category_detail');?>" class="thumbnail">
              <img src="../assets/img/category2.png"/>
            </a>
          </div>
          <div class="col-xs-10 col-md-4">
            <a href="<?php echo site_url('/category_detail');?>" class="thumbnail">
              <img src="../assets/img/category3.png"/>
            </a>
          </div>
          <div class="col-xs-10 col-md-4">
            <a href="<?php echo site_url('/category_detail');?>" class="thumbnail">
              <img src="../assets/img/category4.png"/>
            </a>
          </div>
          <div class="col-xs-10 col-md-4">
            <a href="<?php echo site_url('/category_detail');?>" class="thumbnail">
              <img src="../assets/img/category5.png"/>
            </a>
          </div>
          <div class="col-xs-10 col-md-4">
            <a href="<?php echo site_url('/category_detail');?>" class="thumbnail">
              <img src="../assets/img/category6.png"/>
            </a>
          </div>
          <div class="col-xs-10 col-md-4">
            <a href="<?php echo site_url('/category_detail');?>" class="thumbnail">
              <img src="../assets/img/category7.png"/>
            </a>
          </div>
          <div class="col-xs-10 col-md-4">
            <a href="<?php echo site_url('/category_detail');?>" class="thumbnail">
              <img src="../assets/img/category8.png"/>
            </a>
          </div>
          <div class="col-xs-10 col-md-4">
            <a href="<?php echo site_url('/category_detail');?>" class="thumbnail">
              <img src="../assets/img/category9.png"/>
            </a>
          </div>
        </div>





















      </div>
    </div>
    <hr>


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
