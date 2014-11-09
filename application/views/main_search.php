<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Penelusuran</title>

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
              <li class="active"><a id="nav_name" href="<?php echo site_url('/search');?>">Penelusuran</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/gallery');?>">Galeri</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/others');?>">Tentang MUIPL</a></li>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Penelusuran sederhana">
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
                    <span class=" glyphicon glyphicon-user"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <?php
                      if($userId = 'admin') {
                        echo '<li><a href="'.site_url('/photo_list').'">Halaman Admin</a></li>';
                        echo '<li><a href="'.site_url('/logout').'">Keluar Admin</a></li>';
                      }
                      else { 
                        echo '<li><a href="'.site_url('/logout').'">Keluar Aja</a></li>';
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
        <h1 id="search_header">Penelusuran Lanjutan</h1><hr>
        <form class="form-horizontal" id="search" role="form" method="post" action="<?php echo site_url('/doSearch');?>/">
          <div class="form-group" id="search_guest">
            <label for="format" class="col-sm-2 control-label">Format:</label>
            <div class="col-sm-2">
              <select class="form-control" id="format" name="format">
                <option value="all">Semua</option>
                <option value="digital">Digital</option>
                <option value="reproscan">Repro / Scan</option>
                <option value="print">Tercetak</option>
              </select>
            </div><br><br>

            <label for="color" class="col-sm-2 control-label">Warna:</label>
            <div class="col-sm-2">
              <select class="form-control" id="color" name="color">
                <option value="all">Semua</option>
                <option value="color">Berwarna</option>
                <option value="blackwhite">Hitam & Putih</option>
                <option value="sephia">Sephia</option>
              </select>
            </div><br><br>

            <label for="activity" class="col-sm-2 control-label">Kategori:</label>
            <div class="col-sm-2">
              <select class="form-control" id="activity" name="activity">
                <option value="all">Semua</option>
                <option value="climbing">Panjat</option>
                <option value="rafting">Arung Jeram</option>
                <option value="caving">Telusur Gua</option>
                <option value="diving">Selam</option>
                <option value="paragliding">Paralayang</option>
                <option value="mountaineering">Daki Gunung</option>
                <option value="sailing">Layar</option>
                <option value="bkp">BKP</option>
                <option value="others">Lainnya</option>
              </select>
            </div><br><br>
              
            <div class="col-sm-2">
              <select class="form-control">
                <option>Semua</option>
                <option selected>Judul</option>
                <option>Fotografer</option>
                <option>Kegiatan</option>
                <option>Tahun</option>
                <option>Lokasi</option>
              </select>
            </div>
            <div class="col-sm-4"><input type="text" class="form-control" placeholder="Search"></div>
            <div class="col-sm-2">
              <select class="form-control">
                <option>dan</option>
                <option>atau</option>
                <option>bukan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-2">
              <select class="form-control">
                <option>Semua</option>
                <option>Judul</option>
                <option selected>Fotografer</option>
                <option>Kegiatan</option>
                <option>Tahun</option>
                <option>Lokasi</option>
              </select>
            </div>
            <div class="col-sm-4"><input type="text" class="form-control" placeholder="Search"></div>
            <div class="col-sm-2">
              <select class="form-control">
                <option>and</option>
                <option>or</option>
                <option>not</option>
              </select>
            </div>
          </div>

          <div class="form-group">  
            <div class="col-sm-2">
              <select class="form-control">
                <option>All Field</option>
                <option>Title</option>
                <option>Photographer</option>
                <option>Event</option>
                <option selected>Year</option>
                <option>Location</option>
              </select>
            </div>
            <div class="col-sm-4"><input type="text" class="form-control" placeholder="Search"></div>
            <div class="col-sm-2">
              <select class="form-control">
                <option>and</option>
                <option>or</option>
                <option>not</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-2">
              <select class="form-control">
                <option>All Field</option>
                <option>Title</option>
                <option>Photographer</option>
                <option>Event</option>
                <option>Year</option>
                <option selected>Location</option>
              </select>
            </div>
            <div class="col-sm-4"><input type="text" class="form-control" placeholder="Search"></div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-default">Cari</button>
            </div>
          </div>
        </form>

        <br>




        <h1 id="search_header">Hasil Penelusuran</h1><hr>
        <div class="search_result">
          <div class="media">
            <a class="pull-left" data-toggle="modal" data-target="#img-result_modal">
              <img class="media-object" src="../assets/img/Husky.jpg" alt="contoh1" width="150px" id="img-result">
            </a>
            <div class="media-body">
              <a href="<?php echo site_url('/detail');?>" role="button"><h4 class="media-heading">Ini Adalah Judul Foto 1</h4></a>
              <p>oleh <i> Fotografer</i> | digital, print | Others | <b>Ini Adalah Nama Album</b> | 2014 | Depok, Indonesia</p>
              <p><a id="btn-photodetail" href="<?php echo site_url('/detail');?>" role="button">Detail &raquo;</a></p>
            </div>
          </div>

          <div class="media">
            <a class="pull-left" data-toggle="modal" data-target="#img-result_modal">
              <img class="media-object" src="../assets/img/Husky1.jpg" alt="contoh2" width="150px" id="img-result">
            </a>
            <div class="media-body">
              <a id="btn-photodetail" href="<?php echo site_url('/detail');?>" role="button"><h4 class="media-heading">Ini Adalah Judul Foto 2</h4></a>
              <p>oleh <i> Fotografer</i> | digital | Others | <b>Ini Adalah Nama Album</b> | 2014 | Depok, Indonesia</p>
              <p><a id="btn-photodetail" href="<?php echo site_url('/detail');?>" role="button">Detail &raquo;</a></p>
            </div>
          </div>

          <div class="media">
            <a class="pull-left" data-toggle="modal" data-target="#img-result_modal">
              <img class="media-object" src="../assets/img/Husky2.jpg" alt="contoh3" width="150px" id="img-result">
            </a>
            <div class="media-body">
              <a id="btn-photodetail" href="<?php echo site_url('/detail');?>" role="button"><h4 class="media-heading">Ini Adalah Judul Foto 3</h4></a>
              <p>oleh <i> Fotografer</i> | repro/scan | Others | <b>Ini Adalah Nama Album</b> | 2014 | Depok, Indonesia</p>
              <p><a id="btn-photodetail" href="<?php echo site_url('/detail');?>" role="button">Detail &raquo;</a></p>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="img-result_modal" tabindex="-1" role="dialog" aria-labelledby="img-result_modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <img src="../assets/img/Husky.jpg" class="img-responsive" alt="Responsive image">
              </div>
            </div>
          </div>
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
