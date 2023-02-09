<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

  public function __construct(){
		parent::__construct();
		$this->load->model('PenggunaModel');
		$this->load->model('HakAksesModel');
	}
  public function index()
	{
		$recordPengguna = $this->PenggunaModel->getDataPengguna();
		$DATA = array('data_pengguna' => $recordPengguna);
		$this->load->view('pengguna/home_pengguna', $DATA);
	}

  public function formInput($id){
    $recordPengguna = $this->PenggunaModel->getDataPenggunaDetail($id);
		$DATA = array('data_pengguna' => $recordPengguna);
    $DATA['data_hak_akses'] =  $this->HakAksesModel->getDataHakAkses();
		$this->load->view('pengguna/form_input', $DATA);
	}

  public function formEdit($id){
		$recordPengguna = $this->PenggunaModel->getDataPenggunaDetail($id);
		$DATA = array('data_pengguna' => $recordPengguna);
    $DATA['data_hak_akses'] =  $this->HakAksesModel->getDataHakAkses();
		$this->load->view('pengguna/form_edit', $DATA);
	}

  public function AksiInsert(){
		$idpengguna = $this->input->post('idpengguna');
		$namapengguna = $this->input->post('namapengguna');
		$password = $this->input->post('password');
		$namadepan = $this->input->post('namadepan');
		$namabelakang = $this->input->post('namabelakang');
    $nohp = $this->input->post('nohp');
    $alamat = $this->input->post('alamat');
    $idakses = $this->input->post('idakses');


		$DataInsert= array (
			'IdPengguna' => $idpengguna,
			'NamaPengguna' => $namapengguna,
			'Password' => $password,
      'NamaDepan' => $namadepan,
      'NamaBelakang' => $namabelakang,
      'NoHp' => $nohp,
      'Alamat' => $alamat,
      'IdAkses' => (int)$idakses,
		);

		$this->PenggunaModel-> InsertDataPengguna($DataInsert);
		redirect (base_url('Pengguna'));
	}

	public function AksiEdit(){
		$idpengguna = $this->input->post('idpengguna');
		$namapengguna = $this->input->post('namapengguna');
		$password = $this->input->post('password');
		$namadepan = $this->input->post('namadepan');
		$namabelakang = $this->input->post('namabelakang');
    $nohp = $this->input->post('nohp');
    $alamat = $this->input->post('alamat');
    $idakses = $this->input->post('idakses');

		$DataUpdate = array (
			'namapengguna' => $namapengguna,
			'password' => $password,
      'NamaDepan' => $namadepan,
      'NamaBelakang' => $namabelakang,
      'NoHp' => $nohp,
      'Alamat' => $alamat,
      'IdAkses' => $idakses,
		);
    echo "<pre>";
    print_r ($data);
    echo "</pre>";

		$this->PenggunaModel->EditDataPengguna($DataUpdate, $idpengguna);
		redirect(base_url('Pengguna'));
	}

	public function AksiDeleteData($idpengguna){
		$this->PenggunaModel->DeleteDataPengguna($idpengguna);
		redirect(base_url('Pengguna'));
	}
}