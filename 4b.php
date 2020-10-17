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

    <title>Soal Nomer 4B By Nu'man Elfaqih</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php"> <img src="favicon.png" alt="" width="50px" height="50px"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang.php">Tentang</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Soal</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="1.php">Soal 1</a>
              <a class="dropdown-item" href="2.php">Soal 2</a>
              <a class="dropdown-item" href="3.php">Soal 3</a>
              <a class="dropdown-item " href="4a.php">Soal 4A</a>
              <a class="dropdown-item active" href="4b.php">Soal 4B</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Soal 4B Dumb Music</h1>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#beranda" role="tab" aria-controls="pills-home" aria-selected="true">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="beranda" role="tabpanel" aria-labelledby="pills-home-tab">
            <?php
            $tampil = mysqli_query($connect,"SELECT music.title AS judul, music.durasi AS durasi, genre.name AS genre, singers.name AS penyanyi, music.photo AS photo, music.deskripsi AS deskripsi FROM music INNER JOIN genre ON music.id_genre=genre.id INNER JOIN singers ON music.id_singer=singers.id");
             ?>
            Ini Beranda
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>
      </div>

    </main><!-- /.container -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
