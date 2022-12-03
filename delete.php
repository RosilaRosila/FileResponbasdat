<?php
    include "cek.php";

    $idc = $_GET['idc'];

    $delete = mysqli_query($koneksi , "delete from utama where id_cabang = '$idc'");

    if($delte){
        // echo "Data berhasil di ubah";
         header ("refresh:0;admin.php");
     } else {
         //echo "Data berhasil di ubah";
         header ("refresh:0;admin.php");
     }
?>