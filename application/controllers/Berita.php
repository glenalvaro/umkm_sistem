<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//resource untuk halaman admin

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('Umkm_model', 'umkm');
		$this->load->helper('text');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();
		$data['artikel'] = $this->db->get('tb_berita')->result_array();
		$data['title'] = 'Berita | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('berita/list', $data);
		$this->load->view('temp_admin/footer');
	}

	public function buat_berita()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$this->form_validation->set_rules('tgl', 'Tgl Posting', 'required|trim');
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');
		$this->form_validation->set_rules('tags', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('konten', 'Berita', 'required|trim');

		if($this->form_validation->run() == false){
			$data['title'] = 'Buat Berita | Sistem Informasi UMKM';
			$this->load->view('temp_admin/header', $data);
			$this->load->view('temp_admin/sidebar', $data);
			$this->load->view('berita/add', $data);
			$this->load->view('temp_admin/footer');
		} else {
			//thumnail
			$gambar = $_FILES['gambar']['name'];

			$data = [
				'judul' => $this->input->post('judul'),
				'tags' => $this->input->post('tags'),
				'konten' => $this->input->post('konten'),
				'tgl' => $this->input->post('tgl'),
			];

			//fungsi upload thumnail berita umkm
		 	if ($gambar) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '5048';
                $config['upload_path'] = './assets/upload/artikel/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    $this->session->set_flashdata('message',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Gagal! </strong> Ukuran foto maks 2 MB!.
											</div>'
										);
						redirect('berita');
                }
            }

			$this->db->insert('tb_berita', $data);
			$this->session->set_flashdata('message',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambah.
											</div>'
										);
            redirect('berita');
		}
	}

	public function lihat_berita($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
	 	$data['setting'] = $this->db->get('tb_setting')->result_array();

		$where = array('id' => $id);
		$data['detailBerita'] = $this->umkm->getBerita($where, 'tb_berita')->result();
		$data['title'] = 'Lihat Berita | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('berita/detail', $data);
		$this->load->view('temp_admin/footer');
	}

	public function edit_berita($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
	 	$data['setting'] = $this->db->get('tb_setting')->result_array();

		$where = array('id' => $id);
		$data['editBerita'] = $this->umkm->EditBerita($where, 'tb_berita')->result();
		$data['title'] = 'Edit Berita | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('berita/edit', $data);
		$this->load->view('temp_admin/footer');
	}

	public function update_berita()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$konten = $this->input->post('konten');
		$tags = $this->input->post('tags');

		//cek jika ada gambar yang diupload
		$ganti_thumbnail = $_FILES['gambar']['name'];

		if ($ganti_thumbnail) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '3048';
                $config['upload_path'] = './assets/upload/artikel/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                   $this->session->set_flashdata('message',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Gagal! </strong> Ukuran foto maks 3 MB!.
											</div>'
										);

					redirect('tb_berita');
                }
            }

		$data = [

			'judul' => $judul,
			'konten' => $konten,
			'tags' => $tags

		];

		$where = array('id' => $id);
		$this->umkm->update_dataBerita($where,$data, 'tb_berita');
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('berita');
	}

	public function hapus_berita($id)
	{
		$this->umkm->delete_berita($id);
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Berita berhasil dihapus.
											</div>'
										);
		redirect('berita');
	}
}