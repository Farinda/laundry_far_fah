<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	public function index()
	{
		$this->load->model('Jenis_model');
		$data['jenis_data'] = $this->Jenis_model->get_data();
		$this->load->view('admin/jenis/data_view',$data);
	}
	public function create()
	{
		$this->load->model('Jenis_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required|is_unique[jenis.nama]');
		$this->form_validation->set_rules('ratio','Ratio','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/jenis/create_view');
		} else {
			$this->Jenis_model->insert();
			$this->load->view('admin/jenis/create_sukses');
		}
	}
	public function update($id)
	{
		$this->load->model('Jenis_model');
		$this->load->library('form_validation');
		$data['jenis'] = $this->Jenis_model->get_id($id);
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('ratio','Ratio','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/jenis/update_view',$data);
		} else {
			$this->Jenis_model->update($id);
			$this->load->view('admin/jenis/update_sukses');
		}
	}
	public function delete($id)
	{
		$this->load->model('Jenis_model');
		$this->Jenis_model->delete($id);
		$this->load->view('admin/jenis/delete_sukses');
	}
}
