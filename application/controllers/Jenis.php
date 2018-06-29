<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (!$this->acl->is_public($current_controller)) {
				if (!$this->acl->is_allowed($current_controller,$data['level'])) {
					echo '<script>alert("Tidak Dapat Akses")</script>';
					redirect('Login/logout','refresh');
				}
			}
		}else{
			echo '<script>alert("Login Dahulu")</script>';
			redirect('Login');
		}
	}
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
