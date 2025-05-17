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
}