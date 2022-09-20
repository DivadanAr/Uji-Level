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
    <p><a href="barang.html">Tambah Data barang</a></p>
    <table border='1' cellspacing='0'>
            <tr>
                <th>kode barang</th>
                <th>Nama barang</th>
                <th>Jenis</th>
                <th>merek</th>
                <th>kondisi</th>
                <th>jumlah barang</th>
                <th>Action</th>
            </tr>
            <?php
                $sql = "SELECT * FROM data_barang";
                $query = mysqLi_query ($connect,$sql);
                while($data = mysqLi_fetch_array($query)){
                    echo "
                    <tr>
                        <td>$data[kode_barang]</td>
                        <td>$data[nama_barang]</td>
                        <td>$data[jenis]</td>
                        <td>$data[merek]</td>
                        <td>$data[kondisi_barang]</td>
                        <td>$data[jumlah_barang]</td>
                        <td class='action'>
                            <a href='formeditbarang.php?kode_barang=".$data['kode_barang']."'>Edit</a>
                            <a href='hapus.php?kode_barang=".$data['kode_barang']."' >Hapus</a>
                        </td>
                    </tr>
                    ";
                }
            ?>
    </table>

</body>
</html>