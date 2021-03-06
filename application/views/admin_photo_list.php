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
        <div id="searchBar">
        <hr>
        <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('/photo_list');?>/">
          <div class="form-group" id="photodata_search">
            <label for="Search" class="col-sm-1 control-label">Cari:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="inputtext">
              </div>
              <div class="col-sm-2">
                <select class="form-control" id="search_option" name="field">
                  <option value="all">Semua Kolom</option>
                  <option value="id_photo">ID Foto</option>
                  <option value="title">Judul</option>
                  <option value="name_photographer">Fotografer</option>
                  <option value="name_event">Kegiatan</option>
                  <option value="taken_date">Tahun</option>
                  <option value="taken_location">Lokasi</option>
                </select>
              </div>
              <div class="col-sm-2">
                <select class="form-control" id="search_option" name="activity">
                  <option value="all">Semua Kategori</option>
                  <option value="Panjat">Panjat</option>
                  <option value="Arung Jeram">Arung Jeram</option>
                  <option value="Telusur Gua">Telusur Gua</option>
                  <option value="Selam">Selam</option>
                  <option value="Paralayang">Paralayang</option>
                  <option value="Daki Gunung">Daki Gunung</option>
                  <option value="Layar">Layar</option>
                  <option value="BKP">BKP</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
              <div class="col-sm-2">
                <select class="form-control" id="search_option" name="format">
                  <option value="all">Semua Format</option>
                  <option value="Digital">Digital</option>
                  <option value="Repro / Scan">Repro / Scan</option>
                  <option value="Tercetak">Tercetak</option>
                </select>
              </div>
              <input type="hidden" name="flag" value="ccc">
              <button class="btn" id="btn-save" type="submit">Cari</button>
          </div>
        </form>
        <hr>
      </div>

      <div>
        <?php
          if($data_search != null) {
            echo '
              <button class="btn btn-default disabled" id="searchBy"><span class="glyphicon glyphicon-tag"></span>'; 
              if($data_search['field'] != "all") {
                if($data_search['field'] == 'id_photo') {echo ' ID Foto';}
                if($data_search['field'] == 'title') {echo ' Judul';}
                if($data_search['field'] == 'name_photographer') {echo ' Fotografer';}
                if($data_search['field'] == 'name_event') {echo ' Kegiatan';}
                if($data_search['field'] == 'taken_date') {echo ' Tahun';}
                if($data_search['field'] == 'taken_location') {echo ' Lokasi';}
              } 
              else {
                echo ' Semua Kolom';
              } 
              echo ': '.$data_search['inputtext'].'</button>
              <button class="btn btn-default disabled" id="searchBy"><span class="glyphicon glyphicon-tag"></span>'; 
              if($data_search['activity'] != "all") {
                echo ' '.$data_search['activity'].'';
              }
              else {
                echo ' Semua Kategori';
              } 
              echo'</button>
              <button class="btn btn-default disabled" id="searchBy"><span class="glyphicon glyphicon-tag"></span>'; 
              if($data_search['format'] != "all") {
                echo ' '.$data_search['format'].'';
              } 
              else {
                echo ' Semua Format';
              } 
              echo'</button>
            ';
          }
          else {
            echo '
              <button class="btn btn-default disabled" id="searchBy"><span class="glyphicon glyphicon-tag"></span> Semua Koleksi</button>
            ';
          }
        ?>
      </div>
      <br><br>



        <div id="photodata_button" class="pull-left">
          <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('/export_to_csv');?>/">
            <?php
              if($data_search == null) {
                echo '<input type="hidden" name="flag" value="aaa"/>';
              } 
              else {
                echo '<input type="hidden" name="flag" value="bbb"/>';
                echo '<input type="hidden" name="activity" value="'.$data_search['activity'].'"/>';
                echo '<input type="hidden" name="format" value="'.$data_search['format'].'"/>';
                echo '<input type="hidden" name="inputtext" value="'.$data_search['inputtext'].'"/>';
                echo '<input type="hidden" name="field" value="'.$data_search['field'].'"/>';
              }
            ?>
            <button class="btn" id="btn-save" type="submit">Ekspor dalam format CSV</button>
          </form>
        </div>
        <div class="pull-right" id="photodata_pagination">
          <nav>
            <ul class="pagination">
              <li class="previous disabled"><a href="#">&larr; Terbaru</a></li>
              <li class="disabled"><span>&laquo;</span></li>
              <li class="active"><span>1 <span class="sr-only">(current)</span></span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
              <li class="next"><a href="#">Terdahulu &rarr;</a></li>
            </ul>
          </nav>
        </div>
        <br>


        <table class="table">
          <tr id="table_header">
            <td>NO</td>
            <td>PILIHAN</td>
            <td>FOTO</td>
            <td>JUDUL FOTO</td>            
            <td>FORMAT</td>
            <td>PEMBARUAN TERAKHIR</td>
          </tr>

          <?php
            $count = 1;
            foreach ($photolist as $row){
              echo "<tr>
                      <td>
                        ".$count++.".
                      </td>
                      <td>
                        <button class='btn' id='btn-edit2' data-toggle='modal' data-target='#deletedata_modal-".$row['id']."'><img src='".base_url('assets/ico/remove.png')."'></button>
                        <a href=".site_url('edit/'.$row['id'].'')."><button class='btn' id='btn-edit2'>Edit</button></a>
                      </td>
                      <td>
                        <a class='pull-left' data-toggle='modal' style='cursor:zoom-in' data-target='#".$row['id']."'><img class='thumbnail' src=".base_url('assets/foto').'/'.$row['image']." alt='contoh1' width='110px' id='img-result'></a>
                      </td>
                      <td class='grid'>
                        <h4>
                          <a href=".site_url('detail/'.$row['id'].'').">".$row['title']."</a>
                        </h4>
                        <a href=".site_url('event_detail/'.$row['id_event'].'')."><p>".$row['event']."</p></a>
                        <span-photographer>".$row['photographer']."</span>
                        <br>
                        <span class='glyphicon glyphicon-tag'> </span><a href=".site_url('category_detail/'.$row['category'].'').">".$row['category']."</a>                        
                      </td>
                      <td>
                        ".$row['format']."
                      </td>
                      <td>
                        ".$row['last_update']."
                      </td>
                    </tr>";

              echo '<div class="modal fade" id="'.$row['id'].'" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <img src="'.base_url('assets/foto').'/'.$row['image'].'" class="img-responsive" alt="'.$row['image'].'">
                            <p><a id="btn-photodetail" href="'.site_url('/detail/'.$row['id'].'').'" role="button">Lihat Detail Foto &raquo;</a></p>
                          </div>
                        </div>
                      </div>
                    </div>';

              echo '
                    <form method="post" action='.site_url('deletePhotoData/'.$row['id'].'').'>
                      <div class="modal fade" id="deletedata_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="deleteownerLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <h1 id="done">Hapus <span style="color:#887c7c">'.$row['title'].'</span>?</h1>
                              <div class="lead" id="btn_modaldelete">
                                <button type="submit" class="btn" id="btn-save">Hapus</button>
                                <button type="close" class="btn" id="btn-close" data-dismiss="modal">Keluar</button>                                
                              </div>
                            </div>
                         </div>
                        </div>
                      </div>
                    </form>
                  ';
            }
          ?>
        </table>
        <?php 
          if($photolist == null) {
            echo 'Tidak ada koleksi';
          }
        ?>
        <hr>

        <div id="photodata_button" class="pull-left">
          <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('/export_to_csv');?>/">
            <?php
              if($data_search == null) {
                echo '<input type="hidden" name="flag" value="aaa"/>';
              } 
              else {
                echo '<input type="hidden" name="flag" value="bbb"/>';
                echo '<input type="hidden" name="activity" value="'.$data_search['activity'].'"/>';
                echo '<input type="hidden" name="format" value="'.$data_search['format'].'"/>';
                echo '<input type="hidden" name="inputtext" value="'.$data_search['inputtext'].'"/>';
                echo '<input type="hidden" name="field" value="'.$data_search['field'].'"/>';
              }
            ?>
            <button class="btn" id="btn-save" type="submit">Ekspor dalam format CSV</button>
          </form>
        </div>
        <div class="pull-right" id="photodata_pagination">
          <nav>
            <ul class="pagination">
              <li class="previous disabled"><a href="#">&larr; Terbaru</a></li>
              <li class="disabled"><span>&laquo;</span></li>
              <li class="active"><span>1 <span class="sr-only">(current)</span></span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
              <li class="next"><a href="#">Terdahulu &rarr;</a></li>
            </ul>
          </nav>
        </div>

      </div>
    </div>
    <br>
    <br>


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
