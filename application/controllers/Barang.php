<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

  public function __construct(){
		parent::__construct();
		$this->load->model('PenggunaModel');
		$this->load->model('HakAksesModel');
		$this->load->model('BarangModel');

	}
  public function index()
	{
		$recordBarang = $this->BarangModel->getDataBarang();
		$DATA = array('data_barang' => $recordBarang);
		$this->load->view('barang/home_barang', $DATA);
	}

  public function formInput($id){
    $recordBarang = $this->BarangModel->getDataBarangDetail($id);
		$DATA = array('data_barang' => $recordBarang);
    $DATA['data_pengguna'] =  $this->PenggunaModel->getDataPengguna();
		$this->load->view('barang/form_input', $DATA);
	}

  public function formEdit($id){
		$recordBarang = $this->BarangModel->getDataBarangDetail($id);
		$DATA = array('data_barang' => $recordBarang);
    // $DATA['data_hak_akses'] =  $this->HakAksesModel->getDataHakAkses();
		$this->load->view('barang/form_edit', $DATA);
	}

  public function AksiInsert(){
		$idbarang = $this->input->post('idbarang');
		$namabarang = $this->input->post('namabarang');
		$keterangan = $this->input->post('keterangan');
		$satuan = $this->input->post('satuan');
		$bundling = $this->input->post('bundling');
		$idpengguna = $this->input->post('idpengguna');

		$DataInsert= array (
			'IdBarang' => $idbarang,
			'NamaBarang' => $namabarang,
			'Keterangan' => $keterangan,
			'Satuan' => $satuan,
      'Bundling' => $bundling,
      'IdPengguna' => $idpengguna,
		);

		$this->BarangModel-> InsertDataBarang($DataInsert);
		redirect (base_url('Barang'));
	}

	public function AksiEdit(){
		$idbarang = $this->input->post('idbarang');
		$namabarang = $this->input->post('namabarang');
		$keterangan = $this->input->post('keterangan');
		$satuan = $this->input->post('satuan');
		$bundling = $this->input->post('bundling');

		$DataUpdate = array (
			'IdBarang' => $idbarang,
			'NamaBarang' => $namabarang,
			'Keterangan' => $keterangan,
			'Satuan' => $satuan,
      'Bundling' => $bundling,
		);
    // echo "<pre>";
    // print_r ($data);
    // echo "</pre>";

		$this->BarangModel->EditDataBarang($DataUpdate, $idbarang);
		redirect(base_url('Barang'));
	}

	public function AksiDeleteData($idbarang){
		$this->BarangModel->DeleteDataBarang($idbarang);
		redirect(base_url('Barang'));
	}
}