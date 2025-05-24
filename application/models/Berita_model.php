<?php 
class Berita_model extends CI_Model 
{

    public function simpan($data)
    {
        $simpan = $this->db->insert('berita', $data);
        if ($simpan) {
            return true;
        } else {
            return false;
        }
        
    }

    public function get_all()
    {
        return $this->db->get('berita')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('berita', $data);
    }

    public function hapus($id)
    {
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