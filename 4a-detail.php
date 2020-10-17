<?php
include "koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    body {
padding-top: 5rem;
}
.starter-template {
padding: 3rem 1.5rem;
text-align: center;
}
    </style>
    <link rel="icon" href="favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soal Nomer 4A By Nu'man Elfaqih</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <table class="table table-striped table-bordered" style="width:30%;" align="center">
      <thead>
        <tr>
          <th>No.</th>
          <th>Judul</th>
          <th>Durasi</th>
          <th>Genre</th>
          <th>Penyanyi</th>
          <th>Gambar</th>
          <th>Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $iddet = $_POST['det'];
        $n2 = 1;

        $qq2 = "SELECT music.title AS judul, music.durasi AS durasi, genre.name AS genre, singers.name AS penyanyi, music.photo AS photo, music.deskripsi AS deskripsi FROM music INNER JOIN genre ON music.id_genre=genre.id INNER JOIN singers ON music.id_singer=singers.id WHERE music.id ='$iddet'";
        $q2 = mysqli_query($connect,$qq2);
        while ($t2 = mysqli_fetch_assoc($q2)) {
          ?>
          <tr>
            <td><?php echo $n2++; ?></td>
            <td><?php echo $t2['judul']; ?></td>
            <td><?php echo $t2['durasi']; ?></td>
            <td><?php echo $t2['genre']; ?></td>
            <td><?php echo $t2['penyanyi']; ?></td>
            <td> <img src="<?php echo $t2['photo']; ?>" width="100px" height="100px"></td>
            <td><?php echo $t2['deskripsi']; ?></td>
          </tr>
          <?php
        }
         ?>
      </tbody>
    </table> <br>
    <center><a href="4a.php"> <button type="button" class="btn btn-success" name="button">Kembali</button> </a></center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
