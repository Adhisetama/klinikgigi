<?php 
session_start();
require "functions.php";
ceksession();

// ambil variabel dari get id
if( isset($_GET['id']) === true ) {
  $id = $_GET['id'];
} else {
  header("Location: index.php");
}
$profilpasien = filter('daftarpasien', 'id', $id);

$query = tambahrekam($_POST);

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
      <div class="container-md">
        <h2 class="h2-card">Input Rekam Medis</h2>
        <div class="card">
          <div class="card-body">
            <div class="row pasiendata">
              <div class="col-12 col-sm-6 col-md-3 flex-center flex-col">
                <h5><?= $profilpasien['namapasien'] ?></h5>
                <h6><?= $profilpasien['nocm'] ?></h6>
              </div>
              <div class="col-12 col-sm-6 col-md-3 flex-center"><h5><?= $profilpasien['lahir'] ?></h5></div>
              <div class="col-12 col-sm-6 col-md-3 flex-center"><h5><?= $profilpasien['alamat'] ?></h5></div>
              <div class="col-12 col-sm-6 col-md-3 flex-center"><h5><?= $profilpasien['telp'] ?></h5></div>
            </div>
            <hr>
            <br>
            <!-- form tambah data rekam medis pasien -->
            <form class="cardform row" method="post" action="">
              <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
              <div class="form-group col-12 col-md-6">
                <label for="anamnesa"><h4>Anamnesa</h4></label>
                <textarea class="form-control" id="anamnesa" rows="5" name="anamnesa"></textarea>
              </div>
              <div class="form-group col-12 col-md-6">
                <label for="riwayatalergi"><h4>Riwayat Alergi</h4></label>
                <textarea class="form-control" id="riwayatalergi" rows="5" name="riwayatalergi"></textarea>
              </div>
              <div class="form-group col-12 col-md-6">
                <label for="tindakan"><h4>Tindakan</h4></label>
                <textarea class="form-control" id="tindakan" rows="5" name="tindakan"></textarea>
              </div>
              <div class="form-group col-12 col-md-6">
                <label for="terapiobat"><h4>Terapi Obat</h4></label>
                <textarea class="form-control" id="terapiobat" rows="5" name="terapiobat"></textarea>
              </div>
              <button type="submit" class="btn btn-theme2 text-light" name="submitrekaman">Submit</button>
            </form>			
          </div>
        </div>
      </div>
    </section>

    <!-- alert apakah data berhasil di submit -->
    <?php if($query > 0) : ?>
      <script>alert("Data rekam medis berhasil ditambahkan");
      document.location = "record.php?id=<?= $_GET['id'] ?>"</script>
    <?php elseif($query < 0) : ?>
      <script>alert("Data rekam medis gagal ditambahkan");
      document.location = "record.php?id=<?= $_GET['id'] ?>"</script>
    <?php endif ?>
    
    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>