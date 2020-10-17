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

    <title>Soal Nomer 3 By Nu'man Elfaqih</title>

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
              <a class="dropdown-item active" href="3.php">Soal 3</a>
              <a class="dropdown-item" href="4a.php">Soal 4A</a>
              <a class="dropdown-item" href="4b.php">Soal 4B</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Soal 3</h1>
        <form action="" method="post">
          <label for="">Masukkan String  : </label><input class="form-control" type="text" name="inistring" value="" placeholder="Contoh : dfdfdgdfggdbfgzzsdaad"> <br>
          <button type="submit" class="btn btn-success" name="submit">Oke</button>
        </form>
        <?php

        function soal4($str){
          echo "Input : ".$str;
          $spltstr1 = str_split($str,1);
          $totalstr = count($spltstr1);

          for ($i=0; $i < $totalstr; $i++) {
            for ($j=0; $j < $totalstr; $j++) {
              if ($i == $j) {

              }else {
                if ($spltstr1[$i] == $spltstr1[$j]) {
                  $spltstr1[$j] = "";
                  break;
                }
              }
            }
          }
          echo "<br>Output : ";
          for ($d=0; $d < $totalstr; $d++) {
            echo $spltstr1[$d];
          }
        }

        if(isset($_POST['submit'])){
          $inistring = $_POST['inistring'];
          soal4($inistring);
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


    <?php
    $str = "bbaccaxxs";

    ?>
  </body>
</html>
