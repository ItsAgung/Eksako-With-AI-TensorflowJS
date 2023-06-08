<?php

class Feedback extends CI_Controller
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
			$this->load->model('feedback_model');
			$data['feedbacks'] = $this->feedback_model->get();
			if(count($data['feedbacks']) <= 0){
				$this->load->view('admin/vw_feedbackempty');
			} else {
				$this->load->view('admin/vw_feedbacklist', $data);
			}
		} else {
			echo "Anda tidak berhak mengakses halaman ini";
		}

		
	}

	public function delete($id = null)
	{
		if(!$id){
			show_404();
		}

		$this->load->model('feedback_model');
		$this->feedback_model->delete($id);

		$this->session->set_flashdata('message', 'Data was deleted');
		redirect(site_url('admin/feedback'));
	}
}