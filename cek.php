<?php



$host = "localhost";
$user = "root";
$pass = "";
$db = "responsi_basdat";

$koneksi = mysqli_connect($host , $user , $pass , $db);

if(!$koneksi){
    die("gagal koneksi");
} else {
    //echo "koneksi berhasil";
}


// Menambah Data

?>