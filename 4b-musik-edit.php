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
              <a class="dropdown-item" href="4a.php">Soal 4A</a>
              <a class="dropdown-item active" href="4b.php">Soal 4B</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <?php
        $deta = $_GET['id'];

        $tampildeta = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM music WHERE id='$deta'"));
        $idgenre = $tampildeta['id_genre'];
        $idpenyanyi = $tampildeta['id_singer'];
        $penyanyi = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM singers WHERE id='$idpenyanyi'"));
        $genre = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM genre WHERE id='$idgenre'"));
         ?>
         <form action="" method="post">
           <input type="hidden" name="idku" value="<?php echo $tampildeta['id'] ?>">
           <label>Nama Lagu : </label> <input type="text" name="namalagu" value="<?php echo $tampildeta['title'] ?>" class="form-control" required> <br>
           <label>Durasi Lagu : </label> <input type="text" name="durasilagu" value="<?php echo $tampildeta['durasi'] ?>" class="form-control" required> <br>
           <label>Genre Lagu : </label>
           <select class="form-control" name="genrelagu">
               <?php
               $hmm = mysqli_query($connect,"SELECT * FROM genre");
               while ($hmms = mysqli_fetch_assoc($hmm)) {
                 ?>
                 <option value="<?php echo $hmms['id']; ?>" <?php if($tampildeta['id_genre'] == $hmms['id'])echo "selected" ?>><?php echo $hmms['name']; ?></option>
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
                 <option value="<?php echo $hmms2['id']; ?>" <?php if($tampildeta['id_singer'] == $hmms2['id'])echo "selected" ?>><?php echo $hmms2['name']; ?></option>
                 <?php
               }
                ?>
           </select> <br>
           <label>Deskripsi</label>
           <textarea name="deskripsi" class="form-control" rows="8" cols="80"><?php echo $tampildeta['deskripsi'] ?></textarea>
           <br>
           <button type="submit" class="btn btn-success" name="submit">Oke</button>
         </form>
         <?php
         if(isset($_POST['submit'])){
           $idku =$_POST['idku'];
           $namalagu = $_POST['namalagu'];
           $durasilagu = $_POST['durasilagu'];
           $genrelagu = $_POST['genrelagu'];
           $penyanyilagu = $_POST['penyanyilagu'];
           $deskripsi = htmlspecialchars($_POST['deskripsi']);

           mysqli_query($connect,"UPDATE music SET title='$namalagu', durasi='$durasilagu', id_genre='$genrelagu', id_singer='$penyanyilagu', deskripsi='$deskripsi' WHERE id='$idku'");
           echo "<script>alert('Berhasil Diedit');window.location = '4b.php';</script>";
         }
          ?>
      </div>

    </main><!-- /.container -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
