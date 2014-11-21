<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Edit Data Foto</title>

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
            <li><a id="nav-name" href="<?php echo site_url('/photo_list');?>">Daftar Foto</a></li>
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
          <h1 id="formtitle">Edit Data Foto</h1>
        </div><br>
        <p class="lead" id="formdetail">Form berikut digunakan untuk mengubah data foto.</p>
        <div>
          <hr>
            <div id="searchBar"><span class="required-top">*</span><span id="formdetail"> = Harus diisi</span></div>
          <hr>
        </div>
        

        <form class="form-horizontal" role="form" name="add_photo" method="post" enctype="multipart/form-data" action="<?php echo site_url('/editPhoto');?>">
          
          <div class="col-sm-3"></div>
          <img name="userfile" class="col-sm-6 thumbnail" id="imageEdit" src="<?php echo base_url('assets/foto').'/'.$photo_upload ?>" width="500px">
          <div class="col-sm-3"></div>
          <!--TOMBOL SELESAI-->
          <div class="form-group" id="savebtn-top">
            <div class="lead pull-right">
              <button class="btn" id="btn-close">
                Kembali
              </button>
              <button class="btn btn-default" type="submit" role="button">
                Simpan
              </button>
            </div>
          </div>
          <hr>

          
        

          <!--Field ID-->
          <div class="form-group">
            <label for="photo_id" class="col-sm-2 control-label">ID Foto</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="photo_id" value="<?php echo $id_photo ?>" disabled>
            </div>
          </div>

          <!--Field Title-->
          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="title" value="<?php echo $title ?>" required>
            </div>
            <p class="col-sm-1 required">*</label>
          </div>

          <!--Select Photographer-->
          <div class="form-group">
            <label for="photographer" class="col-sm-2 control-label">Fotografer</label>
            <div class="col-sm-3">
              <select class="form-control" name="photographer">
                <option value="<?php echo $id_photographer ?>"><?php echo $name_photographer ?></option>
                <option disabled>──────────────────────</option>
                <option value="Tidak diketahui">Tidak diketahui</option>
                <?php
                  foreach ($photographerlist as $row){
                    echo "<option value=".$row['id'].">";
                      echo $row['name'];
                    echo "</option>";
                  }
                ?>
            </select>
            </div>
            <p class="col-sm-1 required">*</p>
          </div>

          <!--Field Format-->
          <div class="form-group">
            <label for="format" class="col-sm-2 control-label">Format</label>
            <div class="col-sm-2">
              <div class="checkbox">
                <input type="checkbox" name="format[]" value="Digital"> Digital
              </div>
              <div class="checkbox">
                <input type="checkbox" name="format[]" value="Repro / Scan"> Repro / Scan
              </div>
              <div class="checkbox">
                <input type="checkbox" name="format[]" value="Tercetak"> Tercetak
              </div>
            </div>
            <p class="col-sm-1 required">*</p>
          </div>

          <!--Field Color-->
          <div class="form-group">
            <label for="format" class="col-sm-2 control-label">Warna</label>
            <div class="col-sm-3">
            <select class="form-control" name="color">
              <option value="<?php echo $color ?>"><?php echo $color ?></option>
              <option disabled>──────────────────────</option>
              <option value="Berwarna">Berwarna</option>
              <option value="Hitam Putih">Hitam & Putih</option>
              <option value="Sephia">Sephia</option>
            </select>
            </div>
            <p class="col-sm-1 required">*</p>
          </div>

          <!--Select Event-->
          <div class="form-group">
            <label for="event" class="col-sm-2 control-label">Kegiatan</label>
            <div class="col-sm-9">
              <select class="form-control" name="event">
                <option value="<?php echo $id_event ?>"><?php echo $name_event ?></option>
                <option disabled>──────────────────────────────────────────────────────────────────────────────</option>
                <option value="-">...</option>
                <?php
                  foreach ($eventlist as $row){
                    echo "<option value=".$row['id'].">";
                      echo $row['name'];
                    echo "</option>";
                  }
                ?>
            </select>
            </div>
          </div>

          
          <!--Select Category-->
          <div class="form-group">
            <label for="category" class="col-sm-2 control-label">Kategori</label>
            <div class="col-sm-3">
              <select class="form-control" name="category">
                <option value="<?php echo $category ?>"><?php echo $category ?></option>
                <option disabled>──────────────────────</option>
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
            <p class="col-sm-1 required">*</p>
          </div>

          <!--Date Taken-->
          <div class="form-group">
            <label for="taken_date" class="col-sm-2 control-label">Tanggal Foto</label>
            <?php
              if($taken_date == ' - / - / - ') {
                echo '<div class="col-sm-1">
                      <select class="form-control" name="taken_date">
                        <option value=" - ">tgl</option>
                        <option disabled>───</option>';
                        for ($i = 1; $i <= 31; $i++) echo '<option value="'.$i.'">'.$i.'</option>';

                echo '</select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control" name="taken_month">
                        <option value=" - ">bulan</option>
                        <option disabled>────────────</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Augustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="Nopember">Nopember</option>
                        <option value="Desember">Desember</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control" name="taken_year">
                        <option value=" - ">tahun</option>
                        <option disabled>────────────</option>
                        <?php for ($i = 2017; $i >= 1964; $i--) : ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                      </select>
                    </div>';
              }
              else {
                echo '<div class="col-sm-4">
                  <input type="text" class="form-control" name="takendate" value="'.$taken_date.'" required>
                </div>';
              }
            ?>
          </div>

          <!--Taken Location-->
          <div class="form-group">
            <label for="coverage" class="col-sm-2 control-label">Lokasi dalam Foto (Spesifik)</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="taken_location" value="<?php echo $taken_location ?>">
            </div>
          </div>

          <!--Field Photo Description-->
          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Deskripsi Foto</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" rows="3" name="photo_description" value="<?php echo $description ?>">
            </div>
          </div>
           
          

        <div id="form-groupGrey">
          <!--Select Editor-->
          <div class="form-group">
            <label for="editor" class="col-sm-2 control-label">Editor</label>
            <div class="col-sm-3">
              <select class="form-control" name="editor">
                <option value="<?php echo $id_editor ?>"><?php echo $name_editor ?></option>
                <option disabled>──────────────────────</option>
                <option value="-">...</option>
                <?php
                  foreach ($editorlist as $row){
                    echo "<option value=".$row['id'].">";
                      echo $row['name'];
                    echo "</option>";
                  }
                ?>
            </select>
            </div>
          </div>

          <!--Repro Date-->
          <div class="form-group">
            <label for="repro_date" class="col-sm-2 control-label">Tanggal Reproduksi</label>
            <?php
              if($repro_date == ' - / - / - ') {
                echo '<div class="col-sm-1">
                      <select class="form-control" name="repro_date">
                        <option value=" - ">tgl</option>
                        <option disabled>───</option>';
                        for ($i = 1; $i <= 31; $i++) echo '<option value="'.$i.'">'.$i.'</option>';
                echo '</select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control" name="repro_month">
                        <option value=" - ">bulan</option>
                        <option disabled>────────────</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Augustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="Nopember">Nopember</option>
                        <option value="Desember">Desember</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control" name="repro_year">
                        <option value=" - ">tahun</option>
                        <option disabled>────────────</option>';
                        for ($i = 2017; $i >= 1964; $i--) echo '<option value="'.$i.'">'.$i.'</option>';
                echo '</select>
                    </div>';
              }
              else {
                echo '<div class="col-sm-4">
                  <input type="text" class="form-control" name="reprodate" value="'.$repro_date.'" required>
                </div>';
              }
            ?>
          </div>
        </div>


          <!--Published On-->
          <div class="form-group">
            <br>
            <label for="published_on" class="col-sm-2 control-label">Tempat Publikasi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="published_on" value="<?php echo $published_on ?>">
            </div>
          </div>
          
          <!--Published Date-->
          <div class="form-group">
            <label for="coverage" class="col-sm-2 control-label">Tanggal Publikasi</label>
            <?php
              if($published_date == ' - / - / - ') {
                echo '<div class="col-sm-1">
                      <select class="form-control" name="published_date">
                        <option value=" - ">tgl</option>
                        <option disabled>───</option>';
                        for ($i = 1; $i <= 31; $i++) echo '<option value="'.$i.'">'.$i.'</option>';
                echo '</select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control" name="published_month">
                        <option value=" - ">bulan</option>
                        <option disabled>─────────────</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Augustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="Nopember">Nopember</option>
                        <option value="Desember">Desember</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control" name="published_year">
                        <option value=" - ">tahun</option>
                        <option disabled>────────────</option>';
                        for ($i = 2017; $i >= 1964; $i--) echo '<option value="'.$i.'">'.$i.'</option>';
                echo '</select>
                    </div>';
              }
              else {
                echo '<div class="col-sm-4">
                  <input type="text" class="form-control" name="publisheddate" value="'.$published_date.'" required>
                </div>';
              }
            ?>
          </div>

          <div id="form-groupGrey">
            <br>
          <!--Field Notes-->
          <div class="form-group">
            <label for="notes" class="col-sm-2 control-label">Catatan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="notes" value="<?php echo $notes ?>">
            </div>
          </div>

          <!--Field Tag-->
          <div class="form-group">
            <label for="tag" class="col-sm-2 control-label">Subjek</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tag" value="<?php echo $tag ?>">
            </div>
          </div>

           <!--Field Other Format Location-->
           <div class="form-group">
            <label for="tag" class="col-sm-2 control-label">Lokasi</label>
            <div class="col-sm-7" id="other_location">

              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  <div class="panel-heading">
                    <p id="if_explanation_modal">Kolom ini diisi jika foto memiliki duplikat, format tercetak, atau dapat pula dijadikan tempat mencatat lokasi foto sementara sebelum diunggah</p>
                  </div>
                  </a>
                  <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">    
                      <div>
                        <b>HARD DISK</b>
                        <p id="if_explanation_modal">Diisi jika foto berada di hard disk Mapala UI</p>
                      </div>
                    
                      <div class="form-group">
                        <label for="harddisk_name" class="col-sm-3 control-label" id="other_locationLabel">Nama Hard Disk</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="HDD_name" value="<?php echo $location_HDD_name ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="HDD_folder" class="col-sm-3 control-label" id="other_locationLabel">Folder</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="HDD_folder" value="<?php echo $location_HDD_folder ?>">
                        </div>
                      </div>
                      <hr>

                      <div>
                        <b>SEKRETARIAT</b>
                        <p id="if_explanation_modal">Diisi jika foto tercetak berada di Sekretariat Mapala UI</p>   
                      </div>

                      <div class="form-group">
                        <label for="sekretariat_album" class="col-sm-3 control-label" id="other_locationLabel">Nama Album</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="sekretariat_album" value="<?php echo $location_sekret_album ?>">
                        </div>
                      </div>
                      <hr>

                      <div>
                        <b>LAINNYA</b>
                        <p id="if_explanation_modal">Diisi jika foto berada di luar Sekretariat Mapala UI</p>
                      </div>

                      <div class="form-group">
                        <label for="owner" class="col-sm-3 control-label" id="other_locationLabel">Pemilik Foto</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="owner">
                            <option value="<?php echo $id_owner ?>"><?php echo $name_owner ?></option>
                            <option disabled>───────────────────────────────────</option>
                            <option value="-">...</option>
                            <?php
                              foreach ($ownerlist as $row){
                                echo "<option value=".$row['id'].">";
                                  echo $row['name'];
                                echo "</option>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <hr>

                      <div>
                        <b>CATATAN</b>
                        <p id="if_explanation_modal">Diisi dengan catatan terkait keberadaan foto</p>   
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="other_notes" value="<?php echo $location_notes ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>


          <hr>

          <!--TOMBOL SELESAI-->
          <div class="lead pull-right" id="savebtn-bottom">
            <button class="btn" id="btn-close">
              Kembali
            </button>
            <button class="btn btn-default" type="submit" role="button">
              Simpan
            </button>
          </div>
        </form>



        

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
    <script>
      var formeditor = document.forms['editormodal'];
      var formphotographer = document.forms['photographermodal'];
      formeditor.editor_membership[0].onfocus = function() {
        formeditor.no_m.disabled = false;
      }
      formeditor.editor_membership[1].onfocus = function() {
        formeditor.no_m.disabled = true;
      }
      formphotographer.photographer_membership[0].onfocus = function() {
        formphotographer.no_m.disabled = false;
      }
      formphotographer.photographer_membership[1].onfocus = function() {
        formphotographer.no_m.disabled = true;
      }
      function validateEditor() {
        if(/^[0-9]*$/.test(formeditor.no_m.value)) {
          return true;
        }
        else {
          alert("Input harus berupa angka!");
          return false;
        }
      }
      function validatePhotographer() {
        if(/^[0-9]*$/.test(formphotographer.no_m.value)) {
          return true;
        }
        else {
          alert("Input harus berupa angka!");
          return false;
        }
      }
    </script>
  </body>
</html>
