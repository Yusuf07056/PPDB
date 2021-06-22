<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/LOGO.png') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/gaya.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
</head>

<body class="bgnya">

    <div class="kotakup">
        <div align="center" class="kotakup kotakupp">

            <img src="<?= base_url('asset/images/LOGO.png') ?>" width="5%" align="center">

            <div align="center" class="garisup">
                <h1>ADMIN
                    <a href=<?= base_url('index.php/Adm_ctrl/') ?>>
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

        <div class="desainbawah1">
            <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">PENDAFTAR</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">DITERIMA</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">TOLAK</button>
            </div>

            <!-- Tab content -->
            <div id="London" class="tabcontent">
                <input type="text" value="">
                <table border="1" align="CENTER" class="desain_table">
                    <tr>
                        <th>NO</th>
                        <th>JURUSAN</th>
                        <th>NAMA</th>
                    </tr>
                </table>
            </div>

            <div id="Paris" class="tabcontent">
                <table border="1" align="CENTER" class="desain_table">
                    <tr>
                        <th>NO</th>
                        <th>JURUSAN</th>
                        <th>NAMA</th>
                    </tr>
                </table>
            </div>

            <div id="Tokyo" class="tabcontent">
                <table border="1" align="CENTER" class="desain_table">
                    <tr>
                        <th>NO</th>
                        <th>JURUSAN</th>
                        <th>NAMA</th>
                    </tr>
                </table>
            </div>

        </div>


    </div>

    <script language="javascript" src=" <?= base_url('asset/js/design.js') ?>"></script>
</body>
<footer>

</footer>

</html>