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
		if ($kategori === null) {
			redirect('web');
		}
		
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
		if ($id === null) {
			redirect('web');
		}
		
		$data['berita'] = $this->db->get('berita')->result(); // for sidebar news
		$data['single_berita'] = $this->db->where('id', $id)->get('berita')->row();
		
		if (!$data['single_berita']) {
			redirect('web');
		}
		
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
