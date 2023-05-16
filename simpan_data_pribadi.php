<?php
include 'koneksi_formulir.php';

//menyimpan data ke dalam variabel
$nama_lngkp               = $_POST['nama_lngkp'];
$jenis_kelamin            = $_POST['jenis_kelamin'];
$nisn                     = $_POST['nisn'];
$nik                      = $_POST['nik'];
$tempat_lahir             = $_POST['tempat_lahir'];
$tgl_lahir                = $_POST['tgl_lahir'];
$agama                    = $_POST['agama'];
$kebutuhan_khusus_anak    = $_POST['kebutuhan_khusus_anak'];
$alamat_jalan             = $_POST['alamat_jalan'];
$rt                       = $_POST['rt'];
$rw                       = $_POST['rw'];
$dusun                    = $_POST['dusun'];
$kelurahan_desa           = $_POST['kelurahan_desa'];
$kecamatan                = $_POST['kecamatan'];
$kode_pos                 = $_POST['kode_pos'];
$tempat_tinggal           = $_POST['tempat_tinggal'];
$transportasi             = $_POST['transportasi'];
$no_hp                    = $_POST['no_hp'];
$no_telp                  = $_POST['no_telp'];
$email                    = $_POST['email'];
$kps_pkh_kip              = $_POST['kps_pkh_kip'];
$no_kps_pkh_kip           = $_POST['no_kps_pkh_kip'];
$kewarganegaraan          = $_POST['kewarganegaraan'];
$nama_negara              = $_POST['nama_negara'];

//query SQL untuk insert data
$query="INSERT INTO data_pribadi (nama_lngkp, jenis_kelamin, nisn, nik, tempat_lahir, tgl_lahir, agama, kebutuhan_khusus_anak,
alamat_jalan, rt, rw, dusun, kelurahan_desa, kecamatan, kode_pos, tempat_tinggal, transportasi, no_hp, no_telp, email, 
kps_pkh_kip, no_kps_pkh_kip, kewarganegaraan, nama_negara)
VALUES ('$nama_lngkp','$jenis_kelamin','$nisn','$nik','$tempat_lahir','$tgl_lahir','$agama',           
'$kebutuhan_khusus_anak','$alamat_jalan','$rt','$rw','$dusun','$kelurahan_desa','$kecamatan','$kode_pos','$tempat_tinggal',        
'$transportasi','$no_hp','$no_telp','$email','$kps_pkh_kip','$no_kps_pkh_kip','$kewarganegaraan', '$nama_negara')";

$result = mysqli_query($koneksi, $query);
// Periksa apakah penyimpanan data berhasil
if ($result) {
    echo "<script> alert('Data Telah Tersimpan!');</script>";
} else {
    echo "<script> alert('Terjadi kesalahan dalam menyimpan data.'); </script>";
}

// Menutup koneksi database
$koneksi->close();
header("Location:input_data_ortu.php");
?>
