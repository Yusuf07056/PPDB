<!DOCTYPE html>
<html lang="en">

<head>
    <title>PPDB IPIEMS</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style_daftar.css'); ?>">


</head>

<body>

    <!-- BAGIAN FORMULIR -->
    <section class="boxform">
        <div class="judul" align="center">
            <img src="<?php echo base_url('asset/images/LOGO.png'); ?>" alt="" width="10%">
        </div>
        <div class="judul">
            <h2>Formulir Pendaftaran Siswa Baru SMA IPIEMS</h2>
        </div>
        <form method="post" action="<?php echo base_url('index.php/Welcome/data_ortu'); ?>">
            <div class="box">
                <table class="table">
                    <tr>
                        <td>Pilih Jurusan</td>
                        <td>
                            <select name="jurusan" class="inputstyle">
                                <option selected disabled value="">--Pilih--</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                                <option value="B.Indonesia">B.Indonesia</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="judul">
                <h3>Data Diri Calon Peserta Didik</h3>
            </div>

            <div class="box">
                <table class="table">
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
                        </td>
                        <td>
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
                        <td>Kabupaten</td>
                        <td>
                            <input type="text" name="kabupaten" class="inputstyle" placeholder="kabupaten">
                        </td>
                    </tr>

                    <tr>
                        <td>Kode Pos</td>
                        <td>
                            <input type="number" name="kodepos" class="inputstyle" placeholder="kodepos">
                        </td>
                    </tr>

                    <tr>
                        <td>Telp</td>
                        <td>
                            <input type="number" name="telp" class="inputstyle" placeholder="telp">
                        </td>
                    </tr>

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
                        <td>Upload Foto</td>
                        <td>
                            <input type="file" name="gambar" id="gambar">
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Submit" class="btn1">
                        </td>
                    </tr>

                </table>
            </div>
        </form>
    </section>


</body>

</html>