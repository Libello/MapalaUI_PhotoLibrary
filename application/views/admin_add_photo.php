<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Add New Photo Data</title>

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
            <li><a id="nav-name" href="<?php echo site_url('/photo_list');?>">Photo List</a></li>
            <li class="active"><a id="nav-name" href="<?php echo site_url('/add_photo');?>">Add Photo</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/master_data');?>">Master Data</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/guest_log');?>">Guest Log</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/logout');?>">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <div class="starter-template">
        <div class="top">
          <h1 id="formtitle">Data Foto Baru</h1>
        </div><br>
        <p class="lead" id="formdetail">Masukkan detail foto pada form di bawah ini.</p>
        <hr>

        
        <form class="form-horizontal" role="form" name="add_photo" method="post" action="<?php echo site_url('/addNewPhoto');?>/">
          <!--Field ID-->
          <div class="form-group">
            <label for="photo_id" class="col-sm-2 control-label">ID Foto</label>
            <div class="col-sm-2 photoid_1">
              <input type="text" class="form-control" name="photo_idKeg" placeholder="Kode Kegiatan" required autofocus>
            </div>

            <div class="slash">
              <div class="col-sm-1" id="slash">
                /
              </div>
            </div>

            <div class="col-sm-1 photoid">
              <input type="text" class="form-control" name="photo_idThn" placeholder="Tahun" required>
            </div>

            <div class="slash">
              <div class="col-sm-1" id="slash">
                /
              </div>
            </div>

            <div class="col-sm-2 photoid">
              <input type="text" class="form-control" name="photo_idNo" placeholder="Nomor Foto" required>
            </div>

            <div class="col-sm-4 photoid">
              <div id="if_explanation">*Format ID harus KODE KEGIATAN/TAHUN/NO.FOTO<br>serta dicantumkan & disamakan dengan ID file foto asli</div>
            </div>
          </div>

          <!--Field Title-->
          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="title" placeholder="Judul foto" required>
            </div>
          </div>

          <!--Select Photographer-->
          <div class="form-group">
            <label for="photographer" class="col-sm-2 control-label">Fotografer</label>
            <div class="col-sm-3">
              <select class="form-control" name="photographer">
                <?php
                  foreach ($photographerlist as $row){
                    echo "<option value=".$row['id'].">";
                      echo $row['name'];
                    echo "</option>";
                  }
                ?>
            </select>
            </div>
          </div>

          <!--Field Format-->
          <div class="form-group">
            <label for="format" class="col-sm-2 control-label">Format</label>
            <div class="col-sm-3">
              <div class="checkbox">
                <input type="checkbox" name="format" value="digital"> Digital
              </div>
              <div class="checkbox">
                <input type="checkbox" name="format" value="repro/scan"> Repro / Scan
              </div>
              <div class="checkbox">
                <input type="checkbox" name="format" value="print"> Tercetak
              </div>
            </div>
          </div>

          <!--Field Size-->
          <div class="form-group">
            <label for="format" class="col-sm-2 control-label">Ukuran</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="size" placeholder="Ukuran atau dimensi foto">
            </div>
          </div>

          <!--Field Color-->
          <div class="form-group">
            <label for="format" class="col-sm-2 control-label">Warna</label>
            <div class="col-sm-3">
            <select class="form-control" name="color">
              <option value="color">Berwarna</option>
              <option value="b&w">Hitam & Putih</option>
              <option value="sephia">Sephia</option>
            </select>
            </div>
          </div>

          <!--Select Event-->
          <div class="form-group">
            <label for="event" class="col-sm-2 control-label">Kegiatan</label>
            <div class="col-sm-9">
              <select class="form-control" name="event">
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

          <!--Checkbox Activity-->
          <div class="form-group">
            <label for="activity" class="col-sm-2 control-label">Kategori</label>
            <div class="col-sm-3">
              <select class="form-control" name="category">
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
          </div>

          <!--Date Taken-->
          <div class="form-group">
            <label for="photo_date" class="col-sm-2 control-label">Tanggal Pengambilan Gambar</label>
            <div class="col-sm-1">
              <select class="form-control" name="taken_date">
                <option value="dd">tgl</option>
                <option disabled>──</option>
                <?php for ($i = 1; $i <= 31; $i++) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="taken_month">
                <option value="bln">bulan</option>
                <option disabled>────────────</option>
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Augustus</option>
                <option>September</option>
                <option>Oktober</option>
                <option>Nopember</option>
                <option>Desember</option>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="taken_year">
                <option value="thn">tahun</option>
                <option disabled>───</option>
                <?php for ($i = 2017; $i >= 1964; $i--) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>

          <!--Taken Location-->
          <div class="form-group">
            <label for="coverage" class="col-sm-2 control-label">Lokasi Pengambilan Gambar (Spesifik)</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="taken_location" placeholder="Lokasi dalam foto secara detail: misalnya 'Sungai Lariang', bukan 'Sulawesi Tengah'">
            </div>
          </div>

          <!--Field Photo Description-->
          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Deskripsi Foto</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="3" name="photo_description" placeholder="Penjelasan foto: misalnya 'Tim pengarungan sedang melakukan istirahat di hari ketiga sembari mereparasi perahu'"></textarea>
            </div>
          </div>

          <!--Insert Photo-->
          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Unggah Foto</label>
            <div class="col-sm-9">
              <input type="file" id="attach_photo">
            </div>
          </div>
           

          <!--Button Other Format Location-->
          

          <!--Select Editor-->
          <div class="form-group">
            <label for="editor" class="col-sm-2 control-label">Editor</label>
            <div class="col-sm-3">
              <select class="form-control" name="editor">
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
            <div class="col-sm-1">
              <select class="form-control" name="repro_date">
                <option value="tgl">tgl</option>
                <option disabled>──</option>
                <?php for ($i = 1; $i <= 31; $i++) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="repro_month">
                <option value="bln">bulan</option>
                <option disabled>────────────</option>
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Augustus</option>
                <option>September</option>
                <option>Oktober</option>
                <option>Nopember</option>
                <option>Desember</option>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="repro_year">
                <option value="thn">tahun</option>
                <option disabled>───</option>
                <?php for ($i = 2017; $i >= 1964; $i--) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>

          <!--Published On-->
          <div class="form-group">
            <label for="published_on" class="col-sm-2 control-label">Tempat Publikasi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="published_on" placeholder="Jika foto pernah dipublikasikan, masukan tempat publikasi dalam kolom ini (nama & edisi koran, majalah, maupun link twitter)">
            </div>
          </div>
          
          <!--Published Date-->
          <div class="form-group">
            <label for="coverage" class="col-sm-2 control-label">Tanggal Publikasi</label>
            <div class="col-sm-1">
              <select class="form-control" name="published_date">
                <option value="tgl">tgl</option>
                <option disabled>──</option>
                <?php for ($i = 1; $i <= 31; $i++) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="published_month">
                <option value="bln">bulan</option>
                <option disabled>────────────</option>
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Augustus</option>
                <option>September</option>
                <option>Oktober</option>
                <option>Nopember</option>
                <option>Desember</option>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="published_year">
                <option value="thn">tahun</option>
                <option disabled>───</option>
                <?php for ($i = 2017; $i >= 1964; $i--) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>

          <!--Field Notes-->
          <div class="form-group">
            <label for="notes" class="col-sm-2 control-label">Catatan</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="3" name="notes" placeholder="Catatan tambahan"></textarea>
            </div>
          </div>

          <!--Field Tag-->
          <div class="form-group">
            <label for="tag" class="col-sm-2 control-label">Tagar?</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tag" placeholder="Pisahkan dengan titik koma(;)">
            </div>
          </div>

           <!--Field Other Format Location-->
           <div class="form-group">
            <label for="tag" class="col-sm-2 control-label">Lokasi Foto Lainnya</label>
            <div class="col-sm-9" id="other_location">
              <p id="if_explanation_modal">Kolom ini diisi jika foto memiliki format tercetak atau dapat pula dijadikan tempat mencatat lokasi foto sebelum diunggah</p><br>
              <div>
              <b>HARD DISK</b>
              <p id="if_explanation_modal">Diisi jika foto berada di hard disk Mapala UI</p>
              </div>
            
              <div class="form-group">
                <label for="harddisk_name" class="col-sm-3 control-label">Hard Disk Name</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="harddisk_name" placeholder="Nama hard disk">
                </div>
              </div>

                  <div class="form-group">
                    <label for="harddisk_folder" class="col-sm-3 control-label">Folder</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="harddisk_folder" placeholder="Nama folder">
                    </div>
                  </div>
                  <hr>

                  <div class="col-sm-3"></div>
                  <div class="col-sm-7">
                    <b>SEKRETARIAT</b>
                    <p id="if_explanation_modal">Diisi jika foto tercetak berada di Sekretariat Mapala UI</p>   
                  </div>            
                  <div class="form-group">
                    <label for="sekretariat_album" class="col-sm-3 control-label">Album Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="sekretariat_album" placeholder="Nama album">
                    </div>
                  </div>
                  <hr>

                  <div class="col-sm-3"></div>
                  <div class="col-sm-7">
                    <b>OTHER</b>
                    <p id="if_explanation_modal">Diisi jika foto berada di luar Sekretariat Mapala UI</p>
                  </div>
                  <div class="form-group">
                    <label for="owner" class="col-sm-3 control-label">Owner</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="owner">
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
            </div>
          </div>


          <hr>

          <!--TOMBOL SELESAI-->

          <p id="formdetail">Selesai? Silakan klik tombol berikut</p>

          <div class="lead">
            <button class="btn btn-default" type="submit" role="button">Simpan</button> <!--data-toggle="modal" data-target="#save_all"-->
          </div>
        </form>
        <!-- Button trigger modal -->
        <br>
        <div id="close_button">
          <button type="reset" class="btn" id="btn">
            Muat Ulang
          </button>
        </div>


        <!--SEMUA MODAL ADA DI SINI-->

        

        <!-- Modal File Location-->
        <div class="modal fade" id="otherlocation_modal" tabindex="-1" role="dialog" aria-labelledby="otherlocation_modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="otherlocation_modalLabel">Other Format Location</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" role="form">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-7">
                    <b>HARD DISK</b>
                    <p id="if_explanation_modal">Diisi jika foto berada di hard disk Mapala UI</p>
                  </div>
                  <div class="form-group">
                    <label for="harddisk_name" class="col-sm-3 control-label">Hard Disk Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="harddisk_name" placeholder="Nama hard disk">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="harddisk_folder" class="col-sm-3 control-label">Folder</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="harddisk_folder" placeholder="Nama folder">
                    </div>
                  </div>
                  <hr>

                  <div class="col-sm-3"></div>
                  <div class="col-sm-7">
                    <b>SEKRETARIAT</b>
                    <p id="if_explanation_modal">Diisi jika foto tercetak berada di Sekretariat Mapala UI</p>   
                  </div>            
                  <div class="form-group">
                    <label for="sekretariat_album" class="col-sm-3 control-label">Album Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="sekretariat_album" placeholder="Nama album">
                    </div>
                  </div>
                  <hr>

                  <div class="col-sm-3"></div>
                  <div class="col-sm-7">
                    <b>OTHER</b>
                    <p id="if_explanation_modal">Diisi jika foto berada di luar Sekretariat Mapala UI</p>
                  </div>
                  <div class="form-group">
                    <label for="owner" class="col-sm-3 control-label">Owner</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="owner">
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
                </form>

                  <div class="col-sm-3"></div>
                  <div class="col-sm-7">
                    <div id="btn_modal">
                      <button class="btn" data-toggle="modal" data-target="#owner_modal">
                          <span class="glyphicon glyphicon-plus"></span> Add Owner
                      </button>
                    </div>
                  </div>

                <!--Owner Modal-->
                <div class="modal fade" id="owner_modal" tabindex="-1" role="dialog" aria-labelledby="ownerLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="ownerLabel">Owner</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('/addOwnerAP');?>/">
                          <div class="form-group">
                            <label for="owner_name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="owner_name" required autofocus>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="owner_phone" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="owner_phone">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="owner_address" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-7">
                              <textarea class="form-control" rows="3" name="owner_address"></textarea>
                            </div>
                          </div>
                        <hr>

                          <div class="lead" id="btn_modalfinish">
                            <button type="close" class="btn" id="btn-close" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn" id="btn-save">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Owner Modal-->

                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="otherlocation_notes" class="col-sm-3 control-label">Notes</label>
                    <div class="col-sm-7">
                      <textarea class="form-control" rows="3" name="otherformat_notes" placeholder="Catatan terkait keberadaan foto"></textarea>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="close" class="btn" id="btn-close" data-dismiss="modal">Close</button>
                <button type="submit" class="btn" id="btn-save">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!--Modal File Location-->

        

      </div>
    </div>




    <div id="footer">
      <div class="container">
        <p class="text-muted">Mapala UI Photo Library © 2014 by <a href="http://twitter.com/nadafadhila">@nadafadhila</a><br><a href="http://getbootstrap.com">Bootstrap</a></p>
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
