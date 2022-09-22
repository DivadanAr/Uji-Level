<?php
    include 'koneksi.php';
    $sql_siswa = "SELECT * FROM data_siswa";
    $data_siswa = mysqli_query($connect, $sql_siswa);
    $jumlah_siswa = mysqli_num_rows($data_siswa);

    $sql_barang = "SELECT * FROM data_barang";
    $data_barang = mysqli_query($connect, $sql_barang);
    $jumlah_barang = mysqli_num_rows($data_barang);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- font quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- fotn courier -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@700&display=swap" rel="stylesheet">

    <!-- font lobster -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <title>Home</title>
</head>
<body>
    <div class="container-sidebar">
        <div class="sidebar-bg">
            <div class="sidebar">
                <div class="web-icon">
                    <div class="logo">
                        <img src="logo.png" alt="">
                    </div>
                    <div class="app-name">
                        <p>INVe<span>Sar</span></p>
                    </div>    
                </div>
                <div class="menubar">
                    <ul>
                        <li class="menu"><a href="home.php">Home</a></li>
                        <li><a href="datasiswa.php">Data Siswa</a></li>
                        <li><a href="databarang.php">Data Barang</a></li>
                    </ul>
                </div>
    
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card-content">
            
            <div class="text">
                <p>Hallo!!!</p>
                <p>Selamat Datang</p>
            </div>
            <div class="btn">
                <ul>
                    <li><a href="datasiswa.php"><div class="btn-siswa"><img src="siswa.png" alt=""><?php echo $jumlah_siswa;?> Data Siswa</div></a></li>
                    <li><a href="databarang.php"><div class="btn-barang"><img src="barang.png" alt=""><?php echo $jumlah_barang;?> Data Barang</div></a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</body>
</html>