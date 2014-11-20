<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico').'/favicon.png';?>">

    <title>Penelusuran</title>

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
              <li class="active"><a id="nav_name" href="<?php echo site_url('/search');?>"><span class="glyphicon glyphicon-search"></span><br>Penelusuran</a></li>
              <li><a id="nav_name" href="<?php echo site_url('/gallery');?>"><br>Galeri<br></a></li>
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
        <h1 id="search_header">Penelusuran Koleksi</h1><hr>
        <form class="form-horizontal" id="search" role="form" method="post" action="<?php echo site_url('/search');?>">
          <input type="hidden" name="searchbox" value="false">
          <div class="form-group" id="search_guest">
            <label for="format" class="col-sm-2 control-label">Format:</label>
            <div class="col-sm-2">
              <select class="form-control" id="format" name="format">
                <option value="all">Semua</option>
                <option value="Digital">Digital</option>
                <option value="Repro / Scan">Repro / Scan</option>
                <option value="Tercetak">Tercetak</option>
              </select>
            </div><br><br>

            <label for="color" class="col-sm-2 control-label">Warna:</label>
            <div class="col-sm-2">
              <select class="form-control" id="color" name="color">
                <option value="all">Semua</option>
                <option value="Berwarna">Berwarna</option>
                <option value="Hitam Putih">Hitam Putih</option>
                <option value="Sephia">Sephia</option>
              </select>
            </div><br><br>

            <label for="activity" class="col-sm-2 control-label">Kategori:</label>
            <div class="col-sm-2">
              <select class="form-control" id="activity" name="activity">
                <option value="all">Semua</option>
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
          </div>

          <div class="multi-field-wrapper">
            <div class="multi-fields">
              <div class="multi-field form-group">
                <div class="col-sm-2 a">
                  <select class="form-control" name="fieldarr[]">
                    <option value="all">Semua</option>
                    <option value="title" selected>Judul</option>
                    <option value="name_photographer">Fotografer</option>
                    <option value="category">Kegiatan</option>
                    <option value="taken_location">Lokasi</option>
                    <option value="taken_date">Tahun</option>
                    <option value="description">Deskripsi Foto</option>
                  </select>
                </div>
                <div class="col-sm-4 b"><input type="text" class="form-control" name="inputtextarr[]"></div>
                <div class="col-sm-2 c">
                  <select class="form-control" name="operatearr[]">
                    <option value="and">dan</option>
                    <option value="or">atau</option>
                    <option value="not">bukan</option>
                  </select>
                </div>
                <button type="button" class="col-sm-1 btn remove-field"><span class="glyphicon glyphicon-remove" id="remove-field"></span></button>
              </div>
            </div>
            <button type="button" class="col-sm-2 btn add-field"><span class="glyphicon glyphicon-plus"></span> Tambah Kolom</button>    
          </div>
          
          <div class="col-sm-1">
            <button type="submit" class="btn btn-default">Cari</button>
          </div>
        </form>

        <br>
        <br>

        <h1 id="search_header">Hasil Penelusuran</h1><hr>
        <div class="search_result">              
          <?php
            if($searchresult == null) {
              echo "<p> Tidak ada koleksi <p>";
            }
            else {
              foreach ($searchresult as $row){
                echo '<div class="media">;
                        <a class="pull-left" data-toggle="modal" data-target="#img-result_modal-'.$row['id'].'">
                          <img class="thumbnail" src="'.base_url('assets/foto').'/'.$row['image'].'" alt="'.$row['image'].'" width="170px" id="img-result">
                        </a>
                        <div class="media-body">
                          <a href="'.site_url('/detail/'.$row['id'].'').'" role="button"><h4 class="media-heading">'.$row['title'].'</h4></a>
                          <p>oleh <i>'.$row['photographer'].'</i> | '.$row['format'].' | '.$row['category'].' | <b>'.$row['event'].'</b> | '.$row['taken_date'].' | '.$row['taken_location'].'</p>
                          <p><a id="btn-photodetail" href="'.site_url('/detail/'.$row['id'].'').'" role="button">Detail &raquo;</a></p>
                        </div>
                      </div>';

                // <!-- Modal -->
                echo '<div class="modal fade" id="img-result_modal-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="img-result_modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <img src="'.base_url('assets/foto').'/'.$row['image'].'" class="img-responsive" alt="'.$row['image'].'">
                            </div>
                          </div>
                        </div>
                      </div>';
              }
            }
          ?>
        </div>
        <br>


        <nav>
          <ul class="pager">
            <li class="previous disabled"><a href="#">&larr; Sebelumnya</a></li>
            <li class="disabled"><span>&laquo;</span></li>
            <li class="active"><span>1 <span class="sr-only">(current)</span></span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
            <li class="next"><a href="#">Berikutnya &rarr;</a></li>
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
    <script type="text/javascript"> 
      $('.multi-field-wrapper').each(function() {
        var $wrapper = $('.multi-fields', this);
        $(".add-field", $(this)).click(function(e) {
            $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').focus();
            $('.multi-field .remove-field', $wrapper).disabled = true;
        });
        $('.multi-field .remove-field', $wrapper).click(function() {
          if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
        });
      });
    </script>
  </body>
</html>
