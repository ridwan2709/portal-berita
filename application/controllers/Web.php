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
}
