<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang_model extends CI_Model
{
    public $table = 'barang';
    public $id = 'barang.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);;
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function tbarang()
    {
        
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->num_rows();
    }
    public function grafika()
    {
        
        $this->db->select('p.*,b.nama_barang as Nama_Barang,sum(p.jumlah) as jumm'); 
        $this->db->from('pencatatan p'); 
        $this->db->join('barang b', 'p.id_barang = b.id');
        $this->db->group_by('p.id');
        $query=$this->db->get();
        return $query->result_array();
    }
}