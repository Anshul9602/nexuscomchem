<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Churi extends CI_Controller
{

	public function index()
	{
		$this->load->view('header');
		$this->load->view('churi');
		$this->load->view('footer');
	}
}
