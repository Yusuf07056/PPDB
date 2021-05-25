<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style_daftar.css'); ?>">
    <title>CONFIRM PAGE</title>
</head>

<body>
    <div class="image_bukti">
        <?php
        $view_bukti = $bukti_pembayaran->result_array();
        foreach ($view_bukti as $view_table) {
        ?>
            <img src="<?= base_url() . 'asset/images/' . $view_table['bukti_transfer'] ?>">
        <?php
        } ?>
    </div>
</body>

</html>