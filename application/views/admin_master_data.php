<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Master Data</title>

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
            <li><a id="nav-name" href="<?php echo site_url('/add_photo');?>">Add Photo</a></li>
            <li class="active"><a id="nav-name" href="<?php echo site_url('/master_data');?>">Master Data</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/guest_log');?>">Guest Log</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/logout');?>">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">



        <br>
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#photographer_tab" role="tab" data-toggle="tab">Fotografer</a></li>
          <li><a href="#event_tab" role="tab" data-toggle="tab">Kegiatan</a></li>
          <li><a href="#editor_tab" role="tab" data-toggle="tab">Editor</a></li>
          <li><a href="#owner_tab" role="tab" data-toggle="tab">Pemilik Foto</a></li>
        </ul>
        <script type="text/javascript">
          $(".nav-tabs").click(function() {
            $(".nav-tabs").removeClass("active");
            $(this).addClass("active");
          });
        </script>

        <div class="tab-content">
          <div class="tab-pane active" id="photographer_tab"><br>
            <h1 id="masterdata_header">Daftar Fotografer</h1>
            <div id="btn_modalmasterdata">
              <button class="btn" data-toggle="modal" data-target="#photographer_modal">
                <span class="glyphicon glyphicon-plus"></span> Tambah Fotografer
              </button>
            </div><br>
            <table class="table">
              <tr id="table_header">
                <td>Nama</td>
                <td>Keanggotaan</td>
                <td>No. Mapala UI</td>
                <td>Pilihan</td>
              </tr>
              <?php
                foreach ($photographerlist as $row){
                  echo "<tr>";
                    echo "<td>";
                      echo $row['name'];
                    echo "</td>";
                    echo "<td>";
                      if($row['membership']) {
                        echo $row['membership'];
                      }
                      else {
                        echo "-";
                      }
                    echo "</td>";
                    echo "<td>";
                      if($row['no_m'] == '0') {
                        echo "-";
                      }
                      else {
                        echo "M-".$row['no_m']."-UI";
                      }
                    echo "</td>";
                    echo "<td>";
                      echo '
                        <form method="post" action="admin_controller/deletePhotographer/'.$row['id'].'/">
                          <a class="pull-left" data-toggle="modal" data-target="#photographer_modal">
                              <button class="btn" id="btn-edit-master">Edit</button>
                          </a>
                          <button class="btn" id="btn-edit" data-toggle="modal" data-target="#deletephotographer_modal"><img src="'.base_url('assets/ico/remove.png').'"></button>
                        </form>
                      ';
                    echo "</td>";
                  echo "</tr>";
                }
              ?>             
            </table>

              <!-- Delete Photographer -->
              <div class="modal fade" id="deleteevent_modal" tabindex="-1" role="dialog" aria-labelledby="deleteeventLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <h1 id="done">Hapus Fotografer?</h1>
                      <div class="lead" id="btn_modaldelete">
                        <button type="close" class="btn" id="btn-close" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn" id="btn-save">Hapus</button>
                      </div>
                    </div>
                 </div>
                </div>
              </div>
              <!-- Delete Photographer -->

              <!--Photographer Modal-->
              <div class="modal fade" id="photographer_modal" tabindex="-1" role="dialog" aria-labelledby="photographerLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="photographerLabel">Fotografer</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" id="photographermodal" role="form" method="post" action="<?php echo site_url('/addPhotographer');?>/">
                      <div class="form-group">
                        <label for="photographer_name" class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="photographer_name" required autofocus>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="photographer_membership" class="col-sm-3 control-label">Keanggotaan</label>
                        <div class="col-sm-7">
                          <div class="radio">
                            <label>
                              <input type="radio" name="photographer_membership" value="Mapala UI" checked>
                              Mapala UI
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="photographer_membership" value="Non - Mapala UI" >
                              Non - Mapala UI
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="photographer_no.M" class="col-sm-3 control-label">No. M</label>
                        <div class="col-sm-2">
                          <div class="well well-sm">M-</div>
                        </div>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" name="no_m" required>
                        </div>
                        <div class="col-sm-2">
                          <div class="well well-sm">-UI</div>
                        </div>
                      </div>
                      <br>

                      <hr>

                      <div class="lead" id="btn_modalfinish">
                        <button type="close" class="btn" id="btn-close" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn" id="btn-save" onclick="return validatePhotographer();">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Photographer Modal-->
          </div>
          
          

          <div class="tab-pane" id="event_tab"><br>
            <h1 id="masterdata_header">Daftar Kegiatan</h1>
            <div id="btn_modalmasterdata">
              <button class="btn" data-toggle="modal" data-target="#event_modal">
                  <span class="glyphicon glyphicon-plus"></span> Tambah Kegiatan
              </button>
            </div><br>
            <table class="table">
              <tr id="table_header">
                <td>Nama Kegiatan</td>
                <td>Lokasi</td>
                <td>Periode</td>
                <td>Kategori</td>
                <td>Pilihan</td>
              </tr>

                <?php
                foreach ($eventlist as $row){
                  echo "<tr>";
                    echo "<td>";
                      echo $row['name'];
                    echo "</td>";
                    echo "<td>";
                      if($row['location']) {
                        echo $row['location'];
                      }
                      else {
                        echo "-";
                      }
                    echo "</td>";
                    echo "<td>";
                      if($row['start_year'] == $row['end_year']) {
                        echo $row['start_year'];
                      }
                      else {
                        echo "".$row['start_year']." s/d ".$row['end_year']."";
                      }
                    echo "</td>";
                    echo "<td>";
                      echo $row['category'];
                    echo "</td>";
                    echo "<td>";
                      echo '
                        <form method="post" action="admin_controller/deleteEvent/'.$row['id'].'/">
                          <a class="pull-left" data-toggle="modal" data-target="#event_modal">
                              <button class="btn" id="btn-edit-master">Ubah</button>
                          </a>
                          <button class="btn" id="btn-edit" data-toggle="modal" data-target="#deleteevent_modal"><img src="'.base_url('assets/ico/remove.png').'"></button>
                        </form>
                      ';
                    echo "</td>";
                  echo "</tr>";
                }
              ?>                
            </table>

              <!-- Delete Event -->
              <div class="modal fade" id="deleteevent_modal" tabindex="-1" role="dialog" aria-labelledby="deleteeventLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <h1 id="done">Hapus Kegiatan?</h1>
                      <div class="lead" id="btn_modaldelete">
                        <button type="close" class="btn" id="btn-close" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn" id="btn-save">Hapus</button>
                      </div>
                    </div>
                 </div>
                </div>
              </div>
              <!-- Delete Event -->

              <!--Event Modal-->
              <div class="modal fade" id="event_modal" tabindex="-1" role="dialog" aria-labelledby="eventLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="eventLabel">Kegiatan</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('/addEvent');?>/">
                          <div class="form-group">
                            <label for="event_name" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="event_name" required autofocus>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="event_location" class="col-sm-3 control-label">Lokasi</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="location">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="event_period" class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-3">
                              <select class="form-control" name="start_year">
                                <option selected value="-">thn</option>
                                <option disabled>───</option>
                                <?php for ($i = 2017; $i >= 1960; $i--) : ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                              </select>
                            </div>
                            <div class="col-sm-1">s/d</div>
                            <div class="col-sm-3">
                              <select class="form-control" name="end_year">
                                <option selected value="-">thn</option>
                                <option disabled>───</option>
                                <?php for ($i = 2017; $i >= 1960; $i--) : ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="category" class="col-sm-3 control-label">Kategori</label>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-7">
                            <div class="form-group">
                              <div class="checkbox">
                                <input type="checkbox" name="category" value="climbing"> Panjat</input>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" name="category" value="rafting"> Arung Jeram</input>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" name="category" value="caving"> Telusur Gua</input>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" name="category" value="diving"> Selam</input>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" name="category" value="sailing"> Layar</input>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" name="category" value="mountaineering"> Daki Gunung</input>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" name="category" value="paragliding"> Paralayang</input>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" name="category" value="BKP"> BKP</input>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" name="category" value="others"> Lainnya</input>
                              </div>
                            </div>
                            </div>
                          </div>

                          <hr>

                          <div class="lead" id="btn_modalfinish">
                            <button type="close" class="btn" id="btn-close" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn" id="btn-save">Simpan</button>
                          </div>
                        </form>
                      </div>
                      </div>
                    </div>
                  </div>
                  <!--Event Modal-->

          </div>


          <div class="tab-pane" id="editor_tab"><br>
            <h1 id="masterdata_header">Daftar Editor</h1>
            <div id="btn_modalmasterdata">
              <button class="btn" data-toggle="modal" data-target="#editor_modal">
                  <span class="glyphicon glyphicon-plus"></span> Tambah Editor
              </button>
            </div><br>
            <table class="table">
              <tr id="table_header">
                <td>Nama</td>
                <td>Keanggotaan</td>
                <td>No. Mapala UI</td>
                <td>Pilihan</td>
              </tr>
              <?php
                foreach ($editorlist as $row){
                  echo "<tr>";
                    echo "<td>";
                      echo $row['name'];
                    echo "</td>";
                    echo "<td>";
                      echo $row['membership'];
                    echo "</td>";
                    echo "<td>";
                      if($row['membership'] == 'Mapala UI') {
                        echo "M-".$row['no_m']."-UI";
                      }
                      else {
                        echo "-";
                      }
                    echo "</td>";
                    echo "<td>";
                      echo '
                        <form method="post" action="admin_controller/deleteEditor/'.$row['id'].'/">
                          <a class="pull-left" data-toggle="modal" data-target="#editor_modal">
                              <button class="btn" id="btn-edit-master">Ubah</button>
                          </a>
                          <button class="btn" id="btn-edit" data-toggle="modal" data-target="#deleteeditor_modal" onclick="return confirm();"><img src="'.base_url('assets/ico/remove.png').'"></button>
                        </form>
                      ';
                    echo "</td>";
                  echo "</tr>";
                }
              ?>             
            </table>

            <script type="text/javascript">
              function confirm(){
                return document.forms["edit"];
              }
            </script>

              <!-- Delete Editor -->
              <div class="modal fade" id="deleteeditor_modal" tabindex="-1" role="dialog" aria-labelledby="deleteeditorLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <h1 id="done">Hapus editor?</h1>
                      <div class="lead" id="btn_modaldelete">
                        <form id="edit">
                          <button type="close" class="btn" id="btn-close" data-dismiss="modal" onclick="return false;">Keluar</button>
                          <button type="submit" class="btn" id="btn-save" onclick="return true;">Hapus</button>
                        </form>
                      </div>
                    </div>
                 </div>
                </div>
              </div>
              <!-- Delete Editor -->

              <!--Editor Modal-->
              <div class="modal fade" id="editor_modal" tabindex="-1" role="dialog" aria-labelledby="editorLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="editorLabel">Editor</h4>
                      </div>
                      <div class="modal-body">
                        <!-- action="<?php //echo site_url('/addEditor');?>/" -->
                        <form class="form-horizontal" id="editormodal" role="form" method="post" action="<?php echo site_url('/addEditor');?>">
                          <div class="form-group">
                            <label for="editor_name" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="editor_name" required autofocus>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="editor_membership" class="col-sm-3 control-label">Keanggotaan</label>
                            <div class="col-sm-7">
                              <div class="radio">
                                <label>
                                  <input type="radio" name="editor_membership" value="Mapala UI" checked>
                                  Mapala UI
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="editor_membership" value="Non - Mapala UI">
                                  Non - Mapala UI
                                </label>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="editor_no.M" class="col-sm-3 control-label">No. M</label>
                            <div class="col-sm-2">
                              <div class="well well-sm">M-</div>
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" name="no_m" required>
                            </div>
                            <div class="col-sm-2">
                              <div class="well well-sm">-UI</div>
                            </div>
                          </div>
                          <br>

                          <hr>

                          <div class="lead" id="btn_modalfinish">
                            <button type="close" class="btn" id="btn-close" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn" id="btn-save" value="submit" onclick="return validateEditor();">Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Editor Modal-->

          </div>


          <div class="tab-pane" id="owner_tab"><br>
            <h1 id="masterdata_header">Daftar Pemilik Foto</h1>
            <div id="btn_modalmasterdata">
              <button class="btn" data-toggle="modal" data-target="#owner_modal">
                  <span class="glyphicon glyphicon-plus"></span> Tambah Pemilik
              </button>
            </div><br>
            <table class="table">
              <tr id="table_header">
                <td>Nama</td>
                <td>No. Telepon</td>
                <td>Alamat</td>
                <td>Pilihan</td>
              </tr>

                <?php
                foreach ($ownerlist as $row){
                  echo "<tr>";
                    echo "<td>";
                      echo $row['name'];
                    echo "</td>";
                    echo "<td>";
                      if($row['phone']) {
                        echo $row['phone'];
                      }
                      else {
                        echo "-";
                      }
                    echo "</td>";
                    echo "<td>";
                      if($row['address']) {
                        echo $row['address'];
                      }
                      else {
                        echo "-";
                      }
                    echo "</td>";
                    echo "<td>";
                      echo '<a class="pull-left" data-toggle="modal" data-target="#owner_modal">
                              <button class="btn" id="btn-edit-master">Ubah</button>
                            </a>
                            <button class="btn" id="btn-edit" data-toggle="modal" data-target="#deleteowner_modal"><img src="'.base_url('assets/ico/remove.png').'"></button>';
                    echo "</td>";
                  echo "</tr>";
                }
              ?>      
            </table>

                <!-- Delete Owner -->
                <div class="modal fade" id="deleteowner_modal" tabindex="-1" role="dialog" aria-labelledby="deleteownerLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h1 id="done">Hapus pemilik foto?</h1>
                        <div class="lead" id="btn_modaldelete">
                          <button type="close" class="btn" id="btn-close" data-dismiss="modal">Keluar</button>
                          <button type="submit" class="btn" id="btn-save">Hapus</button>
                        </div>
                      </div>
                   </div>
                  </div>
                </div>
                <!-- Delete Owner -->

                <!--Owner Modal-->
                <div class="modal fade" id="owner_modal" tabindex="-1" role="dialog" aria-labelledby="ownerLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="ownerLabel">Pemilik Foto</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('/addOwner');?>/">
                          <div class="form-group">
                            <label for="owner_name" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="owner_name" required autofocus>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="owner_phone" class="col-sm-3 control-label">No. Telepon</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="owner_phone">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="owner_address" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-7">
                              <textarea class="form-control" rows="3" name="owner_address"></textarea>
                            </div>
                          </div>
                        <hr>

                          <div class="lead" id="btn_modalfinish">
                            <button type="close" class="btn" id="btn-close" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn" id="btn-save">Simpan</button>
                          </div>
                        </form>
                      </div>
                      </div>
                    </div>
                  </div>
                  <!--Owner Modal-->

          </div>








        </div>
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
      //Disabling field no_m jika buka anggota mapala
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

      //Fungsi untuk validasi input no_m pada editor dan photographer
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

      //Fungsi untuk mengatur active tab
      $(document).ready(function() {
        $("#tabs").tabs({active: document.tabTest.currentTab.value});

        $('#tabs a').click(function(e) {
          var curTab = $('.ui-tabs-active');
          curTabIndex = curTab.index();
          document.tabTest.currentTab.value = curTabIndex;
        });
      });
    </script>
  </body>
</html>
