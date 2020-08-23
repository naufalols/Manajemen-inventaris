<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->has_userdata('username')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('admin');
			} else {
				redirect('pengguna');
			}
		} else {
			$this->form_validation->set_rules('username', 'Username', 'required|trim');
			$this->form_validation->set_rules('katasandi', 'Katasandi', 'required|trim');
			if ($this->form_validation->run() == false) {
				$data['title'] = 'Lab of Inventory of UIN SUKA';
				$this->load->view('template/auth_header', $data);
				$this->load->view('auth/login');
				$this->load->view('template/auth_footer');
			} else {
				$this->_login();
			}
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$katasandi = $this->input->post('katasandi');

		$pengguna = $this->db->get_where('pengguna', ['username' => $username])->row_array();
		if ($pengguna) {
			if ($pengguna['is_active'] == 1) {
				if (password_verify($katasandi, $pengguna['katasandi'])) {
					$data = [
						'username' => $pengguna['username'],
						'role_id' => $pengguna['role_id'],
						'nama' => $pengguna['nama']
					];
					$idpengguna = $pengguna['id'];
					$this->session->set_userdata($data);
					$this->load->model('Auth_model');
					$this->Auth_model->log_pengguna($idpengguna);
					redirect('auth');
				} else {
					$this->session->set_flashdata('pesan', '<div class="ui negative message" role="alert">Nama Pengguna  atau Katasandi salah!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="ui negative message" role="alert">Nama Pengguna yang anda masukkan belum aktifasi!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="ui negative message" role="alert">Nama Pengguna yang anda masukkan belum terdaftar!</div>');
			redirect('auth');
		}
	}



	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('pesan', '<div class="ui positive message" role="alert">Anda telah logout!</div>');
		redirect('auth');
	}
}
