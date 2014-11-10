<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Tentang MUIPL</title>

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
              <li class="active"><a id="nav_name" href="<?php echo site_url('/others');?>"><span class="glyphicon glyphicon-copyright-mark"></span><br>Tentang MUIPL</a></li>
              <form class="navbar-form navbar-left" role="search" id="simple_search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Cari koleksi">
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
      <div class="starter-template"><br>
        <br>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#about" role="tab" data-toggle="tab">Tentang MUIPL</a></li>
          <li><a href="#contact_mapalaui" role="tab" data-toggle="tab">Kontak Mapala UI</a></li>
          <li><a href="#contact_creators" role="tab" data-toggle="tab">Kontak Pembuat MUIPL</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="about">
            <div class="jumbotron">
              <h1 id="about_jumbotron">Halloo!</h1>
              <p id="about_detail"><b> Mapala UI Photo Library (MUIPL)</b> merupakan sebuah aplikasi pengelolaan koleksi foto yang dibuat khusus untuk Organisasi Mahasiswa Pecinta Alam Universitas Indonesia atau Mapala UI. Dengan menggunakan aplikasi ini kamu dapat mencari dan melihat koleksi foto Mapala UI yang terdapat dalam <i>database</i>. Untuk menambah data foto, kamu harus menghubungi administrator.<br><br><b>Selamat menggunakan!</b></p>
            </div>

            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <div class="panel-heading">
                  <h4 class="panel-title">Dibuat Oleh
                  </h4>
                </div>
                </a>
                <div id="collapseOne" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="../assets/img/Nada.jpg" alt="Nada">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">Qatrunnada Fadhila</h4><hr>
                        Mahasiswi Ilmu Perpustakaan Fakultas Ilmu Pengetahuan Budaya Universitas Indonesia 2010 sekaligus anggota Mapala UI BKP 2011 
                        <i>"MASURIANSSSS!!!"</i> dengan nomor M-873-UI.
                        <i>Dunno what to say, but thank's Mapala UI!</i> <b>Mapala UI Photo Library</b> merupakan proyek skripsi saya, semoga bermanfaat! 
                        <i>Anyway</i> berkat skripsi ini saya menjadi suka <i>coding</i> hihi :D
                        <br>Dalam pembuatan MUIPL saya bertugas membuat konsep, seluruh interface dan beberapa bagian <i>back-end</i>.<hr>
                        qatrunnada.fadhila@gmail.com | <a href="http://www.twitter.com/nadafadhila">@nadafadhila</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <div class="panel-heading">
                  <h4 class="panel-title">Dibantu Oleh</h4>
                </div>
              </a>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="../assets/img/Satria.jpg" alt="Satria">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">Satria Ramadhan</h4><hr>
                        Mahasiswa Ilmu Komputer Fasilkom UI angkatan 2011 sekaligus anggota Mapala UI BKP 2012 dengan nomor M-877-UI ini 
                        merupakan orang yang selalu menjadi teman mengobrol dan bertanya macam-macam. 
                        Ia adalah orang pertama yang benar-benar mengenalkan saya <i>coding</i>, 
                        sehingga sekarang saya ngga cuma mengandalkan insting sok tahu lagi walaupun pada akhirnya tetap harus sok tahu hihi. 
                        Terima kasih banyak untuk segala bantuannya! Satria adalah orang yang paling banyak membantu di sini, terutama untuk urusan <i>back-end</i> :)<hr>
                        satriaramadhan93@gmail.com | <a href="http://www.twitter.com/satriaramadhn">@satriaramadhn</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <div class="panel-heading">
                  <h4 class="panel-title">Pembimbing Skripsi</h4>
                </div>
                </a>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="../assets/img/Arie.jpeg" alt="Arie">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">Arie Nugraha, S.Hum., M.T.I.</h4><hr>
                        Pembimbing saya!<hr>
                        dicarve@gmail.com | <a href="http://www.twitter.com/dicarve">@dicarve</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
          <div class="tab-pane" id="contact_mapalaui">
            <h1 id="contact_header">Mapala UI</h1><br>
            Sekretariat Mahasiswa Pecinta Alam Universitas Indonesia<br>
            Gedung Pusat Kegiatan Mahasiswa (Pusgiwa) Lantai 1<br>
            Kampus Universitas Indonesia Depok, 16424<br>
            <img src="../assets/ico/phone.png">  (021) 78884872<br>
            <img src="../assets/ico/mail3.png">  mapala_ui@yahoo.com<br>
            <img src="../assets/ico/home1.png"> <a href="http://www.mapala.ui.ac.id">www.mapala.ui.ac.id</a><br>
            <img src="../assets/ico/facebook2.png">  <a href="http://www.facebook.com/mapala.ui">Mapala UI</a><br>
            <img src="../assets/ico/twitter2.png">  <a href="http://twitter.com/mapala_ui">@Mapala_UI</a><br>
            <img src="../assets/ico/instagram.png">  <a href="http://instagram.com/mapala_ui">mapala_ui</a><br>
            <img src="../assets/ico/run.png">  <a href="http://runforiver.com/">RunForiver</a><br>
            <br>
            <hr>
          </div>
          <div class="tab-pane" id="contact_creators">
            <div id="contact_creator">
              <h1 id="contact_header">Qatrunnada Fadhila</h1><br>
              <img src="../assets/ico/mail3.png">  qatrunnada.fadhila@gmail.com<br>
              <img src="../assets/ico/facebook2.png">  <a href="http://www.facebook.com/qatrunnadafadhila">Qatrunnada Fadhila</a><br>
              <img src="../assets/ico/twitter2.png">  <a href="http://twitter.com/nadafadhila">@nadafadhila</a><br>
              <img src="../assets/ico/tumblr2.png">  <a href="http://homokvcingiusnomaden.tumblr.com">Homokvcingius Nomaden</a><br>
            </div>
            <br>
            <div id="contact_creator">
              <h1 id="contact_header">Satria Ramadhan</h1><br>
              <img src="../assets/ico/mail3.png">  satriaramadhan93@gmail.com<br>
              <img src="../assets/ico/facebook2.png">  <a href="http://www.facebook.com/satria.ramadhan.3956?fref=ts">Satria Ramadhan</a><br>
              <img src="../assets/ico/twitter2.png">  <a href="http://twitter.com/satriaramadhn">@satriaramadhn</a><br>
              <img src="../assets/ico/wordpress2.png">  <a href="http://abangiya.wordpress.com/">Abang Iya</a><br>
              <br>
            </div>
            <hr>
          </div>
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
