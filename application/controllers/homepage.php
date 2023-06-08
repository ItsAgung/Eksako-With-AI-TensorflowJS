<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Homepage extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 }
 
 public function index(){
    $data['title'] = "E-KSAKO - Aplikasi Pelayanan Masyarakat Kelurahan Sako";
    $this->load->view('homepage/homepage_view',$data);
   
 }

 public function about()
	{
		$this->load->view('homepage/vw_about');
	}

 public function contact()
	{
		$this->load->view('homepage/vw_contact');
	}

   public function proses()
	{

      if ($this->input->method() === 'post') 
      {
         $this->load->model('feedback_model');
     
         $feedback = [
           'id' => uniqid('', true), 
           'name' => $this->input->post('name'),
           'email' => $this->input->post('email'),
           'message' => $this->input->post('message')
         ];
         $this->feedback_model->insert($feedback);
			$this->session->set_flashdata('success_feedback','Feedback anda telah diterima!');
			redirect('homepage');
	}
   }
}
?>