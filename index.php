<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>File Uploader</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css" media="screen" title="no title">
  </head>
  <body>
    <form class="formMain" action="control.php" method="post" enctype="multipart/form-data">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="">Ad ve Soyad</label>
                <input type="text" class="form-control" id="ad" placeholder="Ad ve Soyad" name="adsoyad">
                <!-- <p class="help-block">Help text here.</p> -->
              </div>
              <div class="form-group">
                <label for="">Sheher</label>
                <input type="text" class="form-control" id="soyad" placeholder="Seher" name="seher">
                <!-- <p class="help-block">Help text here.</p> -->
              </div>
              <div class="form-group">
                <label for=""></label>
                <input type="file" class="form-control" id="upload" placeholder="file" name="upload">
                <!-- <p class="help-block">Help text here.</p> -->
              </div>
              <div class="form-group">
                <!-- <label for=""></label> -->
                <input type="submit" class="form-control btn-primary btn-block " id="" placeholder="Yukle" value="Yukle" name="submit">
                <!-- <p class="help-block">Help text here.</p> -->
              </div>
              <table class="table table-bordered">
                <tr>
                  <th>Ad soyad</th>
                  <th>Sheher</th>
                  <th>Sekil</th>
                </tr>
                <?php
                session_start();
                $myFile = fopen("string.txt", "r") or die("Yuklenme ugurlu olmadi");
                while (!feof($myFile)) {
                  $data = fgets($myFile);
                  $data = explode("^", $data);
                  ?>
                  <tr>
                    <?php
                    if (!empty($data[0]) && !empty($data[1]) && !empty($data[2])) { ?>
                      <th><?= @$data[0];?></th>
                      <th><?= @$data[1];?></th>
                      <th><img style="width:60px;" src="uploads/<?=@$data[2];?>" /></th>
                    <?php } ?>
                  </tr>
                <?php }
                  fclose($myFile);
                ?>
                <?php

                  if (isset($_SESSION["errUpload"])) { ?>
                    <p class="alert alert-danger "><?=$_SESSION["errUpload"]?></p>

                    <?php unset($_SESSION["errUpload"]) ?>

                <?php } ?>
                <?php

                  if (isset($_SESSION["errInput"])) { ?>
                    <p class="alert alert-danger "><?=$_SESSION["errInput"]?></p>

                    <?php unset($_SESSION["errInput"]) ?>

                <?php } ?>
                <?php

                  if (isset($_SESSION["errImgType"])) { ?>
                    <p class="alert alert-danger "><?=$_SESSION["errImgType"]?></p>

                    <?php unset($_SESSION["errImgType"]) ?>

                <?php } ?>
                <?php

                  if (isset($_SESSION["errImgSize"])) { ?>
                    <p class="alert alert-danger "><?=$_SESSION["errImgSize"]?></p>

                    <?php unset($_SESSION["errImgSize"]) ?>

                <?php } ?>

              </table>
            </div>
          </div>
        </div>
    </form>
  </body>
</html>
