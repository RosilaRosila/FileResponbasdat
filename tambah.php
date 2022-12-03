<?php
    require 'cek.php';

    if(isset($_POST['proses'])){
        mysqli_query($koneksi, "insert into utama set
        id_cabang = '$_POST[id_cabang]',
        alamat_toko = '$_POST[alamat_toko]',
        no_telp = '$_POST[no_telp]',
        model_potongan_rambut = '$_POST[model_potongan_rambut]',
        tarif = '$_POST[tarif]',
        jam_buka = '$_POST[jam_buka]'");
    }

?>
<!DOCTYPE html>

    <head>
        <title>RESPONSI PRAKTIKUM BASDAT</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        
    </head>
    <body>
        <div class="medsos">
        </div>
        <header>
            <div class="container1">
                <h1>Halaman Barbershop</h1>
                <ul>
                    <li><a href="halaman.html">Home</a></li>
                    <li><a href="utama.php">Utama</a></li>
                    <li class="active"><a href="admin.php">Admin</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
        </header>
        <div class="content4">
           <h3 align="center" padding="20px">Tambah Data </h3>
            <form action="" method="post">
                <p>Id Cabang : <p><input type="text" name="id_cabang">
                <br></br>
                <p>Alamat : <p><input type="text" name="alamat_toko">
                <br></br>
                <p>No Telp : <p><input type="text" name="no_telp">
                <br></br>
                <p>Model Potongan Rambut : <p><input type="text" name="model_potongan_rambut">
                <br></br>
                <p>Tarif : <p><input type="text" name="tarif">
                <br></br>
                <p>Jam Buka : <p><input type="text" name="jam_buka">
                <br></br>
                <input type="submit" value="simpan" name="proses">
            </from> 
        </div>
        <div class="footer">
            <p>&copy 2000018231 - Sulastriani - Teknik Informatika - Universitas Ahmad Dahlan</p>
        </div>
    </body>
</html>