<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function index()
	{
		$kategori = $this->input->get('kategori');
		if ($kategori) {
			$data['berita'] = $this->db->get_where('berita', array('id_kategori' => $kategori))->result();
		} else {
			$data['berita'] = $this->db->get('berita')->result();
		}
		
        $this->load->view('head_web');
        $this->load->view('nav_web');
		$this->load->view('web', $data);
		$this->load->view('foot_web');
	}
	public function kategori()
	{
		
		// Get news by category
		$data['kategori'] = $this->db->get('categories')->result();
		
		$this->load->view('head_web');
		$this->load->view('nav_web');
		$this->load->view('kategori', $data);
		$this->load->view('foot_web');
	}
	public function single($id = null)
	{

		// Ambil berita untuk sidebar
		$data['berita'] = $this->db->get('berita')->result();

		// Ambil berita utama
		$data['single_berita'] = $this->db->where('id', $id)->get('berita')->row();

		// Tambah view jika berita ditemukan
		$this->db->set('view', 'view+1', FALSE);
		$this->db->where('id', $id);
		$this->db->update('berita');

		// Refresh data single_berita setelah update views
		$data['single_berita'] = $this->db->where('id', $id)->get('berita')->row();

		$this->load->view('head_web');
		$this->load->view('nav_web');
		$this->load->view('single', $data);
		$this->load->view('foot_web');
	}
	public function home()
	{
		
		$data['berita'] = $this->db->get('berita')->result();
        $this->load->view('head_web');
        $this->load->view('nav_web');
		$this->load->view('home', $data);
		$this->load->view('foot_web');
	}


}
