<?php
include 'koneksi_formulir.php';

//menyimpan data ke dalam variabel
    $tgl_otomatis             = $_POST['tgl_otomatis'];
    $jenis_pendaftaran        = $_POST['jenis_pendaftaran'];
    $tgl_masuk                = $_POST['tgl_masuk'];
    $nis                      = $_POST['nis'];
    $noper_ujian              = $_POST['noper_ujian'];
    $pernah_paud              = $_POST['pernah_paud'];
    $pernah_tk                = $_POST['pernah_tk'];
    $seri_skhun               = $_POST['seri_skhun'];
    $seri_ijazah              = $_POST['seri_ijazah'];
    $hobi                     = $_POST['hobi'];
    $cita_cita                = $_POST['cita_cita'];

//query SQL untuk insert data
$query="INSERT INTO data_peserta (tgl_otomatis, jenis_pendaftaran, tgl_masuk, nis, noper_ujian, pernah_paud, pernah_tk, seri_skhun,           
seri_ijazah, hobi, cita_cita)
VALUES ('$tgl_otomatis','$jenis_pendaftaran','$tgl_masuk', '$nis', '$noper_ujian', '$pernah_paud', '$pernah_tk', '$seri_skhun',            
'$seri_ijazah', '$hobi', '$cita_cita')";

$result = mysqli_query($koneksi, $query);
// Periksa apakah penyimpanan data berhasil
if ($result) {
    echo "<script> alert('Data Telah Tersimpan!');</script>";
} else {
    echo "<script> alert('Terjadi kesalahan dalam menyimpan data.'); </script>";
}

// Menutup koneksi database
$koneksi->close();
header("Location:input_data_pribadi.php");
?>


