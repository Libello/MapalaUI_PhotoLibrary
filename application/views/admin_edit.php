<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Photo Data Editor</title>

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
          <a class="navbar-brand" href="<?php echo site_url('/home');?>"><img src="../assets/ico/home(admin).png" width="130px"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a id="nav-name" href="<?php echo site_url('/photo_list');?>">Photo List</a></li>
            <li><a id="nav-name" href="<?php echo site_url('/add_photo');?>">Add Photo</a></li>
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
          <h1 id="formtitle">Edit Data Foto</h1>
        </div><br>
        <p class="lead" id="formdetail">Form berikut digunakan untuk mengubah data foto.</p>
        <hr>

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="photo_id" class="col-sm-2 control-label">Photo ID</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="photo_id" value="Kode Kegiatan/Tahun/No.Foto">
            </div>
          </div>

          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="photo_title" value="Judul foto">
            </div>
          </div>

          <div class="form-group">
            <label for="photographer" class="col-sm-2 control-label">Photographer</label>
            <div class="col-sm-3">
              <select class="form-control" name="photographer">
              <option>Qatrunnada Fadhila</option>
              <option>Satria Ramadhan</option>
              <option>...</option>
            </select>
            </div>
          </div>
        </form>


        <div id="btn_modal">
          <button class="btn" data-toggle="modal" data-target="#photographer_modal">
              <span class="glyphicon glyphicon-plus"></span> Add Photographer
          </button>
        </div>

                <!--Photographer Modal-->
                <div class="modal fade" id="photographer_modal" tabindex="-1" role="dialog" aria-labelledby="photographerLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="photographerLabel">Photographer</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label for="photographer_name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="photographer_name" value="Nama juru foto">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="photographer_membership" class="col-sm-3 control-label">Membership</label>
                            <div class="col-sm-7">
                              <div class="radio">
                                <label>
                                  <input type="radio" name="optionsRadios" id="mapalaui" value="option1" checked>
                                  Mapala UI
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="optionsRadios" id="notmapalaui" value="option2">
                                  Not - Mapala UI
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
                              <input type="text" class="form-control" id="photographer_no.M">
                            </div>
                            <div class="col-sm-2">
                              <div class="well well-sm">-UI</div>
                            </div>
                          </div>

                          <div class="col-sm-3"></div>
                          <div class="col-sm-7" id="if_explanation">*No. M diisi jika fotografer berstatus anggota Mapala UI</div><br>

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
                  <!--Photographer Modal-->
          

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="format" class="col-sm-2 control-label">Format</label>
            <div class="col-sm-3">
              <div class="checkbox">
                <input type="checkbox"> Digital
              </div>
              <div class="checkbox">
                <input type="checkbox"> Repro / Scan
              </div>
              <div class="checkbox">
                <input type="checkbox"> Print
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="format" class="col-sm-2 control-label">Size</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="size" value="Ukuran atau dimensi foto: 4R, 2x3, 400x600, dll">
            </div>
          </div>

          <div class="form-group">
            <label for="format" class="col-sm-2 control-label">Color</label>
            <div class="col-sm-9">
            <select class="form-control" name="color">
              <option>Color</option>
              <option>Black & White</option>
              <option>Sephia</option>
            </select>
            </div>
          </div>

          <div class="form-group">
            <label for="event" class="col-sm-2 control-label">Event</label>
            <div class="col-sm-9">
              <select class="form-control" name="event">
              <option>Arung Jeram Sungai Lariang dan Telusur Taman Nasional Lore Lindu (TNLL)</option>
              <option>Perjalanan Panjang Gunung Masurai dan Bakti Sosial Mapala UI Berbagi</option>
              <option>...</option>
            </select>
            </div>
          </div>
        </form>


        <div id="btn_modal">
          <button class="btn" data-toggle="modal" data-target="#event_modal">
              <span class="glyphicon glyphicon-plus"></span> Add Event
          </button>
        </div>

              <!-- Event Modal -->
                <div class="modal fade" id="event_modal" tabindex="-1" role="dialog" aria-labelledby="eventLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="eventLabel">Event</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label for="event_name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="event_name" value="Nama kegiatan">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="event_location" class="col-sm-3 control-label">Location</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="event_location" value="Lokasi berlangsungnya kegiatan">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="event_period" class="col-sm-3 control-label">Period</label>
                            <div class="col-sm-3">
                              <select class="form-control" name="event_start">
                                <option>year</option>
                                <option disabled>───</option>
                                <?php for ($i = 1960; $i <= 2017; $i++) : ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                              </select>
                            </div>
                            <div class="col-sm-1">s/d</div>
                            <div class="col-sm-3">
                              <select class="form-control" name="event_end">
                                <option>year</option>
                                <option disabled>───</option>
                                <?php for ($i = 1960; $i <= 2017; $i++) : ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                              </select>
                            </div>
                          </div>

                          <div class="col-sm-3"></div>
                          <div class="col-sm-7" id="if_explanation">*Period diisi dengan tahun berlangsungnya kegiatan</div><br>

                          <div class="form-group">
                            <label for="event_category" class="col-sm-3 control-label">Category</label>
                            <div class="col-sm-7">
                            <select class="form-control">
                              <option>Climbing</option>
                              <option>Rafting</option>
                              <option>Caving</option>
                              <option>Diving</option>
                              <option>Paragliding</option>
                              <option>Mountaineering</option>
                              <option>Sailing</option>
                              <option>BKP</option>
                              <option>Others</option>
                            </select>
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
                  <!--Event Modal-->

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="activity" class="col-sm-2 control-label">Activity</label>
            <div class="col-sm-1">
              <div class="checkbox">
                <input type="checkbox"> Climbing
              </div>
              <div class="checkbox">
                <input type="checkbox"> Rafting
              </div>
              <div class="checkbox">
                <input type="checkbox"> Caving
              </div>
              <div class="checkbox">
                <input type="checkbox"> Diving
              </div>
              <div class="checkbox">
                <input type="checkbox"> Paragliding
              </div>
              <div class="checkbox">
                <input type="checkbox"> Mountaineering
              </div>
              <div class="checkbox">
                <input type="checkbox"> Sailing
              </div>
              <div class="checkbox">
                <input type="checkbox"> BKP
              </div>
              <div class="checkbox">
                <input type="checkbox"> Others
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="photo_date" class="col-sm-2 control-label">Taken Date</label>
            <div class="col-sm-1">
              <select class="form-control" name="taken_date">
                <option>dd</option>
                <option disabled>──</option>
                <?php for ($i = 1; $i <= 31; $i++) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="taken_month">
                <option>month</option>
                <option disabled>────────────</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="taken_year">
                <option>year</option>
                <option disabled>───</option>
                <?php for ($i = 1960; $i <= 2017; $i++) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="coverage" class="col-sm-2 control-label">Detail Location</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="photo_location" value="Lokasi dalam foto secara detail: misalnya 'Sungai Lariang', bukan 'Sulawesi Tengah'">
            </div>
          </div>

          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Photo Description</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="3" name="photo_description" value="Penjelasan foto: misalnya 'Tim pengarungan sedang melakukan istirahat di hari ketiga sembari mereparasi perahu'"></textarea>
            </div>
          </div>
        </form>

        <div id="btn_modal_insert">
          <button class="btn" data-toggle="modal" data-target="#insert-photo_modal">
              Insert Photo
          </button>
        </div>

        <!-- Modal Insert Photo-->
        <div class="modal fade" id="insert-photo_modal" tabindex="-1" role="dialog" aria-labelledby="insertphotoLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="insertphotoLabel">Insert Photo</h4>
              </div>
              <div class="modal-body">
                <p id="attachphoto">Attach Photo:<p>
                  <div id="insertphoto_attach">
                    <input type="file" id="attach_photo">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn" id="btn-close" data-dismiss="modal">Close</button>
                <button type="button" class="btn" id="btn-save">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <br>
        <!---Modal Insert Photo-->

        <div id="btn_modal">
          <button class="btn" data-toggle="modal" data-target="#otherlocation_modal">
              Other Format Location
          </button>
        </div><br>

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
                      <input type="text" class="form-control" name="harddisk_name" value="Nama hard disk">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="harddisk_folder" class="col-sm-3 control-label">Folder</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="harddisk_folder" value="Nama folder">
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
                      <input type="text" class="form-control" name="sekretariat_album" value="Nama album">
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
                      <option>Qatrunnada Fadhila</option>
                      <option>Satria Ramadhan</option>
                      <option>...</option>
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
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label for="photographer_name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="owner_name" value="Qatrunnada Fadhila">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="owner_phone" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="owner_phone" value="Nomor telepon pemilik foto">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="owner_address" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="owner_address" value="Alamat pemilik foto">
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
                      <textarea class="form-control" rows="3" name="otherformat_notes" value="Catatan terkait keberadaan foto"></textarea>
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

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="editor" class="col-sm-2 control-label">Editor</label>
            <div class="col-sm-3">
              <select class="form-control" name="editor">
              <option>Qatrunnada Fadhila</option>
              <option>Satria Ramadhan</option>
              <option>...</option>
            </select>
            </div>
          </div>
        </form>


        <div id="btn_modal">
          <button class="btn" data-toggle="modal" data-target="#editor_modal">
              <span class="glyphicon glyphicon-plus"></span> Add Editor
          </button>
        </div>

                <!--Editor Modal-->
                <div class="modal fade" id="editor_modal" tabindex="-1" role="dialog" aria-labelledby="editorLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="editorLabel">Editor</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label for="editor_name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="editor_name" value="Nama pengedit atau pereproduksi foto">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="editor_membership" class="col-sm-3 control-label">Membership</label>
                            <div class="col-sm-7">
                              <div class="radio">
                                <label>
                                  <input type="radio" name="optionsRadios" id="mapalaui" value="option1" checked>
                                  Mapala UI
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="optionsRadios" id="notmapalaui" value="option2">
                                  Not - Mapala UI
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
                              <input type="text" class="form-control" name="editor_no.M">
                            </div>
                            <div class="col-sm-2">
                              <div class="well well-sm">-UI</div>
                            </div>
                          </div>

                          <div class="col-sm-3"></div>
                          <div class="col-sm-7" id="if_explanation">*No. M diisi jika editor berstatus anggota Mapala UI</div><br>
                          
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
                  <!--Editor Modal-->

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="repro_date" class="col-sm-2 control-label">Repro Date</label>
            <div class="col-sm-1">
              <select class="form-control" name="repro_date">
                <option>dd</option>
                <option disabled>──</option>
                <?php for ($i = 1; $i <= 31; $i++) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="repro_month">
                <option>month</option>
                <option disabled>────────────</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="repro_year">
                <option>year</option>
                <option disabled>───</option>
                <?php for ($i = 1960; $i <= 2017; $i++) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="published_on" class="col-sm-2 control-label">Published On</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="related" value="Nama tempat publikasi seperti koran, majalah, maupun twitter, instagram, dll">
            </div>
          </div>
          
          <div class="form-group">
            <label for="coverage" class="col-sm-2 control-label">Published Date</label>
            <div class="col-sm-1">
              <select class="form-control" name="published_date">
                <option>dd</option>
                <option disabled>──</option>
                <?php for ($i = 1; $i <= 31; $i++) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="published_month">
                <option>month</option>
                <option disabled>────────────</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="published_year">
                <option>year</option>
                <option disabled>───</option>
                <?php for ($i = 1960; $i <= 2017; $i++) : ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="notes" class="col-sm-2 control-label">Notes</label>
            <div class="col-sm-9">
              <textarea class="form-control" rows="3" name="notes" value="Catatan tambahan"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="tag" class="col-sm-2 control-label">Tag</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tag" value="Pisahkan dengan titik koma(;)">
            </div>
          </div>
        </form>

        <hr>

        <p id="formdetail">Selesai? Silakan klik tombol berikut</p>
        <!-- Button trigger modal -->
        <br><div id="saveall_button">
          <button class="btn" id="btn" data-toggle="modal" data-target="#save_all">
            Save
          </button>
        </div><br>
        <div id="close_button">
          <button class="btn" id="btn">
            Reload
          </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="save_all" tabindex="-1" role="dialog" aria-labelledby="save_allLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="save_allLabel">Save</h4>
              </div>
              <div class="modal-body">
                <h1 id="done">Done!</h1>
              </div>
            </div>
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
  </body>
</html>
