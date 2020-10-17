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
              <a class="dropdown-item active" href="4a.php">Soal 4A</a>
              <a class="dropdown-item" href="4b.php">Soal 4B</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Soal 4A</h1> <br>
        <h3>Tampilkan Semua Musik</h3>
        <table class="table table-striped table-bordered" style="width:30%;" align="center">
          <thead>
            <tr>
              <th>No.</th>
              <th>Judul</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $n1 = 1;
            $q1 = mysqli_query($connect,"SELECT title FROM music");
            while ($t1 = mysqli_fetch_assoc($q1)) {
              ?>
              <tr>
                <td><?php echo $n1++; ?></td>
                <td><?php echo $t1['title']; ?></td>
              </tr>
              <?php
            }
             ?>
          </tbody>
        </table> <br>
        <h3>Tampilkan Musik Per Genre dan Singer</h3> <br>
        <h4>By Genre</h4>
        <form action="4a-genre.php" method="post">
          <select class="form-control" name="genre">
            <?php
              $genre2 = mysqli_query($connect,"SELECT * FROM genre");
              while ($tampilgenre2 = mysqli_fetch_assoc($genre2)) {
             ?>
              <option value="<?php echo $tampilgenre2['id']; ?>"><?php echo $tampilgenre2['name']; ?></option>
             <?php
              }
              ?>
          </select> <br>
          <button type="submit" class="btn btn-success" name="submit">Oke</button>
        </form> <br>

        <h4>By Penyanyi</h4>
        <form action="4a-penyanyi.php" method="post">
          <select class="form-control" name="penyanyi">
            <?php
              $penyanyi2 = mysqli_query($connect,"SELECT * FROM singers");
              while ($tampilpenyanyi2 = mysqli_fetch_assoc($penyanyi2)) {
             ?>
              <option value="<?php echo $tampilpenyanyi2['id']; ?>"><?php echo $tampilpenyanyi2['name']; ?></option>
             <?php
              }
              ?>
          </select> <br>
          <button type="submit" class="btn btn-success" name="submit">Oke</button>
        </form> <br>
        <h3>Tampilkan Detail Musik By ID</h3> <br>
        <form action="4a-detail.php" method="post">
          <select class="form-control" name="det">
            <?php
              $detail2 = mysqli_query($connect,"SELECT id,title FROM music");
              while ($tampildetail2 = mysqli_fetch_assoc($detail2)) {
             ?>
              <option value="<?php echo $tampildetail2['id']; ?>"><?php echo $tampildetail2['id']; ?> | <?php echo $tampildetail2['title']; ?></option>
             <?php
              }
              ?>
          </select> <br>
          <button type="submit" class="btn btn-success" name="submit">Oke</button>
        </form> <br>
      </div>
    </main><!-- /.container -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
