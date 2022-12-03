<?php
    include "cek.php";


    $idc = $_POST['idc'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];
    $mpr = $_POST['mpr'];
    $tarif = $_POST['tarif'];
    $jambuka = $_POST['jambuka'];

    $update = mysqli_query($koneksi , "update utama set alamat_toko='$alamat', 
    no_telp='$notelp', model_potongan_rambut='$mpr',
    tarif='$tarif', jam_buka='$jambuka' where id_cabang='$idc'");

    if($update){
       // echo "Data berhasil di ubah";
        header ("refresh:0;admin.php");
    } else {
        //echo "Data berhasil di ubah";
        header ("refresh:0;admin.php");
    }
?>