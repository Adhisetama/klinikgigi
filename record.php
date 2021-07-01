<?php 
require "functions.php";
// ambil variabel dari get id
$id = $_GET['id'];
$profilpasien = filter('daftarpasien', 'id', $id);
$recordpasien = filter('rekammedis', 'id', $id);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Fontawesome icons -->
    <script src="https://kit.fontawesome.com/bf48535794.js" crossorigin="anonymous"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Rekam Medis</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="img/logongasal.png" type="image/x-icon">

  </head>
  <body>
    <!-- navbar -->
    <nav class="nav">
      <div class="flex-center">
      <a href="index.php"><img src="img/logongasal-white.png" alt="logo" class="navlogo"></a>
        <!-- <h2 class="text-light">Entri Pasien</h2> -->
      </div>
    </nav>
    <!-- content -->
    <section class="content">

    </section>

    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>