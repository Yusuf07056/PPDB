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
            <h3>Cetak Data Diri Calon Peserta Didik</h3>
        </div>

        <div class="box">
            <form method="post" action="<?php echo base_url('index.php/Welcome/generating_pdf'); ?>" enctype="multipart/form-data">
                <!-- Tab content -->

                <table class="table">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>
                            <input type="text" name="namalengkap" class="inputstyle" placeholder="nama lengkap">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="CETAK" class="btn1">
                        </td>
                    </tr>
                </table>
        </div>
        </form>
        </div>

    </section>

    <script language="javascript" src=" <?= base_url('asset/js/design.js') ?>"></script>
    <script>
        document.getElementById("Utama").click();
    </script>
</body>

</html>