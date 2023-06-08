<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		$this->load->view('login/vw_login');
	}

	public function proses()
	{	
		$nik = htmlspecialchars($this->input->post('nik',TRUE),ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		
		$cek_admin=$this->auth_model->login_admin($nik,$password);
 
        if($cek_admin->num_rows() > 0){ 
                $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin');
 
                 }else{ //akses staff
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin');
                 }
 
        		}else{ //jika login sebagai user
                    if($this->auth_model->login_user($nik,$password))
					{
						redirect('classification');
					}
					else
					{
						$this->session->set_flashdata('error','Username & Password salah');
						redirect('login');
					}
					}

	
	}

	public function logout()
	{

		$this->session->sess_destroy();
        $url=base_url('');
		redirect('homepage');
	}

	

}