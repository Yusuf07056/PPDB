<?php
//============================================================+
// File name  example_005.php
// Begin      2008-03-04
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
$table = '<table widht="100%">
            ';
$table .= '
            <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                
                    </tr>';

$table .= '<tr>';
$view_bukti = $formulir->result_array();
foreach ($view_bukti as $view_table) {
    $table .= '<tr>
                    <td >ID FORMULIR</td>
                    <td >:</td>
                    <td >' . $view_table['no_daftar'] . '</td>
                    <td rowspan="6" ><img src="' . base_url() . 'asset/images/' . $view_table['foto'] . '" style="border-radius: 4px;padding: 5px;width: 180px; height :200px;"></td>
                
                </tr>
                <tr>
                    <td widht="15%">NAMA LENGKAP</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['nama_lengkap'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">GENDER</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['gender'] . '</td>
                </tr>
                <tr>
                    <td widht="15%" >KOTA</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['kota_kelahiran'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">TANGGAL LAHIR</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['tgl_lahir'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">AGAMA</td>
                    <td widht="1%">:</td>
                    <td widht="60%"> ' . $view_table['agama'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">ANAK KE</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['anak_ke'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">SAUDARA</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['saudara'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">ALAMAT</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['alamat'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">RT</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['RT'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">RW</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['RW'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">KELURAHAN</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['kelurahan'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">KECAMATAN</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['kecamatan'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">KOTA/KABUPATEN</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['kota_kab'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">PROVINSI</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['provinsi'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">KODE POS</td>
                    <td widht="1%">:</td>
                    <td widht="15%">' . $view_table['kode_pos'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">NISN</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['nisn'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">ASAL SEKOLAH</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['asal_sekolah'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">ALAMAT SEKOLAH ASAL</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['alamat_asal_sekolah'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">NAMA WALI</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['nama_orangtua'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">ALAMAT ORANG TUA</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['alamat_orangtua'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">NOMER KK</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['no_kk'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">PENDAPATAN</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['pendapatan'] . '</td>
                </tr>
                <tr>
                    <td widht="15%">NO.HP WALI</td>
                    <td widht="1%">:</td>
                    <td widht="60%">' . $view_table['no_hp_ortu'] . '</td>
                </tr>
                </tr>';
}
$table .= '</table>
        </div>';
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