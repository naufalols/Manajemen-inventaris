<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->has_userdata('username')) {
			if ($this->session->userdata('role_id') == 2) {
				true;
			} else {
				redirect('admin');
			}
		} else {
			redirect('auth');
		}
	}

	public function index($id = null)
	{
		if ($this->session->has_userdata('username')) {
			$data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
			$data['title'] = 'Lab of Inventory || Beranda';
			$this->load->model('Admin_model');
			$data['edit'] = $this->Admin_model->get_edit_inventaris($id);
			$data['lantai'] = $this->Admin_model->get_all_lantai();
			$data['ruang'] = $this->Admin_model->get_all_ruang();
			$data['alat'] = $this->Admin_model->get_all_alat();
			$data['kondisi'] = $this->Admin_model->get_kondisi();
			$data['nama'] = $this->session->userdata('nama');
			$this->load->view('template/auth_header', $data);
			$this->load->view('template/pengguna_main_header', $data);
			$this->load->view('pengguna/index', $data);
			$this->load->view('template/auth_modal', $data);
			$this->load->view('template/auth_footer');
		} else {
			redirect('auth');
		}
	}

	public function lantai($lantai = null)
	{
		$this->load->model('Admin_model');
		$data['title'] = 'Lantai || Inventaris Alat Lab UIN SUKA';
		$data['nomor_lantai'] = $lantai;
		$data['lantai'] = $this->Admin_model->get_lantai($lantai);
		// $data['lantai'] = $this->db->get('lantai')->result_array();
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/pengguna_main_header', $data);
		$this->load->view('pengguna/lantai', $data);
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}

	public function ruang($ruang = null, $nomor, $nama)
	{
		$this->load->model('Admin_model');
		$data['title'] = 'Ruang || Inventaris Alat Lab UIN SUKA';
		$data['nomor_ruang'] = $nomor;
		$data['nama_ruang'] = $nama;
		$data['ruang'] = $this->Admin_model->get_ruang($ruang);
		// $data['lantai'] = $this->db->get('lantai')->result_array();
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/pengguna_main_header', $data);
		$this->load->view('pengguna/ruang', $data);
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}
}
