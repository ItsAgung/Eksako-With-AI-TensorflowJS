<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('homepage/vw_sejarah');
	}
}

?>