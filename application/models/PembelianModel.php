<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembelianModel extends CI_Model {

    public function getDataPembelian(){
      $this->db->select('*');
      $this->db->from('Pembelian');
      $query = $this->db->get();
      return $query->result();
    }

    public function InsertDataPembelian($data){
      $this->db->insert('Pembelian', $data);
    }

    public function EditDataPembelian($data, $id){
      $this->db->where('IdPembelian', $id);
    echo "<pre>";
    print_r ($data);
    echo "</pre>";
      $this->db->update('Pembelian', $data);
    }

    public function getDataPembelianDetail($id){
      $this->db->where('IdPembelian', $id);
      $query = $this->db->get('Pembelian');
      return $query->row();
    }

    public function DeleteDataPembelian($id){
      $this->db->where('IdPembelian', $id);
      $this->db->delete('Pembelian');
    }

}