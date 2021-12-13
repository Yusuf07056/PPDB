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
		$cd = $this->db->query("SELECT MAX(no_daftar) as no_daftar from formulir");
		$kd = "";
		if ($cd->num_rows() > 0) {
			foreach ($cd->result() as $k) {
				$tmp = ((int)$k->no_daftar) + 1;
				$kd = sprintf($tmp);
			}
		}
		return $kd;
	}

	public function cek_no_bio()
	{
		$query = $this->db->query("SELECT MAX(id_biodata) as id_biodata from biodata");
		$hasil = $query->row();
		return $hasil->no_daftar;
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
		$nisn,
		$asal,
		$alamatasal,
		$foto,
		$id_valid,
		$namawali,
		$alamatwali,
		$no_kk,
		$pendapatan,
		$telportu
	) {
		# code...
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
			'nisn' => $nisn,
			'asal_sekolah' => $asal,
			'alamat_asal_sekolah' => $alamatasal,
			'foto' => $foto,
			'validasi_id' => $id_valid,
			'nama_orangtua' => $namawali,
			'alamat_orangtua' => $alamatwali,
			'no_kk' => $no_kk,
			'pendapatan' => $pendapatan,
			'no_hp_ortu' => $telportu

		];
		$this->db->insert('formulir', $data);
		// $data['foto'] = $foto;
		// $data['validasi_id'] = $id_valid;
		// $data['nama_orangtua'] = $namawali;
		// $data['alamat_orangtua'] = $alamatwali;
		// $data['no_kk'] = $no_kk;
		// $data['pendapatan'] = $pendapatan;
		// $data['no_hp_ortu'] = $telportu;
	}

	public function get_form_select($no_wa)
	{
		$this->db->where('no_daftar', $no_wa);
		$query = $this->db->get('formulir');
		return $query;
	}
	public function get_form_select_nama($no_hp_val)
	{
		$this->db->where('no_wa', $no_hp_val);
		$query = $this->db->get('formulir');
		return $query;
	}
	public function get_form_select_phone($no_hp_val)
	{
		$this->db->where('no_wa', $no_hp_val);
		$query = $this->db->get('formulir');
		return $query;
	}
	public function get_pdf($validasi_id)
	{
		$this->db->select('*');
		$this->db->from('formulir')->join('validasi_bukti', 'validasi_bukti.id_bukti = bukti_pembayaran.id_bukti');
		$this->db->where('validasi_bukti.id_bukti', $validasi_id);
		$query = $this->db->get('');
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
	public function nomervalidasi($no_wa)
	{
		$query = $this->db->get_where('validasi_bukti', ['no_hp_val' => $no_wa]);
		return $query;
	}
	public function JT_validasi_search($phone_number)
	{
		# code...
		$this->db->select('validasi_bukti.id_valbuk,bukti_pembayaran.atas_nama,bukti_pembayaran.no_wa,validasi_bukti.stts');
		$this->db->from('bukti_pembayaran')->join('validasi_bukti', 'validasi_bukti.id_bukti = bukti_pembayaran.id_bukti')->where('bukti_pembayaran.no_wa', $phone_number);
		return $this->db->get()->row_array();
	}
}
