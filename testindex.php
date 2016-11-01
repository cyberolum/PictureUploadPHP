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
    <form class="formMain" action="testcontrol.php" method="post" enctype="multipart/form-data">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="">Ad ve Soyad</label>
                <input type="text" class="form-control" id="ad" placeholder="Ad ve Soyad" name="adsoyad">
                
              </div>
              <div class="form-group">
                <label for="">Sheher</label>
                <input type="text" class="form-control" id="soyad" placeholder="Seher" name="seher">

              </div>
              <div class="form-group">
                <label for=""></label>
                <input type="file" class="form-control" id="upload" placeholder="file" name="upload">

              </div>
              <div class="form-group">

                <input type="submit" class="form-control btn-primary btn-block " id="" placeholder="Yukle" value="Yukle" name="submit">

              </div>
              <table class="table table-bordered">
                <tr>
                  <th>Ad soyad</th>
                  <th>Sheher</th>
                  <th>Sekil</th>
                </tr>
              </table>
            </div>
          </div>
        </div>
    </form>
  </body>
</html>
