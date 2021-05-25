<!DOCTYPE html>
<html lang="en">

<head>
    <title>PPDB IPIEMS</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style_daftar.css'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/LOGO.png') ?>">

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
        <form action="<?= base_url('index.php/Welcome/input_wali') ?>" method="post">

            <div class="judul">
                <h3>Data Diri Wali Calon Siswa</h3>
            </div>

            <div class="box">
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
                        <td>NIK</td>
                        <td>
                            <input type="number" name="nik" class="inputstyle" placeholder="nik">
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