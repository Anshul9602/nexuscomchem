<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Certificate extends CI_Controller
{

	public function index()
	{
		$this->load->view('header');
		$this->load->view('certificates');
		$this->load->view('footer');
	}
}
