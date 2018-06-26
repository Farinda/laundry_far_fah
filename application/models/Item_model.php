<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('item');
		return $query->result();
	}
	public function get_id($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('item');
		return $query->result()[0];
	}
	public function insert()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga')
		);
		$this->db->insert('item',$data);
	}
	public function update($id)
	{
		$set = array(
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga')
		);
		$this->db->where('id',$id);
		$this->db->update('item',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('item');
	}
}

?>