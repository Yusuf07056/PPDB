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
                    <a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>">
                        <button class="btn" id="tombol"><i class="fa fa-home"></i></button>
                    </a>
                    <button class="btn" id="tombolpopup" onclick="openNav()"><i class="fa fa-bars"></i></button>

                </h1>
            </div>
            <div>
                <!-- Tab links -->
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London') " id="Utama">PENDAFTAR</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">VALIDASI</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">BIODATA</button>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <button class="closebtn" onclick="closeNav()">&times;</button>
            <a href="<?= base_url('index.php/Adm_ctrl/profil') ?>">
                <i class='fas fa-user-tie' style='font-size:36px; color: white;'></i>
                <?php
                $view_bukti = $registrasi->result_array();
                foreach ($view_bukti as $view_table) {
                ?>
                    <?= $view_table['nama'] ?>
                <?php
                }
                ?>
            </a>
            <a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>">PENDAFTAR</a>
            <a href="<?= base_url('index.php/Adm_ctrl/settanggal') ?>">SET TANGGAL</a>
            <a href="<?= base_url('index.php/Adm_ctrl/logout') ?>">
                <i class="fas fa-sign-out-alt"></i>LOGOUT
            </a>
        </div>

        <div class="">
            <!-- Tab links awal -->

            <!-- Tab content -->
            <div id="London" class="tabcontent">
                <div>
                    <table border="1" align="CENTER" class="desain_table">
                        <tr align="CENTER">
                            <th>ID BUKTI</th>
                            <th>GAMBAR</th>
                            <th>NOMER WA</th>
                            <th>PILIHAN</th>
                        </tr>
                        <?php
                        $view_bukti = $bukti_pembayaran->result_array();
                        foreach ($view_bukti as $view_table) {
                        ?>
                            <tr align="CENTER">
                                <td><?= $view_table['id_bukti'] ?></td>
                                <td>
                                    <img src="<?= base_url() . 'asset/images/' . $view_table['bukti_transfer'] ?>" width="100" height="100">

                                </td>
                                <td><?= $view_table['no_wa'] ?></td>
                                <td>
                                    <dl>
                                        <dt style="margin: 10px;">
                                            <button class="desain_tombol">
                                                <a href="<?php echo base_url('index.php/Adm_ctrl/validasi_bukti/') . $view_table['id_bukti'] ?>"> <i class="fas fa-check-square" style="font-size:18px; color: white;"></i> PROSES</a>
                                            </button>
                                        </dt>
                                        <dt>
                                            <button class="desain_tombol">
                                                <a href="<?php echo base_url('index.php/Adm_ctrl/lihat/') . $view_table['id_bukti'] ?>"> <i class='far fa-eye' style='font-size:18px; color: white;'></i>LIHAT</a>
                                            </button>
                                        </dt>
                                    </dl>

                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div>
            </div>

            <div id="Paris" class="tabcontent">
                <table align="CENTER">
                    <tr>
                        <td>SORTING</td>
                        <td>
                            <form action="<?= base_url('index.php/Adm_ctrl/PPDB_sort_cari/') ?>" method="post">
                                <select name="status" id="status" class="desain_CB">
                                    <option value="TERIMA">TERIMA</option>
                                    <option value="REVISI">REVISI</option>
                                </select>
                                <button type="submit" class="desain_tombol">SORT</button>
                            </form>
                        </td>
                    </tr>
                </table>
                <table border="1" align="CENTER" class="desain_table">
                    <thead>
                        <tr align="CENTER">
                            <th>ID validasi</th>
                            <th>BUKTI</th>
                            <th>STATUS</th>
                            <th>PILIHAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $view_bukti = $validasi_bukti->result_array();
                        foreach ($view_bukti as $view_table) {
                        ?>
                            <tr align="CENTER">
                                <td><?= $view_table['id_valbuk'] ?></td>
                                <td>
                                    <a style="color: black;" href="<?php echo base_url('index.php/Adm_ctrl/edit_validasi_bukti/') . $view_table['id_bukti'] ?>"><?= $view_table['id_bukti'] ?></a>
                                </td>
                                <td><?= $view_table['stts'] ?></td>
                                <td>
                                    <dl>
                                        <dt style="margin: 10px;">
                                            <a href="<?php echo base_url('index.php/Adm_ctrl/validasi_bukti/') . $view_table['id_bukti'] ?>" class="desain_tombol">PROSES</a>
                                        </dt>
                                        <dt>
                                            <a href="<?php echo base_url('index.php/Adm_ctrl/lihat/') . $view_table['id_bukti'] ?>" class="desain_tombol">LIHAT</a>
                                        </dt>
                                    </dl>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div id="Tokyo" class="tabcontent">
                <table align="CENTER">
                    <tr>
                        <td>SEARCHING</td>
                        <td>
                            <form action="<?= base_url('index.php/Adm_ctrl/PPDB_sort_cari/') ?>" method="post">
                                <input type="text" name="SEARCH" id="SEARCH">
                                <button type="submit" id="myBtn" class="desain_tombol" onclick="openpopup()">SEARCH</button>
                            </form>
                        </td>
                    </tr>
                </table>
                <table border="1" align="CENTER" class="desain_table">
                    <tr align="CENTER">
                        <th>ID FORMULIR</th>
                        <th>NAMA LENGKAP</th>
                        <th>ALAMAT</th>
                        <th>NISN</th>
                        <th>ASAL SEKOLAH</th>
                        <th>FOTO</th>
                        <th>NAMA WALI</th>
                    </tr>
                    <?php
                    $view_bukti = $formulir->result_array();
                    foreach ($view_bukti as $view_table) {
                    ?>
                        <tr align="CENTER">
                            <td><?= $view_table['no_daftar'] ?></td>
                            <td><?= $view_table['nama_lengkap'] ?></td>
                            <td><?= $view_table['alamat'] ?></td>
                            <td><?= $view_table['nisn'] ?></td>
                            <td><?= $view_table['asal_sekolah'] ?></td>
                            <td><img src="<?= base_url() . 'asset/images/' . $view_table['foto'] ?>" width="100" height="100"></td>
                            <td><?= $view_table['nama_orangtua'] ?></td>
                            <td>
                                <dl>
                                    <dt style="margin: 10px;">
                                        <a href="<?php echo base_url('index.php/Adm_ctrl/lihat_detail/') . $view_table['no_daftar'] ?>" class="desain_tombol">DETAIL</a>
                                    </dt>
                                    <dt>
                                        <a href="<?php echo base_url('') . $view_table['no_daftar'] ?>" class="desain_tombol">LIHAT</a>
                                    </dt>
                                </dl>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>

                <!-- <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'surabaya')">1</button>
                    <button class="tablinks" onclick="openTab(event, 'sidoarjo')">2</button>
                    <button class="tablinks" onclick="openTab(event, 'malang')">3</button>
                </div>
                <div id="surabaya" class="tabcontent2">

                </div>
                <div id="sidoarjo" class="tabcontent2">
                </div>
                <div id="malang" class="tabcontent2">
                </div> -->
            </div>
        </div>
        <script language="javascript" src=" <?= base_url('asset/js/design.js') ?>"></script>
        <!-- <script language="javascript" src=" <?= base_url('asset/js/design_2.js') ?>"></script> -->
        <script>
            document.getElementById("Utama").click();
        </script>
</body>


</html>