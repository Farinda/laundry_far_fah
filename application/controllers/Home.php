<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/home');
	}
	public function track()
	{
		$nomor = $this->input->post('nomor');
		$query = $this->db->where('nomor',$nomor)->get('transaksi');
		if ($query->num_rows() >= 1) {
			$status = $query->row(0)->status;
		}else{
			$status = 0;
		}
		switch ($status) {
			case 1:
				$track = "Belum dicuci";
				break;
			case 2:
				$track = "Masih dicuci";
				break;
			case 3:
				$track = "Selesai";
				break;
			default:
				$track = "Nomor Transaksi tidak ditemukan";
				break;
		}
		$data['track'] = $track;
		$this->load->view('home/home',$data);
	}
}
