
<?php
class model_adm extends CI_Model
{
	public function akun_admin()
	{
		$query = $this->db->get('admin');
		return $query;
	}

	function get_registrasi()
	{
		$query = $this->db->get('registrasi');
		return $query;
	}
	function get_quota()
	{
		$query = $this->db->get('quota');
		return $query;
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$registrasi = $this->db->get_where('registrasi', ['email' => $email])->row_array();
		if ($registrasi) {
			if ($registrasi['is_active'] == 1) {
				if (password_verify($password, $registrasi['password'])) {
					$data = [
						'email' => $registrasi['email'],
						'role_id' => $registrasi['role_id']
					];
					$this->session->set_userdata($data);
					if ($registrasi['role_id'] == 1) {
						redirect(base_url('index.php/Adm_ctrl/adminnya'));
					} else {
						redirect(base_url('index.php/Adm_ctrl'));
					}
				} else {
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-danger" role="alert">
                            PASSWORD SALAH! 
                        </div>'
					);
					redirect(base_url('index.php/Adm_ctrl'));
				}
			} else {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger" role="alert">
                        EMAIL BELUM AKTIF! 
                    </div>'
				);
				redirect(base_url('index.php/Adm_ctrl'));
			}
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger" role="alert">
                    EMAIL BELUM TERDAFTAR!
                </div>'
			);
			redirect(base_url('index.php/Adm_ctrl'));
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[registrasi.email]', [
			'is_unique' => 'WES ENEK!'
		]);
		$this->form_validation->set_rules('Password1', 'Password', 'required|trim|min_length[5]|matches[Password2]', [
			'matches' => 'password tidak cocok!',
			'min_length' => 'password LEMAH!'
		]);
		$this->form_validation->set_rules('Password2', 'Password', 'required|trim|matches[Password1]');


		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'password' => password_hash($this->input->post('Password1'), PASSWORD_DEFAULT),
				'date' => time(),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'role_id' => 1,
				'is_active' => 1
			];
			$this->db->insert('registrasi', $data);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success" role="alert">
                    anda sudah terdaftar!
                </div>'
			);
			redirect(base_url('index.php/Adm_ctrl'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		redirect(base_url('index.php/Adm_ctrl'));
	}
	public function get_bukti()
	{
		$query = $this->db->get('bukti_pembayaran');
		return $query;
	}
	public function get_val_bukti()
	{
		$query = $this->db->get('validasi_bukti');
		return $query;
	}
	public function get_formulir()
	{
		$query = $this->db->get('formulir');
		return $query;
	}
	function input_data_validasi($id_bukti, $stts, $no_wa)
	{
		$data = array(
			'id_bukti' => $id_bukti,
			'stts' => $stts,
			'no_hp_val' => $no_wa
		);
		$this->db->insert('validasi_bukti', $data);
	}
	public function delete_bukti($id_bukti)
	{
		$this->db->where('id_bukti', $id_bukti);
		$this->db->delete('bukti_pembayaran');
	}
	public function get_buktiselect($id_bukti)
	{
		$this->db->where('id_bukti', $id_bukti);
		$query = $this->db->get('bukti_pembayaran');
		return $query;
	}
	public function get_form_select($no_daftar)
	{
		$this->db->where('no_daftar', $no_daftar);
		$query = $this->db->get('formulir');
		return $query;
	}
	public function get_valbuktiselect($id_valbuk)
	{
		$this->db->where('id_valbuk', $id_valbuk);
		$query = $this->db->get('validasi_bukti');
		return $query;
	}
	public function get_valbuktistats($status)
	{
		$query = $this->db->get_where('validasi_bukti', ['stts' => $status]);
		return $query;
	}
	public function search_formulir($search)
	{
		$query = $this->db->select('*')->from('formulir')->like('nama_lengkap', $search);
		// $query = $this->db->get_where('formulir', ['nama_lengkap' => $search]);
		return $query;
	}
	public function data_admin($cari)
	{
		$query = $this->db->get_where('registrasi', ['email' => $cari]);
		return $query;
	}
	public function update_bukti($data, $id_bukti)
	{
		$this->db->where('id_bukti', $id_bukti);
		$this->db->update('validasi_bukti', $data);
	}

	public function input_list_kontak($nama, $kontak)
	{
		$data = array(
			'nama_admin' => $nama,
			'kontak' => $kontak
		);
		$this->db->insert('kontak_admin', $data);
	}

	public function update_admin($id_regis, $nama, $password, $email)
	{
		$data = array(
			'nama' => htmlspecialchars($nama),
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'email' => htmlspecialchars($email),
		);

		$this->db->where(
			'id_regis',
			$id_regis
		);
		$this->db->update(
			'registrasi',
			$data
		);
	}
	public function JT_validasi()
	{
		# code...
		$this->db->select('validasi_bukti.id_valbuk,bukti_pembayaran.atas_nama,bukti_pembayaran.no_wa,validasi_bukti.stts');
		$this->db->from('bukti_pembayaran')->join('validasi_bukti', 'validasi_bukti.id_bukti = bukti_pembayaran.id_bukti');
		return $this->db->get()->result_array();
	}
}
