<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupplierModel extends CI_Model {

    public function getDataSupplier(){
      $this->db->select('*');
      $this->db->from('Supplier');
      $query = $this->db->get();
      return $query->result();
    }

    public function InsertDataSupplier($data){
      $this->db->insert('Supplier', $data);
    }

    public function EditDataSupplier($data, $id){
      $this->db->where('IdSupplier', $id);
    echo "<pre>";
    print_r ($data);
    echo "</pre>";
      $this->db->update('Supplier', $data);
    }

    public function getDataSupplierDetail($id){
      $this->db->where('IdSupplier', $id);
      $query = $this->db->get('Supplier');
      return $query->row();
    }

    public function DeleteDataSupplier($id){
      $this->db->where('IdSupplier', $id);
      $this->db->delete('Supplier');
    }

}