<?php

class Surat extends CI_Controller
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
			$this->load->model('surat_model');
			$data['sktmdatas'] = $this->surat_model->get();
			if(count($data['sktmdatas']) <= 0){
				$this->load->view('admin/vw_suratempty');
			} else {
				$this->load->view('admin/vw_suratlist', $data);
			}
			// $this->load->view('admin/vw_suratsyarat.php');
		  }else{
			echo "Anda tidak berhak mengakses halaman ini";
		  }
	}

	
	public function delete($nosurat = null)
	{
		if(!$nosurat){
			show_404();
		}

		$this->load->model('surat_model');
		$this->surat_model->delete($nosurat);

		$this->session->set_flashdata('message', 'Data was deleted');
		redirect(site_url('admin/surat'));
	}
}