<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Pencatatan_model extends CI_Model
{
	public $table = 'pencatatan';
	public $id = 'pencatatan.id';
	private $_client;
	public function __construct()
	{
		parent::__construct();
		$this->_client = new Client([
			'base_uri' =>'localhost/restapi_spj_embun/Pencatatan'
		]);
	}
	public function get()
	{
		$response = $this->_client->request('GET','pencatatan');
		$result = json_decode($response->getBody()->getContents(), true);
		return $result['data'];
	}
	public function getById($id)
	{

		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function update($data)
	{
		$response = $this->_client->request('PUT','pencatatan', ['form_params' => $data]);
		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}
	public function insert($data)
	{
		$response = $this->_client->request('POST','pencatatan', ['form_params' => $data]);
		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}
	public function delete($id)
	{
		$response = $this->_client->request('DELETE','pencatatan', ['form_params' => ['id' => $id]]);
		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}
	public function tPencatatan()
    {
        
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->num_rows();
    }
	public function grafika()
	{
		$response = $this->_client->request('GET','pencatatan');
		$result = json_decode($response->getBody()->getContents(), true);
		return $result['data'];
	}
}

?>