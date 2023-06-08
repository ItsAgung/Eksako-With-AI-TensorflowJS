<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//validasi jika user belum login
		$this->load->model('auth_model');
		$this->auth_model->cek_login();
		
	}

	public function index()
	{
		$idnik = $this->session->userdata('nik'); // <-- Ambil nilai ID Dosen yang tersimpan pada session ketika login
		$this->load->model('suratvalid_model');
		$data['datavalids'] = $this->suratvalid_model->getAllSuratByIdNik($idnik);
		$this->load->view('layanan/vw_arsip', $data);
	}

	
}
?>