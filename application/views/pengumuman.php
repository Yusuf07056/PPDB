<!DOCTYPE html>
<html lang="en">

<head>
    <title>PPDB IPIEMS</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style_daftar.css'); ?>">
</head>

<body>

    <!-- BAGIAN FORMULIR -->
    <section class="boxform">
        <table align="CENTER">
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

    </section>


</body>

</html>