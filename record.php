<?php 
require "functions.php";
// ambil variabel dari get id
$id = $_GET['id'];
$profilpasien = filter('daftarpasien', 'id', $id);
$recordpasien = recordsearch($id);
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
        <h2 class="h2-card">Data Rekam Medis</h2>
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
            <div class="rounds">
              <table class="table table-striped table-hover table-bordered rounds">
                <thead>
                  <tr class="tablehead text-light">
                    <th scope="col" class="fit">No.</th>
                    <th scope="col" class="col-3">Anamnesa</th>
                    <th scope="col" class="col-3">Riwayat Alergi</th>
                    <th scope="col" class="col-3">Tindakan</th>
                    <th scope="col" class="col-3">Terapi Obat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; foreach($recordpasien as $row) : ?>
                  <tr>
                    <th scope="row" class="fit"><?= $no ?></th>
                    <td><?= $row['anamnesa'] ?></td>
                    <td><?= $row['riwayatalergi'] ?></td>
                    <td><?= $row['tindakan'] ?></td>
                    <td><?= $row['terapiobat'] ?></td>
                  </tr>
                  <?php $no++; endforeach ?>
                </tbody>
              </table>
            </div>
						<br>
						<div class="flex-between">						
						<a href="index.php">
              <button type="button" class="btn btn-secondary">Kembali</button>
            </a>
						<a href="recordform.php?id=<?= $_GET['id'] ?>">
							<button type="button" class="btn btn-theme3 text-light">Tambah Data</button>
						</a>
						</div>
          </div>
        </div>
      </div>

    </section>

    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>