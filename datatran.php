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
                    <li><a href="transaksi.php">Tambah Pendapatan</a></li>
                    <li class="active"><a href="datatran.php">Laporan Transaksi</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
        </header>
        <div class="content4">
            <br></br>
           <h3 align="center" padding="20px">Laporan Transaksi </h3>
            <div class="table1">
            <table>
                <tr>
                    <td>NO</td>
                    <td>ID Cabang</td>
                    <td>Tanggal</td>
                    <td>Pendapatan</td>
                </tr>
                <?php
                    $ambilsemuadata = mysqli_query($koneksi , "select * from transaksi");
                    $i = 1;
                    while($data = mysqli_fetch_array($ambilsemuadata)){
                        $idc = $data['id_cabang'];
                        $tgl = $data['tanggal'];
                        $pndpt = $data['pendapatan'];
                ?>
                <tr>
                    <td><?=$i++;?></td>
                    <td><?=$idc;?></td>
                    <td><?=$tgl;?></td>
                    <td><?=$pndpt;?></td>
                </tr>
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