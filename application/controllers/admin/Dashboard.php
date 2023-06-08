<?php

class Dashboard extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url('login');
			redirect($url);
			}
	  }

	public function index()
	{	
		if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
			$this->load->view('admin/vw_dashboard.php');
		  }else{
			echo "Anda tidak berhak mengakses halaman ini";
		  }
	}
}