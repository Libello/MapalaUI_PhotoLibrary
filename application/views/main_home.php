<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Beranda</title>

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
            <a class="navbar-brand" href="<?php echo site_url('/home');?>"><img src="<?php echo base_url('assets/ico').'/home.png';?>" width="100px"></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a id="nav_name" href="<?php echo site_url('/home');?>"><span class="glyphicon glyphicon-home"></span><br>Beranda</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/search');?>"><br>Penelusuran<br></a></li>
              <li><a id="nav_name" href="<?php echo site_url('/gallery');?>"><br>Galeri<br></a></li>
              <li><a id="nav_name" href="<?php echo site_url('/others');?>"><br>Tentang MUIPL<br></a></li>
              <form class="navbar-form navbar-left" role="search" id="simple_search" method="post" action="<?php echo site_url('/search');?>">
                <div class="form-group">
                  <input type="text" class="form-control" name="inputtext" placeholder="Cari koleksi" value=""> 
                  <input type="hidden" name="searchbox" value="true">
                </div>
                <button type="submit" class="btn btn-default">Cari</button>
              </form>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
        <div class="col-lg-2" id="loggedin_as">
          <div class="col-lg-3">
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="width:40px; height:60px;">
                    <span class="glyphicon glyphicon-chevron-down"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <?php
                      if($status == 'admin') {
                        echo '<li><a href="'.site_url('/photo_list').'">Halaman Admin</a></li>';
                        echo '<li><a href="'.site_url('/logout').'">Keluar</a></li>';
                      }
                      else { 
                        echo '<li><a href="'.site_url('/logout').'">Keluar</a></li>';
                      }
                    ?>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
          <div class="col-lg-3">
              <p class="nav navbar-nav" id="logged_in_as">
                Masuk sebagai <b><?php echo $name;?></b>
                <br>dari <?php echo $institution;?>
              </p>                
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="starter-template-home">


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo base_url('assets/img').'/(C)MapalaUI.png';?>" alt="First slide">
        </div>
        <div class="item">
          <img src="<?php echo base_url('assets/img').'/(C)Budi.png';?>" alt="Second slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

    



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container_marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <a href="<?php echo site_url('/search');?>"><img class="img-circle" src="<?php echo base_url('assets/img').'/(1)search.png';?>" alt="Generic placeholder image"></a>
          <h2 id="feature_header"><a href="<?php echo site_url('/search');?>">Penelusuran Lanjutan</a></h2>
          <p id="feature_detail">Kamu dapat mencari foto berdasarkan judul, fotografer, aktivitas, tahun maupun ruas lainnya dengan memasukan kata kunci sesuai dengan kebutuhanmu.</p>
          <p><a id="btn-featuredetail" href="<?php echo site_url('/search');?>" role="button">Mulai Penelusuran &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="<?php echo site_url('/gallery');?>"><img class="img-circle" src="<?php echo base_url('assets/img').'/(2)categories.png';?>" alt="Generic placeholder image"></a>
          <h2 id="feature_header"><a href="<?php echo site_url('/gallery');?>">Galeri Foto</a></h2>
          <p id="feature_detail">Bingung dengan kata kunci? Lihat saja foto berdasarkan kategori yang telah disediakan.</p>
          <p><a id="btn-featuredetail" href="<?php echo site_url('/gallery');?>" role="button">Lihat kategori &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="<?php echo site_url('/others');?>"><img class="img-circle" src="<?php echo base_url('assets/img').'/(3)others.png';?>" alt="Generic placeholder image"></a>
          <h2 id="feature_header"><a href="<?php echo site_url('/others');?>">Tentang MUIPL</a></h2>
          <p id="feature_detail">Ingin tahu asal mula Mapala UI Photo Library dan siapa yang membuatnya? Kamu bisa lihat di sini.</p>
          <p><a id="btn-featuredetail" href="<?php echo site_url('/others');?>" role="button">Tentang MUIPL &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
              
        
      </div>
    </div>

    
    <div id="footer">
      <div class="container">
        <p class="text-muted">Mapala UI Photo Library © 2014 oleh <a id="link.footer" href="http://twitter.com/nadafadhila">@nadafadhila</a><br><a id="link.footer" href="http://getbootstrap.com">Bootstrap</a></p>
      </div>
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js').'/jquery.min.js';?>"></script>
    <script src="<?php echo base_url('assets/js').'/bootstrap.min.js';?>"></script>
  </body>
</html>
