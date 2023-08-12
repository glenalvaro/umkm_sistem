<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//resource untuk data kategori

class Setting extends CI_Controller 
{
	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('User_model', 'user');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['getsetting'] = $this->db->get('tb_setting')->result_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();


		$data['title'] = 'Pengaturan | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('setting/index', $data);
		$this->load->view('temp_admin/footer');
	}

	public function ubah_data($id)
	{
	 $data['user'] = $this->db->get_where('tb_user', ['email' => 
	 $this->session->userdata('email')])->row_array();

	 //tampil data dari setting
	 $data['setting'] = $this->db->get('tb_setting')->result_array();

	 $where = array('id' => $id);
	 $data['ubahData'] = $this->user->getSetting($where, 'tb_setting')->result();
	 $data['title'] = 'Edit | Sistem Informasi UMKM';
	 $this->load->view('temp_admin/header', $data);
	 $this->load->view('temp_admin/sidebar', $data);
	 $this->load->view('setting/edit', $data);
	 $this->load->view('temp_admin/footer');
	}

	public function update_data()
	{
		$id = $this->input->post('id');
		$nama_sistem = $this->input->post('nama_sistem');
		$deskripsi = $this->input->post('deskripsi');
		$alamat = $this->input->post('alamat');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$title1 = $this->input->post('title1');
		$deskripsi1 = $this->input->post('deskripsi1');
		$title2 = $this->input->post('title2');
		$deskripsi2 = $this->input->post('deskripsi2');
		$title3 = $this->input->post('title3');
		$deskripsi3 = $this->input->post('deskripsi3');
		$zoom_peta = $this->input->post('zoom_peta');

		//logo sistem
		$logo = $_FILES['logo']['name'];
		//slider1 web
		$slider1 = $_FILES['slider1']['name'];
		//slider2 web
		$slider2 = $_FILES['slider2']['name'];
		//slider3 web
		$slider3 = $_FILES['slider3']['name'];
		//icon_peta
		$icon_peta = $_FILES['icon_peta']['name'];


		//fungsi upload logo web
		 if ($logo) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('logo', $new_image);
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
						redirect('setting');
                }
            }

        //fungsi gambar slider 1
		 if ($slider1) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/slider/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('slider1')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('slider1', $new_image);
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
						redirect('setting');
                }
            }

        //fungsi gambar slider 2
		 if ($slider2) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/slider/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('slider2')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('slider2', $new_image);
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
						redirect('setting');
                }
            }

        //fungsi gambar slider 3
		 if ($slider3) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/slider/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('slider3')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('slider3', $new_image);
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
						redirect('setting');
                }
            }

            //fungsi upload icon peta
		 if ($icon_peta) {
                $config['allowed_types'] = 'png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/icon/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('icon_peta')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('icon_peta', $new_image);
                } else {
                    $this->session->set_flashdata('message',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Gagal! </strong> Ukuran foto maks 2 MB!, hanya format png yang di izinkan
											</div>'
										);
						redirect('setting');
                }
            }

		$data = [

			'nama_sistem' => $nama_sistem,
			'deskripsi' => $deskripsi,
			'alamat' => $alamat,
			'phone' => $phone,
			'email' => $email,
			'title1' => $title1,
			'deskripsi1' => $deskripsi1,
			'title2' => $title2,
			'deskripsi2' => $deskripsi2,
			'title3' => $title3,
			'deskripsi3' => $deskripsi3,
			'zoom_peta' => $zoom_peta
		];

		$where = array('id' => $id);
		$this->user->update_dataSetting($where,$data, 'tb_setting');
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diubah.
											</div>'
										);
         redirect('setting');	
	}
}