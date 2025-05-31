<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	private $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('category_model');
	}

	private function load_views()
	{
		$this->load->view('head_web');
		$this->load->view('nav_web');
		$this->load->view($this->data['view'], $this->data);
		$this->load->view('foot_web');
	}

	public function index()
	{
		$kategori_id = $this->input->get('kategori');
		$this->data['berita'] = $kategori_id 
			? $this->berita_model->get_by_category($kategori_id)
			: $this->berita_model->get_all();
		$this->data['kategori'] = $this->category_model->get_all();
		$this->data['berita_viral'] = $this->berita_model->get_hot_news();
		$this->data['view'] = 'web';
		$this->load_views();
	}

	public function kategori()
	{
		$this->data['kategori'] = $this->category_model->get_all();
		$this->data['view'] = 'kategori';
		$this->load_views();
	}

	public function single($id = null)
	{
		if (!$id) {
			show_404();
		}

		$this->data['single_berita'] = $this->berita_model->get_by_id($id);
		
		if (!$this->data['single_berita']) {
			show_404();
		}

		// Get related news for sidebar
		$this->data['berita'] = $this->berita_model->get_related_news($id, $this->data['single_berita']->id_kategori);
		
		// Increment view count
		$this->berita_model->increment_view($id);

		$this->data['view'] = 'single';
		$this->load_views();
	}

	public function home()
	{
		$this->data['berita'] = $this->berita_model->get_all();
		$this->data['view'] = 'home';
		$this->load_views();
	}
}

