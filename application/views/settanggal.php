<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo sekolah.ico" />
    <link rel="stylesheet" href="<?= base_url('asset/css/gaya.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bgnya">
    <div class="kotakup">
        <div align="center" class="kotakup kotakupp">

            <img src="LOGO.png" width="5%" align="center">

            <div align="center" class="garisup">
                <h1>LAMAN ADMIN
                    <a href="<?= base_url('index.php/Adm_ctrl/') ?>">
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
        </div>

        <div align="CENTER" class="desainbawah_admin">
            SET TANGGAL PPDB
            <table align="CENTER">
                <tr>
                    <td>ID QUOTA</td>
                    <td><input type="text" name="id_quota"></td>
                </tr>
                <tr>
                    <td>QUOTA</td>
                    <td><input type="number" name="value"></td>
                </tr>
            </table>
            <button class="desain_tombol">SUBMIT</button>
        </div>


    </div>

    <script language="javascript" src=" <?= base_url('asset/js/design.js') ?>"></script>
</body>
<footer>

</footer>

</html>