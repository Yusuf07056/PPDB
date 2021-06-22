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

    public function get_form_select($no_daftar)
    {
        $this->db->where('no_daftar', $no_daftar);
        $query = $this->db->get('formulir');
        return $query;
    }
    public function get_form_select_nama($namalengkap)
    {
        $this->db->where('nama_lengkap', $namalengkap);
        $query = $this->db->get('formulir');
        return $query;
    }
    public function get_kontak_admin()
    {
        $query = $this->db->get('kontak_admin');
        return $query;
    }
    public function cetak_formulir($no_daftar)
    {
        $this->db->select('*');
        $this->db->from('formulir');
        $this->db->where('no_daftar', $no_daftar);
        $data = $this->db->get('');
        return $data;
    }
}
