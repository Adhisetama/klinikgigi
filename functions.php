<?php 

// database connection

$conn = mysqli_connect("localhost", "root", "", "klinikgigi");

// ambil data
function ambildata($data) {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM $data");
    $rows = [];
    if($result === false) return /*mysqli_error($conn)*/ false;
    while($row = mysqli_fetch_assoc($result)) :
        $rows[] = $row;
    endwhile;
    return $rows;
}

// filter data
function filter($table, $filter, $value) {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM $table WHERE $filter = '$value'");
    return mysqli_fetch_assoc($result);
}

// sistem login akal akalan (sudah nggak dipake)
function ceklogin($post) {
    if(isset($post['username'])==true) {
        $username = $post['username'];
        $password = $post['password'];
        $login = filter('accounts', 'username', $username);
        // cek apakah username terdaftar
        if($login == false) {
          header("Location: login.php?auth=usernamenotfound");
        }
        // jika username benar, cek apakah password sesuai
        else if($password == $login['password']) {
          
        } else {
          header("Location: login.php?auth=wrongpassword");
        }
        
      } else {
        header("Location: login.php");
      }
    return $login;
}

// cari data
function caridatapasien($keyword) {
    global $conn;
    $query =
    "SELECT * FROM daftarpasien WHERE
        nocm LIKE '%$keyword%' OR
        namapasien LIKE '%$keyword%' OR
        alamat LIKE '%$keyword%' OR
        telp LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);
    $rows = [];
    if($result === false) return /*mysqli_error($conn)*/ false;
    while($row = mysqli_fetch_assoc($result)) :
        $rows[] = $row;
    endwhile;
    return $rows;
}

// filter data rekam medis

function recordsearch($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM rekammedis WHERE id = '$id'");
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; 
    }
    return $rows;
}

// fungsi tambah pasien

function tambahpasien($post) {
    if( isset($post['submitpasien']) === true ) {
        global $conn;
        // ambil semua nilai post
        $nocm = $post['nocm'];
        $namapasien = $post['namapasien'];
        $lahir = $post['lahir'];
        $alamat = $post['alamat'];
        $telp = $post['telp'];
        // sql query
        $query =
            "INSERT INTO daftarpasien VALUES
            ('', '$nocm', '$namapasien', '$lahir', '$alamat', '$telp')";
        mysqli_query($conn, $query);
        // utk cek apakah query berhasil
        return mysqli_affected_rows($conn);
    }
}

// fungsi tambah rekam medis

function tambahrekam($post) {
    if( isset($post['submitrekaman']) === true ) {
        global $conn;
        // ambil semua nilai post
        $anamnesa = $post['anamnesa'];
        $terapiobat = $post['terapiobat'];
        $riwayatalergi = $post['riwayatalergi'];
        $tindakan = $post['tindakan'];
        $id = $post['id'];
        // sql query
        $query =
            "INSERT INTO rekammedis VALUES
            ('$anamnesa', '$terapiobat', '$riwayatalergi', '$tindakan', '$id')";
        mysqli_query($conn, $query);
        // utk cek apakah query berhasil
        return mysqli_affected_rows($conn);
    }
}

// fungsi update pasien

function updatepasien($post, $get) {
    if( isset($get['id']) && isset($post['submitpasien']) ===  true) {
        $id = $get['id'];
        global $conn;
        // ambil data dari post
        $nocm = $post['nocm'];
        $namapasien = $post['namapasien'];
        $lahir = $post['lahir'];
        $alamat = $post['alamat'];
        $telp = $post['telp'];
        // update query
        $query =
            "UPDATE daftarpasien SET
            nocm = '$nocm',
            namapasien = '$namapasien',
            lahir = '$lahir',
            alamat = '$alamat',
            telp = '$telp'
            WHERE id = $id";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }
}


function login($post) {
    if(isset($post['submit'])===true) {
      $username = $post['username'];
      $pass = $post['password'];
      $login = filter('accounts', 'username', $username);
      // cek apakah username terdaftar
      if($login == false) {
        return 1;
      }
      // jika username benar, cek apakah password sesuai
      else if($pass == $login['password']) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $login['username'];
        header("Location: index.php");
      } else {
        return 2;
      }
    
      return $login;
    }
}

function ceksession() {
    if( isset($_SESSION['login']) ===  true );
    else header("Location: login.php");
}

?>
