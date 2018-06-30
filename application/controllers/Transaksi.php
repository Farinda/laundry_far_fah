<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
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
		$this->load->model('Transaksi_model');
		$data['transaksi'] = $this->Transaksi_model->select();
		$this->load->view('admin/transaksi/show',$data);
	}
	public function cuci()
	{
		$this->load->model('Transaksi_model');
		$data['transaksi'] = $this->Transaksi_model->select('1');
		$this->load->view('admin/transaksi/show_cuci',$data);
	}
	public function selesai()
	{
		$this->load->model('Transaksi_model');
		$data['transaksi'] = $this->Transaksi_model->select('2');
		$this->load->view('admin/transaksi/show_selesai',$data);
	}
	public function tambah()
	{
		$this->load->model('Transaksi_model');
		$data['nomor'] = $this->Transaksi_model->auto_nomor();
		$data['jenis'] = $this->Transaksi_model->jenis();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/transaksi/tambah',$data);
		} else {
			$insert_id = $this->Transaksi_model->insert();
			redirect('Transaksi/detail/'.$insert_id,'refresh');
		}
		
	}
	public function detail($id)
	{
		$this->load->model('Transaksi_model');
		$data['transaksi'] = $this->Transaksi_model->select_id($id);
		$data['item'] = $this->Transaksi_model->item();
		$data['detail'] = $this->Transaksi_model->detail_select($id);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('jumlah','Jumlah','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/transaksi/detail',$data);
		} else {
			$insert_id = $this->Transaksi_model->detail_insert($id);
			redirect('Transaksi/detail/'.$id,'refresh');
		}
	}
	public function detail_delete($fk,$id)
	{
		$this->load->model('Transaksi_model');
		$this->Transaksi_model->detail_delete($id);
		redirect('Transaksi/detail/'.$fk,'refresh');
	}
	public function set_status($id,$status)
	{
		$this->load->model('Transaksi_model');
		$this->Transaksi_model->set_status($id,$status);
		redirect('Transaksi','refresh');
	}
}
