<?php 
require "functions.php";

// gerbang logika apakah dilakukan update atau insert
if( isset($_GET['id']) === true ) {
	$entri = updatepasien($_POST, $_GET);
	// ambil data asli pasien yang akan diupdate
	$data = filter("daftarpasien", "id", $_GET['id']);
} else {
	$entri = tambahpasien($_POST);
}
// fungsi logika untuk mengubah tampilan insert form ke update form
function updateform($updatestring, $insertstring = "") {
	if( isset($_GET['id']) === true ) {
		echo $updatestring;
	} else {
		echo $insertstring;
	}
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

    <!-- Fontawesome icons -->
    <script src="https://kit.fontawesome.com/bf48535794.js" crossorigin="anonymous"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Entri Pasien</title>

    <link rel="shortcut icon" href="img/logongasal.png" type="image/x-icon">

  </head>
  <body>
    <!-- navbar -->
    <nav class="nav">
      <div class="flex-center">
      <a href="index.php"><img src="img/logongasal-white.png" alt="logo" class="navlogo"></a>
        <h2 class="text-light">
			<?php updateform("Update Data Pasien", "Entri Pasien") ?>
		</h2>
      </div>
    </nav>
    <!-- content -->
    <section class="content">
      <div class="container-md">
				<div class="form-container">
					<h2><?php updateform("Edit Data", "Pasien Baru") ?></h2>
					<div class="card">
						<div class="card-body">
							<!-- form tambah pasien -->
							<form class="cardform" method="post" action="">
								<div class="form-group row">
									<label for="namapasien" class="col-12 col-lg-2">Nama</label>
									<input type="text" class="form-control col-12 col-lg-10" id="namapasien" name="namapasien"
									value="<?php updateform(@$data['namapasien'], "") ?>">
								</div>
								<div class="form-group row">
									<label for="nocm" class="col-12 col-lg-2">Nomor CM</label>
									<input type="text" class="form-control col-12 col-lg-10" id="nocm" name="nocm" minlength="11" maxlength="11"
									value="<?php updateform(@$data['nocm']) ?>">
								</div>
								<div class="form-group row">
									<label for="lahir" class="col-12 col-lg-2">Tgl Lahir</label>
									<input type="date" class="form-control col-12 col-lg-10" id="lahir" name="lahir"
									value="<?php updateform(@$data['lahir']) ?>">
								</div>
								<div class="form-group row">
									<label for="alamatpasien" class="col-12 col-lg-2">Alamat</label>
									<textarea class="form-control col-12 col-lg-10" id="alamatpasien" rows="3" name="alamat"><?php updateform(@$data['alamat']) ?></textarea>
								</div>
								<div class="form-group row">
									<label for="nohp" class="col-12 col-lg-2">Nomor HP</label>
									<input type="text" class="form-control col-12 col-lg-10" id="nohp" name="telp"
									value="<?php updateform(@$data['telp']) ?>">
								</div>
								<!-- pengondisian jika tambah data pasien gagal -->
								<?php if($entri>0) : ?>
									<script>
										alert("<?php updateform("Update", "Tambah")?> Data Berhasil!!");
										document.location = "index.php"
									</script>
								<?php elseif($entri<0) : ?>
									<p class="login-alert">Terjadi kesalahan upload data</p>
								<?php endif ?>
								<button type="submit" class="btn btn-theme2 text-light" name="submitpasien"><?php updateform("Update", "Submit") ?></button>
							</form>			
						</div>
					</div>
				</div>
      </div>
    </section>

    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>