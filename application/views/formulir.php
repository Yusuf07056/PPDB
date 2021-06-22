<!DOCTYPE html>
<html lang="en">

<head>
    <title>PPDB IPIEMS</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style_daftar.css'); ?>">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/LOGO.png') ?>">

</head>

<body>

    <!-- BAGIAN FORMULIR -->
    <!-- BAGIAN FORMULIR -->
    <section class="boxform boxform2">
        <div class="judul" align="center">
            <img src="<?php echo base_url('asset/images/LOGO.png'); ?>" alt="" width="10%">
        </div>
        <div class="judul">
            <h2>Formulir Pendaftaran Siswa Baru SMA IPIEMS</h2>
        </div>
        <?php echo validation_errors(); ?>



        <div class="judul">
            <h3>Data Diri Calon Peserta Didik</h3>
        </div>

        <div class="box">


            <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')" id="Utama">Data siswa</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Data wali</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">sekolah</button>
            </div>
            <form method="post" action="<?php echo base_url('index.php/Welcome/input_form'); ?>" enctype="multipart/form-data">
                <!-- Tab content -->
                <div id="London" class="tabcontent">

                    <table class="table">
                        <tr>
                            <td>
                                <input type="hidden" name="id_formulir" class="inputstyle" value="<?= sprintf($no_daftar) ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>
                                <input type="text" name="namalengkap" class="inputstyle" placeholder="nama lengkap">
                            </td>
                        </tr>

                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <input type="radio" name="jk" class="inputstyle" value="Laki-laki"> Laki-laki
                                &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="jk" class="inputstyle" value="Perempuan"> Perempuan
                                </t>
                        </tr>

                        <tr>
                            <td>Kota dan tanggal Kelahiran</td>
                            <td>
                                <input type="text" name="kotakelahiran" class="inputstyle" placeholder="kota">
                                <input type="date" name="tglkelahiran" class="inputstyle">
                            </td>
                        </tr>

                        <tr>
                            <td>Agama</td>
                            <td>
                                <select name="agama" class="inputstyle">
                                    <option selected disabled value="">--Pilih--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="kong Hu Cu">kong Hu Cu</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Anak Ke</td>
                            <td>
                                <input type="number" name="anakke" class="inputstyle" placeholder="0">
                            </td>
                        </tr>

                        <tr>
                            <td>Jumlah Saudara</td>
                            <td>
                                <input type="number" name="saudara" class="inputstyle" placeholder="0">
                            </td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td>
                                <textarea style="resize:none" name="alamat" cols="40" rows="5" placeholder="masukkan alamat anda"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>RT</td>
                            <td>
                                <input type="number" name="rt" class="inputstyle" placeholder="0">
                            </td>
                        </tr>

                        <tr>
                            <td>RW</td>
                            <td>
                                <input type="number" name="rw" class="inputstyle" placeholder="0">
                            </td>
                        </tr>

                        <tr>
                            <td>Kelurahan</td>
                            <td>
                                <input type="text" name="kelurahan" class="inputstyle" placeholder="kelurahan">
                            </td>
                        </tr>

                        <tr>
                            <td>Kecamatan</td>
                            <td>
                                <input type="text" name="kecamatan" class="inputstyle" placeholder="kecamatan">
                            </td>
                        </tr>

                        <tr>
                            <td>Kota/Kabupaten</td>
                            <td>
                                <input type="text" name="kabupaten" class="inputstyle" placeholder="kabupaten">
                            </td>
                        </tr>

                        <tr>
                            <td>Provinsi</td>
                            <td>
                                <input type="text" name="Provinsi" class="inputstyle" placeholder="Provinsi">
                            </td>
                        </tr>

                        <tr>
                            <td>Kode Pos</td>
                            <td>
                                <input type="number" name="kodepos" class="inputstyle" placeholder="kodepos">
                            </td>
                        </tr>

                        <tr>
                            <td>Upload Foto</td>
                            <td>
                                <input type="file" name="gambar" id="gambar">
                            </td>
                        </tr>

                    </table>

                </div>

                <div id="Paris" class="tabcontent">
                    <table class="table">
                        <tr>
                            <td>Nama Orang Tua</td>
                            <td>
                                <input type="text" name="namawali" class="inputstyle" placeholder="nama orang tua">
                            </td>
                        </tr>

                        <tr>
                            <td>Alamat Orang Tua</td>
                            <td>
                                <textarea style="resize:none" name="alamatwali" cols="40" rows="5" placeholder="masukkan alamat orang tua"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>Nomer KK</td>
                            <td>
                                <input type="number" name="no_kk" class="inputstyle" placeholder="nomer KK">
                            </td>
                        </tr>

                        <tr>
                            <td>Pendapatan</td>
                            <td>
                                <input type="number" name="pendapatan" class="inputstyle" placeholder="Rp.-">
                            </td>
                        </tr>

                        <td>Telp Orang Tua</td>
                        <td>
                            <input type="number" name="telportu" class="inputstyle" placeholder="telp orang tua">
                        </td>
                        </tr>
                    </table>

                </div>

                <div id="Tokyo" class="tabcontent">
                    <table class="table">
                        <tr>
                            <td>NISN</td>
                            <td>
                                <input type="text" name="nisn" class="inputstyle" placeholder="nisn">
                            </td>
                        </tr>

                        <tr>
                            <td>Asal Sekolah</td>
                            <td>
                                <input type="text" name="asal" class="inputstyle" placeholder="asal sekolah">
                            </td>
                        </tr>

                        <tr>
                            <td>Alamat Asal Sekolah</td>
                            <td>
                                <textarea style="resize:none" name="alamatasal" cols="40" rows="5" placeholder="masukkan alamat asal sekolah"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="KIRIM" class="btn1">
                                <a class="btn1" href="<?= base_url('index.php/Welcome/end_formulir') ?>">BACK</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
            <div class="box">
                <table>
                    <tr>
                        <th>
                            <a href="<?= base_url('index.php/Welcome/generate_pdf_page') ?>">SUDAH ISI FORMULIR?,CETAK PDF DI SINI</a>
                        </th>
                    </tr>
                </table>
            </div>
    </section>

    <script language="javascript" src=" <?= base_url('asset/js/design.js') ?>"></script>
    <script>
        document.getElementById("Utama").click();
    </script>
</body>

</html>