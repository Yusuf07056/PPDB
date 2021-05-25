<?php

class Adm_ctrl extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_adm');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'email required'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'password required'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('LOGIN');
        } else {
            $this->login();
        }
    }
    private function login()
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
                        redirect(base_url('index.php/Adm_ctrl/PPDB'));
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
                'date' => date(DATE_RFC822, time()),
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


    public function adminnya()
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['registrasi'] = $this->model_adm->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Adm_ctrl'));
        } elseif ($role != 1) {
            redirect(base_url('index.php/User'));
        } else {
            $this->load->view('menu_admin');
        }
    }
    public function filter($status)
    {
        if ($status == 0) {
            # code...
            $data = $this->db->get_where('validasi_bukti', ['stts' => $status])->result();
        } else {
            # code...
            $data = $this->db->get_where('validasi_bukti', ['stts' => $status])->result();
        }
        $dt['validasi_bukti'] = $data;
        $dt['stts'] = $status;
        $this->load->view('Pendaftaran', $data);
    }

    public function PPDB()
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['registrasi'] = $this->model_adm->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        $data['bukti_pembayaran'] = $this->model_adm->get_bukti();
        $data['validasi_bukti'] = $this->model_adm->get_val_bukti();
        $data['formulir'] = $this->model_adm->get_formulir();
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Adm_ctrl'));
        } elseif ($role != 1) {
            redirect(base_url('index.php/User'));
        } else {
            $this->load->view('Pendaftaran', $data);
        }
    }

    public function PPDB_sort_cari()
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['registrasi'] = $this->model_adm->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        $data['bukti_pembayaran'] = $this->model_adm->get_bukti();
        $data['validasi_bukti'] = $this->model_adm->get_val_bukti();
        $data['formulir'] = $this->model_adm->get_formulir();
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Adm_ctrl'));
        } elseif ($role != 1) {
            redirect(base_url('index.php/User'));
        } else {
            $status = $this->input->post('status');
            $search = $this->input->post('SEARCH');
            $data['validasi_bukti'] = $this->model_adm->get_valbuktistats($status);
            $data['formulir'] = $this->model_adm->search_formulir($search);
            $this->load->view('Pendaftaran', $data);
        }
    }

    function cari_($search)
    {
        $data['formulir'] = $this->model_adm->search_formulir($search);
        $this->load->view('Pendaftaran', $data);
    }

    public function settanggal()
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['registrasi'] = $this->model_adm->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        $data['bukti_pembayaran'] = $this->model_adm->get_bukti();
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Adm_ctrl'));
        } elseif ($role != 1) {
            redirect(base_url('index.php/User'));
        } else {
            $this->load->view('settanggal');
        }
    }

    public function profil()
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['registrasi'] = $this->model_adm->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        $data['bukti_pembayaran'] = $this->model_adm->get_bukti();
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Adm_ctrl'));
        } elseif ($role != 1) {
            redirect(base_url('index.php/User'));
        } else {
            $this->load->view('Profil_Admin');
        }
    }
    public function lihat($id_bukti)
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['registrasi'] = $this->model_adm->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        $data['bukti_pembayaran'] = $this->model_adm->get_bukti();
        $data['bukti_pembayaran'] = $this->model_adm->get_buktiselect($id_bukti);
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Adm_ctrl'));
        } elseif ($role != 1) {
            redirect(base_url('index.php/User'));
        } else {
            $this->load->view('detail_daftar', $data);
        }
    }

    public function validasi_bukti($id_bukti)
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['registrasi'] = $this->model_adm->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        $data['bukti_pembayaran'] = $this->model_adm->get_buktiselect($id_bukti);
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Adm_ctrl'));
        } elseif ($role != 1) {
            redirect(base_url('index.php/User'));
        } else {
            $this->load->view('validasi_bukti', $data);
        }
    }
    public function lihat_detail($no_daftar)
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['registrasi'] = $this->model_adm->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        $data['formulir'] = $this->model_adm->get_form_select($no_daftar);
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Adm_ctrl'));
        } elseif ($role != 1) {
            redirect(base_url('index.php/User'));
        } else {
            $this->load->view('lihat_detail', $data);
        }
    }
    function input_val_buk()
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['registrasi'] = $this->model_adm->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Adm_ctrl'));
        } elseif ($role != 1) {
            redirect(base_url('index.php/User'));
        } else {
            $id_bukti = $this->input->post('id_bukti');
            $stts  = $this->input->post('status');
            $this->model_adm->input_data_validasi($id_bukti, $stts);
            redirect(base_url('index.php/Adm_ctrl/PPDB'));
        }
    }
}
