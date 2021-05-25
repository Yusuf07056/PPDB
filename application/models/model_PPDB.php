<?php
class model_PPDB extends CI_Model
{
    public $no_daftar;
    public function input_buktiDB($gambar, $wa)
    {
        $data = array(
            'bukti_transfer' => $gambar,
            'no_wa' => $wa,
        );
        $this->db->insert('bukti_pembayaran', $data);
    }
    public function input_wali_mod($namawali, $alamatwali, $nik, $pendapatan, $telportu)
    {
        $data = array(
            'nama_orangtua' => $namawali,
            'alamat_orangtua' => $alamatwali,
            'nik' => $nik,
            'pendapatan' => $pendapatan,
            'no_hp_ortu' => $telportu
        );
        $this->db->insert('data_orang_tua_wali', $data);
    }
    public function input_bio_daftar($id_formulir)
    {
        $data = array(
            'id_formulir' => $id_formulir,
        );
        $this->db->insert('biodata', $data);
    }
    public function cek_no_daftar()
    {
        $query = $this->db->query("SELECT MAX(no_daftar) as no_daftar from formulir");
        $hasil = $query->row();
        return $hasil->no_daftar;
    }
    public function cek_no_bio()
    {
        $query = $this->db->query("SELECT MAX(id_biodata) as id_biodata from biodata");
        $hasil = $query->row();
        return $hasil->no_daftar;
    }
}
