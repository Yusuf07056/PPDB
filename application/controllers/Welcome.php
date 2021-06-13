<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_PPDB');
		$this->load->helper(array('form', 'url'));
	}


	public function index()
	{
		$this->load->view('bukti');
	}

	public function input_bukti()
	{
		$captcha_respon = trim($this->input->post('g-recaptcha-response'));
		if ($captcha_respon != '') {
			$key_sec = '6Leyq6IaAAAAABkhdDrY5z2WJGA8e6aMuFvxzXAj';
			$check = array(
				'secret' => $key_sec,
				'response' => $this->input->post('g-recaptcha-response')
			);

			$startprocess = curl_init();
			curl_setopt($startprocess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
			curl_setopt($startprocess, CURLOPT_POST, true);
			curl_setopt($startprocess, CURLOPT_POSTFIELDS, http_build_query($check));
			curl_setopt($startprocess, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($startprocess, CURLOPT_RETURNTRANSFER, true);
			$recive_data = curl_exec($startprocess);
			$final_respon = json_decode($recive_data, true);

			if ($final_respon['success']) {

				$data['bukti_transfer'] = '';
				$wa = $this->input->post('kontak_wa');
				$foto = $_FILES['gambarbukti']['name'];
				$config['upload_path'] = './asset/images';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambarbukti')) {
					echo "upload gagal";
				} else {

					$foto = $this->upload->data('file_name');
					$data['bukti_transfer'] = $foto;
					$data['no_wa'] = $wa;
				}

				$this->db->insert('bukti_pembayaran', $data);
				$this->session->set_flashdata('success_message', 'DATA TERKIRIM TERIMAKASIH TELAH UPLOAD BUKTI PEMBAYARAN Silahkan tunggu konfirmasi dari no 0888xxxxxx');
				redirect(base_url('index.php/Welcome'));
				#redirect(base_url('index.php/Welcome/konfirmasi'));
			}
		} else {

			$this->session->set_flashdata('message', 'validation fail TRY AGAIN');
			redirect(base_url('index.php/Welcome'));
		}
		#$this->model_PPDB->input_buktiDB($foto, $wa);
	}

	public function konfirmasi()
	{
		$this->load->view('laman_confirm');
	}
	#auto increment
	public function formulir()
	{
		$data['bukti_pembayaran'] = $this->db->get_where('bukti_pembayaran', ['no_wa' => $this->session->userdata('no_wa')])->row_array();

		$no_wa = $this->session->userdata('no_wa');

		if (empty($no_wa)) {
			$this->session->sess_destroy();
			redirect(base_url('index.php/Welcome/phone_verification'));
		} else {
			$dariDB = $this->model_PPDB->cek_no_daftar();
			$nourut = $dariDB;
			$no_daftarSekarang = $nourut + 1;
			$data = array('no_daftar' => $no_daftarSekarang);
			$this->load->view('formulir', $data);
		}
	}


	public function input_form()
	{


		$this->form_validation->set_rules('id_formulir', 'nomer daftar', 'required');
		$this->form_validation->set_rules('namalengkap', 'Nama lengkap', 'required');
		$this->form_validation->set_rules('jk', 'Gender', 'required');
		$this->form_validation->set_rules('kotakelahiran', 'Kota kelahiran', 'required');
		$this->form_validation->set_rules('tglkelahiran', 'Tgl kelahiran', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('anakke', 'Anak ke', 'required');
		$this->form_validation->set_rules('saudara', 'Saudara', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('rt', 'Rt', 'required');
		$this->form_validation->set_rules('rw', 'Rw', 'required');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kabupaten', 'Kabupaten/kota', 'required');
		$this->form_validation->set_rules('Provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('kodepos', 'Kode pos', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('nisn', 'Nisn', 'required');
		$this->form_validation->set_rules('asal', 'Asal sekolah', 'required');
		$this->form_validation->set_rules('alamatasal', 'Alamat asal sekolah', 'required');
		$this->form_validation->set_rules('namawali', 'nama wali', 'required');
		$this->form_validation->set_rules('alamatwali', 'Alamat wali', 'required');
		$this->form_validation->set_rules('no_kk', 'nomer kk', 'required');
		$this->form_validation->set_rules('pendapatan', 'pendapatan', 'required');
		$this->form_validation->set_rules('telportu', 'telp wali', 'required');


		$data['foto'] = '';
		$foto = $_FILES['gambar']['name'];
		$config['upload_path'] = './asset/images';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar') || $this->form_validation->run() == false) {
			$this->load->view('formulir');
		} else {
			$no_daftar = $this->input->post('id_formulir');
			$namalengkap = $this->input->post('namalengkap');
			$jk = $this->input->post('jk');
			$kotakelahiran = $this->input->post('kotakelahiran');
			$tglkelahiran = $this->input->post('tglkelahiran');
			$agama = $this->input->post('agama');
			$anakke = $this->input->post('anakke');
			$saudara = $this->input->post('saudara');
			$alamat = $this->input->post('alamat');
			$rt = $this->input->post('rt');
			$rw = $this->input->post('rw');
			$kelurahan = $this->input->post('kelurahan');
			$kecamatan = $this->input->post('kecamatan');
			$kabupaten = $this->input->post('kabupaten');
			$Provinsi = $this->input->post('Provinsi');
			$kodepos = $this->input->post('kodepos');
			$telp = $this->input->post('telp');
			$nisn = $this->input->post('nisn');
			$asal = $this->input->post('asal');
			$alamatasal = $this->input->post('alamatasal');
			$namawali = $this->input->post('namawali');
			$alamatwali = $this->input->post('alamatwali');
			$no_kk = $this->input->post('no_kk');
			$pendapatan = $this->input->post('pendapatan');
			$telportu = $this->input->post('telportu');
			$foto = $this->upload->data('file_name');
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
			redirect(base_url('index.php/Welcome/konfirmasi'));
		}
	}
	public function phone_verification()
	{
		$this->form_validation->set_rules('no_wa', 'no_wa', 'required|trim', [
			'required' => 'PHONE NUMBER REQUIRED'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('phone_verification');
		} else {
			$this->phone_verification_function();
		}
	}
	function phone_verification_function()
	{
		$phone_number = $this->input->post('no_wa');
		$pembayaran = $this->db->get_where('bukti_pembayaran', ['no_wa' => $phone_number])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('phone_verification');
		} else {
			if ($pembayaran) {
				if ($phone_number == $pembayaran['no_wa']) {
					$data = [
						'no_wa' => $pembayaran['no_wa']
					];
					$this->session->set_userdata($data);
					if ($pembayaran['no_wa'] == $phone_number) {
						redirect(base_url('index.php/Welcome/formulir'));
					} else {
						redirect(base_url('index.php/Welcome/phone_verification'));
					}
				} else {
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-danger" role="alert">
						NOMER SALAH 
					</div>'
					);
					redirect(base_url('index.php/Welcome/phone_verification'));
				}
			} else {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger" role="alert">
					NOMER SALAH
				</div>'
				);
				redirect(base_url('index.php/Welcome/phone_verification'));
			}
		}
	}
	public function end_formulir()
	{
		$this->session->unset_userdata('no_wa');
		redirect(base_url('index.php/Welcome/phone_verification'));
	}
}
