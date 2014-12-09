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
            <li><a id="nav-name" href="<?php echo site_url('/photo_list');?>">Daftar Foto</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/add_photo');?>">Tambah Foto</a></li>
            <li class="active"><a id="nav-name" href="<?php echo site_url('/master_data');?>">Master Data</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/guest_log');?>">Daftar Pengunjung</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/logout');?>">Keluar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <div class="starter-template">
        <?php $tabactive = 'event'?>
        <br>
        <ul class="nav nav-tabs" role="tablist">
          <li <?php if($tabactive == 'photographer') echo 'class="active"';?>><a href="#photographer_tab" role="tab" data-toggle="tab">Fotografer</a></li>
          <li <?php if($tabactive == 'event') echo 'class="active"';?>><a href="#event_tab" role="tab" data-toggle="tab">Kegiatan</a></li>
          <li <?php if($tabactive == 'editor') echo 'class="active"';?>><a href="#editor_tab" role="tab" data-toggle="tab">Editor</a></li>
          <li <?php if($tabactive == 'owner') echo 'class="active"';?>><a href="#owner_tab" role="tab" data-toggle="tab">Pemilik Foto</a></li>
        </ul>
        <script type="text/javascript">
          $(".nav-tabs").click(function() {
            $(".nav-tabs").removeClass("active");
            $(this).addClass("active");
          });
        </script>

        <div class="tab-content">

          <?php 
            if($tabactive == 'photographer') {
              echo '<div class="tab-pane active" id="photographer_tab"><br>';
            }
            else {
              echo '<div class="tab-pane" id="photographer_tab"><br>';
            }
          ?>
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
                        <button class="btn" id="btn-edit-master" data-toggle="modal" data-target="#photographer_modal-'.$row['id'].'">Edit</button>
                        <button class="btn" id="btn-edit" data-toggle="modal" data-target="#deletephotographer_modal-'.$row['id'].'"><img src="'.base_url('assets/ico/remove.png').'"></button>
                      ';
                    echo "</td>";
                  echo "</tr>";

                  // Delete Photographer
                  echo '
                    <form method="post" action='.site_url('deletePhotographer/'.$row['id'].'').'>
                      <div class="modal fade" id="deletephotographer_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="deletephotographerLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <h1 id="done">Hapus <span style="color:#887c7c">'.$row['name'].'</span>?</h1>
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

            <!-- Edit Photographer -->
            <?php 
              foreach($photographerlist as $row) {
                if($row["membership"]  == "Mapala UI") {
                  $inputmapala = '<input type="radio" name="photographer_membership" value="Mapala UI" checked>';
                  $inputnonmapala = '<input type="radio" name="photographer_membership" value="Non - Mapala UI">';
                }
                else {
                  $inputnonmapala = '<input type="radio" name="photographer_membership" value="Non - Mapala UI" checked>';
                  $inputmapala = '<input type="radio" name="photographer_membership" value="Mapala UI">';
                }
                echo '
                  <div class="modal fade" id="photographer_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="photographerLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="photographerLabel">Edit Fotografer</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" id="photographermodal" role="form" method="post" action="'.site_url('/editPhotographer').'">
                            <div class="form-group">
                              <label for="photographer_name" class="col-sm-3 control-label">Nama</label>
                              <div class="col-sm-7">
                                <input type="hidden" name="id_photographer" value="'.$row['id'].'">
                                <input type="text" class="form-control" name="photographer_name" value="'.$row['name'].'" required autofocus>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="photographer_membership" class="col-sm-3 control-label">Keanggotaan</label>
                              <div class="col-sm-7">
                                <div class="radio">
                                  <label>
                                    '.$inputmapala.'
                                    Mapala UI
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    '.$inputnonmapala.'
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
                                <input type="text" class="form-control" name="no_m" value="'.$row['no_m'].'" required>
                              </div>
                              <div class="col-sm-2">
                                <div class="well well-sm">-UI</div>
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
                ';
              }
            ?>

            <!--Photographer Modal-->
            <div class="modal fade" id="photographer_modal" tabindex="-1" role="dialog" aria-labelledby="photographerLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="photographerLabel">Tambah Fotografer</h4>
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
          



          <!-- EVENT -->

          <?php 
            if($tabactive == 'event') {
              echo '<div class="tab-pane active" id="event_tab"><br>';
            }
            else {
              echo '<div class="tab-pane" id="event_tab"><br>';
            }
          ?>
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
                foreach($eventlist as $row) {
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
                          <button class="btn" id="btn-edit-master" data-toggle="modal" data-target="#event_modal-'.$row['id'].'">Edit</button>
                          <button class="btn" id="btn-edit" data-toggle="modal" data-target="#deleteevent_modal-'.$row['id'].'"><img src="'.base_url('assets/ico/remove.png').'"></button>
                      ';
                    echo "</td>";
                  echo "</tr>";

                  // Delete Event
                  echo '
                    <form method="post" action='.site_url('deleteEvent/'.$row['id'].'').'>
                      <div class="modal fade" id="deleteevent_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="deleteeventLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <h1 id="done">Hapus <span style="color:#887c7c">'.$row['name'].'</span>?</h1>
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

            <!--Edit Event Modal-->
            <?php 
              foreach ($eventlist as $row) {
                echo '
                  <div class="modal fade" id="event_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="eventLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="eventLabel">Edit Kegiatan</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" role="form" method="post" action="'.site_url('/editEvent').'"/">
                            <div class="form-group">
                              <label for="event_name" class="col-sm-3 control-label">Nama</label>
                              <div class="col-sm-7">
                                <input type="hidden" name="event_id" value="'.$row['id'].'">
                                <input type="text" class="form-control" name="event_name" value="'.$row['name'].'" required autofocus>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="event_location" class="col-sm-3 control-label">Lokasi</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="location" value="'.$row['location'].'">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="event_period" class="col-sm-3 control-label">Periode</label>
                              <div class="col-sm-3">
                                <select class="form-control" name="start_year">';
                                  if($row['start_year'] == '-') {
                                    echo '<option value="-" selected >Tahun mulai</option>
                                          <option disabled>───</option>
                                    ';
                                  }
                                  else {
                                    echo '<option value="-">Tahun mulai</option>
                                          <option disabled>───</option>
                                    ';
                                  }
                                  for ($i = 2017; $i >= 1960; $i--) {
                                    if($row['start_year'] == $i) {
                                      echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                    }
                                    else {
                                      echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                  } 
                echo '          </select>
                              </div>
                              <div class="col-sm-1">s/d</div>
                              <div class="col-sm-3">
                                <select class="form-control" name="end_year">';
                                  if($row['end_year'] == '-') {
                                    echo '<option value="-" selected >Tahun selesai</option>
                                          <option disabled>───</option>
                                    ';
                                  }
                                  else {
                                    echo '<option value="-">Tahun selesai</option>
                                          <option disabled>───</option>
                                    ';
                                  }
                                  for ($i = 2017; $i >= 1960; $i--) {
                                    if($row['end_year'] == $i) {
                                      echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                    }
                                    else {
                                      echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                  }  
                echo '          </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="category" class="col-sm-3 control-label">Kategori</label>
                              <div class="col-sm-8">
                                <div class="checkbox">
                                  <input type="checkbox" name="category[]" value=" Panjat"> Panjat</input>
                                </div>
                                <div class="checkbox">
                                  <input type="checkbox" name="category[]" value=" Arung Jeram"> Arung Jeram</input>
                                </div>
                                <div class="checkbox">
                                  <input type="checkbox" name="category[]" value=" Telusur Gua"> Telusur Gua</input>
                                </div>
                                <div class="checkbox">
                                  <input type="checkbox" name="category[]" value=" Selam"> Selam</input>
                                </div>
                                <div class="checkbox">
                                  <input type="checkbox" name="category[]" value=" Layar"> Layar</input>
                                </div>
                                <div class="checkbox">
                                  <input type="checkbox" name="category[]" value=" Daki Gunung"> Daki Gunung</input>
                                </div>
                                <div class="checkbox">
                                  <input type="checkbox" name="category[]" value=" Paralayang"> Paralayang</input>
                                </div>
                                <div class="checkbox">
                                  <input type="checkbox" name="category[]" value=" BKP"> BKP</input>
                                </div>
                                <div class="checkbox">
                                  <input type="checkbox" name="category[]" value=" Lainnya"> Lainnya</input>
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
                ';
              }
            ?>

            <!--Event Modal-->
            <div class="modal fade" id="event_modal" tabindex="-1" role="dialog" aria-labelledby="eventLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="eventLabel">Tambah Kegiatan</h4>
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
                            <option selected value="-">Tahun mulai</option>
                            <option disabled>───</option>
                            <?php for ($i = 2017; $i >= 1960; $i--) : ?>
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                          </select>
                        </div>
                        <div class="col-sm-1">s/d</div>
                        <div class="col-sm-3">
                          <select class="form-control" name="end_year">
                            <option selected value="-">Tahun selesai</option>
                            <option disabled>───</option>
                            <?php for ($i = 2017; $i >= 1960; $i--) : ?>
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="category" class="col-sm-3 control-label">Kategori</label>
                        <div class="col-sm-8">
                          <div class="checkbox">
                            <input type="checkbox" name="category[]" value=" Panjat"> Panjat</input>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" name="category[]" value=" Arung Jeram"> Arung Jeram</input>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" name="category[]" value=" Telusur Gua"> Telusur Gua</input>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" name="category[]" value=" Selam"> Selam</input>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" name="category[]" value=" Layar"> Layar</input>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" name="category[]" value=" Daki Gunung"> Daki Gunung</input>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" name="category[]" value=" Paralayang"> Paralayang</input>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" name="category[]" value=" BKP"> BKP</input>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" name="category[]" value=" Lainnya"> Lainnya</input>
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
          </div>
           





           <!-- EDITOR -->
          <?php 
            if($tabactive == 'editor') {
              echo '<div class="tab-pane active" id="editor_tab"><br>';
            }
            else {
              echo '<div class="tab-pane" id="editor_tab"><br>';
            }
          ?>
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
                        <a class="pull-left" data-toggle="modal" data-target="#editor_modal-'.$row['id'].'"><button class="btn" id="btn-edit-master">Edit</button></a>
                        <button class="btn" id="btn-edit" data-toggle="modal" data-target="#deleteeditor_modal-'.$row['id'].'"><img src="'.base_url('assets/ico/remove.png').'"></button>
                      ';
                    echo "</td>";
                  echo "</tr>";

                  // Delete Editor
                  echo '
                    <form method="post" action='.site_url('deleteEditor/'.$row['id'].'').'>
                      <div class="modal fade" id="deleteeditor_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="deleteeditorLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <h1 id="done">Hapus <span style="color:#887c7c">'.$row['name'].'</span>?</h1>
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

            <!-- Edit Editor -->
            <?php 
              foreach($editorlist as $row) {
                if($row["membership"]  == "Mapala UI") {
                  $inputmapala = '<input type="radio" name="editor_membership" value="Mapala UI" checked>';
                  $inputnonmapala = '<input type="radio" name="editor_membership" value="Non - Mapala UI">';
                }
                else {
                  $inputnonmapala = '<input type="radio" name="editor_membership" value="Non - Mapala UI" checked>';
                  $inputmapala = '<input type="radio" name="editor_membership" value="Mapala UI">';
                }
                echo '
                  <div class="modal fade" id="editor_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="editorLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="editorLabel">Edit Editor</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" id="editormodal" role="form" method="post" action="'.site_url('/editEditor').'">
                            <div class="form-group">
                              <label for="editor_name" class="col-sm-3 control-label">Nama</label>
                              <div class="col-sm-7">
                                <input type="hidden" name="id_editor" value="'.$row['id'].'">
                                <input type="text" class="form-control" name="editor_name" value="'.$row['name'].'" required autofocus>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="editor_membership" class="col-sm-3 control-label">Keanggotaan</label>
                              <div class="col-sm-7">
                                <div class="radio">
                                  <label>
                                    '.$inputmapala.'
                                    Mapala UI
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    '.$inputnonmapala.'
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
                                <input type="text" class="form-control" name="no_m" value="'.$row['no_m'].'" required>
                              </div>
                              <div class="col-sm-2">
                                <div class="well well-sm">-UI</div>
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
                ';
              }
            ?>

            <!--Editor Modal-->
            <div class="modal fade" id="editor_modal" tabindex="-1" role="dialog" aria-labelledby="editorLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="editorLabel">Tambah Editor</h4>
                  </div>
                  <div class="modal-body">
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
                          <input type="text" class="form-control" name="no_m" required/>
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
          
          <?php 
            if($tabactive == 'owner') {
              echo '<div class="tab-pane active" id="owner_tab"><br>';
            }
            else {
              echo '<div class="tab-pane" id="owner_tab"><br>';
            }
          ?>
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
                      echo '<a class="pull-left" data-toggle="modal" data-target="#owner_modal-'.$row['id'].'"><button class="btn" id="btn-edit-master">Edit</button></a>
                            <button class="btn" id="btn-edit" data-toggle="modal" data-target="#deleteowner_modal-'.$row['id'].'"><img src="'.base_url('assets/ico/remove.png').'"></button>';
                    echo "</td>";
                  echo "</tr>";


                  echo '
                    <form method="post" action='.site_url('deleteOwner/'.$row['id'].'').'>
                      <div class="modal fade" id="deleteowner_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="deleteownerLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <h1 id="done">Hapus <span style="color:#887c7c">'.$row['name'].'</span>?</h1>
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

            <!-- Edit Owner -->
            <?php 
              foreach($ownerlist as $row) {
                echo '
                  <div class="modal fade" id="owner_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="ownerLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="ownerLabel">Edit Pemilik Foto</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" id="ownermodal" role="form" method="post" action="'.site_url('/editOwner').'">
                            <div class="form-group">
                              <label for="owner_name" class="col-sm-3 control-label">Nama</label>
                              <div class="col-sm-7">
                                <input type="hidden" name="id_owner" value="'.$row['id'].'">
                                <input type="text" class="form-control" name="owner_name" value="'.$row['name'].'" required autofocus>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="owner_phone" class="col-sm-3 control-label">No. Telepon</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="owner_phone" value="'.$row['phone'].'">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="owner_address" class="col-sm-3 control-label">Alamat</label>
                              <div class="col-sm-7">
                                <textarea class="form-control" rows="3" name="owner_address">'.$row['address'].'</textarea>
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
                ';
              }
            ?>

                <!--Owner Modal-->
                <div class="modal fade" id="owner_modal" tabindex="-1" role="dialog" aria-labelledby="ownerLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="ownerLabel">Tambah Pemilik Foto</h4>
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
