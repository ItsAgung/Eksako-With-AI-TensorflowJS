<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('homepage/vw_profile');
	}
}

?>