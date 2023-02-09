<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

  public function __construct(){
		parent::__construct();
		$this->load->model('PembelianModel');
		$this->load->model('PenggunaModel');
	}
  public function index()
	{
		$recordPembelian = $this->PembelianModel->getDataPembelian();
		$DATA = array('data_pembelian' => $recordPembelian);
		$this->load->view('pembelian/home_pembelian', $DATA);
	}

  public function formInput($id){
    $recordPembelian = $this->PembelianModel->getDataPembelianDetail($id);
		$DATA = array('data_pembelian' => $recordPembelian);
    $DATA['data_pengguna'] =  $this->PenggunaModel->getDataPengguna();
		$this->load->view('pembelian/form_input', $DATA);
	}

  public function formEdit($id){
		$recordPembelian = $this->PembelianModel->getDataPembelianDetail($id);
		$DATA = array('data_pembelian' => $recordPembelian);
    $DATA['data_pengguna'] =  $this->PenggunaModel->getDataPengguna();
		$this->load->view('pembelian/form_edit', $DATA);
	}

  public function AksiInsert(){
		$idpembelian = $this->input->post('idpembelian');
		$jumlahpembelian = $this->input->post('jumlahpembelian');
		
		$idpembelian = $this->input->post('idpembelian');
		$namabelakang = $this->input->post('namabelakang');
    $nohp = $this->input->post('nohp');
    $alamat = $this->input->post('alamat');

// iininii
		$DataInsert= array (
			'IdPembelian' => $idpembelian,
			'JumlahPembelian' => $jumlahpembelian,
			'HargaBeli' => $hargabeli,
      'IdPembelian' => $idpembelian,
		);

		$this->PembelianModel-> InsertDataPembelian($DataInsert);
		redirect (base_url('Pembelian'));
	}

	public function AksiEdit(){
		$idpembelian = $this->input->post('idpembelian');
		$jumlahpembelian = $this->input->post('jumlahpembelian');
		$idpembelian = $this->input->post('idpembelian');
		$hargabeli = $this->input->post('hargabeli');

		$DataUpdate = array (
			'jumlahpembelian' => $jumlahpembelian,
      'IdPembelian' => $idpembelian,
      'IdPengguna' => $idpengguna,
      'HargaBeli' => $hargabeli,

		);
    echo "<pre>";
    print_r ($data);
    echo "</pre>";

		$this->PembelianModel->EditDataPembelian($DataUpdate, $idpembelian);
		redirect(base_url('Pembelian'));
	}

	public function AksiDeleteData($idpembelian){
		$this->PembelianModel->DeleteDataPembelian($idpembelian);
		redirect(base_url('Pembelian'));
	}
}