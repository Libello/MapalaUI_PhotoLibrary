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
            <a class="navbar-brand" href="<?php echo site_url('/home');?>"><img src="../assets/ico/home.png" width="100px"></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a id="nav_name" href="<?php echo site_url('/home');?>">Beranda</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/search');?>">Penelusuran</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/gallery');?>">Galeri</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/others');?>">Tantang MUIPL</a></li>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Cari koleksi">
                </div>
                <button type="submit" class="btn btn-default">Cari</button>
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
          <img src="../assets/img/Husky1.jpg" width="1000px">

          <hr>
          <div class="form-group" id="photo_detail_form">
            <label class="col-sm-2 control-label">ID Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static"><?php echo $id_photo ?></p>
            </div>
            
            <label class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-10">
            <p class="form-control-static">: Ini adalah judul foto</p>
            </div>

            <label class="col-sm-2 control-label">Fotografer</label>
            <div class="col-sm-10">
            <p class="form-control-static">: Qatrunnada Fadhila</p>
            </div>

            <label class="col-sm-2 control-label">Format</label>
            <div class="col-sm-10">
            <p class="form-control-static">: Repro / Scan; Print</p>
            </div>

            <label class="col-sm-2 control-label">Ukuran</label>
            <div class="col-sm-10">
            <p class="form-control-static">: 3 x 4</p>
            </div>

            <label class="col-sm-2 control-label">Warna</label>
            <div class="col-sm-10">
            <p class="form-control-static">: Black & White</p>
            </div>

            <label class="col-sm-2 control-label">Kegiatan</label>
            <div class="col-sm-10">
            <p class="form-control-static">: Perjalanan Panjang Gunung Masurai dan Bakti Sosial Mapala UI Berbagi</p>
            </div>

            <label class="col-sm-2 control-label">Kategori</label>
            <div class="col-sm-10">
            <p class="form-control-static">: BKP; Mountaineering;</p>
            </div>

            <label class="col-sm-2 control-label">Tanggal Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static">: 01 Februari 2012</p>
            </div>

            <label class="col-sm-2 control-label">Lokasi dalam Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static">: SDN Rantau Kermas</p>
            </div>

            <label class="col-sm-2 control-label">Deskripsi Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static">: Anggota Mapala UI sedang melakukan penyuluhan perilaku hidup bersih dan sehat dengan mendemonstrasikan cara menggosok gigi</p>
            </div>

            <label class="col-sm-2 control-label">Editor</label>
            <div class="col-sm-10">
            <p class="form-control-static">: Satria Ramadhan</p>
            </div>

            <label class="col-sm-2 control-label">Tanggal Reproduksi</label>
            <div class="col-sm-10">
            <p class="form-control-static">: 25 October 2014</p>
            </div>

            <label class="col-sm-2 control-label">Pernah Dipublikasi</label>
            <div class="col-sm-10">
            <p class="form-control-static">: http://twitter.com/Mapala_UI</p>
            </div>

            <label class="col-sm-2 control-label">Tanggal Publikasi</label>
            <div class="col-sm-10">
            <p class="form-control-static">: Februari 2012</p>
            </div>

            <label class="col-sm-2 control-label">Catatan</label>
            <div class="col-sm-10">
            <p class="form-control-static">: Catatan</p>
            </div>

            <label class="col-sm-2 control-label">Tag</label>
            <div class="col-sm-10">
            <p class="form-control-static">: PHBS; Bakti Sosial;</p>
            </div>

            <label class="col-sm-2 control-label">Lokasi Foto</label>
            <div class="col-sm-10">
            <p class="form-control-static">: PHBS; Bakti Sosial;</p>
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

