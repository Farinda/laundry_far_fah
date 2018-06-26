<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('jenis');
		return $query->result();
	}
	public function get_id($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('jenis');
		return $query->result()[0];
	}
	public function insert()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'ratio' => $this->input->post('ratio')
		);
		$this->db->insert('jenis',$data);
	}
	public function update($id)
	{
		$set = array(
			'nama' => $this->input->post('nama'),
			'ratio' => $this->input->post('ratio')
		);
		$this->db->where('id',$id);
		$this->db->update('jenis',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('jenis');
	}
}

?>