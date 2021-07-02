<!-- <?php 

require 'functions.php';

// // var_dump(filter('username', 'azka'));

// $result = mysqli_query($conn, "SELECT * FROM accounts WHERE username = 'azka'");
// var_dump($result);

// $hasil = mysqli_fetch_assoc($result);
// var_dump($hasil)

?> -->

<?php 
  // require "functions.php";

 
  //   $username = 'azka';

  //   // cari username di database
  //   $result = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username'");
  //   $acc = mysqli_fetch_assoc($result);

  //   var_dump($acc);
    


  
?>                                                                  

<?php 

$result = mysqli_query($conn, "SELECT * FROM rekammedis WHERE id = 1");

var_dump($result);
//var_dump(mysqli_fetch_assoc($result))

$tes = recordsearch('1');
var_dump($tes)




?>