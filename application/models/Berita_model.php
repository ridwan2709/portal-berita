<?php 
class Berita_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        return $this->db->order_by('tanggal', 'DESC')->get('berita')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row();
    }

    public function get_by_category($category_id)
    {
        return $this->db->where('id_kategori', $category_id)
                        ->order_by('tanggal', 'DESC')
                        ->get('berita')
                        ->result();
    }

    public function get_related_news($current_id, $category_id, $limit = 5)
    {
        return $this->db->where('id !=', $current_id)
                        ->where('id_kategori', $category_id)
                        ->order_by('tanggal', 'DESC')
                        ->limit($limit)
                        ->get('berita')
                        ->result();
    }

    public function simpan($data)
    {
        $data['tanggal'] = date('Y-m-d H:i:s');
        $data['link'] = urlencode($data['judul']);
        $data['view'] = 0;
        
        return $this->db->insert('berita', $data);
    }

    public function update($id, $data)
    {
        $data['tanggal'] = date('Y-m-d H:i:s');
        $data['link'] = urlencode($data['judul']);
        
        $this->db->where('id', $id);
        return $this->db->update('berita', $data);
    }

    public function hapus($id)
    {
        $berita = $this->get_by_id($id);
        if ($berita && $berita->gambar) {
            $file_path = FCPATH . 'assets/uploads/' . $berita->gambar;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
        
        $this->db->where('id', $id);
        return $this->db->delete('berita');
    }

    public function increment_view($id)
    {
        $this->db->set('view', 'view + 1', FALSE);
        $this->db->where('id', $id);
        return $this->db->update('berita');
    }
}