<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function index()
	{
        $data['berita'] = $this->db->get('berita')->result();
        $this->load->view('head_web');
        $this->load->view('nav_web');
		$this->load->view('web', $data);
		$this->load->view('foot_web');
	}
	public function kategori($kategori = null)
	{
		
		// Get news by category
		$data['berita'] = $this->db->where('tag', $kategori)->get('berita')->result();
		$data['kategori_name'] = ucfirst($kategori); // Capitalize first letter for display
		
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
