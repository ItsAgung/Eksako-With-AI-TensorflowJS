<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}
 
	public function index()
	{
		$this->load->view('login/vw_register');
	}

    public function proses()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('nik', 'NIK','trim|required|min_length[16]|max_length[16]|is_unique[tb_user.nik]');
		$this->form_validation->set_rules('nohp', 'No Handphone','trim|required|min_length[1]|max_length[20]');
		$this->form_validation->set_rules('email', 'Email','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'Password','trim|required|min_length[1]|max_length[255]');
		
		if ($this->form_validation->run()==true)
	   	{
			$data_user = [     
				'nik'=> $this->input->post('nik'),
				'nama'=> $this->input->post('nama'),
				'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'nohp'=> $this->input->post('nohp'),
				'email'=> $this->input->post('email')
              ];
			
			$this->auth_model->register($data_user);
			$this->session->set_flashdata('success_register','Proses Pendaftaran Berhasil');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}


?>