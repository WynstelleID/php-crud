<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangModel extends CI_Model {

    public function getDataBarang(){
      $this->db->select('*');
      $this->db->from('Barang');
      $query = $this->db->get();
      return $query->result();
    }

    public function InsertDataBarang($data){
      // md5
      // $data[0]->Password = md5($data[0]->Password);
      $this->db->insert('Barang', $data);
    }

    public function EditDataBarang($data, $id){
      $this->db->where('IdBarang', $id);
    // echo "<pre>";
    // print_r ($data);
    // echo "</pre>";
      $this->db->update('Barang', $data);
    }

    public function getDataBarangDetail($id){
      $this->db->where('IdBarang', $id);
      $query = $this->db->get('Barang');
      return $query->row();
    }

    public function DeleteDataBarang($id){
      $this->db->where('IdBarang', $id);
      $this->db->delete('Barang');
    }

}