<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		error_reporting(E_ALL & ~E_NOTICE);
		if ($this->session->has_userdata('username')) {
			if ($this->session->userdata('role_id') == 1) {
				true;
			} else {
				redirect('pengguna');
			}
		} else {
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'Inventaris Alat Lab UIN SUKA';
		$this->load->model('Admin_model');
		$data['nama'] = $this->session->userdata('nama');
		$data['lantai'] = $this->Admin_model->get_all_lantai();
		$data['alat'] = $this->Admin_model->get_all_alat();
		$data['kondisi'] = $this->Admin_model->get_kondisi();
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}
	public function inventaris()
	{
		$this->load->model('Admin_model');
		$data['title'] = 'Inventaris Alat || Inventaris Alat Lab UIN SUKA';
		$data['kondisi'] = $this->Admin_model->get_kondisi();
		$data['ruang'] = $this->Admin_model->get_ruang_inventaris();
		// $data['lantai'] = $this->db->get('lantai')->result_array();
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/inventaris', $data);
		$this->load->view('template/auth_modal', $data);
		$this->load->view('template/auth_footer');
	}
	public function edit_inventaris($id = null)
	{
		$data['title'] = 'Edit || Inventaris Alat Lab UIN SUKA';
		$this->load->model('Admin_model');
		$data['edit'] = $this->Admin_model->get_edit_inventaris($id);
		$data['lantai'] = $this->Admin_model->get_all_lantai();
		$data['ruang'] = $this->Admin_model->get_all_ruang();
		$data['kondisi'] = $this->Admin_model->get_kondisi();
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/edit_inventaris', $data);
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}

	public function simpan_inventaris()
	{
		// $paket = $this->input->post();
		// //kita bisa cetak ada variabel apa saja yang dikirimkan form
		// echo '<pre>';
		// print_r($paket);
		// echo '</pre>';
		$data = [
			'id_barang' => $this->input->post('id_barang', true),
			'nama_model' => $this->input->post('nama_model', true),
			'tahun_perolehan' => $this->input->post('tahun_perolehan', true),
			'lantai' => $this->input->post('lantai', true),
			'ruang' => $this->input->post('ruang', true),
			'kondisi' => $this->input->post('kondisi', true),
		];
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->update_barang($data);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
				<i class="close icon"></i>
				<div class="header">
					Data barang  berhasil diperbarui
				</div>
				<p>cek kembali data anda</p>
				</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
				<i class="close icon"></i>
				<div class="header">
					Data barang  gagal diperbarui
				</div>
				<p>cek kembali data anda</p>
				</div>'
			);
		}
		redirect('admin/inventaris');
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
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/lantai', $data);
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}
	public function ruang($ruang = null, $nomor)
	{
		$this->load->model('Admin_model');
		$data['title'] = 'Ruang || Inventaris Alat Lab UIN SUKA';
		$data['nomor_ruang'] = $nomor;
		$data['ruang'] = $this->Admin_model->get_ruang($ruang);
		// $data['lantai'] = $this->db->get('lantai')->result_array();
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/ruang', $data);
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}
	public function ruangan()
	{
		$this->load->model('Admin_model');
		$data['title'] = 'Ruang || Inventaris Alat Lab UIN SUKA';
		$data['ruangan'] = $this->Admin_model->get_all_ruang();
		// $data['lantai'] = $this->db->get('lantai')->result_array();
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/ruangan', $data);
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}
	public function getlokasi()
	{
		$this->load->model('Admin_model');
		$id = $_GET['id'];
		$hasil = $this->Admin_model->getlokasi($id);
		echo json_encode($hasil);
	}
	public function pengaturan()
	{
		$data['title'] = 'Pengaturan';
		$this->load->model('Admin_model');
		$data['pengguna1'] = $this->Admin_model->get_all_pengguna1();
		$data['pengguna2'] = $this->Admin_model->get_all_pengguna2();
		$data['log_pengguna'] = $this->Admin_model->get_all_pengguna_log();
		$data['lantai'] = $this->Admin_model->get_all_lantai();
		$data['ruang'] = $this->Admin_model->get_all_ruang();
		$data['ruang1'] = $this->Admin_model->get_ruang_lantai();
		$data['kondisi'] = $this->Admin_model->get_kondisi();
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/pengaturan');
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}

	public function main_tambah_barang()
	{
		$data['title'] = 'Tambah Barang';
		$this->load->model('Admin_model');
		$data['lantai'] = $this->Admin_model->get_all_lantai();
		$data['ruang'] = $this->Admin_model->get_all_ruang();
		$data['kondisi'] = $this->Admin_model->get_kondisi();
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/tambah_barang');
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}

	public function main_tambah_ruang()
	{
		$data['title'] = 'Tambah Ruang';
		$this->load->model('Admin_model');
		$data['lantai'] = $this->Admin_model->get_all_lantai();
		$data['ruang'] = $this->Admin_model->get_all_ruang();
		$data['kondisi'] = $this->Admin_model->get_kondisi();
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/tambah_ruang');
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}

	public function tambah_barang()
	{
		$data = [
			// 'id_barang' => $this->input->post('id', true),
			'nama_model' => $this->input->post('kode', true),
			'tahun_perolehan' => $this->input->post('tahun', true),
			'lantai' => $this->input->post('lantai', true),
			'ruang' => $this->input->post('ruang', true),
			'kondisi' => $this->input->post('kondisi', true),
		];

		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->insert_barang($data);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
		<i class="close icon"></i>
		<div class="header">
			Data barang  berhasil ditambah
		</div>
		<p>cek kembali data anda </p>
		</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
				<i class="close icon"></i>
				<div class="header">
					Data barang  gagal ditambah
				</div>
				<p>cek kembali data anda</p>
				</div>'
			);
		}
		redirect('admin/main_tambah_barang');
	}

	public function tambah_banyak_barang()
	{
		$data['query'] = [
			// 'id_barang' => $this->input->post('id', true),
			'nama_model' => $this->input->post('kode', true),
			'tahun_perolehan' => $this->input->post('tahun', true),
			'lantai' => $this->input->post('lantai', true),
			'ruang' => $this->input->post('ruang', true),
			'kondisi' => $this->input->post('kondisi', true)
		];

		$data['banyak'] = $this->input->post('banyak', true);

		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->tambah_banyak_barang($data);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
				<i class="close icon"></i>
				<div class="header">
					Data barang  berhasil ditambah
				</div>
				<p>cek kembali data anda </p>
				</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
				<i class="close icon"></i>
				<div class="header">
					Data barang  gagal ditambah
				</div>
				<p>cek kembali data anda</p>
				</div>'
			);
		}
		redirect('admin/main_tambah_barang');
	}

	public function edit_banyak_barang()
	{
		$cek =  $this->input->post('id_barang', true);
		$data = explode("-", $cek);

		if ($data[0] > 0) {
			if ($data[1] > 0) {
				if ($data[1] < $data[0]) {
					$this->session->set_flashdata(
						'notice',
						'<div class="ui negative message">
					<i class="close icon"></i>
					<div class="header">
						ID yang dimasukkan belum benar
					</div>
					<p>cek kembali ID barang yang dimasukkan</p>
					</div>'
					);
					redirect('admin/inventaris');
				} else {
					$this->load->model('Admin_model');
					// $data['hasil'] = $this->Admin_model->edit_banyak_barang($data[0], $data[1]);
					// print_r($hasil);
					$data['id0'] = $data[0];
					$data['id1'] = $data[1];
					$data['title'] = 'Edit Banyak Barang';
					$data['edit'] = $this->Admin_model->get_edit_inventaris($data[0]);
					$data['lantai'] = $this->Admin_model->get_all_lantai();
					$data['ruang'] = $this->Admin_model->get_all_ruang();
					$data['kondisi'] = $this->Admin_model->get_kondisi();
					$data['nama'] = $this->session->userdata('nama');
					$this->load->view('template/auth_header', $data);
					$this->load->view('template/admin_main_header', $data);
					$this->load->view('admin/edit_banyak_barang');
					$this->load->view('template/auth_modal');
					$this->load->view('template/auth_footer');
				}
			} else {
				$this->session->set_flashdata(
					'notice',
					'<div class="ui negative message">
					<i class="close icon"></i>
					<div class="header">
						ID yang dimasukkan belum benar
					</div>
					<p>cek kembali ID barang yang dimasukkan</p>
					</div>'
				);
				redirect('admin/inventaris');
			}
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
					<i class="close icon"></i>
					<div class="header">
						ID yang dimasukkan belum benar
					</div>
					<p>cek kembali ID barang yang dimasukkan</p>
					</div>'
			);
			redirect('admin/inventaris');
		}
	}

	public function simpan_banyak_barang()
	{
		$data['query'] = [
			// 'id_barang' => $this->input->post('id', true),
			'nama_model' => $this->input->post('nama_model', true),
			'tahun_perolehan' => $this->input->post('tahun_perolehan', true),
			'lantai' => $this->input->post('lantai', true),
			'ruang' => $this->input->post('ruang', true),
			'kondisi' => $this->input->post('kondisi', true),
		];
		$data['id0'] = $this->input->post('id_0', true);
		$data['id1'] = $this->input->post('id_1', true);

		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->edit_banyak_barang($data);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
		<i class="close icon"></i>
		<div class="header">
			Data barang  berhasil diperbarui
		</div>
		<p>cek kembali data anda </p>
		</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
				<i class="close icon"></i>
				<div class="header">
					Data barang  gagal diperbarui
				</div>
				<p>cek kembali data anda</p>
				</div>'
			);
		}
		redirect('admin/inventaris');
	}

	public function hapus_banyak_barang($data = null)
	{
		$cek =  $this->input->post('id_barang', true);
		$data = explode("-", $cek);
		if ($data[0] > 0) {
			if ($data[1] > 0) {
				if ($data[1] < $data[0]) {
					$this->session->set_flashdata(
						'notice',
						'<div class="ui negative message">
					<i class="close icon"></i>
					<div class="header">
						ID yang dimasukkan belum benar
					</div>
					<p>cek kembali ID barang yang dimasukkan</p>
					</div>'
					);
					redirect('admin/inventaris');
				} else {
					$this->load->model('Admin_model');
					$hasil = $this->Admin_model->delete_banyak_barang($data[0], $data[1]);
					if ($hasil > 0) {
						$this->session->set_flashdata(
							'notice',
							'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Data barang  berhasil dihapus
							</div>
							<p>cek kembali data anda</p>
							</div>'
						);
					} else {
						$this->session->set_flashdata(
							'notice',
							'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Data barang  gagal gagal
							</div>
							<p>cek kembali data anda</p>
							</div>'
						);
					}
					redirect('admin/inventaris');
				}
			} else {
				$this->session->set_flashdata(
					'notice',
					'<div class="ui negative message">
					<i class="close icon"></i>
					<div class="header">
						ID yang dimasukkan belum benar
					</div>
					<p>cek kembali ID barang yang dimasukkan</p>
					</div>'
				);
				redirect('admin/inventaris');
			}
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
					<i class="close icon"></i>
					<div class="header">
						ID yang dimasukkan belum benar
					</div>
					<p>cek kembali ID barang yang dimasukkan</p>
					</div>'
			);
			redirect('admin/inventaris');
		}
	}

	public function tambah_kondisi()
	{
		$json = $this->input->post('warna_kondisi', true);
		$obj = json_decode($json);
		$data =
			[
				'nama_kondisi' => $this->input->post('nama_kondisi', true),
				'warna_kondisi' => $obj->{'warna'},
				'icon_kondisi' => $obj->{'icon'}
			];
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->tambah_kondisi($data);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Data kondisi  berhasil ditambah
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Data kondisi  gagal ditambah
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		}
		redirect('admin/pengaturan');
	}

	public function tambah_lantai()
	{
		$data =
			[
				'nama_lantai' => $this->input->post('nama_lantai', true)
			];
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->tambah_lantai($data);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Data lantai  berhasil ditambah
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Data lantai  gagal ditambah
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		}
		redirect('admin/pengaturan');
	}

	public function tambah_ruang()
	{
		$data =
			[
				'nama_ruang' => $this->input->post('nama_ruang', true),
				'nomor_ruang' => $this->input->post('nomor_ruang', true),
				'luas_ruang' => $this->input->post('luas', true),
				'id_lantai' => $this->input->post('lantai_ruang', true),
				'pj_ruang' => $this->input->post('pj_ruang', true)
			];
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->tambah_ruang($data);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Data ruang  berhasil ditambah
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Data ruang  gagal ditambah
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		}
		redirect('admin/ruangan');
	}

	public function edit_ruangan($id = null)
	{
		$data['title'] = 'Edit Ruangan';
		$this->load->model('Admin_model');
		$data['lantai'] = $this->Admin_model->get_all_lantai();
		$data['ruang'] = $this->Admin_model->get_all_ruang();
		$data['kondisi'] = $this->Admin_model->get_kondisi();
		$data['ruangan'] = $this->Admin_model->get_ruangan($id);
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/admin_main_header', $data);
		$this->load->view('admin/edit_ruang', $data);
		$this->load->view('template/auth_modal');
		$this->load->view('template/auth_footer');
	}

	public function simpan_edit_ruangan()
	{
		$data =
			[
				'id_ruang' => $this->input->post('id_ruang', true),
				'nama_ruang' => $this->input->post('nama_ruang', true),
				'nomor_ruang' => $this->input->post('nomor_ruang', true),
				'luas_ruang' => $this->input->post('luas', true),
				'id_lantai' => $this->input->post('lantai_ruang', true),
				'pj_ruang' => $this->input->post('pj_ruang', true)
			];
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->update_ruang($data);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Data ruang  berhasil disunting
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Data ruang  gagal disunting
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		}
		redirect('admin/ruangan');
	}

	public function hapus_alat_inventaris($id)
	{
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->hapus_alat_inventaris($id);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Alat Inventaris  berhasil dihapus
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Alat Inventaris  gagal dihapus
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		}
		redirect('admin/inventaris');
	}

	public function hapus_kondisi($id)
	{
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->hapus_kondisi($id);

		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Kondisi  berhasil dihapus
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Kondisi  gagal dihapus, item masih berkaitan dengan item lain.
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		}
		redirect('admin/pengaturan');
	}

	public function hapus_lantai($id)
	{
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->hapus_lantai($id);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Lantai  berhasil dihapus
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Lantai  gagal dihapus, item masih berkaitan dengan item lain.
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		}
		redirect('admin/pengaturan');
	}

	public function hapus_ruang($id)
	{
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->hapus_ruang($id);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Ruang  berhasil dihapus
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Ruang  gagal dihapus, item masih berkaitan dengan item lain
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		}
		redirect('admin/ruangan');
	}

	public function hapus_pengguna($id)
	{
		$this->load->model('Admin_model');
		$hasil = $this->Admin_model->hapus_pengguna($id);
		if ($hasil > 0) {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								pengguna  berhasil dihapus
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		} else {
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								pengguna  gagal dihapus
							</div>
							<p>cek kembali data anda</p>
							</div>'
			);
		}
		redirect('admin/pengaturan');
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pengguna.username]', ['is_unique' => 'username telah digunakan!']);
		$this->form_validation->set_rules('katasandi1', 'Password', 'required|trim|min_length[8]|matches[katasandi2]', ['matches' => 'Katasandi tidak sama', 'min_length' => 'Katasandi Kurang dari 8 ']);
		$this->form_validation->set_rules('katasandi2', 'Password', 'required|trim|matches[katasandi1]');
		$this->form_validation->set_rules('tipe', 'Tipe', 'required');


		if ($this->form_validation->run() == false) {
			$data['title'] = 'Pengaturan';
			$this->load->model('Admin_model');
			$data['pengguna1'] = $this->Admin_model->get_all_pengguna1();
			$data['pengguna2'] = $this->Admin_model->get_all_pengguna2();
			$data['log_pengguna'] = $this->Admin_model->get_all_pengguna_log();
			$data['lantai'] = $this->Admin_model->get_all_lantai();
			$data['ruang'] = $this->Admin_model->get_all_ruang();
			$data['ruang1'] = $this->Admin_model->get_ruang_lantai();
			$data['kondisi'] = $this->Admin_model->get_kondisi();
			$data['nama'] = $this->session->userdata('nama');
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Pengguna  gagal ditambah
							</div>
							<p><button type="button" class="ui tiny green button"  id="kediv">Klik di sini</button></p>
							</div>'
			);
			$this->load->view('template/auth_header', $data);
			$this->load->view('template/admin_main_header', $data);
			$this->load->view('admin/pengaturan', $data);
			$this->load->view('template/auth_modal', $data);
			$this->load->view('template/auth_footer', $data);
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'katasandi' => password_hash($this->input->post('katasandi1'), PASSWORD_DEFAULT),
				'role_id' => htmlspecialchars($this->input->post('tipe', true)),
				'is_active' => 1


			];

			$this->load->model('Admin_model');
			$hasil = $this->Admin_model->tambah_pengguna($data);
			if ($hasil > 0) {
				$this->session->set_flashdata(
					'notice',
					'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Pengguna  berhasil ditambah
							</div>
							<p>cek kembali data anda</p>
							</div>'
				);
			} else {
				$this->session->set_flashdata(
					'notice',
					'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Pengguna  gagal ditambah
							</div>
							<p>cek kembali data anda</p>
							</div>'
				);
			}
			redirect('admin/pengaturan');
		}
	}

	public function edit_pengguna()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('id', 'Id', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('katasandi1', 'Password', 'required|trim|min_length[8]|matches[katasandi2]', ['matches' => 'Katasandi tidak sama', 'min_length' => 'Katasandi Kurang dari 8 ']);
		$this->form_validation->set_rules('katasandi2', 'Password', 'required|trim|matches[katasandi1]');
		$this->form_validation->set_rules('tipe', 'Tipe', 'required');


		if ($this->form_validation->run() == false) {
			$data['title'] = 'Pengaturan';
			$this->load->model('Admin_model');
			$data['pengguna1'] = $this->Admin_model->get_all_pengguna1();
			$data['pengguna2'] = $this->Admin_model->get_all_pengguna2();
			$data['log_pengguna'] = $this->Admin_model->get_all_pengguna_log();
			$data['lantai'] = $this->Admin_model->get_all_lantai();
			$data['ruang'] = $this->Admin_model->get_all_ruang();
			$data['ruang1'] = $this->Admin_model->get_ruang_lantai();
			$data['kondisi'] = $this->Admin_model->get_kondisi();
			$data['nama'] = $this->session->userdata('nama');
			$this->session->set_flashdata(
				'notice',
				'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Pengguna  gagal disunting
							</div>
							
							</div>'
			);
			$this->load->view('template/auth_header', $data);
			$this->load->view('template/admin_main_header', $data);
			$this->load->view('admin/pengaturan', $data);
			$this->load->view('template/auth_modal', $data);
			$this->load->view('template/auth_footer', $data);
		} else {
			$data = [
				'id' => htmlspecialchars($this->input->post('id', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'katasandi' => password_hash($this->input->post('katasandi1'), PASSWORD_DEFAULT),
				'role_id' => htmlspecialchars($this->input->post('tipe', true)),
				'is_active' => 1


			];

			$this->load->model('Admin_model');
			$hasil = $this->Admin_model->edit_pengguna($data);
			if ($hasil > 0) {
				$this->session->set_flashdata(
					'notice',
					'<div class="ui success message">
							<i class="close icon"></i>
							<div class="header">
								Pengguna  berhasil disunting
							</div>
							<p>cek kembali data anda</p>
							</div>'
				);
			} else {
				$this->session->set_flashdata(
					'notice',
					'<div class="ui negative message">
							<i class="close icon"></i>
							<div class="header">
								Pengguna  gagal disunting
							</div>
							<p>cek kembali data anda</p>
							</div>'
				);
			}
			redirect('admin/pengaturan');
		}
	}
}
