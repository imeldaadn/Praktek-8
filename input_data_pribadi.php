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
                DATA PRIBADI
            </div>
            <div class="card-body bg-light text-dark">
                <form method="post" action="simpan_data_pribadi.php">
                    <div class="form-row mt-4"> 
                        <div class="col-md-3">
                            <label for="nama_lngkp" class="font-weight-bold">Nama Lengkap</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" name="nama_lngkp" class="form-control" 
                            id="nama_lngkp" placeholder = "Nama lengkap">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="jenis_kelamin" class="font-weight-bold">Jenis Kelamin</label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                        </label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="L">
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-laki
                            </label>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="nisn" class="font-weight-bold">NISN</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nisn" class="form-control" 
                            id="nisn" placeholder = "NISN">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="niK" class="font-weight-bold">NIK</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nik" class="form-control" 
                            id="nik" placeholder = "NIK">
                        </div>
                    </div>

                    <div class="form-row mt-4"> 
                        <div class="col-md-3">
                            <label for="tempat_lahir" class="font-weight-bold">Tempat Lahir</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" name="tempat_lahir" class="form-control" 
                            id="tempat_lahir" placeholder = "Tempat lahir">
                        </div>
                    </div>           
                    
                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="tgl_lahir" class="font-weight-bold">Tanggal Lahir</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" name="tgl_lahir" class="form-control" 
                            id="tgl_lahir" placeholder = "Tanggal lahir">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="agama" class="font-weight-bold">Agama</label>
                        </div>
                        <div class="col-md-9">
                            <select name="agama" class="form-control">
                                <option value="Islam">Islam</option>
                                <option value="Kristen/Protestan">Kristen/Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khong Hu Chu">Khong Hu Cu</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="kebutuhan_khusus_anak" class="font-weight-bold">Berkebutuhan Khusus</label>
                        </div>
                        <div class="col-md-9">
                            <select name="kebutuhan_khusus_anak" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Netra">Netra</option>
                                <option value="Rungu">Rungu</option>
                                <option value="Grahita Ringan">Grahita Ringan</option>
                                <option value="Grahita Sedang">Grahita Sedang</option>
                                <option value="Daksa Ringan">Daksa Ringan</option>
                                <option value="Daksa Sedang">Daksa Sedang</option>
                                <option value="Laras">Laras</option>
                                <option value="Wicara">Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Sindrome">Down Sindrome</option>
                                <option value="Autis">Autis</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="alamat_jalan" class="font-weight-bold">Alamat Jalan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="alamat_jalan" class="form-control" 
                            id="alamat_jalan" placeholder = "Alamat Jalan">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="rt" class="font-weight-bold">RT</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="rt" class="form-control" 
                            id="rt" placeholder = "RT">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="rw" class="font-weight-bold">RW</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="rw" class="form-control" 
                            id="rw" placeholder = "RW">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="dusun" class="font-weight-bold">Nama Dusun</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="dusun" class="form-control" 
                            id="dusun" placeholder = "Dusun">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="kelurahan_desa" class="font-weight-bold">Nama Kelurahan/Desa</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="kelurahan_desa" class="form-control" 
                            id="kelurahan_desa" placeholder = "Kelurahan/Desa">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="kecamatan" class="font-weight-bold">Kecamatan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="kecamatan" class="form-control" 
                            id="kecamatan" placeholder = "Kecamatan">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="kode_pos" class="font-weight-bold">Kode Pos</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="kode_pos" class="form-control" 
                            id="kode_pos" placeholder = "Kode Pos">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="tempat_tinggal" class="font-weight-bold">Tempat Tinggal</label>
                        </div>
                        <div class="col-md-9">
                            <select name="tempat_tinggal" class="form-control">
                                <option value="Bersama orang tua">Bersama orang tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Kos">Kos</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="transportasi" class="font-weight-bold">Mode Transportasi</label>
                        </div>
                        <div class="col-md-9">
                            <select name="transportasi" class="form-control">
                                <option value="Jalan kaki">Jalan kaki</option>
                                <option value="Kendaraan pribadi">Kendaraan pribadi</option>
                                <option value="Kendaraan umum/angkot/pete-pete">Kendaraan umum/angkot/pete-pete</option>
                                <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                <option value="Kereta Api">Kereta Api</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Andong/bendi/sado/dokar/delman/becak">Andong/bendi/sado/dokar/delman/becak</option>
                                <option value="Perahu penyebrangan/rakit/getek">Perahu penyebrangan/rakit/getek</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="no_hp" class="font-weight-bold">Nomor HP</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="no_hp" class="form-control" 
                            id="no_hp" placeholder = "Nomor HP">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="no_telp" class="font-weight-bold">Nomor Telepon</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="no_telp" class="form-control" 
                            id="no_telp" placeholder = "Nomor Telp">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="email" class="font-weight-bold">Email Pribadi</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="email" class="form-control" 
                            id="email" placeholder = "Email">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="kps_pkh_kip" class="font-weight-bold">Penerima KPS/PKH/KIP</label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="kps_pkh_kip" value="y">
                            <label class="form-check-label" for="kps_pkh_kip">
                                Ya
                        </label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="kps_pkh_kip" value="t">
                            <label class="form-check-label" for="kps_pkh_kip">
                                Tidak
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="no_kps_pkh_kip" class="font-weight-bold">No. KPS/KKS/PKH/KIP</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="no_kps_pkh_kip" class="form-control" 
                            id="no_kps_pkh_kip" placeholder = "Nomor KPS/KKS/PKH/KIP">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="kewarganegaraan" class="font-weight-bold">Kewarganegaraan</label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="kewarganegaraan" value="WNI">
                            <label class="form-check-label" for="kewarganegaraan">
                                Indonesia (WNI)
                        </label>
                        </div>
                        <div class="form-check-inline col-md-3">
                            <input class="form-check-input" type="radio" name="kewarganegaraan" value="WNA">
                            <label class="form-check-label" for="kewarganegaraan">
                                Asing (WNA)
                            </label>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="nama_negara" class="font-weight-bold">Nama Negara</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nama_negara" class="form-control" 
                            id="nama_negara" placeholder = "Nama negara">
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