<?php 
  require "functions.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Landing Page</title>
    
    <link rel="shortcut icon" href="img/logongasal.png" type="image/x-icon">
  </head>

	<body>
    <div class="logo-container">
      <img src="img/logongasal.png" alt="logo" class="logo">
      <h1 class="logintitle">Klinik Dokter Gigi Azka</h1>
		</div>
    <br>
    <!-- bg -->
    <!-- <div class="container-relative"> -->
      <div class="login-bg"></div>
    </div>
    <!-- login card -->
    <div class="container-fluid d-flex justify-content-center">
      <div class="shadow p-3 mb-5 bg-white card login col-10 col-md-8 col-lg-6 col-xl-5">
        <div class="card-body">
          <!-- form -->
          <form method="post" action="index.php">
            <div class="form-group row">
              <label for="username" class="col-md-3">Username</label>
              <input type="text" class="form-control col-md-9" id="username" name="username">
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-3">Password</label>
              <input type="password" class="form-control col-md-9" id="password" name="password">
            </div>
          <!-- alert -->
            <p class="login-alert">
              <?php if(isset($_GET['auth'])==true) {
                switch($_GET['auth']) {
                  case "usernamenotfound": echo "Username tidak ditemukan"; break;
                  case "wrongpassword": echo "Password yang anda masukkan salah"; break;
                  default: break;
                }
              } ?>
            </p>
            <button type="submit" class="btn btn-primary" name="submit" value="true">Login</button>
          </form>
        </div>
      </div>
    </div>


    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>