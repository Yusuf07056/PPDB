<!DOCTYPE html>
<html lang="en">

<head>
    <title>PPDB SMA IPIEMS</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style_daftar.css'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/LOGO.png') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body>

    <!-- BAGIAN FORMULIR -->
    <section class="boxform">
        <div class="judul" align="center">
            <img src="<?= base_url('asset/images/LOGO.png'); ?>" alt="" width="10%">
        </div>
        <div class="judul">
            <h2 class="judulh2">Formulir Pendaftaran Siswa Baru SMA IPIEMS</h2>
            <br>
            <h3 class="subjudul">Bukti Pembayaran</h3>
            <br>
            <p>
                Silahkan transfer ke Rekening BNI 1125085330 atas nama Beny Wahyudi senilai Rp. 100.000 dan upload bukti pembayaran, selanjutnya anda bisa mengisi formulir pendaftaran.
            </p>
        </div>
        <?php
        if ($this->session->flashdata('message')) {
        ?>
            <div class="judul">
                <?=
                $this->session->flashdata('message');
                ?>
            </div>
        <?php
        }
        if ($this->session->flashdata('success_message')) {
        ?>

            <div class="judul centered">
                <?=
                $this->session->flashdata('success_message');
                ?>
            </div>

        <?php
        }
        ?>
        <form method="post" action="<?= base_url('index.php/Welcome/input_bukti'); ?>" enctype="multipart/form-data">
            <div class=" box">
                <table class="table">
                    <tr>
                        <td>Upload Bukti Pembayaran</td>
                        <td>
                            <input type="file" name="gambarbukti" id="gambarbukti" required>
                        </td>
                    </tr>
                    <tr>
                        <td>KONTAK WA</td>
                        <td>
                            <input type="text" name="kontak_wa" id="kontak_wa" required>
                        </td>
                    </tr>
                    <tr>
                        <td><span></span></td>
                        <td>
                            <div class="g-recaptcha" data-type="image" data-sitekey="6Leyq6IaAAAAAArYMObJxi-O-jOaD37DRNhxKT4S"></div>

                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>

                            <input type="submit" name="submit" value="konfirm" class="btn1">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </section>

</body>

</html>