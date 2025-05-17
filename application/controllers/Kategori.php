<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	

	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/Kategori');
		$this->load->view('admin/template/footer');
	}


}