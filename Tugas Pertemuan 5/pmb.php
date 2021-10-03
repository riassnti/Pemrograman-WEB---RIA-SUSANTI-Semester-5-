<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Mahasiswa Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container p-3 my-3 border">
        <h1 class="text">Pendaftaran Online</h1>
        <?php
            $jalurErr = $namaErr = $ttlErr = $nikErr = $jkErr = $agamaErr = $statusErr = $alamatErr = $kpErr = "";
            $no_hpErr = $emailErr = $asal_sklhErr = $kota_sklhErr = $provinsiErr = $jurusan_sklhErr = $tahun_llsErr = $biayaErr = "";
            $nama_ayahErr = $nama_ibuErr = $alamat_ortuErr = $kp_ortuErr = $nohp_ortuErr = $pendidikan_ayahErr = $pendidikan_ibuErr = $status_ayahErr = $status_ibuErr = "";
            $pekerjaan_ayahErr = $pekerjaan_ibuErr = $penghasilan_ayahErr = $penghasilan_ibuErr = $psErr = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["jalur_penerimaan"])) {
                    $jalurErr = "Jalur Penerimaan is required";
                } else {
                    $jalurErr = test_input($_POST["jalur_penerimaan"]);
                }
                if (empty($_POST["nama_mahasiswa"])) {
                    $namaErr = "Nama Mahasiswa is required";
                } else {
                    $namaErr = test_input($_POST["nama_mahasiswa"]);
                }
                if (empty($_POST["ttl"])) {
                    $ttlErr = "Tempat Tanggal Lahir is required";
                } else {
                    $ttlErr = test_input($_POST["ttl"]);
                }
                if (empty($_POST["nik"])) {
                    $nikErr = "Nomor Induk Kependudukan is required";
                } else {
                    $nikErr = test_input($_POST["nik"]);
                }
                if (empty($_POST["jk"])) {
                    $jkErr = "Jenis Kelamin is required";
                } else {
                    $jkErr = test_input($_POST["jk"]);
                }
                if (empty($_POST["agama"])) {
                    $agamaErr = "Agama required";
                } else {
                    $agamaErr = test_input($_POST["agama"]);
                }
                if (empty($_POST["status"])) {
                    $statusErr = "Status is required";
                } else {
                    $statusErr = test_input($_POST["status"]);
                }
                if (empty($_POST["alamat"])) {
                    $alamatErr = "Alamat is required";
                } else {
                    $alamatErr = test_input($_POST["alamat"]);
                }
                if (empty($_POST["kode_pos"])) {
                    $kpErr = "Kode Pos is required";
                } else {
                    $kpErr = test_input($_POST["kode_pos"]);
                }
                if (empty($_POST["no_hp"])) {
                    $no_hpErr = "No Handphone is required";
                } else {
                    $no_hpErr = test_input($_POST["no_hp"]);
                }
                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $emailErr = test_input($_POST["email"]);
                }
                if (empty($_POST["asal_sklh"])) {
                    $asal_sklhErr = "Asal Sekolah is required";
                } else {
                    $asal_sklhErr = test_input($_POST["asal_sklh"]);
                }
                if (empty($_POST["kota_sklh"])) {
                    $kota_sklhErr = "Kota Sekolah is required";
                } else {
                    $kota_sklhErr = test_input($_POST["kota_sklh"]);
                }
                if (empty($_POST["provinsi"])) {
                    $provinsiErr = "Provinsi is required";
                } else {
                    $provinsiErr = test_input($_POST["provinsi"]);
                }
                if (empty($_POST["jurusan_sklh"])) {
                    $jurusan_sklhErr = "Jurusan Sekolah is required";
                } else {
                    $jurusan_sklhErr = test_input($_POST["jurusan_sklh"]);
                }
                if (empty($_POST["tahun_lls"])) {
                    $tahun_llsErr = "Tahun Lulus is required";
                } else {
                    $tahun_llsErr = test_input($_POST["alamat"]);
                }
                if (empty($_POST["biaya"])) {
                    $biayaErr = "Biaya is required";
                } else {
                    $biayaErr = test_input($_POST["biaya"]);
                }
                if (empty($_POST["nama_ayah"])) {
                    $nama_ayahErr = "Nama Ayah is required";
                } else {
                    $nama_ayahErr = test_input($_POST["nama_ayah"]);
                }
                if (empty($_POST["nama_ibu"])) {
                    $nama_ibuErr = "Nama Ibu is required";
                } else {
                    $nama_ibuErr = test_input($_POST["nama_ibu"]);
                }
                if (empty($_POST["alamat_ortu"])) {
                    $alamat_ortuErr = "Alamat is required";
                } else {
                    $alamat_ortuErr = test_input($_POST["alamat_ortu"]);
                }
                if (empty($_POST["kode_posortu"])) {
                    $kp_ortuErr = "Kode Pos is required";
                } else {
                    $kp_ortuErr = test_input($_POST["kode_posortu"]);
                }
                if (empty($_POST["nohp_ortu"])) {
                    $nohp_ortuErr = "No Hp is required";
                } else {
                    $nohp_ortuErr = test_input($_POST["nohp_ortu"]);
                }
                if (empty($_POST["pendidikan_ayah"])) {
                    $pendidikan_ayahErr = "Pendidikan Terakhir Ayah is required";
                } else {
                    $pendidikan_ayahErr = test_input($_POST["pendidikan_ayah"]);
                }
                if (empty($_POST["pendidikan_ibu"])) {
                    $pendidikan_ibuErr = "Pendidikan Terakhir Ibu is required";
                } else {
                    $pendidikan_ibuErr = test_input($_POST["pendidikan_ibu"]);
                }
                if (empty($_POST["status_ayah"])) {
                    $status_ayahErr = "Status Ayah is required";
                } else {
                    $status_ayahErr = test_input($_POST["status_ayah"]);
                }
                if (empty($_POST["status_ibu"])) {
                    $status_ibuErr = "Status Ibu is required";
                } else {
                    $status_ibuErr = test_input($_POST["status_ibu"]);
                }
                if (empty($_POST["pekerjaan_ayah"])) {
                    $pekerjaan_ayahErr = "Pekerjaan Ayah is required";
                } else {
                    $pekerjaan_ayahErr = test_input($_POST["pekerjaan_ayah"]);
                }
                if (empty($_POST["pekerjaan_ibu"])) {
                    $pekerjaan_ibuErr = "Pekerjaan Ibu is required";
                } else {
                    $pekerjaan_ibuErr = test_input($_POST["pekerjaan_ibu"]);
                }
                if (empty($_POST["penghasilan_ayah"])) {
                    $penghasilan_ayahErr = "Penghasilan Ayah is required";
                } else {
                    $penghasilan_ayahErr = test_input($_POST["penghasilan_ayah"]);
                }
                if (empty($_POST["penghasilan_ibu"])) {
                    $penghasilan_ibuErr = "Penghasilan Ibu is required";
                } else {
                    $penghasilan_ibuErr = test_input($_POST["penghasilan_ibu"]);
                }
                if (empty($_POST["program_studi"])) {
                    $psErr = "Program Studi is required";
                } else {
                    $psErr = test_input($_POST["program_studi"]);
                }
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <form id="form" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label><dt>Jalur Penerimaan Mahasiswa Baru</dt></label>
                        <select class="form-control" name="jalur_penerimaan" required="required">
                            <option>--Pilih Jalur Penerimaan--</option>
                            <option value="1">Tahun Akademik 2022/2023 Jalur Undangan</option>
                            <option value="2">Tahun Akademik 2022/2023 Jalur Seleksi Rata-rata Rapor</option>
                            <option value="3">Tahun Akademik 2022/2023 Jalur Seleksi Peringkat Kelas</option>
                            <option value="4">Tahun Akademik 2022/2023 Jalur Seleksi Ujian Saringan Masuk (USM)</option>
                            <option value="5">Tahun Akademik 2022/2023 Jalur Seleksi Beasiswa ASAK (Ayo Sekolah Ayo Kuliah) Khusus yang beragama Katholik dan anggota ASAK</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label><dt>Nama Calon Mahasiswa (sesuai ijazah SMA)</dt></label>
                        <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Silahkan masukan nama lengkap" required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label><dt>Tempat & Tanggal Lahir</dt></label>
                        <input type="text" name="ttl" class="form-control" placeholder="Silahkan masukkan tempat, tanggal/bulan/tahun lahir..." required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>NIK (Nomor Induk Kependudukan KTP/KK)</dt></label>
                        <input type="text" name="nik" class="form-control" placeholder="Silahkan masukkan Nomor Induk Kependudukan..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Jenis Kelamin</dt></label>
                        <select class="form-control" name="jk">
                            <option>--Pilih--</option>
                            <option value="1">Pria</option>
                            <option value="2">Wanita</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Agama</dt></label>
                        <select class="form-control" name="agama">
                            <option>--Pilih--</option>
                            <option value="1">Islam</option>
                            <option value="2">Katolik</option>
                            <option value="3">Kristen</option>
                            <option value="4">Hindu</option>
                            <option value="5">Budha</option>
                            <option value="6">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Status</dt></label>
                        <select class="form-control" name="status">
                            <option>--Pilih--</option>
                            <option value="1">Belum Menikah</option>
                            <option value="2">Menikah</option>
                            <option value="3">Janda</option>
                            <option value="4">Duda</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label><dt>Alamat</dt></label>
                        <textarea class="form-control" name="alamat" rows="2" id="alamat" placeholder="Silahkan masukkan alamat lengkap..." required></textarea>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Kode Pos</dt></label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Silahkan masukkan kodepos..." required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>No Handphone</dt></label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Silahkan masukkan no handphone..." required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Email</dt></label>
                        <input type="text" name="email" class="form-control" placeholder="Silahkan masukkan email..." required>
                    </div>
                </div>
            </div>

            <div class="alert">
                <strong><h3>DATA SEKOLAH ASAL CALON MAHASISWA</h3></strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Asal Sekolah (SMA/SMK/MA)</dt></label>
                        <input type="text" name="asal_sklh" class="form-control" placeholder="Silahkan masukkan asal sekolah..." required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Kota Sekolah</dt></label>
                        <input type="text" name="kota_sklh" class="form-control" placeholder="Silahkan masukkan kota asal sekolah..." required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Provinsi Sekolah</dt></label>
                        <select class="form-control" name="provinsi">
                            <option>--Pilih--</option>
                            <option value="1">Aceh</option>
                            <option value="2">Bali</option>
                            <option value="3">Banten</option>
                            <option value="4">Bengkulu</option>
                            <option value="5">Bogor</option>
                            <option value="6">Depok</option>
                            <option value="7">DI Yogyakarta</option>
                            <option value="8">Gorontalo</option>
                            <option value="9">Jakarta Barat</option>
                            <option value="10">Jakarta Pusat</option>
                            <option value="11">Jakarta Selatan</option>
                            <option value="12">Jakarta Timur</option>
                            <option value="13">Jakarta Utara</option>
                            <option value="14">Jambi</option>
                            <option value="15">Jawa Barat</option>
                            <option value="16">Jawa Tengah</option>
                            <option value="17">Jawa Timur</option>
                            <option value="18">Kalimantan Barat</option>
                            <option value="19">Kalimantan Selatan</option>
                            <option value="20">Kalimantan Tengah</option>
                            <option value="21">Kalimantan Timur</option>
                            <option value="22">Kalimantan Utara</option>
                            <option value="23">Kepulauan Bangka Belitung</option>
                            <option value="24">Kepulauan Riau</option>
                            <option value="25">Lampung</option>
                            <option value="26">Maluku</option>
                            <option value="27">Maluku Utara</option>
                            <option value="28">Nusa Tenggara Barat</option>
                            <option value="29">Nusa Tenggara Timur</option>
                            <option value="30">Papua</option>
                            <option value="31">Papua Barat</option>
                            <option value="32">Riau</option>
                            <option value="33">Sulawesi Barat</option>
                            <option value="34">Sulawesi Selatan</option>
                            <option value="35">Sulawesi Tengah</option>
                            <option value="36">Sulawesi Tenggara</option>
                            <option value="37">Sulawesi Utara</option>
                            <option value="38">Sumatera Barat</option>
                            <option value="39">Sumatera Selatan</option>
                            <option value="40">Sumatera Utara</option>
                            <option value="41">Tangerang</option>
                            <option value="42">Tangerang Selatan</option>
                            <option value="43">Bekasi</option>
                            <option value="44">Luar Negeri</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Jurusan Sekolah</dt></label>
                        <input type="text" name="jurusan_sklh" class="form-control" placeholder="Silahkan masukkan jurusan sekolah..." required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Tahun Lulus</dt></label>
                        <input type="text" name="tahun_lls" class="form-control" placeholder="Silahkan masukkan tahun lulus..." required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label><dt>Biaya kuliah dibiayai oleh</dt></label>
                        <select class="form-control" name="biaya">
                          <option>--Pilih--</option>
                            <option value="1">Beasiswa</option>
                            <option value="2">Ikatan Dinas</option>
                            <option value="3">Orangtua</option>
                            <option value="4">Wali</option>
                            <option value="5">Sendiri</option>
                            <option value="6">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="alert">
                <strong><h3>DATA ORANG TUA CALON MAHASISWA</h3></strong>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Nama Ayah</dt></label>
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Silahkan masukkan nama ayah..." required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Nama Ibu</dt></label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Silahkan masukkan nama ibu..." required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label><dt>Alamat</dt></label>
                        <textarea class="form-control" name="alamat_ortu" rows="2" id="alamat" placeholder="Silahkan masukkan alamat lengkap..." required></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Kode Pos</dt></label>
                        <input type="text" name="kode_posortu" class="form-control" placeholder="Silahkan masukkan kodepos..." required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>No. Handphone</dt></label>
                        <input type="text" name="no_hportu" class="form-control" placeholder="Silahkan masukkan no handphone..." required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Pendidikan Terakhir Ayah</dt></label>
                        <select class="form-control" name="pendidikan_ayah">
                          <option>--Pilih--</option>
                            <option value="1">A - Tidak Tamat SD</option>
                            <option value="2">B - Tamat SD</option>
                            <option value="3">C - Tamat SMP</option>
                            <option value="4">D - Tamat SMA</option>
                            <option value="5">E - Diploma (D1 - D2)</option>
                            <option value="6">F - Sarjana (D3)</option>
                            <option value="7">G - Sarjana (D4 - S1)</option>
                            <option value="8">H - Pascasarjana (S2)</option>
                            <option value="9">I - Doktor (S3)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Pendidikan Terakhir Ibu</dt></label>
                        <select class="form-control" name="pendidikan_ibu">
                          <option>--Pilih--</option>
                            <option value="1">A - Tidak Tamat SD</option>
                            <option value="2">B - Tamat SD</option>
                            <option value="3">C - Tamat SMP</option>
                            <option value="4">D - Tamat SMA</option>
                            <option value="5">E - Diploma (D1 - D2)</option>
                            <option value="6">F - Sarjana (D3)</option>
                            <option value="7">G - Sarjana (D4 - S1)</option>
                            <option value="8">H - Pascasarjana (S2)</option>
                            <option value="9">I - Doktor (S3)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Status Ayah</dt></label>
                        <select class="form-control" name="status_ayah">
                          <option>--Pilih--</option>
                            <option value="1">Masih Hidup</option>
                            <option value="2">Sudah Meninggal</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Status Ibu</dt></label>
                        <select class="form-control" name="status_ibu">
                            <option>--Pilih--</option>
                            <option value="1">Masih Hidup</option>
                            <option value="2">Sudah Meninggal</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Pekerjaan Ayah</dt></label>
                        <select class="form-control" name="pekerjaan_ayah">
                            <option>--Pilih--</option>
                            <option value="1">Pegawai Negeri</option>
                            <option value="2">TNI/POLRI</option>
                            <option value="3">Pegawai Swasta</option>
                            <option value="4">Wiraswasta</option>
                            <option value="5">Tidak Bekerja</option>
                            <option value="6">Pensiun</option>
                            <option value="7">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Pekerjaan Ibu</dt></label>
                        <select class="form-control" name="pekerjaan_ibu">
                            <option>--Pilih--</option>
                            <option value="1">Pegawai Negeri</option>
                            <option value="2">TNI/POLRI</option>
                            <option value="3">Pegawai Swasta</option>
                            <option value="4">Wiraswasta</option>
                            <option value="5">Tidak Bekerja</option>
                            <option value="6">Pensiun</option>
                            <option value="7">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Penghasilan Ayah</dt></label>
                        <select class="form-control" name="penghasilan_ayah">
                            <option>--Pilih--</option>
                            <option value="1">< Rp 1.000.000</option>
                            <option value="2">Rp 1.000.000 - Rp 5.000.000</option>
                            <option value="3">Rp 5.000.000 - Rp 10.000.000</option>
                            <option value="4">> Rp 10.000.000</option>
                            <option value="5">Pensiun</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Penghasilan Ibu</dt></label>
                        <select class="form-control" name="penghasilan_ibu">
                            <option>--Pilih--</option>
                            <option value="1">< Rp 1.000.000</option>
                            <option value="2">Rp 1.000.000 - Rp 5.000.000</option>
                            <option value="3">Rp 5.000.000 - Rp 10.000.000</option>
                            <option value="4">> Rp 10.000.000</option>
                            <option value="5">Pensiun</option>
                        </select>
                    </div>
                </div>
            </div>
                <div class="alert">
                    <strong><h3>PEMINATAN PROGRAM STUDI</h3></strong>
                </div>
                <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><dt>Pilihan Program Studi</dt></label>
                        <select class="form-control" name="program_studi">
                          <option>--Pilih--</option>
                            <option value="1">Akuntansi</option>
                            <option value="2">Manajemen</option>
                            <option value="3">Psikologi</option>
                            <option value="4">Ilmu Komunikasi</option>
                            <option value="5">Desain Produk</option>
                            <option value="6">Desain Komunikasi Visual</option>
                            <option value="7">Informatika</option>
                            <option value="8">Sistem Informasi</option>
                            <option value="9">Teknik Sipil</option>
                            <option value="10">Arsitektur</option>
                        </select>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="form-group" >
                        <label><dt>Informasi UPJ diperoleh dari :</dt></label>  
                        <input type="radio" id="defaultRadio" name="website">
                        <label for="defaultRadio">Website</label>
                        <input type="radio" id="defaultRadio" name="instagram">
                        <label for="defaultRadio">Instagram</label>
                        <input type="radio" id="defaultRadio" name="facebook">
                        <label for="defaultRadio">Facebook</label>
                        <input type="radio" id="defaultRadio" name="brosur">
                        <label for="defaultRadio">Brosur dan Flyer UPJ</label>
                        <input type="radio" id="defaultRadio" name="wa">
                        <label for="defaultRadio">WA Blast</label>
                        <br>
            
                        <input type="radio" id="defaultRadio" name="sekolah">
                        <label for="defaultRadio">Sekolah</label>
                        <input type="radio" id="defaultRadio" name="event">
                        <label for="defaultRadio">Event Education Expo</label>
                        <input type="radio" id="defaultRadio" name="keluarga">
                        <label for="defaultRadio">Keluarga/teman</label>
                        <input type="radio" id="defaultRadio" name="email">
                        <label for="defaultRadio">E-mail Blast</label>
                        <input type="radio" id="defaultRadio" name="lainny">
                        <label for="defaultRadio">Lainnya</label>
                        <br>
                    </div>
                    <div class="form-group" >
                        <label><dt>Direkomendasikan oleh :</dt></label>
                        <label><dt>PRODI/UNIT</dt></label>
                        <input type="radio" id="defaultRadio" name="karyawan">
                        <label for="defaultRadio">Karyawan UPJ</label><br>
                        <input type="radio" id="defaultRadio" name="mahasiswa">
                        <label for="defaultRadio">Mahasiswa UPJ</label><br>
                        <input type="radio" id="defaultRadio" name="guru">
                        <label for="defaultRadio">Guru BK/Pihak Sekolah</label>
                        <br>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><dt>Nama Perekomendasi & No. HP</dt></label>
                                <input type="text" name="kode_pos" class="form-control" placeholder="Nama Perekomendasi & No Handphone...." required>
                            </div>
                        </div>
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger">Reset</button>
            </div>
        </form>
        <?php
            include "konfirmasipmb.php";
        ?>
    </div>
</body>
</html>