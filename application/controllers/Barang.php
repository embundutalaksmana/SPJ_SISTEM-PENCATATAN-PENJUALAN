<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
	}
	public function index()
	{
		$data['judul'] = "Halaman Barang";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Barang_model->get();
		$this->load->view('layout/header', $data);
		$this->load->view('barang/vw_barang', $data);
		$this->load->view('layout/footer', $data);
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Barang";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Barang_model->get();

		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib di isi']);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan Wajib di isi']);

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('barang/vw_tambah_barang', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$data = [
				'nama_barang' => $this->input->post('nama_barang'),
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/barang/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Barang_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Barang Berhasil Ditambah!</div>');
			redirect('Barang');
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Barang";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Barang_model->getById($id);

		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib di isi']);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan Wajib di isi']);

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('barang/vw_ubah_barang', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$data = [
				'nama_barang' => $this->input->post('nama_barang'),
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/barang/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['barang']['gambar'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/barang/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Barang_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Barang Berhasil Diubah!</div>');
			redirect('Barang');
		}
	}







	
	public function hapus($id)
	{
		$this->Barang_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>
			Data Barang tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>
			Data Barang Berhasil Dihapus!</div>');
		}
		redirect('Barang');
	}
}
