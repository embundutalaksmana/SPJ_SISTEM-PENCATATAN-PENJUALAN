<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Dompdf\Dompdf;
class Pencatatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Pencatatan_model');
		$this->load->model('Barang_model');
	}

	public function index()
	{
		$data['judul'] = "Halaman Pencatatan Penjualan";
		$data['pencatatan'] = $this->Pencatatan_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("pencatatan/vw_pencatatan", $data);
		$this->load->view("layout/footer");
	}

	function tambah()
	{
		$data['judul'] = "Halaman Tambah Pencatatan";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Barang_model->get();
		$this->form_validation->set_rules('id_barang', 'Barang', 'required', [
			'required' => 'Barang Wajib di isi'
		]);
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required', [
			'required' => 'Jumlah Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_pembeli',  'Nama Pembeli', 'required', [
			'required' => 'Nama Pembeli Wajib di isi'
		]);
		$this->form_validation->set_rules('total_bayar',  'Total Bayar', 'required', [
			'required' => 'Total Bayar Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggal',  'Tanggal', 'required', [
			'required' => 'Tanggal Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat',  'Alamat', 'required', [
			'required' => 'Alamat Wajib di isi'
		]);
		$this->form_validation->set_rules('pembayaran',  'Pembayaran', 'required', [
			'required' => 'Nama Pembeli Wajib di isi'
		]);
		$this->form_validation->set_rules('status',  'Status', 'required', [
			'required' => 'Status Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("pencatatan/vw_tambah_pencatatan", $data);
			$this->load->view("layout/footer");
		} else {
			$data=[
				'id_barang'=>$this->input->post('id_barang'),
				'jumlah'=>$this->input->post('jumlah'),
				'nama_pembeli'=>$this->input->post('nama_pembeli'),
				'total_bayar'=>$this->input->post('total_bayar'),
				'tanggal'=>$this->input->post('tanggal'),
				'alamat'=>$this->input->post('alamat'),
				'pembayaran'=>$this->input->post('pembayaran'),
				'status'=>$this->input->post('status'),
			];
			$this->Pencatatan_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pencatatan Berhasil Ditambah!</div>');
			redirect('Pencatatan');
		}
	}

	public function hapus($id)
	{
		$this->Pencatatan_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Pencatatan tidak dapat dihapus !</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Pencatatan Berhasil Dihapus!</div>');
		}
		redirect('Pencatatan');
	}

	function edit($id)
	{
		$data['judul'] = "Halaman Edit Pencatatan";
		$data['pencatatan'] = $this->Pencatatan_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Barang_model->get();
		$this->form_validation->set_rules('id_barang', 'Barang', 'required', [
			'required' => 'Barang Wajib di isi'
		]);
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required', [
			'required' => 'Jumlah Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_pembeli',  'Nama Pembeli', 'required', [
			'required' => 'Nama Pembeli Wajib di isi'
		]);
		$this->form_validation->set_rules('total_bayar',  'Total Bayar', 'required', [
			'required' => 'Total Bayar Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggal',  'Tanggal', 'required', [
			'required' => 'Tanggal Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat',  'Alamat', 'required', [
			'required' => 'Alamat Wajib di isi'
		]);
		$this->form_validation->set_rules('pembayaran',  'Pembayaran', 'required', [
			'required' => 'Nama Pembeli Wajib di isi'
		]);
		$this->form_validation->set_rules('status',  'Status', 'required', [
			'required' => 'Status Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("pencatatan/vw_ubah_pencatatan", $data);
			$this->load->view("layout/footer");
		} else {
			$data=[
				'id_barang'=>$this->input->post('id_barang'),
				'jumlah'=>$this->input->post('jumlah'),
				'nama_pembeli'=>$this->input->post('nama_pembeli'),
				'total_bayar'=>$this->input->post('total_bayar'),
				'tanggal'=>$this->input->post('tanggal'),
				'alamat'=>$this->input->post('alamat'),
				'pembayaran'=>$this->input->post('pembayaran'),
				'status'=>$this->input->post('status'),
				'id'=> $this->input->post('id')
				
			];
			$id= $this->input->post('id');
			$this->Pencatatan_model->update($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pencatatan Berhasil Diubah!</div>');
			redirect('Pencatatan');
		}
	}



	public function export() {
		$dompdf= new Dompdf();
		$this->data['jual'] = $this->Pencatatan_model->get(); 
		$this->data['title'] = 'Laporan Data Penjualan'; 
		$this->data['no'] = 1; 
		$dompdf->setPaper('A4', 'Landscape'); 
		$html = $this->load->view('pencatatan/laporan', $this->data, true); 
		$dompdf->load_html($html); $dompdf->render(); 
		$dompdf->stream('Laporan Data Penjualan Salmiyati Hadycrafts Shop Tanggal ' . date('d F Y'), array("Attachment" => false)); 
	   }
	
}
