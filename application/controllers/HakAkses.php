<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HakAkses extends CI_Controller {

  public function __construct(){
		parent::__construct();
		$this->load->model('HakAksesModel');
	}
  public function index()
	{
		$recordHakAkses = $this->HakAksesModel->getDataHakAkses();
		$DATA = array('data_hak_akses' => $recordHakAkses);
		$this->load->view('home', $DATA);
	}

  public function formInput(){
		$this->load->view('hak_akses/form_input');
	}

  public function formEdit($id){
		$recordHakAkses = $this->HakAksesModel->getDataHakAksesDetail($id);
		$DATA = array('data_hak_akses' => $recordHakAkses);
		$this->load->view('hak_akses/form_edit', $DATA);
	}

  public function AksiInsert(){
		$idakses = $this->input->post('idakses');
		$namaakses = $this->input->post('namaakses');
		$keterangan = $this->input->post('keterangan');

		$DataInsert= array (
			'IdAkses' => $idakses,
			'NamaAkses' => $namaakses,
			'Keterangan' => $keterangan,
		);

    // echo "<pre>";
    // print_r ($DataInsert);
    // echo "</pre>";

		$this->HakAksesModel->InsertDataHakAkses($DataInsert);
		redirect (base_url('HakAkses'));
	}

	public function AksiEdit(){
		$idakses = $this->input->post('idakses');
		$namaakses = $this->input->post('namaakses');
		$keterangan = $this->input->post('keterangan');

		$DataUpdate = array (
			'NamaAkses' => $namaakses,
			'Keterangan' => $keterangan,
		);

		$this->HakAksesModel->EditDataHakAkses($DataUpdate, $idakses);
		redirect(base_url());
	}

	public function AksiDeleteData($idakses){
		$this->HakAksesModel->DeleteDataHakAkses($idakses);
		redirect(base_url());
	}
}