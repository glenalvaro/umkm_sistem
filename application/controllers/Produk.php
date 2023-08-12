<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//resource untuk data produk umkm

class Produk extends CI_Controller 
{
	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('Umkm_model', 'umkm');
		$this->load->library('pagination');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['getProduk'] = $this->umkm->getalldataumkm();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$data['title'] = 'Data UMKM | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('produk/index', $data);
		$this->load->view('temp_admin/footer');
	}

	public function add_produk()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['listKategori'] = $this->db->get('tb_kategori')->result_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$this->form_validation->set_rules('nama_usaha', 'Nama Usaha', 'required|trim');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required|trim');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required|trim');
		$this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required|trim');

		if($this->form_validation->run() == false){
			$data['title'] = 'Tambah UMKM | Sistem Informasi UMKM';
			$this->load->view('temp_admin/header', $data);
			$this->load->view('temp_admin/sidebar', $data);
			$this->load->view('produk/add', $data);
			$this->load->view('temp_admin/footer');
		} else {

			//logo sistem
			$gambar = $_FILES['gambar']['name'];

			$data = [
				'email' => $this->input->post('email'),
				'nama_pemilik' => $this->input->post('nama_pemilik'),
				'nama_usaha' => $this->input->post('nama_usaha'),
				'deskripsi' => $this->input->post('deskripsi'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'kategori' => $this->input->post('kategori'),
				'kelurahan' => $this->input->post('kelurahan'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kabupaten' => $this->input->post('kabupaten'),
				'provinsi' => $this->input->post('provinsi'),
				'kode_pos' => $this->input->post('kode_pos'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'tgl_posting' => time()
			];

			//fungsi upload gambar umkm
		 	if ($gambar) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '5048';
                $config['upload_path'] = './assets/upload/';

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
						redirect('produk');
                }
            }

			$this->db->insert('tb_produk', $data);
			$this->session->set_flashdata('message',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambah.
											</div>'
										);
            redirect('produk');
		}
	}

	public function detail_umkm($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$where = array('id' => $id);
		$data['lihatUmkm'] = $this->umkm->detailUmkm($where, 'tb_produk')->result();
		$data['lihatFoto'] = $this->umkm->detailFoto($id);
		$data['title'] = 'Detail UMKM | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('produk/detail', $data);
		$this->load->view('temp_admin/footer');

	}

	public function edit_umkm($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		//ambil data kategori
		$data['KategoriList'] = $this->db->get('tb_kategori')->result_array();

		$where = array('id' => $id);
		$data['editUmkm'] = $this->umkm->editDataUmkm($where, 'tb_produk')->result();
		$data['title'] = 'Edit UMKM | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('produk/edit', $data);
		$this->load->view('temp_admin/footer', $data);
	}

	public function update_umkm()
	{
		$id = $this->input->post('id');
		$nama_pemilik = $this->input->post('nama_pemilik');
		$nama_usaha = $this->input->post('nama_usaha');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$alamat = $this->input->post('alamat');
		$provinsi = $this->input->post('provinsi');
		$kabupaten = $this->input->post('kabupaten');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$kode_pos = $this->input->post('kode_pos');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		$tgl_posting = $this->input->post('tgl_posting');

		//cek jika ada gambar yang diupload
		$ganti_gambar = $_FILES['gambar']['name'];

		if ($ganti_gambar) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '3048';
                $config['upload_path'] = './assets/upload/';

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

					redirect('produk');
                }
            }

		$data = [

			'nama_pemilik' => $nama_pemilik,
			'nama_usaha' => $nama_usaha,
			'deskripsi' => $deskripsi,
			'kategori' => $kategori,
			'alamat' => $alamat,
			'provinsi' => $provinsi,
			'kabupaten' => $kabupaten,
			'kecamatan' => $kecamatan,
			'kelurahan' => $kelurahan,
			'kode_pos' => $kode_pos,
			'latitude' => $latitude,
			'longitude' => $longitude,
			'tgl_posting' => $tgl_posting
		];

		$where = array ('id' => $id);
		$this->umkm->update_dataUMKM($where,$data, 'tb_produk');
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('produk');

	}

	public function hapus_umkm($id)
	{
		$this->umkm->delete_umkm($id);
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data UMKM berhasil dihapus.
											</div>'
										);
		redirect('produk');
	}

	public function lokasi_umkm()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['getUmkm'] = $this->db->get('tb_produk')->result_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$data['title'] = 'Lokasi UMKM | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('produk/lokasi', $data);
		$this->load->view('temp_admin/footer');
	}


	public function lokasi_cari()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['umkmList'] = $this->db->get('tb_produk')->result_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$data['title'] = 'Cari UMKM | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('produk/lokasi_search', $data);
		$this->load->view('temp_admin/footer');
	}

	public function upload_gambar($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$where = array('id' => $id);
		$data['uploadDok'] = $this->umkm->uploadImage($where, 'tb_produk')->result();
		$data['title'] = 'Upload Gambar | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('produk/upload-gambar', $data);
		$this->load->view('temp_admin/footer');
	}

	function proses_upload()
	{

        $config['upload_path']   = './assets/upload/galery/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$id=$this->input->post('id_umkm');
        	$umkm=$this->input->post('nama_umkm');
        	$kategori=$this->input->post('kategori');
        	$nama=$this->upload->data('file_name');
        	$this->db->insert('galeri_foto',array('
        		nama_foto'=>$nama,
        		'token'=>$token,
        		'id_umkm'=>$id,
        		'nama_umkm'=>$umkm,
        		'kategori'=>$kategori
        	));
        }
	}

	//Untuk menghapus foto
	function remove_foto()
	{

		//Ambil token foto
		$token=$this->input->post('token');

		
		$foto=$this->db->get_where('galeri_foto',array('token'=>$token));


		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama_foto;
			if(file_exists($file=FCPATH.'/assets/upload/gelery/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('galeri_foto',array('token'=>$token));

		}


		echo "{}";
	}

	public function galery()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		 //konfigurasi pagination
        $config['base_url'] = site_url('produk/galery'); //site url
        $config['total_rows'] = $this->db->count_all('galeri_foto'); //total row
        $config['per_page'] = 18;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_umkm_list yang ada pada model umkm_model. 
        $data['UMKM'] = $this->umkm->get_umkm_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

		//$data['getData'] = $this->db->get('galeri_foto')->result_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$data['title'] = 'Gelery | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('produk/galery', $data);
		$this->load->view('temp_admin/footer');
	}

	public function umkm_sektor()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['Sektor_Umkm'] = $this->db->get('tb_produk')->result_array();
		$data['Kat_Umkm'] = $this->db->get('tb_kategori')->result_array();

		//tampil data dari setting
		$data['setting'] = $this->db->get('tb_setting')->result_array();

		$data['title'] = 'Sektor UMKM | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('produk/umkm_sektor', $data);
		$this->load->view('temp_admin/footer');
	}
}