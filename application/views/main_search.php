<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Mapala UI Photo Library</title>

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
              <li><a id="nav_name" href="<?php echo site_url('/home');?>">Home</a></li>
              <li class="active"><a id="nav_name" href="<?php echo site_url('/search');?>">Search</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/gallery');?>">Gallery</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/guestToAdmin');?>">Admin Page</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/others');?>">Others</a></li>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
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
                    <li><a href="<?php echo site_url('/logout');?>">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
          <div class="col-lg-3">
              <p class="nav navbar-nav" id="logged_in_as">
                Logged in as <b><?php echo $name;?></b>
                <br>from <?php echo $institution;?>
              </p>                
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="starter-template">
        
        <h1 id="search_header">Search</h1><hr>

        <div class="form-group" id="search_guest" method="post" action="">

          <label for="format" class="col-sm-2 control-label">Format:</label>
            <div class="col-sm-2">
              <select class="form-control" id="format" name="format">
                <option value="all">Any Format</option>
                <option value="digital">Digital</option>
                <option value="reproscan">Repro / Scan</option>
                <option value="print">Print</option>
              </select>
            </div><br><br>

          <label for="color" class="col-sm-2 control-label">Color:</label>
            <div class="col-sm-2">
              <select class="form-control" id="color" name="color">
                <option value="all">Any Color</option>
                <option value="color">Color</option>
                <option value="blackwhite">Black & White</option>
                <option value="sephia">Sephia</option>
              </select>
            </div><br><br>

            <label for="activity" class="col-sm-2 control-label">Activity:</label>
            <div class="col-sm-2">
              <select class="form-control" id="activity" name="activity">
                <option value="all">All Activities</option>
                <option value="climbing">Climbing</option>
                <option value="rafting">Rafting</option>
                <option value="caving">Caving</option>
                <option value="diving">Diving</option>
                <option value="paragliding">Paragliding</option>
                <option value="mountaineering">Mountaineering</option>
                <option value="sailing">Sailing</option>
                <option value="bkp">BKP</option>
                <option value="others">Others</option>
              </select>
            </div><br><br>
            
            <div class="col-sm-2">
              <select class="form-control" id="search_field">
                <option>All Fields</option>
                <option selected>Title</option>
                <option>Photographer</option>
                <option>Event</option>
                <option>Year</option>
                <option>Location</option>
              </select>
            </div>
            <div class="col-sm-4"><input type="text" class="form-control" placeholder="Search"></div>
            <div class="col-sm-2">
              <select class="form-control" id="search_option">
                <option>and</option>
                <option>or</option>
                <option>not</option>
              </select>
            </div>
        </div><br>

        <div class="form-group" id="photodata_search">
          
            <div class="col-sm-2">
              <select class="form-control" id="search_field">
                <option>All Field</option>
                <option>Title</option>
                <option selected>Photographer</option>
                <option>Event</option>
                <option>Year</option>
                <option>Location</option>
              </select>
            </div>
            <div class="col-sm-4"><input type="text" class="form-control" placeholder="Search"></div>
            <div class="col-sm-2">
              <select class="form-control" id="search_option">
                <option>and</option>
                <option>or</option>
                <option>not</option>
              </select>
            </div>
        </div><br>

        <div class="form-group" id="photodata_search">
            
            <div class="col-sm-2">
              <select class="form-control" id="search_field">
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
              <select class="form-control" id="search_option">
                <option>and</option>
                <option>or</option>
                <option>not</option>
              </select>
            </div>
        </div><br>

        <div class="form-group" id="photodata_search">
          
            <div class="col-sm-2">
              <select class="form-control" id="search_field">
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
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>

        <br>




        <h1 id="search_header">Result</h1><hr>
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
        <p class="text-muted">Mapala UI Photo Library © 2014 by <a href="http://twitter.com/nadafadhila">@nadafadhila</a><br><a href="http://getbootstrap.com">Bootstrap</a></p>
      </div>
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js').'/jquery.min.js';?>"></script>
    <script src="<?php echo base_url('assets/js').'/bootstrap.min.js';?>"></script>
  </body>
</html>
