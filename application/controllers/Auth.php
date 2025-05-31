<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/login');
		$this->load->view('admin/template/footer');
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->auth_model->login_user($username,$password))
		{
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('Auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('user_id');
		redirect('Auth');
	}
}

	


