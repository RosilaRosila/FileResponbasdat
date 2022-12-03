<?php
    require 'cek.php';

    if(isset($_POST['proses'])){
        mysqli_query($koneksi, "insert into transaksi set
        id_cabang = '$_POST[id_cabang]',
        tanggal = '$_POST[tanggal]',
        pendapatan = '$_POST[pendapatan]'");
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
                    <li class="active"><a href="transaksi.php">Tambah Pendapatan</a></li>
                    <li><a href="datatran.php">Laporan Transaksi</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
        </header>
        <div class="content4">
            <br></br>
           <h3 align="center" padding="20px">Masukan Transaksi Transaksi </h3>
            <form action="" method="post">
                <p>Id Cabang : <p><input type="text" name="id_cabang">
                <br></br>
                <p>Tanggal : <p><input type="text" name="tanggal">
                <br></br>
                <p>Pendapatan : <p><input type="text" name="pendapatan">
                <br></br>
                <input type="submit" value="simpan" name="proses">
            </from> 
        </div>
    </div>
        <div class="footer">
            <p>&copy 2000018231 - Sulastriani - Teknik Informatika - Universitas Ahmad Dahlan</p>
        </div>
    </body>
</html>