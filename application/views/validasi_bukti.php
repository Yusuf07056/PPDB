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
            <form action="<?= base_url('index.php/Adm_ctrl/input_val_buk') ?>" method="post">
                <table>
                    <tr>

                        <?php
                        $view_bukti = $bukti_pembayaran->result_array();
                        foreach ($view_bukti as $view_table) {
                        ?>
                            <input type="hidden" value="<?= $view_table['id_bukti'] ?>" name="id_bukti" id="myBtn" onclick="openpopup()">

                    <tr>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>FOTO</p>
                        </td>
                        <td>
                            <p>CLICK PHOTO TO ZOOM</p>
                            <img src="<?= base_url() . 'asset/images/' . $view_table['bukti_transfer'] ?>" width="100" height="100" id="myBtn" onclick="openpopup()">
                        </td>
                    <?php } ?>
                    </tr>
                    <tr>
                        <td>
                            <p>STATUS</p>
                        </td>
                        <td>
                            <select name="status" id="status" class="desain_CB">
                                <option value="TERIMA">TERIMA</option>
                                <option value="REVISI">REVISI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <button type="submit" class="desain_tombol">INPUT</button>
                        </td>
                    </tr>
                </table>

            </form>
            <!--The Modal-->
            <div id="myModal" class="modal">
                <!--Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" onclick="closepopup()">&times;</span>
                        <h2>PREVIEW</h2>
                    </div>
                    <div class="modal-body" align="center">
                        <?php
                        $view_bukti = $bukti_pembayaran->result_array();
                        foreach ($view_bukti as $view_table) {
                        ?>
                            <img src="<?= base_url() . 'asset/images/' . $view_table['bukti_transfer'] ?>">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        <?php } ?>

        </div>



        <script language="javascript" src="<?= base_url('asset/js/design.js') ?>"></script>
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
</body>

</html>