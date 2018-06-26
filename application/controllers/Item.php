<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	public function index()
	{
		$this->load->model('Item_model');
		$data['item_data'] = $this->Item_model->get_data();
		$this->load->view('admin/item/data_view',$data);
	}
	public function create()
	{
		$this->load->model('Item_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required|is_unique[item.nama]');
		$this->form_validation->set_rules('harga','Harga','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/item/create_view');
		} else {
			$this->Item_model->insert();
			$this->load->view('admin/item/create_sukses');
		}
	}
	public function update($id)
	{
		$this->load->model('Item_model');
		$this->load->library('form_validation');
		$data['item'] = $this->Item_model->get_id($id);
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('harga','Harga','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/item/update_view',$data);
		} else {
			$this->Item_model->update($id);
			$this->load->view('admin/item/update_sukses');
		}
	}
	public function delete($id)
	{
		$this->load->model('Item_model');
		$this->Item_model->delete($id);
		$this->load->view('admin/item/delete_sukses');
	}
}
