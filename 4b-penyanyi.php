<?php
include "koneksi.php";

$penyanyi = $_POST['penyanyi'];

mysqli_query($connect,"INSERT INTO singers VALUES('','$penyanyi')");
echo "<script>alert('Berhasil Ditambah');window.location = '4b.php';</script>";
?>
