<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Detail Foto</title>

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
              <li><a id="nav_name" href="<?php echo site_url('/gallery');?>"><br>Galeri<br></a></li>
              <li><a id="nav_name" href="<?php echo site_url('/others');?>"><br>Tantang MUIPL<br></a></li>
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
                    <span class=" glyphicon glyphicon-chevron-down"></span>
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







        <h1 id="search_header">Detail Foto</h1><hr>

        <form class="form-horizontal" role="form">
          <img src=<?php echo base_url('assets/foto').'/'.$photo_upload ?> width="1000px">

          <hr>
          <div class="form-group" id="photo_detail_form">
            <label class="col-sm-2 control-label">ID Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo str_replace("_", "/", $id_photo) ?></p>
            </div>
            
            <label class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $title ?></p>
            </div>

            <label class="col-sm-2 control-label">Fotografer</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $name_photographer ?></p>
            </div>

            <label class="col-sm-2 control-label">Format</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $format ?></p>
            </div>

            <label class="col-sm-2 control-label">Ukuran</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $size ?></p>
            </div>

            <label class="col-sm-2 control-label">Warna</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $color ?></p>
            </div>

            <label class="col-sm-2 control-label">Kegiatan</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $name_event ?></p>
            </div>

            <label class="col-sm-2 control-label">Kategori</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $category ?></p>
            </div>

            <label class="col-sm-2 control-label">Tanggal Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $taken_date ?></p>
            </div>

            <label class="col-sm-2 control-label">Lokasi dalam Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $taken_location ?></p>
            </div>

            <label class="col-sm-2 control-label">Deskripsi Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $description ?></p>
            </div>

            <label class="col-sm-2 control-label">Editor</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $name_editor ?></p>
            </div>

            <label class="col-sm-2 control-label">Tanggal Reproduksi</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $repro_date ?></p>
            </div>

            <label class="col-sm-2 control-label">Pernah Dipublikasi</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $published_on ?></p>
            </div>

            <label class="col-sm-2 control-label">Tanggal Publikasi</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $published_date ?></p>
            </div>

            <label class="col-sm-2 control-label">Catatan</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $notes ?></p>
            </div>

            <label class="col-sm-2 control-label">Tag</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $tag ?></p>
            </div>

            <label class="col-sm-2 control-label">Lokasi Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static">: <?php echo $location_HDD_name.'; '.$location_HDD_folder.'; '.$location_sekret_album ?></p>
            </div>
          </div>

        <div>
          <a href="<?php echo site_url('/edit');?>"><button class="btn btn-default">Edit</button></a>
        </div>
        <br>
        <div>
          <button class="btn btn-default">Lihat Rekod Dublin Core</button>
        </div>



        
      </div>
    </div>


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

