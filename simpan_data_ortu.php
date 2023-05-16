<?php
include 'koneksi_formulir.php';

//menyimpan data ke dalam variabel
    $nama_ayah                = $_POST['nama_ayah'];
    $tahun_lahir_ayah         = $_POST['tahun_lahir_ayah'];
    $pendidikan_ayah          = $_POST['pendidikan_ayah'];
    $pekerjaan_ayah           = $_POST['pekerjaan_ayah'];
    $penghasilan_ayah         = $_POST['penghasilan_ayah'];
    $kebutuhan_khusus_ayah    = $_POST['kebutuhan_khusus_ayah'];
    $nama_ibu                 = $_POST['nama_ibu'];
    $tahun_lahir_ibu          = $_POST['tahun_lahir_ibu'];
    $pendidikan_ibu           = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu            = $_POST['pekerjaan_ibu'];
    $penghasilan_ibu          = $_POST['penghasilan_ibu'];
    $kebutuhan_khusus_ibu     = $_POST['kebutuhan_khusus_ibu'];

//query SQL untuk insert data
$query="INSERT INTO data_ortu (nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah,
kebutuhan_khusus_ayah, nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, kebutuhan_khusus_ibu)
VALUES ('$nama_ayah','$tahun_lahir_ayah','$pendidikan_ayah','$pekerjaan_ayah','$penghasilan_ayah',
'$kebutuhan_khusus_ayah','$nama_ibu','$tahun_lahir_ibu','$pendidikan_ibu','$pekerjaan_ibu','$penghasilan_ibu',
'$kebutuhan_khusus_ibu')";

$result = mysqli_query($koneksi, $query);
// Periksa apakah penyimpanan data berhasil
if ($result) {
    echo "<script> alert('Data Telah Tersimpan!');</script>";
        header("location:tampil_formulir.php");

} else {
    echo "<script> alert('Terjadi kesalahan dalam menyimpan data.'); </script>";
}
?>
