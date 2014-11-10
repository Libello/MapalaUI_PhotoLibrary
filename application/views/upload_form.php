<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>


<!-- <input type="file" name="userfile"/>

<br /><br />

<input type="submit" value="upload" />

</form> -->

		<?php echo form_open_multipart('upload/do_upload');?>
        
          <!--Insert Photo-->
          <!-- <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Unggah Foto</label>
            <div class="col-sm-9"> -->
              <input type="file" name="userfile">
            <!-- </div>
          </div> -->

          <!--Published On-->
          <!-- <div class="form-group">
            <label for="published_on" class="col-sm-2 control-label">Tempat Publikasi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="published_on" placeholder="Jika foto pernah dipublikasikan, masukan tempat publikasi dalam kolom ini (nama & edisi koran, majalah, maupun link twitter)">
            </div>
          </div> --><!-- 
          
          <p id="formdetail">Selesai? Silakan klik tombol berikut</p> -->

          <input type="submit" value="upload" />

          <!-- <div class="lead">
            <button class="btn btn-default" type="submit" role="button">Simpan</button> 
          </div> -->
          <!-- <div id="close_button">
            <button type="reset" class="btn" id="btn">
              Muat Ulang
            </button>
          </div> -->
        </form>

</body>
</html>