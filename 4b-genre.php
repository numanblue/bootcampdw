<?php
include "koneksi.php";

$genre = $_POST['genre'];

mysqli_query($connect,"INSERT INTO genre VALUES('','$genre')");
echo "<script>alert('Berhasil Ditambah');window.location = '4b.php';</script>";
?>
