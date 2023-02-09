<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HakAksesModel extends CI_Model {

    public function getDataHakAkses(){
      $this->db->select('*');
      $this->db->from('HakAkses');
      $query = $this->db->get();
      return $query->result();
    }

    public function InsertDataHakAkses($data){
      $this->db->insert('HakAkses', $data);
    }

    public function EditDataHakAkses($data, $id){
      $this->db->where('IdAkses', $id);
      $this->db->update('HakAkses', $data);
    }

    public function getDataHakAksesDetail($id){
      $this->db->where('IdAkses', $id);
      $query = $this->db->get('HakAkses');
      return $query->row();
    }

    public function DeleteDataHakAkses($id){
      $this->db->where('IdAkses', $id);
      $this->db->delete('HakAkses');
    }

}