<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
	}

	public function index()
	{
		$data['berita'] = $this->berita_model->get_all();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/berita_list', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$data['kategori'] = $this->db->get('categories')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/berita_tambah', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan()
	{
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
		$config['max_size'] = 5048;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('gambar')) {
			$upload_data = $this->upload->data();
			$gambar = $upload_data['file_name'];
		} else {
			$gambar = '';
		}
		$data  =[
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'tag' => $this->input->post('tag'),
			'id_kategori' => $this->input->post('id_kategori'),
			'gambar' => $gambar,
			'tanggal' => date('Y-m-d H:i:s'),
			'user_id' => 1,
			'link' => urlencode($this->input->post('judul'))
		];
		$proses = $this->berita_model->simpan($data);
		if ($proses) {
			redirect('berita');
		}else{
			echo "gagal";
		}
	}

	public function edit($id)
	{
		$data['kategori'] = $this->db->get('categories')->result();
		$data['berita'] = $this->berita_model->get_by_id($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/berita_edit', $data);
		$this->load->view('admin/template/footer');
	}

	public function update($id)
	{
		$data  =[
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'tag' => $this->input->post('tag'),
			'id_kategori' => $this->input->post('id_kategori'),
			'gambar' => $this->input->post('gambar'),
			'tanggal' => date('Y-m-d H:i:s'),
			'user_id' => 1,
			'link' => urlencode($this->input->post('judul'))
		];
		$proses = $this->berita_model->update($id, $data);
		if ($proses) {
			redirect('berita');
		}else{
			echo "gagal update";
		}
	}

	public function hapus($id)
	{
		$proses = $this->berita_model->hapus($id);
		if ($proses) {
			redirect('berita');
		}else{
			echo "gagal hapus";
		}
	}

	public function detail($id)
	{
		$data['berita'] = $this->berita_model->get_by_id($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/berita_detail', $data);
		$this->load->view('admin/template/footer');
	}

}