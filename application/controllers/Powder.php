<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Powder extends CI_Controller
{

	public function index()
	{
		$this->load->view('header');
		$this->load->view('powder');
		$this->load->view('footer');
	}
}
