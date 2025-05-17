<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['categories'] = $this->category_model->get_all();
        $data['title'] = 'Daftar Kategori';
        
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('category/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function create() {
        $this->form_validation->set_rules('name', 'Nama Kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Kategori';
            
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('category/create');
            $this->load->view('admin/template/footer');
        } else {
            $data = array(
                'name' => $this->input->post('name')
            );
            
            $this->category_model->create($data);
            $this->session->set_flashdata('success', 'Kategori berhasil ditambahkan');
            redirect('category');
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules('name', 'Nama Kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['category'] = $this->category_model->get_by_id($id);
            $data['title'] = 'Edit Kategori';
            
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('category/edit', $data);
            $this->load->view('admin/template/footer');
        } else {
            $data = array(
                'name' => $this->input->post('name')
            );
            
            $this->category_model->update($id, $data);
            $this->session->set_flashdata('success', 'Kategori berhasil diupdate');
            redirect('category');
        }
    }

    public function delete($id) {
        $this->category_model->delete($id);
        $this->session->set_flashdata('success', 'Kategori berhasil dihapus');
        redirect('category');
    }
} 