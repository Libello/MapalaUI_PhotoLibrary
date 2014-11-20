<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Galeri</title>

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
              <li><a id="nav_name" href="<?php echo site_url('/home');?>"><br>Beranda<br></a></li>
              <li><a id="nav_name" href="<?php echo site_url('/search');?>"><br>Penelusuran<br></a></li>
              <li class="active"><a id="nav_name" href="<?php echo site_url('/gallery');?>"><span class="glyphicon glyphicon-picture"></span><br>Galeri</a></li>
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
      <div class="starter-template">
        <br>
        <h2 id="search_header"><?php echo $name_event ?></h2><hr>
          <form class="form-horizontal" role="form">
            <div class="form-group" id="photo_detail_form">
              <label class="col-sm-1 control-label">Lokasi</label>
              <div class="col-sm-11">
              <p class="form-control-static">: <?php echo $location ?></p>
              </div>
              
              <label class="col-sm-1 control-label">Tahun</label>
              <div class="col-sm-11">
              <p class="form-control-static">: <?php 
                                                if($start_year == $end_year) {
                                                  echo $start_year;
                                                }
                                                else {
                                                  echo $start_year." s/d ".$end_year;
                                                }
                                              ?>

              </p>
              </div>

              <label class="col-sm-1 control-label">Kategori</label>
              <div class="col-sm-11">
              <p class="form-control-static">: <?php echo $category ?></p>
              </div>
            </div>
          </form>
          <hr>
          <br>

        <div class="row">
          <?php
            if($photoresult == null) {
              echo "Tidak ada koleksi";
            }
            else {
              $id = str_replace("/", "_", $row['id']);
              foreach ($photoresult as $row){
                echo '
                  <div class="col-xs-6 col-md-3">
                    <a href="'.site_url('/detail/'.$id.'').'" class="thumbnail">
                      <img src="'.base_url('assets/foto').'/'.$row['image'].'" alt="'.$row['image'].'">
                    </a>
                  </div>
                ';
              }
            }
          ?>
        </div>
      </div>
    </div>
    <hr>


    <div id="footer">
      <div class="container">
        <p class="text-muted">Mapala UI Photo Library © 2014 oleh <a href="http://twitter.com/nadafadhila">@nadafadhila</a><br><a href="http://getbootstrap.com">Bootstrap</a></p>
      </div>
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js').'/jquery.min.js';?>"></script>
    <script src="<?php echo base_url('assets/js').'/bootstrap.min.js';?>"></script>
  </body>
</html>
