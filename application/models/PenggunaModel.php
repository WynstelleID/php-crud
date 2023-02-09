<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenggunaModel extends CI_Model {

    public function getDataPengguna(){
      $this->db->select('*');
      $this->db->from('Pengguna');
      $query = $this->db->get();
      return $query->result();
    }

    public function InsertDataPengguna($data){
      // md5
      // $data[0]->Password = md5($data[0]->Password);
      $this->db->insert('Pengguna', $data);
    }

    public function EditDataPengguna($data, $id){
      $this->db->where('IdPengguna', $id);
    echo "<pre>";
    print_r ($data);
    echo "</pre>";
      $this->db->update('Pengguna', $data);
    }

    public function getDataPenggunaDetail($id){
      $this->db->where('IdPengguna', $id);
      $query = $this->db->get('Pengguna');
      return $query->row();
    }

    public function DeleteDataPengguna($id){
      $this->db->where('IdPengguna', $id);
      $this->db->delete('Pengguna');
    }

}