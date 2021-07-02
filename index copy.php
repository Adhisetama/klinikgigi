<?php 
// akal akalan sistem login
require "functions.php";

$login = ceklogin($_POST);
// if(isset($_POST['username'])==true) {
//   $username = $_POST['username'];
//   $pass = $_POST['pass'];
//   $login = filter('accounts', 'username', $username);
//   // cek apakah username terdaftar
//   if($login == false) {
//     header("Location: login.php?auth=usernamenotfound");
//   }
//   // jika username benar, cek apakah password sesuai
//   else if($pass == $login['password']) {
    
//   } else {
//     header("Location: login.php?auth=wrongpassword");
//   }
  
// } else {
//   header("Location: login.php");
// }
// var_dump($_POST)

// ambil data tabel pasien
$datapasien = ambildata("daftarpasien");

// jika user melakukan pencarian
if( isset($_POST['search']) == true ) {
  $datapasien = caridatapasien($_POST['keyword']);
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Fontawesome icon kit -->
    <script src="https://kit.fontawesome.com/bf48535794.js" crossorigin="anonymous"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- icon -->
    <link rel="shortcut icon" href="img/logongasal.png" type="image/x-icon">
    <title>Data Pasien</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="nav">
      <div class="flex-center">
        <img src="img/logongasal-white.png" alt="logo" class="navlogo">
        <h2 class="text-light">Data Pasien</h2>
      </div>
      <div class="flex-center">
        <h9 class="text-light">Selamat datang, <?php if(isset($login['nama'])===true){echo $login['nama'];} else echo "Admin" ?>!</h9>
      </div>
    </nav>
    <!-- main content -->
    <section class="content">
      <div class="container">

        <!-- search dan tambah pasien -->
        <div class="flex-between">
          <form action="" method="post" class="d-flex align-items-center">
            <input type="search" class="form-control" placeholder="cari data pasien" name="keyword" autocomplete="off">
            <button type="submit" class="btn btn-theme2 btn-sm searchbutton text-light rounded-circle" name="search" value="true"><i class="fas fa-search"></i></button>
          </form>
          <a href="form.php">
          <button type="button" class="btn btn-theme2 text-light">Tambah Pasien</button>
          </a>
        </div>
        <br>
        
        <!-- tabel data pasien -->
        <div class="rounds">

          <table class="table table-striped table-hover table-bordered rounds">
            <thead>
              <tr class="tablehead text-light">
                <th scope="col" class="fit">No.</th>
                <th scope="col" class="col-2">Nama</th>
                <th scope="col" class="col-1">No CM</th>
                <th scope="col" class="col-2">Tgl Lahir</th>
                <th scope="col" class="col-4">Alamat</th>
                <th scope="col" class="col-1">No HP</th>
                <th scope="col" class="col-2">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach($datapasien as $row) : ?>
              <tr>
                <th scope="row" class="fit"><?= $no ?></th>
                <td><?= $row['namapasien'] ?></td>
                <td><?= $row['nocm'] ?></td>
                <td><?= $row['lahir'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['telp'] ?></td>
                <td style="vertical-align: middle;">  
                  <div class="tablebutton flex-around">
                    <a href="form.php?id=<?= $row['id'] ?>">
                    <button type="button" class="btn btn-theme3 text-light btn-sm">Update</button>
                    </a>
                    <a href="record.php?id=<?= $row['id'] ?>">
                    <button type="button" class="btn btn-secondary btn-sm">Detail</button>
                    </a>
                  </div>
                </td>
              </tr>
              <?php $no++; endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>


    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>