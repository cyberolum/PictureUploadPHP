<?php
$submit = $_POST['submit'];
$adsoyad = $_POST['adsoyad'];
$seher = $_POST['seher'];
// $upload = $_POST['upload'];

if (isset($submit)) {
  session_start();
  switch ($_FILES['upload']['error']) {
    case 1:
      $_SESSION["errUploadSize"] = "File boyukdur";
      header("Location: index.php");
      break;

    case 4:
      $_SESSION["errUpload"] = "File secilmeyib";
      header("Location: index.php");
      break;
  }

  $target_dir = "uploads/";
  $target_file = $target_dir.basename($_FILES["upload"]["name"]);
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

  if (!empty($adsoyad) || !empty($seher)) {
        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "gif" || $imageFileType == "tif") {
          if ($_FILES["upload"]["size"]<=100000) {
              $result = move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);
              if($result){
                $string = $_POST['adsoyad']."^".$_POST['seher']."^".basename($_FILES["upload"]["name"])."\n";
                echo $string;
                $myFile = fopen("string.txt", "a+");
                fwrite($myFile, $string);
                fclose($myFile);
                header("Location: index.php");
              }
          }else {
            $_SESSION["errImgSize"] = "Sekil hecmi MAX 700kb olmalidir";
            header("Location: index.php");
          }
        }else {
          $_SESSION["errImgType"] = "Bu fayli yukleye bilmezsiniz. Ancaq .jpg , .png , .gif , .tif olmalidir";
          header("Location: index.php");
        }
  }else {
    $_SESSION["errInput"] = "Ad ve Soyad ve ya seher bos buraxilmamalidir";
    header("Location: index.php");
  }
}else {
  header("Location: index.php");
}

?>
