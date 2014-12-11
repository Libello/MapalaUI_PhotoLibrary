<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Galeri</title>

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
              <li class="active"><a id="nav_name" href="<?php echo site_url('/gallery');?>"><span class="glyphicon glyphicon-picture"></span><br>Galeri</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/others');?>"><br>Tentang MUIPL<br></a></li>
              <form class="navbar-form navbar-left" role="search" id="simple_search" method="post" action="<?php echo site_url('/search');?>">
                <div class="form-group">
                  <input type="text" class="form-control" name="inputtext" placeholder="Cari koleksi" value="">
                  <input type="hidden" name="searchbox" value="true">
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
      <div class="starter-template">
        <br>

        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('/home');?>">Beranda</a></li>
          <li><a href="<?php echo site_url('/gallery');?>">Galeri</a></li>
          <li class="active"><?php echo $category;?></li>
        </ol>

        <h1 id="search_header">Kegiatan <?php echo $category;?></h1><hr>
        <div class="search_result">
          <div class="media">
            <div class="media-body">
              <?php
                if($eventresult == null) {
                  echo "Tidak ada koleksi";
                }
                else {
                  foreach ($eventresult as $row){
                    echo '
                      <a href="'.site_url('/event_detail/'.$row['id_event'].'?category='.$category.'').'" role="button"><h4 class="media-heading">'.$row['name'].'</h4></a>
                      <p>'.$row['location'].' |';
                  
                      if($row['start_year'] == $row['end_year']) {
                        echo $row['start_year'];
                      }
                      else {
                        echo "".$row['start_year']." s/d ".$row['end_year']."";
                      }

                    echo '
                      | '.$row['category'].'</p>
                      <p><a id="btn-photodetail" href="'.site_url('/event_detail/'.$row['id_event'].'').'" role="button">Lihat foto &raquo;</a></p>';
                  }
                }
              ?>
            </div>
          </div>
        </div>
        <h1 id="search_header">Foto</h1><hr>

        <div class="row">
          <?php
            if($photoresult == null) {
              echo "Tidak ada koleksi";
            }
            else {
              foreach ($photoresult as $row){
                $id = $row['id'];
                echo
                  '<div class="col-xs-6 col-md-3">
                    <a class="thumbnail" data-toggle="modal" data-target="#'.$id.'" id="img-result">
                      <img src="'.base_url('assets/foto').'/'.$row['image'].'" alt="'.$row['image'].'">
                    </a>
                  </div>';
                echo '
                  <div class="modal fade" id="'.$id.'" tabindex="-1" role="dialog" aria-labelledby="img-result_modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                          <img src="'.base_url('assets/foto').'/'.$row['image'].'" class="img-responsive" alt="'.$row['image'].'">
                          <p><a id="btn-photodetail2" href="'.site_url('/detail/'.$id.'').'" role="button">Lihat Detail Foto &raquo;</a></p>
                        </div>
                      </div>
                    </div>
                  </div>';
              }
            }
          ?>
          
        </div>


        <nav>
          <ul class="pagination">
            <li class="disabled"><span>&laquo;</span></li>
            <li class="active"><span>1 <span class="sr-only">(current)</span></span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </nav>






      </div>
    </div>
    <hr>


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
