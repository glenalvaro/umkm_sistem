<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//resource untuk halaman admin

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('Admin_model','home');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$data['total_umkm'] = $this->home->jumlahUMKM();
		$data['total_sektor'] = $this->home->jumlahSektor();
		$data['total_user'] = $this->home->jumlahUser();
		$data['jumlah_gambar'] = $this->home->jumlahGambar();
		$data['title'] = 'Dashboard | Sistem Informasi UMKM Prov Sulut';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('temp_admin/footer');
	}
}
