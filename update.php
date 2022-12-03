<?php
    require 'cek.php';

    

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
           <h3 align="center" padding="20px">Update Data </h3>
           <?php
                $idc = $_GET['idc'];
                $data = mysqli_query($koneksi,"select * from utama where id_cabang = '$idc'");
                while($tampil = mysqli_fetch_array($data)){
           ?>
            <form action="updatedata.php" method="post">
                <p>Id Cabang : </p>
                <input type="text" name="idc" value="<?php echo $tampil['id_cabang'];?>" readonly>
                <br></br>
                <p>Alamat : </p>
                <input type="text" name="alamat" value="<?php echo $tampil['alamat_toko'];?>">
                <br></br>
                <p>No Telp : </p>
                <input type="text" name="notelp" value="<?php echo $tampil['no_telp'];?>" >
                <br></br>
                <p>Model Potongan Rambut : </p>
                <input type="text" name="mpr" value="<?php echo $tampil['model_potongan_rambut'];?>">
                <br></br>
                <p>Tarif : </p>
                <input type="text" name="tarif" value="<?php echo $tampil['tarif'];?>" >
                <br></br>
                <p>Jam Buka : </p>
                <input type="text" name="jambuka" value="<?php echo $tampil['jam_buka'];?>">
                <br></br>
                <input type="submit" value="simpan" name="proses">
            </from> 
            <?php
                }
            ?>
        </div>
        <div class="footer">
            <p>&copy 2000018231 - Sulastriani - Teknik Informatika - Universitas Ahmad Dahlan</p>
        </div>
    </body>
    
</html>