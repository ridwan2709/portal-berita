<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['user'] = $this->user_model->get_all();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/user_list', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/user_tambah');
		$this->load->view('admin/template/footer');
	}

	public function simpan()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
		];

		$this->user_model->simpan($data);
		redirect('user');
	}

	public function edit($id)
	{
		$data['user'] = $this->user_model->get_by_id($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/user_edit', $data);
		$this->load->view('admin/template/footer');
	}

	public function update($id)
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
		];

		if ($this->input->post('password')) {
			$data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		}

		$this->user_model->update($id, $data);
		redirect('user');
	}

	public function hapus($id)
	{
		$this->user_model->hapus($id);
		redirect('user');
	}
}
