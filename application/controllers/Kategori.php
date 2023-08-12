<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//resource untuk data kategori

class Kategori extends CI_Controller 
{
	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('User_model', 'user');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();


		$data['getKategori'] = $this->db->get('tb_kategori')->result_array();

		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim',[
			'required' => 'Nama Kategori tidak boleh kosong'
		]);

		if($this->form_validation->run() == false)
		{
		$data['title'] = 'Kategori | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('kategori/list', $data);
		$this->load->view('temp_admin/footer');
		} else {
			$this->db->insert('tb_kategori', [
				'nama_kategori' => $this->input->post('nama_kategori'),
				'keterangan' => $this->input->post('keterangan')
			]);
			$this->session->set_flashdata('message',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data kategori berhasil ditambah.
											</div>'
										);
            redirect('kategori');

		}
	}

	public function edit_kategori($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$where = array('id' => $id);
		$data['editKategori'] = $this->user->kategori_edit($where, 'tb_kategori')->result();
		$data['title'] = 'Edit Kategori | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('kategori/edit', $data);
		$this->load->view('temp_admin/footer');
	}

	public function update_kategori()
	{
		$id = $this->input->post('id');
		$nama_kategori = $this->input->post('nama_kategori');
		$keterangan = $this->input->post('keterangan');

		$data = [
			'nama_kategori' => $nama_kategori,
			'keterangan' => $keterangan
		];

		$where = array('id' => $id);
		$this->user->kategori_update($where,$data, 'tb_kategori');
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Kategori berhasil diupdate.
											</div>'
										);
		redirect('kategori');
	}

	public function hapus_kategori($id)
	{
		$this->user->delete_kategori($id);
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Kategori berhasil dihapus.
											</div>'
										);
		redirect('kategori');
	}
}