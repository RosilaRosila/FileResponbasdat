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
            <div class="container">
                <ul>
                    <li><a href="https://www.instagram.com/rosilaaa"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://t.me/Rosilaa"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a href="https://twitter.com/Rosila1507?s=09"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://line.me/ti/p/~rosila_"><i class="fab fa-line"></i></a></li>
                    <li><a href="mailto:rosila1507@gmail.com"><i class="fas fa-envelope-open"></i></a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container1">
                <h1>Halaman Barbershop</h1>
                <ul>
                    <li><a href="halaman.html">Home</a></li>
                    <li class="active"><a href="utama.php">Utama</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </header>
        <div class="content">
            <p>Silahkan dapat Diperhatikan Informasi Barbershop dari Beberapa Cabang<p>
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