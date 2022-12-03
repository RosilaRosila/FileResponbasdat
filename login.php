<?php
    require 'cek.php';

   
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    
    //cocokan data dengan data base
        $cekdatabase = mysqli_query($koneksi, "SELECT * FROM login where email = '$email' and password = '$password'");
    
        //hitung jumlah data
        $hitung = mysqli_num_rows($cekdatabase);
        if($hitung>0){
            $_SESSION['log'] = 'True';
            header('location:admin.php');
        }
        else{
            header('location:login.php');
        }
    }
    
    if(!isset($_SESSION['log'])){

    }else{
        header('location:admin.php');
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
                    <li><a href="utama.php">Utama</a></li>
                    <li class="active"><a href="login.php">Login</a></li>
                </ul>
            </div>
        </header>
        <div class="content">
            <p>SILAHKAN MASUKAN EMAIL DAN PASSWORD<p>
            <div class="log">
            <form method="post">
                <div class="form-floating mb-3">
                    <label for="inputEmail" align="center">Email address</label>
                    <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                </div>
                <div class="form-floating mb-3">
                <label for="inputPassword">Password</label>
                    <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                    
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button class="btn btn-primary" name="login">Login</button>
                </div>
            </form>
            </div>
        </div>
        <div class="footer">
            <p>&copy 2000018231 - Sulastriani - Teknik Informatika - Universitas Ahmad Dahlan</p>
        </div>
    </body>
</html>