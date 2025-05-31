<?php
class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all()
	{
		return $this->db->get('user')->result();
	}

	public function get_by_id($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row();
	}

	public function simpan($data)
	{
		return $this->db->insert('user', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('user');
	}
}
