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
                    <li><a href="tambah.php">Tambah</a></li>
                    <li ><a href="transaksi.php">Laporan Transaksi</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
        </header>
        <div class="content">
            <div class="content1">
                <div class="content12">
               
                </div>
            </div>
            <p>HALAMAN ADMIN<p>
            <div class="table1">
            <table>
                <tr>
                    <td>NO</td>
                    <td>ID Cabang</td>
                    <td>Alamat Barbershop</td>
                    <td>No Telp</td>
                    <td>Model Potongan Rambut</td>
                    <td>Tarif</td>
                    <td>Jam Buka</td>
                    <td>Keterangan</td>
                </tr>
                <?php
                    $ambilsemuadata = mysqli_query($koneksi , "select * from utama");
                    $i = 1;
                    while($data = mysqli_fetch_array($ambilsemuadata)){
                        $idc = $data['id_cabang'];
                        $alamat = $data['alamat_toko'];
                        $nl = $data['no_telp'];
                        $mpr = $data['model_potongan_rambut'];
                        $tarif = $data['tarif'];
                        $jb = $data['jam_buka'];
                ?>
                <tr>
                    <td><?=$i++;?></td>
                    <td><?=$idc;?></td>
                    <td><?=$alamat;?></td>
                    <td><?=$nl;?></td>
                    <td><?=$mpr;?></td>
                    <td><?=$tarif;?></td>
                    <td><?=$jb;?></td>
                    <td>
                        <a href="update.php?idc=<?php echo $data['id_cabang'];?>"><input type='button' value='Update'></a>
                        <a href="delete.php?idc=<?php echo $data['id_cabang'];?>"><input type='button' value='Delete'></a>
                    </td>
                   
                <?php
                    }
                ?>
            </table>
            </div>
        </div>
        <div class="footer">
            <p>&copy 2000018231 - Sulastriani - Teknik Informatika - Universitas Ahmad Dahlan</p>
        </div>
    </body>
   
</html>