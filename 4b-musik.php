<?php
include "koneksi.php";

$namalagu = $_POST['namalagu'];
$durasilagu = $_POST['durasilagu'];
$genrelagu = $_POST['genrelagu'];
$penyanyilagu = $_POST['penyanyilagu'];
$deskripsi = htmlspecialchars($_POST['deskripsi']);

$target_dir = "foto/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;

  } else {
    echo "<script>alert('Error');window.location = '4b.php';</script>";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "<script>alert('Error');window.location = '4b.php';</script>";
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        mysqli_query($connect,"INSERT INTO music VALUES('','$namalagu','$durasilagu','$genrelagu','$penyanyilagu','$target_file','$deskripsi')");
        echo "<script>alert('Berhasil Ditambah');window.location = '4b.php';</script>";
  } else {
    echo "<script>alert('Error');window.location = '4b.php';</script>";
  }
}


?>
