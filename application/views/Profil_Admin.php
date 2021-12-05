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
        </div>
        <div id="mySidenav" class="sidenav">
            <button class="closebtn" onclick="closeNav()">&times;</button>
            <?php
			$view_bukti = $registrasi->result_array();
            foreach ($view_bukti as $view_table) {
            ?>
                <a href="<?= base_url('index.php/Adm_ctrl/profil/') . $view_table['nama'] ?>">
                    <i class='fas fa-user-tie' style='font-size:36px; color: white;'></i>

                    <?= $view_table['nama'] ?>
                </a>
            <?php
            }
            ?>
            <a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>">PENDAFTAR</a>
            <a href="<?= base_url('index.php/Adm_ctrl/register') ?>">TAMBAH ADMIN</a>
            <a href="<?= base_url('index.php/Adm_ctrl/logout') ?>">
                <i class="fas fa-sign-out-alt"></i>LOGOUT
            </a>
        </div>

        <div class="desainbawah_admin">
            <table align="CENTER">
                <?php
                $view = $registrasi->result_array();
                foreach ($view as $view_table) {
                ?>
                    <form action="<?= base_url('index.php/Adm_ctrl/edit_profil') ?>" method="post">
                        <tr>
                            <td></td>
                            <td><input type="text" id="id_regis" name="id_regis" value="<?= $view_table['id_regis'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>NAMA</td>
                            <td><input type="text" id="nama" name="nama" value="<?= $view_table['nama'] ?>"></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td><input type="text" id="email" name="email" value="<?= $view_table['email'] ?>"></td>
                        </tr>
                        <tr>
                            <td>PASSWORD</td>
                            <td><input type="password" id="Password1" name="Password1"></td>
                        </tr>
                        <tr>
                            <td>PASSWORD CONFIRM</td>
                            <td><input type="password" id="Password2" name="Password2"></td>
                        </tr>
                        <tr align="center">
                            <td></td>
                            <td><input type="submit" value="UPDATE"></td>
                        </tr>
                    </form>
                <?php
                }
                ?>
            </table>
        </div>


    </div>

    <script language="javascript" src=" <?= base_url('asset/js/design.js') ?>"></script>
</body>
<footer>

</footer>

</html>
