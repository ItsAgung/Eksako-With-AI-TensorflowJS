<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//validasi jika user belum login
		$this->load->model('auth_model');
		$this->auth_model->cek_login();
		
	}

	public function index()
	{
		$this->load->view('layanan/vw_info');
	}
}
?>