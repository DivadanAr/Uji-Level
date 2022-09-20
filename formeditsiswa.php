<?php
    include 'koneksi.php';

    $nisn = $_GET['nisn'];
    $sql = "SELECT * FROM data_siswa WHERE nisn='$nisn'";
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
        <p>Edit data Siswa</p>
        <p><label><input type="hidden" name="nisn" value="<?php echo $data['nisn']?>" required="required"></label></p>
        <p><label>Nama siswa<input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']?>" required="required"></label></p>
        <p>
            <label>Jenis Kelamin
                <input type="radio" id="laki_laki" name="jenis_kelamin" value="laki-laki" <?php if($data['jenis_kelamin']=='laki-laki') echo 'checked'?> required="required">
                <label for="laki_laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" <?php if($data['jenis_kelamin']=='perempuan') echo 'checked'?> required="required">
                <label for="perempuan">Perempuan</label>
            </label>
        </p>
        <p><label>Tanggal Lahir<input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']?>" required="required"></label></p>
        <p><label>Alamat<textarea name="alamat" cols="30" rows="1" required="required"><?php echo $data['alamat']?></textarea></label></p>
        <p><label>Telepon<input type="number" name="telepon" value="<?php echo $data['telepon']?>" required="required"></label></p>
        <p><label>kelas<input type="text" name="kelas" value="<?php echo $data['kelas']?>" required="required"></label></p>
        <input type="submit" name="simpansiswa" value="simpan">
    </form>
</body>
</html>