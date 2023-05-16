<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FORMULIR PESERTA DIDIK</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .warning {
            color: #ff0000;
        }
    </style>
  </head>

  <body class="bg-secondary text-white">
    <div class="container">
        <div class="card bg-dark text-white mt-5">
            <div class="card-header text-center font-weight-bold"> 
                REGISTRASI PESERTA DIDIK
            </div>
            <div class="card-body bg-light text-dark">
                <form method="post" action="simpan_data_siswa.php">
                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="tgl_otomatis" class="font-weight-bold">Tanggal Pendaftaran</label>
                        </div>
                        <div class="col-md-9">
                            <div class="tgl_pendaftaran" name="tgl_otomatis">
                            <?php
                                // Mengatur zona waktu sesuai kebutuhan
                                date_default_timezone_set('Asia/Jakarta');

                                // Mendapatkan tanggal dan waktu saat ini
                                $tgl_otomatis = date('d F Y');

                                // Menampilkan tanggal dan waktu
                                echo $tgl_otomatis;
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="jenis_pendaftaran" class="font-weight-bold">Jenis Pendaftaran</label>
                        </div>
                        <div class="col-md-9">
                            <select name="jenis_pendaftaran" class="form-control">
                                <option value="01">Siswa Baru</option>
                                <option value="02">Pindahan</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="tgl_masuk" class="font-weight-bold">Tanggal Masuk Sekolah</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" name="tgl_masuk" class="form-control" 
                            id="tgl_masuk" placeholder = "Tanggal Masuk Sekolah">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="nis" class="font-weight-bold">NIS</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nis" class="form-control" 
                            id="nis" placeholder = "NIS">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="noper_ujian" class="font-weight-bold">Nomor Peserta Ujian</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="noper_ujian" class="form-control" 
                            id="noper_ujian" placeholder = "Nomor Peserta Ujian">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="pernah_paud" class="font-weight-bold">Apakah Pernah PAUD</label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="pernah_paud" value="y">
                            <label class="form-check-label" for="pernah_paud">
                                Ya
                        </label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="pernah_paud" value="t">
                            <label class="form-check-label" for="pernah_paud">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="pernah_tk" class="font-weight-bold">Apakah Pernah TK</label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="pernah_tk" value="y">
                            <label class="form-check-label" for="pernah_tk">
                                Ya
                        </label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="pernah_tk" value="t">
                            <label class="form-check-label" for="pernah_tk">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="seri_skhun" class="font-weight-bold">No. Seri SKHUN Sebelumnya</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="seri_skhun" class="form-control" 
                            id="seri_skhun" placeholder = "No Seri SKHUN">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="seri_ijazah" class="font-weight-bold">No. Seri Ijazah Sebelumnya</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="seri_ijazah" class="form-control" 
                            id="seri_ijazah" placeholder = "No Seri Ijazah">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="hobi" class="font-weight-bold">Hobi</label>
                        </div>
                        <div class="col-md-9">
                            <select name="hobi" class="form-control">
                                <option value="Olahraga">Olahraga</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Membaca">Membaca</option>
                                <option value="Menulis">Menulis</option>
                                <option value="Traveling">Traveling</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="cita_cita" class="font-weight-bold">Cita-cita</label>
                        </div>
                        <div class="col-md-9">
                            <select name="cita_cita" class="form-control">
                                <option value="PNS">PNS</option>
                                <option value="TNI/POLRI">TNI/POLRI</option>
                                <option value="Guru/Dosen">Guru/Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-sm-12 text-right fixed-right">
                            <button type="submit" class="btn btn-danger">Next</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>