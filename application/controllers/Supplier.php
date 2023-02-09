<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

  public function __construct(){
		parent::__construct();
		$this->load->model('SupplierModel');
		$this->load->model('HakAksesModel');
	}
  public function index()
	{
		$recordSupplier = $this->SupplierModel->getDataSupplier();
		$DATA = array('data_supplier' => $recordSupplier);
		$this->load->view('supplier/home_supplier', $DATA);
	}

  public function formInput($id){
    $recordSupplier = $this->SupplierModel->getDataSupplierDetail($id);
		$DATA = array('data_supplier' => $recordSupplier);
    $DATA['data_hak_akses'] =  $this->HakAksesModel->getDataHakAkses();
		$this->load->view('supplier/form_input', $DATA);
	}

  public function formEdit($id){
		$recordSupplier = $this->SupplierModel->getDataSupplierDetail($id);
		$DATA = array('data_supplier' => $recordSupplier);
    $DATA['data_hak_akses'] =  $this->HakAksesModel->getDataHakAkses();
		$this->load->view('supplier/form_edit', $DATA);
	}

  public function AksiInsert(){
		$idsupplier = $this->input->post('idsupplier');
		$namasupplier = $this->input->post('namasupplier');
    $nohp = $this->input->post('nohp');
    $alamat = $this->input->post('alamat');
    $idpembelian = $this->input->post('idpembelian');


		$DataInsert= array (
			'IdSupplier' => $idsupplier,
			'NamaSupplier' => $namasupplier,
      'NoHp' => $nohp,
      'Alamat' => $alamat,
      'IdPembelian' => (int)$idpembelian,
		);

		$this->SupplierModel-> InsertDataSupplier($DataInsert);
		redirect (base_url('Supplier'));
	}

	public function AksiEdit(){
		$idsupplier = $this->input->post('idsupplier');
		$namasupplier = $this->input->post('namasupplier');
        $nohp = $this->input->post('nohp');
        $alamat = $this->input->post('alamat');
        $idpembelian = $this->input->post('idpembelian');

		$DataUpdate = array (
			'namasupplier' => $namasupplier,
            'NoHp' => $nohp,
            'Alamat' => $alamat,
            'IdPembelian' => $idpembelian,
                );
            echo "<pre>";
            print_r ($data);
            echo "</pre>";

		$this->SupplierModel->EditDataSupplier($DataUpdate, $idsupplier);
		redirect(base_url('Supplier'));
	}

	public function AksiDeleteData($idsupplier){
		$this->SupplierModel->DeleteDataSupplier($idsupplier);
		redirect(base_url('Supplier'));
	}
}