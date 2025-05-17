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
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/Dashboard');
		$this->load->view('admin/template/footer');
	}

    public function simpan()
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
        $proses = $this->berita_model->simpan($data);
        if ($proses) {
			redirect('dashboard');
        }else{
            echo "gagal";
        }

    }


}