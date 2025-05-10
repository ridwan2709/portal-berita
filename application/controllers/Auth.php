<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{

		$this->load->model('auth_model');
		$this->load->library('form_validation');

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->login();
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->auth_model->login($username, $password)){
			echo "Anda Berhasil Login";
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

		$this->login();
	}

	private function login()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/login');
		$this->load->view('admin/template/footer');
	}

	public function logout()
	{
		$this->load->model('auth_model');
		$this->auth_model->logout();
		redirect(site_url());
	}


}