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
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#tambahgenre" role="tab" aria-controls="pills-profile" aria-selected="false">Tambah Genre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tambahpenyanyi" role="tab" aria-controls="pills-contact" aria-selected="false">Tambah Penyanyi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tambahmusik" role="tab" aria-controls="pills-contact" aria-selected="false">Tambah Musik</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="beranda" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table table-striped table-bordered" style="width:30%;" align="center">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Lagu</th>
                  <th>Genre</th>
                  <th>Penyanyi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $nom = 1;
                $tampil = mysqli_query($connect,"SELECT music.id, music.title AS judul, genre.name AS genre, singers.name AS penyanyi, music.photo AS photo, music.deskripsi AS deskripsi FROM music INNER JOIN genre ON music.id_genre=genre.id INNER JOIN singers ON music.id_singer=singers.id");
                while($tampilin = mysqli_fetch_assoc($tampil)){
                  ?>
                <tr>
                  <td><?php echo $nom++ ?></td>
                  <td><img src="<?php echo $tampilin['photo'] ?>" width="100px" height="100px"> <br>
                      <center><label> <a href="4b-detail.php?id=<?php echo $tampilin['id'] ?>"><?php echo $tampilin['judul'] ?></a></label></center>
                  </td>
                  <td><?php echo $tampilin['genre'] ?></td>
                  <td><?php echo $tampilin['penyanyi'] ?></td>
                </tr>
                  <?php
                }
                 ?>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="tambahgenre" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form action="4b-genre.php" method="post">
              <label>Input Nama Genre : </label><input type="text" name="genre" value="" class="form-control" required> <br>
              <button type="submit" class="btn btn-success" name="submit">Oke</button>
            </form> <br>
            <table class="table table-striped table-bordered" style="width:30%;" align="center">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Genre</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $nom2 = 1;
                $qgenre = mysqli_query($connect,"SELECT * FROM genre");
                while ($tgenre = mysqli_fetch_assoc($qgenre)) {
                  ?>
                  <tr>
                    <td><?php echo $nom2++ ?></td>
                    <td><?php echo $tgenre['name'] ?></td>
                    </td>
                  </tr>
                  <?php
                }
                 ?>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="tambahpenyanyi" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form action="4b-penyanyi.php" method="post">
              <label>Input Nama Penyanyi : </label><input type="text" name="penyanyi" value="" class="form-control" required> <br>
              <button type="submit" class="btn btn-success" name="submit">Oke</button>
            </form> <br>
            <table class="table table-striped table-bordered" style="width:30%;" align="center">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Penyanyi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $nom3 = 1;
                $qpen = mysqli_query($connect,"SELECT * FROM singers");
                while ($tpen = mysqli_fetch_assoc($qpen)) {
                  ?>
                  <tr>
                    <td><?php echo $nom3++ ?></td>
                    <td><?php echo $tpen['name'] ?></td>
                    </td>
                  </tr>
                  <?php
                }
                 ?>
              </tbody>
            </table>
          </div>

          <div class="tab-pane fade" id="tambahmusik" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form action="4b-musik.php" method="post" enctype="multipart/form-data">
              <label>Nama Lagu : </label> <input type="text" name="namalagu" value="" class="form-control" required> <br>
              <label>Durasi Lagu : </label> <input type="text" name="durasilagu" value="" class="form-control" required> <br>
              <label>Genre Lagu : </label>
              <select class="form-control" name="genrelagu">
                  <?php
                  $hmm = mysqli_query($connect,"SELECT * FROM genre");
                  while ($hmms = mysqli_fetch_assoc($hmm)) {
                    ?>
                    <option value="<?php echo $hmms['id']; ?>"><?php echo $hmms['name']; ?></option>
                    <?php
                  }
                   ?>
              </select> <br>
              <label>Penyanyi Lagu : </label>
              <select class="form-control" name="penyanyilagu">
                  <?php
                  $hmm2 = mysqli_query($connect,"SELECT * FROM singers");
                  while ($hmms2 = mysqli_fetch_assoc($hmm2)) {
                    ?>
                    <option value="<?php echo $hmms2['id']; ?>"><?php echo $hmms2['name']; ?></option>
                    <?php
                  }
                   ?>
              </select> <br>
              <label>Gambar Lagu : </label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control"> <br>

              <label>Deskripsi</label>
              <textarea name="deskripsi" class="form-control" rows="8" cols="80"></textarea>
              <br>
              <button type="submit" class="btn btn-success" name="submit">Oke</button>
            </form> <br>
            <table class="table table-striped table-bordered" style="width:60%;" align="center">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Judul Lagu</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $nom4 = 1;
                $qmus = mysqli_query($connect,"SELECT * FROM music");
                while ($tmus = mysqli_fetch_assoc($qmus)) {
                  ?>
                  <tr>
                    <td><?php echo $nom4++ ?></td>
                    <td><?php echo $tmus['title'] ?></td>
                    <td><a href="4b-musik-edit.php?id=<?php echo $tmus['id'] ?>"><button type="button" class="btn btn-primary">Edit</button></a> | <a href="4b-musik-hapus.php?id=<?php echo $tmus['id'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>
                  </tr>
                  <?php
                }
                 ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </main><!-- /.container -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
