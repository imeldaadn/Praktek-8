<?php
include 'koneksi-kontak.php';

//menyimpan data ke dalam variabel
$Nama   = $_POST['Nama'];
$jkel   = $_POST['jkel'];
$Email   = $_POST['Email'];
$Alamat   = $_POST['Alamat'];
$Kota   = $_POST['Kota'];
$Pesan   = $_POST['Pesan'];

//query SQL untuk insert data
$query="INSERT INTO kontak SET Nama='$Nama', jkel='$jkel', Email='$Email', Alamat='$Alamat', Kota='$Kota', Pesan='$Pesan'";
mysqli_query($koneksi, $query);

//mengalihkan ke halaman tampilkontak.php
header("location:tampilkontak.php");
?>
