<?php
class Atur extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_db');
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
            $data['title'] = 'WOWEB LOGIN';
            $this->load->view('template/header', $data);
            $this->load->view('LOGIN');
            $this->load->view('template/foother');
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
                        redirect(base_url('index.php/Atur/crud'));
                    } else {
                        redirect(base_url('index.php/User'));
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">
                            PASSWORD SALAH! 
                        </div>'
                    );
                    redirect(base_url('index.php/atur'));
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                        EMAIL BELUM AKTIF! 
                    </div>'
                );
                redirect(base_url('index.php/atur'));
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                    EMAIL BELUM TERDAFTAR!
                </div>'
            );
            redirect(base_url('index.php/atur'));
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
            $data['title'] = 'WOWEB registrasi';
            $this->load->view('template/header', $data);
            $this->load->view('register');
            $this->load->view('template/foother');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'password' => password_hash($this->input->post('Password1'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'date' => time(),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'role_id' => 2,
                'is_active' => 1
            ];
            $this->db->insert('registrasi', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                    anda sudah terdaftar!
                </div>'
            );
            redirect(base_url('index.php/atur'));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        redirect(base_url('index.php/atur'));
    }

    public function crud()
    {
        $data['registrasi'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->M_db->get_menu();
        $data['registrasi'] = $this->M_db->get_registrasi();
        $email = $this->session->userdata('email');
        $role = $this->session->userdata('role_id');
        if (empty($email)) {
            $this->session->sess_destroy();
            redirect(base_url('index.php/Atur'));
        } elseif ($role == 2) {
            redirect(base_url('index.php/User'));
        } else {
            $this->load->view('Menu_input', $data);
        }
    }
    function input()
    {
        $Nama_menu = $this->input->post('nama_menu');
        $Kategori = $this->input->post('kategori');
        $Stok = $this->input->post('stok');
        $Harga = $this->input->post('harga');
        $this->M_db->input_datamenu($Nama_menu, $Kategori, $Stok, $Harga);
        redirect(base_url('index.php/Atur/crud'));
    }
    function update_form($id_menu)
    {
        $rec_data = $this->M_db->get_detail_datamenu($id_menu);
        $data = array('menu' => $rec_data);
        $this->load->view('Menu_update', $rec_data);
    }

    function edit_data()
    {
        $Id_menu = $this->input->post('id_menu');
        $Nama_menu = $this->input->post('nama_menu');
        $Kategori = $this->input->post('kategori');
        $Stok = $this->input->post('stok');
        $Harga = $this->input->post('harga');
        $data = array(
            'nama_menu' => $Nama_menu,
            'kategori' => $Kategori,
            'stok' => $Stok,
            'harga' => $Harga
        );
        $this->M_db->update_datamenu($data, $Id_menu);
        redirect(base_url('index.php/Atur/crud'));
    }
    function hapus($id_menu)
    {
        $this->M_db->delete_datamenu($id_menu);
        redirect(base_url('index.php/Atur/crud'));
    }
}
