<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	

	public function index()
	{
		$this->load->model('berita_model');
		$this->load->model('category_model');
		
		$data['jumlah_berita'] = count($this->berita_model->get_all());
		$data['jumlah_kategori'] = count($this->category_model->get_all());
		
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/Dashboard', $data);
		$this->load->view('admin/template/footer');
	}


}