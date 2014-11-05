<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Photo List</title>

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
            <li class="active"><a id="nav-name" href="<?php echo site_url('/photo_list');?>">Photo List</a></li>
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
          <h1 id="formtitle">Daftar Foto</h1>
        </div>
        <br>
        <p class="lead" id="formdetail">Daftar foto yang telah dimasukkan dalam database.</p>
        <hr>

        <div class="form-group" id="photodata_search">
          <label for="Search" class="col-sm-1 control-label">Search:</label>
            <div class="col-sm-4"><input type="text" class="form-control"></div>
            <div class="col-sm-2">
              <select class="form-control" id="search_option">
                <option>All Fields</option>
                <option>Title</option>
                <option>Photographer</option>
                <option>Event</option>
                <option>Year</option>
                <option>Location</option>
              </select>
            </div>
            <div class="col-sm-2">
              <select class="form-control" id="search_option">
                <option>All Activities</option>
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
            <div class="col-sm-2">
              <select class="form-control" id="search_option">
                <option>Any Format</option>
                <option>Digital</option>
                <option>Repro / Scan</option>
                <option>Print</option>
              </select>
            </div>
            <button class="btn" id="btn-save">Search</button>
        </div>
        <hr>
        <br>

        <div id="photodata_button">
          <button class="btn" id="delete_button" data-toggle="modal" data-target="#deletedata_modal">Delete Selected Data</button>
          <button class="btn" id="btn-save">Check All</button>
          <button class="btn" id="btn-save">Uncheck All</button>
          <button class="btn" id="btn-save">Export to CSV</button>
        </div>
        <br>

              <!-- Delete Photo Data -->
              <div class="modal fade" id="deletedata_modal" tabindex="-1" role="dialog" aria-labelledby="deletedataLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <h1 id="done">Delete selected data?</h1>
                      <div class="lead" id="btn_modaldelete">
                        <button type="close" class="btn" id="btn-close" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="btn-save">Delete</button>
                      </div>
                    </div>
                 </div>
                </div>
              </div>
              <!-- Delete Photo Data -->

        <table class="table">
          <tr id="table_header">
            <td>DELETE</td>
            <td>EDIT</td>
            <td>PHOTO</td>
            <td>PHOTO TITLE</td>            
            <td>FORMAT</td>
            <td>LAST UPDATE</td>
          </tr>

          <?php
            foreach ($photolist as $row){
              echo "<tr>";
                echo "<td>";
                  echo "<form><input type='checkbox'></form>";
                echo "</td>";
                echo "<td>";
                  echo "<a href=".site_url('/edit')."><button class='btn' id='btn-edit'><img src='../assets/ico/edit.png'></button></a>";
                echo "</td>";
                echo "<td>";
                  echo "<a class='pull-left' data-toggle='modal' data-target='#photo_zoom'><img class='media-object' src='../assets/img/Husky1.jpg' alt='contoh1' width='100px' id='img-result'></a>";
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
          <button class="btn" id="delete_button" data-toggle="modal" data-target="#deletedata_modal">Delete Selected Data</button>
          <button class="btn" id="btn-save">Check All</button>
          <button class="btn" id="btn-save">Uncheck All</button>
          <button class="btn" id="btn-save">Export to CSV</button>
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
