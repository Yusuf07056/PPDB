<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SMA IPIEMS');
$pdf->SetTitle('BUKTI PENDAFTARAN');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'BUKTI PENDAFTARAN PPDB SMA IPIEMS', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
$title = <<< EOD
<h2> FORMULIR PENDAFTARAN </h2>
EOD;

$pdf->writeHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'C', true);
$table = '<!DOCTYPE html>
            ';
$table .= '<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <link rel="stylesheet" href="' . base_url('asset/css/gaya.css') . '">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
            <body>
            <div class="desainbawah1" align="center">
            <table align="CENTER">
            <tr align="CENTER">
                        <th></th>
                        <th></th>
                        <th></th> 
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>';

$table .= '<tr align="CENTER">';
$view_bukti = $formulir->result_array();
foreach ($view_bukti as $view_table) {
    $table .= '<tr>
                    <td>ID FORMULIR &nbsp; &nbsp; :</td>
                    <td>' . $view_table['no_daftar'] . '</td>
                </tr>
                <tr>
                    <td>NAMA LENGKAP &nbsp; &nbsp; :</td>
                    <td>' . $view_table['nama_lengkap'] . '</td>
                </tr>
                <tr>
                    <td>GENDER &nbsp; &nbsp; :</td>
                    <td>' . $view_table['gender'] . '</td>
                </tr>
                <tr>
                    <td>KOTA &nbsp; &nbsp; :</td>
                    <td>' . $view_table['kota_kelahiran'] . '</td>
                </tr>
                <tr>
                    <td>TANGGAL LAHIR &nbsp; &nbsp; :</td>
                    <td>' . $view_table['tgl_lahir'] . '</td>
                </tr>
                <tr>
                    <td>AGAMA &nbsp; &nbsp; :</td>
                    <td> ' . $view_table['agama'] . '</td>
                </tr>
                <tr>
                    <td>ANAK KE &nbsp; &nbsp; :</td>
                    <td>' . $view_table['anak_ke'] . '</td>
                </tr>
                <tr>
                    <td>SAUDARA &nbsp; &nbsp; :</td>
                    <td>' . $view_table['saudara'] . '</td>
                </tr>
                <tr>
                    <td>ALAMAT &nbsp; &nbsp; :</td>
                    <td>' . $view_table['alamat'] . '</td>
                </tr>
                <tr>
                    <td>RT &nbsp; &nbsp; :</td>
                    <td>' . $view_table['RT'] . '</td>
                </tr>
                <tr>
                    <td>RW &nbsp; &nbsp; :</td>
                    <td>' . $view_table['RW'] . '</td>
                </tr>
                <tr>
                    <td>KELURAHAN &nbsp; &nbsp; :</td>
                    <td>' . $view_table['kelurahan'] . '</td>
                </tr>
                <tr>
                    <td>KECAMATAN &nbsp; &nbsp; :</td>
                    <td>' . $view_table['kecamatan'] . '</td>
                </tr>
                <tr>
                    <td>KOTA/KABUPATEN &nbsp; &nbsp; :</td>
                    <td>' . $view_table['kota_kab'] . '</td>
                </tr>
                <tr>
                    <td>PROVINSI &nbsp; &nbsp; :</td>
                    <td>' . $view_table['provinsi'] . '</td>
                </tr>
                <tr>
                    <td>KODE POS &nbsp; &nbsp; :</td>
                    <td>' . $view_table['kode_pos'] . '</td>
                </tr>
                <tr>
                    <td>NO.HP &nbsp; &nbsp; :</td>
                    <td>' . $view_table['no_hp'] . '</td>
                </tr>
                <tr>
                    <td>NISN &nbsp; &nbsp; :</td>
                    <td>' . $view_table['nisn'] . '</td>
                </tr>
                <tr>
                    <td>ASAL SEKOLAH &nbsp; &nbsp; :</td>
                    <td>' . $view_table['asal_sekolah'] . '</td>
                </tr>
                <tr>
                    <td>ALAMAT SEKOLAH ASAL &nbsp; &nbsp; :</td>
                    <td>' . $view_table['alamat_asal_sekolah'] . '</td>
                </tr>
                <tr>
                    <td>FOTO &nbsp; &nbsp; :</td>
                    <td><img src="' . base_url() . 'asset/images/' . $view_table['foto'] . '" style="border-radius: 4px;padding: 5px;width: 150px;"></td>
                </tr>
                <tr>
                    <td>NAMA WALI &nbsp; &nbsp; :</td>
                    <td>' . $view_table['nama_orangtua'] . '</td>
                </tr>
                <tr>
                    <td>ALAMAT ORANG TUA &nbsp; &nbsp; :</td>
                    <td>' . $view_table['alamat_orangtua'] . '</td>
                </tr>
                <tr>
                    <td>NOMER KK &nbsp; &nbsp; :</td>
                    <td>' . $view_table['no_kk'] . '</td>
                </tr>
                <tr>
                    <td>PENDAPATAN &nbsp; &nbsp; :</td>
                    <td>' . $view_table['pendapatan'] . '</td>
                </tr>
                <tr>
                    <td>NO.HP &nbsp; &nbsp; :</td>
                    <td>' . $view_table['no_hp_ortu'] . '</td>
                </tr>
                </tr>';
}
$table .= '</table>
        </div>
        </body>
        </html>';
$pdf->writeHTML($table, true, false, true, false, '');

// set some text for example

//tulisan di sini


// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
//ob_clean untuk hapus output buffer
ob_clean();
$pdf->Output('formulir_pendaftaran.pdf', 'I');

    //============================================================+
    // END OF FILE
    //============================================================+