<?php
    include 'koneksi.php';
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

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Data Siswa</title>
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
                        <li><a href="home.php">Home</a></li>
                        <li class="menu"><a href="datasiswa.php">Data Siswa</a></li>
                        <li><a href="databarang.php">Data Barang</a></li>
                    </ul>
                </div>
    
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card-content">
            <div class="isi-content">
                <div class="judul">
                    <p>Data Siswa</p>
                </div>
                <div class="button">
                    <div><p><a href="siswa.html" class="btn-tmbh">Tambah Data Siswa</a></p></div>
                    <form action="searchsiswa.php" methode="GET" class="search">
                        <input type="text" name="searchsiswa" placeholder="search" autocomplete="off" required="required"/>
                        <button type="submit"><i name="search" class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="table-content">
                    <table>
                        <tr>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th style="width='70px'">Alamat</th>
                            <th>Telepon</th>
                            <th>kelas</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM data_siswa";
                            $query = mysqLi_query ($connect,$sql);
                            while($data = mysqLi_fetch_array($query)){
                                echo "
                                <tr>
                                    <td>$data[nisn]</td>
                                    <td>$data[nama_siswa]</td>
                                    <td>$data[jenis_kelamin]</td>
                                    <td>$data[tanggal_lahir]</td>
                                    <td>$data[alamat]</td>
                                    <td>$data[telepon]</td>
                                    <td>$data[kelas]</td>
                                    <td class='action'>
                                        <a href='formeditsiswa.php?nisn=".$data['nisn']."'><img src='edit.png'></a>
                                        <a href='hapus.php?nisn=".$data['nisn']."' ><img src='hapus.png'></a>
                                    </td>
                                </tr>
                                ";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>