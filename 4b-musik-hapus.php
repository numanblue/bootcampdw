<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM music WHERE id='$id'");

header("location: 4b.php");
?>
