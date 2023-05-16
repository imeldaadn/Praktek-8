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
                DATA ORANG TUA KANDUNG
            </div>
            <div class="card-body bg-light text-dark">
                <form method="post" action="simpan_data_ortu.php">
                    <div class="form-row mt-4"> 
                        <div class="col-md-3">
                            <label for="nama_ayah" class="font-weight-bold">Nama Ayah Kandung</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" name="nama_ayah" class="form-control" 
                            id="nama_ayah" placeholder = "Nama lengkap">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="tahun_lahir_ayah" class="font-weight-bold">Tahun Lahir</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="tahun_lahir_ayah" class="form-control" 
                            id="tahun_lahir_ayah" placeholder = "Tahun lahir">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="pendidikan_ayah" class="font-weight-bold">Pendidikan</label>
                        </div>
                        <div class="col-md-9">
                            <select name="pendidikan_ayah" class="form-control">
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD Sederajat">SD Derajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="pekerjaan_ayah" class="font-weight-bold">Pekerjaan</label>
                        </div>
                        <div class="col-md-9">
                            <select name="pekerjaan_ayah" class="form-control">
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                <option value="Karyawan Swatsa">Karyawan Swatsa</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pedagang Besar">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswata</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lain-lain">Lain-lain</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="penghasilan_ayah" class="font-weight-bold">Penghasilan Bulanan</label>
                        </div>
                        <div class="col-md-9">
                            <select name="penghasilan_ayah" class="form-control">
                                <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                                <option value="500.000 - 999.9999">500.000 - 999.9999</option>
                                <option value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                                <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                                <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                                <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="kebutuhan_khusus_ayah" class="font-weight-bold">Berkebutuhan Khusus</label>
                        </div>
                        <div class="col-md-9">
                            <select name="kebutuhan_khusus_ayah" class="form-control">
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
                            <label for="nama_ibu" class="font-weight-bold">Nama Ibu Kandung</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" name="nama_ibu" class="form-control" 
                            id="nama_ibu" placeholder = "Nama lengkap">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="tahun_lahir_ibu" class="font-weight-bold">Tahun Lahir</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="tahun_lahir_ibu" class="form-control" 
                            id="tahun_lahir_ibu" placeholder = "Tahun lahir">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="pendidikan_ibu" class="font-weight-bold">Pendidikan</label>
                        </div>
                        <div class="col-md-9">
                            <select name="pendidikan_ibu" class="form-control">
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD Sederajat">SD Derajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="pekerjaan_ibu" class="font-weight-bold">Pekerjaan</label>
                        </div>
                        <div class="col-md-9">
                            <select name="pekerjaan_ibu" class="form-control">
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                <option value="Karyawan Swatsa">Karyawan Swatsa</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pedagang Besar">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswata</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lain-lain">Lain-lain</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="penghasilan_ibu" class="font-weight-bold">Penghasilan Bulanan</label>
                        </div>
                        <div class="col-md-9">
                            <select name="penghasilan_ibu" class="form-control">
                                <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                                <option value="500.000 - 999.9999">500.000 - 999.9999</option>
                                <option value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                                <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                                <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                                <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-3">
                            <label for="kebutuhan_khusus_ibu" class="font-weight-bold">Berkebutuhan Khusus</label>
                        </div>
                        <div class="col-md-9">
                            <select name="kebutuhan_khusus_ibu" class="form-control">
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