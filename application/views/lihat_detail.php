<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/LOGO.png') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/gaya.css') ?>">
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bgnya">
    <div class="kotakup">
        <div align="center" class="kotakup kotakupp">

            <img src="<?= base_url('asset/images/LOGO.png') ?>" width="5%" align="center">

            <div align="center" class="garisup">
                <h1>LAMAN ADMIN
                    <a href="<?= base_url('index.php/Adm_ctrl/adminnya') ?>">
                        <button class="btn" id="tombol"><i class="fa fa-home"></i></button>
                    </a>
                    <button class="btn" id="tombolpopup" onclick="openNav()"><i class="fa fa-bars"></i></button>

                </h1>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <button class="closebtn" onclick="closeNav()">&times;</button>
            <a href="<?= base_url('index.php/Adm_ctrl/profil') ?>">PROFIL ADMIN</a>
            <a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>">PENDAFTAR</a>
            <a href="<?= base_url('index.php/Adm_ctrl/settanggal') ?>">SET TANGGAL</a>
            <a href="<?= base_url('index.php/Adm_ctrl/logout') ?>"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
        </div>

        <div class="desainbawah1" align="center">
            <form action="<?= base_url('index.php/Adm_ctrl/PPDB') ?>" method="post">

                <table border="1" align="CENTER" class="desain_table">
                    <tr align="CENTER">
                        <?php
                        $view_bukti = $formulir->result_array();
                        foreach ($view_bukti as $view_table) {
                        ?>
                    <tr>
                        <td>ID FORMULIR</td>
                        <td><?= $view_table['no_daftar'] ?></td>
                    </tr>
                    <tr>
                        <td>NAMA LENGKAP</td>
                        <td><?= $view_table['nama_lengkap'] ?></td>
                    </tr>
                    <tr>
                        <td>GENDER</td>
                        <td><?= $view_table['gender'] ?></td>
                    </tr>
                    <tr>
                        <td>KOTA KELAHIRAN</td>
                        <td><?= $view_table['kota_kelahiran'] ?></td>
                    </tr>
                    <tr>
                        <td>TANGGAL LAHIR</td>
                        <td><?= $view_table['tgl_lahir'] ?></td>
                    </tr>
                    <tr>
                        <td>AGAMA</td>
                        <td><?= $view_table['agama'] ?></td>
                    </tr>
                    <tr>
                        <td>ANAK KE</td>
                        <td><?= $view_table['anak_ke'] ?></td>
                    </tr>
                    <tr>
                        <td>SAUDARA</td>
                        <td><?= $view_table['saudara'] ?></td>
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td><?= $view_table['alamat'] ?></td>
                    </tr>
                    <tr>
                        <td>RT</td>
                        <td><?= $view_table['RT'] ?></td>
                    </tr>
                    <tr>
                        <td>RW</td>
                        <td><?= $view_table['RW'] ?></td>
                    </tr>
                    <tr>
                        <td>KELURAHAN</td>
                        <td><?= $view_table['kelurahan'] ?></td>
                    </tr>
                    <tr>
                        <td>KECAMATAN</td>
                        <td><?= $view_table['kecamatan'] ?></td>
                    </tr>
                    <tr>
                        <td>KOTA/KABUPATEN</td>
                        <td><?= $view_table['kota_kab'] ?></td>
                    </tr>
                    <tr>
                        <td>PROVINSI</td>
                        <td><?= $view_table['provinsi'] ?></td>
                    </tr>
                    <tr>
                        <td>KODE POS</td>
                        <td><?= $view_table['kode_pos'] ?></td>
                    </tr>
                    <tr>
                        <td>NO HP/WA</td>
                        <td><?= $view_table['no_hp'] ?></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td><?= $view_table['nisn'] ?></td>
                    </tr>
                    <tr>
                        <td>ASAL SEKOLAH</td>
                        <td><?= $view_table['asal_sekolah'] ?></td>
                    </tr>
                    <tr>
                        <td>ALAMAT SEKOLAH</td>
                        <td><?= $view_table['alamat_asal_sekolah'] ?></td>
                    </tr>
                    <tr>
                        <td>FOTO</td>
                        <td><img src="<?= base_url() . 'asset/images/' . $view_table['foto'] ?>" width="100" height="100"></td>
                    </tr>
                    <tr>
                        <td>NAMA WALI</td>
                        <td><?= $view_table['nama_orangtua'] ?></td>
                    </tr>
                    <tr>
                        <td>ALAMAT WALI</td>
                        <td><?= $view_table['alamat_orangtua'] ?></td>
                    </tr>
                    <tr>
                        <td>NOMER KK</td>
                        <td><?= $view_table['no_kk'] ?></td>
                    </tr>
                    <tr>
                        <td>PENDAPATAN</td>
                        <td><?= $view_table['pendapatan'] ?></td>
                    </tr>
                    <tr>
                        <td>NO HP/WA</td>
                        <td><?= $view_table['no_hp_ortu'] ?></td>
                    </tr>
                    </tr>


                <?php
                        }
                ?>
            </form>
            <tr align="CENTER">
                <td>
                    <a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>" class="desain_tombol">BACK</a>
                </td>
            </tr>
            </table>



        </div>



        <script language="javascript" src=" <?= base_url('asset/js/design.js') ?>"></script>
</body>

</html>