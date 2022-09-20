<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="siswa.html">Tambah Data Siswa</a></p>
    <table border='1' cellspacing='0'>
            <tr>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
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
                            <a href='formeditsiswa.php?nisn=".$data['nisn']."'>Edit</a>
                            <a href='hapus.php?nisn=".$data['nisn']."' >Hapus</a>
                        </td>
                    </tr>
                    ";
                }
            ?>
    </table>

</body>
</html>