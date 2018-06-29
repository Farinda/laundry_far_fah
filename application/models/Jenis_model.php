<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_model extends CI_Model {

	public function getAll()
    {
        $query = $this->db->get('jenis');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function save()
    {
        $data= $this->input->post();
        $this->db->insert('jenis', $data);
    }
    public function update()
    {
        $set = $this->input->post();
        $this->db->where('id',$set['id']);
        $this->db->update('jenis', $set);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jenis');
    }
}

?>