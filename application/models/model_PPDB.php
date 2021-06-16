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

    public function get_form_select($no_daftar)
    {
        $this->db->where('no_daftar', $no_daftar);
        $query = $this->db->get('formulir');
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
    public function input_formulir(
        $no_daftar,
        $namalengkap,
        $jk,
        $kotakelahiran,
        $tglkelahiran,
        $agama,
        $anakke,
        $saudara,
        $alamat,
        $rt,
        $rw,
        $kelurahan,
        $kecamatan,
        $kabupaten,
        $Provinsi,
        $kodepos,
        $telp,
        $nisn,
        $asal,
        $alamatasal,
        $foto,
        $namawali,
        $alamatwali,
        $no_kk,
        $pendapatan,
        $telportu
    ) {
        $data = [
            'no_daftar' => $no_daftar,
            'nama_lengkap' => $namalengkap,
            'gender' => $jk,
            'kota_kelahiran' => $kotakelahiran,
            'tgl_lahir' => $tglkelahiran,
            'agama' => $agama,
            'anak_ke' => $anakke,
            'saudara' => $saudara,
            'alamat' => $alamat,
            'rt' => $rt,
            'rw' => $rw,
            'kelurahan' => $kelurahan,
            'kecamatan' => $kecamatan,
            'kota_kab' => $kabupaten,
            'provinsi' => $Provinsi,
            'kode_pos' => $kodepos,
            'no_hp' => $telp,
            'nisn' => $nisn,
            'asal_sekolah' => $asal,
            'alamat_asal_sekolah' => $alamatasal

        ];
        $data['foto'] = $foto;
        $data['nama_orangtua'] = $namawali;
        $data['alamat_orangtua'] = $alamatwali;
        $data['no_kk'] = $no_kk;
        $data['pendapatan'] = $pendapatan;
        $data['no_hp_ortu'] = $telportu;
        $this->db->insert('formulir', $data);
    }
}
