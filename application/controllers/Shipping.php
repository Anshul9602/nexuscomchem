<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shipping extends CI_Controller
{

	public function index()
	{
		$this->load->view('header');
		$this->load->view('shipping');
		$this->load->view('footer');
	}
}
