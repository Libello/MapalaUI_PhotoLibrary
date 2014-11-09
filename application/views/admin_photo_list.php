<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Daftar Foto</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css').'/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css').'/admin.css';?>" rel="stylesheet">

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
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('/home');?>"><img src="<?php echo base_url('assets/ico').'/home(admin).png';?>" width="130px"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a id="nav-name" href="<?php echo site_url('/photo_list');?>">Daftar Foto</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/add_photo');?>">Tambah Foto</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/master_data');?>">Master Data</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/guest_log');?>">Daftar Pengunjung</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/logout');?>">Keluar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <div class="top">
          <h1 id="formtitle">Daftar Foto</h1>
        </div>
        <br>
        <p class="lead" id="formdetail">Daftar foto yang telah dimasukkan dalam database.</p>
        <hr>
        <form class="form-horizontal" id="search" role="form" method="post" action="<?php echo site_url('/photo_list');?>/">
          <div class="form-group" id="photodata_search">
            <label for="Search" class="col-sm-1 control-label">Cari:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="inputtext">
              </div>
              <div class="col-sm-2">
                <select class="form-control" id="search_option" name="field">
                  <option value="all">Semua kolom</option>
                  <option value="id">ID Foto</option>
                  <option value="title">Judul</option>
                  <option value="photographer">Fotografer</option>
                  <option value="event">Kegiatan</option>
                  <option value="year">Tahun</option>
                  <option value="location">Lokasi Kegiatan</option>
                </select>
              </div>
              <div class="col-sm-2">
                <select class="form-control" id="search_option" name="activity">
                  <option value="all">Semua Kategori</option>
                  <option value="climbing">Panjat</option>
                  <option value="rafting">Arung Jeram</option>
                  <option value="caving">Telusur Gua</option>
                  <option value="diving">Selam</option>
                  <option value="paragliding">Paralayang</option>
                  <option value="mountaineering">Daki Gunung</option>
                  <option value="sailing">Layar</option>
                  <option value="BKP">BKP</option>
                  <option value="others">Lainnya</option>
                </select>
              </div>
              <div class="col-sm-2">
                <select class="form-control" id="search_option" name="format">
                  <option value="all">Semua Format</option>
                  <option value="digital">Digital</option>
                  <option value="reproscan">Repro / Scan</option>
                  <option value="print">Tercetak</option>
                </select>
              </div>
              <button class="btn" id="btn-save" type="submit">Telusur</button>
          </div>
        </form>
        <hr>
        <br>

        <div id="photodata_button">
          <button class="btn" id="delete_button" data-toggle="modal" data-target="#deletedata_modal">Hapus Data Terpilih</button>
          <input class="btn" id="btn-save" type="button" name="Check_All" value="Pilih Semua" onClick="CheckAll(document.photolist.check_list)">
          <input class="btn" id="btn-save" type="button" name="Un_CheckAll" value="Kosongkan Semua" onClick="UnCheckAll(document.photolist.check_list)">
          <button class="btn" id="btn-save">Ekspor dalam format CSV</button>
        </div>
        <br>

              <!-- Delete Photo Data -->
              <div class="modal fade" id="deletedata_modal" tabindex="-1" role="dialog" aria-labelledby="deletedataLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <h1 id="done">Hapus data terpilih?</h1>
                      <div class="lead" id="btn_modaldelete">
                        <button type="close" class="btn" id="btn-close" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn" id="btn-save">Hapus</button>
                      </div>
                    </div>
                 </div>
                </div>
              </div>
              <!-- Delete Photo Data -->

        <table class="table">
          <tr id="table_header">
            <td>Hapus</td>
            <td>UBAH</td>
            <td>FOTO</td>
            <td>JUDUL FOTO</td>            
            <td>FORMAT</td>
            <td>PEMBARUAN TERAKHIR</td>
          </tr>

          <?php
            foreach ($photolist as $row){
              echo "<tr>";
                echo "<td>";
                  echo "<form name='photolist' action='checkboxes.asp' method='post'><input type='checkbox' name='check_list'>";
                echo "</td>";
                echo "<td>";
                  echo "<a href=".site_url('/edit')."><button class='btn' id='btn-edit'><img src=".base_url('assets/ico').'/edit.png'."></button></a>";
                echo "</td>";
                echo "<td>";
                  echo "<a class='pull-left' data-toggle='modal' data-target='#photo_zoom'><img class='media-object' src=".base_url('assets/img').'/Husky1.jpg'." alt='contoh1' width='100px' id='img-result'></a>";
                echo "</td>";
                echo "<td class='grid'>";
                  echo "<h4><a href=".site_url('/detail').">".$row['title']."</a></h4>";
                  echo "<span>".$row['photographer']."</span>";
                echo "</td>";
                echo "<td>";
                  echo $row['format'];
                echo "</td>";
                echo "<td>";
                  echo $row['last_update'];
                echo "</td>";
              echo "</tr>";
            }
          ?>
          
        </table>

        <div id="photodata_button">
          <button class="btn" id="delete_button" data-toggle="modal" data-target="#deletedata_modal">Hapus Data Terpilih</button>
          <input class="btn" id="btn-save" type="button" name="Check_All" value="Pilih Semua" onClick="CheckAll(document.photolist.check_list)">
          <input class="btn" id="btn-save" type="button" name="Un_CheckAll" value="Kosongkan Semua" onClick="UnCheckAll(document.photolist.check_list)">
          <button class="btn" id="btn-save">Ekspor dalam format CSV</button>
        </div>


        

                <div class="modal fade" id="photo_zoom" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <img src="../assets/img/Husky2.jpg" class="img-responsive" alt="Responsive image">
                      </div>
                    </div>
                  </div>
                </div>








      </div>
    </div>


    <div id="footer">
      <div class="container">
        <p class="text-muted">Mapala UI Photo Library © 2014 oleh <a href="http://twitter.com/nadafadhila">@nadafadhila</a><br><a href="http://getbootstrap.com">Bootstrap</a></p>
      </div>
    </div>
    <!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js').'/jquery.min.js';?>"></script>
    <script src="<?php echo base_url('assets/js').'/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url('assets/js').'/docs.min.js';?>"></script>
    <script LANGUAGE="JavaScript">
      function CheckAll(chk)
      {
      for (i = 0; i < chk.length; i++)
      chk[i].checked = true ;
      }

      function UnCheckAll(chk)
      {
      for (i = 0; i < chk.length; i++)
      chk[i].checked = false ;
      }
    </script>
  </body>
</html>
