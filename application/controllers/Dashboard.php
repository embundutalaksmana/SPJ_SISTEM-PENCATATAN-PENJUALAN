<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Pencatatan_model');
		$this->load->model('Barang_model');
        $this->load->model('User_model');
	}

	public function index()
	{
        
            $data['pencatatan'] = $this->Pencatatan_model->tPencatatan();
            $data['barang'] = $this->Barang_model->tBarang();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['grfk'] = $this->Barang_model->grafika();
            $this->load->view("layout/header", $data);
            $this->load->view("pencatatan/GrafikPenjualan", $data);
            $this->load->view("layout/footer");
	}
}