<?php
    include 'koneksi.php';

    $kode_barang = $_GET['kode_barang'];
    $sql = "SELECT * FROM data_barang WHERE kode_barang='$kode_barang'";
    $query = mysqLi_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("Data Tidak Ditemukan");
    }
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
    <form action="edit.php" method="post">
        <p>Edit data barang</p>
        <p><label><input type="hidden" name="kode_barang" value="<?php echo $data['kode_barang']?>" required="required"></label></p>
        <p><label>Nama barang<input type="text" name="nama_barang" value="<?php echo $data['nama_barang']?>" required="required"></label></p>
        <p><label>Jenis<input type="text" name="jenis" value="<?php echo $data['jenis']?>" required="required"></label></p>
        <p><label>Merek<input type="text" name="merek" value="<?php echo $data['merek']?>" required="required"></label></p>
        <p><label>Kondisi Barang<input type="text" name="kondisi_barang" value="<?php echo $data['kondisi_barang']?>" required="required"></label></p>
        <p><label>Jumlah Barang<input type="text" name="jumlah_barang" value="<?php echo $data['jumlah_barang']?>" required="required"></label></p>
        <input type="submit" name="simpanbarang" value="simpan">
    </form>
</body>
</html>