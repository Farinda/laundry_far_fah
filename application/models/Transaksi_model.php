<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function select($status = false)
	{
		$this->db->select('transaksi.*,pegawai.nama as nama_pegawai,jenis.nama as nama_jenis');
		$this->db->from('transaksi');
		$this->db->join('pegawai','transaksi.fk_pegawai=pegawai.id');
		$this->db->join('jenis','transaksi.fk_jenis=jenis.id');
		if ($status) {
			$this->db->where('status',$status);
		}
		return $this->db->get()->result();
	}
	public function jenis()
	{
		return $this->db->get('jenis')->result();
	}
	public function item()
	{
		return $this->db->get('item')->result();
	}
	public function insert()
	{
		$set = array(
			'nomor' => $this->input->post('nomor'),
			'nama' => $this->input->post('nama'),
			'tanggal' => $this->input->post('tanggal'),
			'fk_jenis' => $this->input->post('jenis'),
			'fk_pegawai' => $this->session->userdata('logged_in')['id']
		);
		$this->db->insert('transaksi',$set);
		return $this->db->insert_id();
	}
	public function auto_nomor()
	{
		$query = $this->db->query("select * from transaksi order by nomor desc limit 1");
		if ($query->num_rows() > 0) {
			$result = $query->result();
			$row = $result[0];
			$id = (int) substr($row->nomor, 3,5)+1;
			$newid = substr('00000'.($id), -5);
			return 'TRN'.$newid;
		}else{
			return 'TRN00001';
		}
	}
	public function select_id($id)
	{
		return $this->db->where('id',$id)->get('transaksi')->result()[0];
	}
	public function set_status($id,$status)
	{
		$set['status'] = $status;
		$this->db->where('id',$id)->update('transaksi',$set);
	}
	// detail
	public function detail_select($fk)
	{
		$this->db->select('transaksi_detail.*,item.nama,item.harga');
		$this->db->from('transaksi_detail');
		$this->db->join('item','transaksi_detail.fk_item=item.id');
		$this->db->where('fk_transaksi',$fk);
		return $this->db->get()->result();
	}
	public function detail_insert($fk)
	{
		$data = array(
			'fk_transaksi' => $fk,
			'fk_item' => $this->input->post('fk_item'),
			'jumlah' => $this->input->post('jumlah')
		);
		$this->db->insert('transaksi_detail',$data);
	}
	public function detail_delete($id)
	{
		$this->db->where('id',$id)->delete('transaksi_detail');
	}
	// end detail
}

?>