<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Split extends CI_Controller
{

	public function index()
	{
		$this->load->view('header');
		$this->load->view('split');
		$this->load->view('footer');
	}
}
