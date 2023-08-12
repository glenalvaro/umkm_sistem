<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//resource untuk data pengguna

class User extends CI_Controller {

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

		$data['getUser'] = $this->db->get('tb_user')->result_array();

		$data['title'] = 'User | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('user/list', $data);
		$this->load->view('temp_admin/footer');
	}

	public function add_user()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
	    $data['setting'] = $this->db->get('tb_setting')->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
	        'is_unique' => 'Email ini sudah terdaftar!',
	        'required' => 'Email wajib di isi!'
	    ]);
	    $this->form_validation->set_rules('password', 'Password', 'required|trim');
	    $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
	    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
	    $this->form_validation->set_rules('level', 'Group', 'required|trim');

		if($this->form_validation->run() == false ){
			$data['title'] = 'Tambah user | Sistem informasi UMKM';
			$this->load->view('temp_admin/header', $data);
			$this->load->view('temp_admin/sidebar', $data);
			$this->load->view('user/add', $data);
			$this->load->view('temp_admin/footer');
		} else {

			//cek jika ada gambar yang diupload
			$upload_image = $_FILES['foto']['name'];

			if ($upload_image) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
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

					redirect('user');
                }
            }

			 $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'password' => password_hash($this->input->post('password'), 
                 PASSWORD_DEFAULT),
                'level' => $this->input->post('level', true),
                'is_active' => 0,
                'date_created' => time()
           ];

           	$this->db->insert('tb_user', $data);
            $this->session->set_flashdata('message',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data user berhasil ditambah.
											</div>'
										);
			redirect('user');
		}
	}

	public function detail_user($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
	 	$data['setting'] = $this->db->get('tb_setting')->result_array();

		$where = array('id' => $id);
		$data['detailUser'] = $this->user->getDetail($where, 'tb_user')->result();
		$data['title'] = 'Detail User | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('user/detail', $data);
		$this->load->view('temp_admin/footer');
	}

	public function edit_user($id)
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
	 	$data['setting'] = $this->db->get('tb_setting')->result_array();

		$where = array('id' => $id);
		$data['editUser'] = $this->user->getEdit($where, 'tb_user')->result();
		$data['title'] = 'Edit User | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('user/edit', $data);
		$this->load->view('temp_admin/footer');
	}

	public function update_user()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$level = $this->input->post('level');

		//cek jika ada gambar yang diupload
		$upload_image = $_FILES['foto']['name'];

		if ($upload_image) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['tb_user']['foto'];
                    if ($old_image) {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
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

					redirect('user');
                }
            }


		$data = [
			'nama' => $nama,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'level' => $level
		]; 

		$where = array('id' => $id);
		$this->user->update_user($where,$data, 'tb_user');
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('user');
	}

	function hapus_user($id)
	{
		$this->user->delete($id);
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data user berhasil dihapus.
											</div>'
										);
      redirect('user');
	}

	function user_lock($id = '')
	{
		$this->user->user_lock($id, 0);
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> User dinon-aktifkan.
											</div>'
										);
		redirect("user");
	}

	function user_unlock($id = '')
	{
		$this->user->user_lock($id, 1);
		$this->session->set_flashdata('message',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> User di aktifkan.
											</div>'
										);
		redirect("user");
	}

	public function profile()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
	 	$data['setting'] = $this->db->get('tb_setting')->result_array();

		$data['title'] = 'Profil | Sistem Informasi UMKM';
		$this->load->view('temp_admin/header', $data);
		$this->load->view('temp_admin/sidebar', $data);
		$this->load->view('profile/index', $data);
		$this->load->view('temp_admin/footer');
	}

	function edit_profile()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => 
		$this->session->userdata('email')])->row_array();

		//tampil data dari setting
	 	$data['setting'] = $this->db->get('tb_setting')->result_array();

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim',[
			'required' => 'Nama harus di isi!',
		]);
		$this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim',[
			'required' => 'Phone harus di isi!',
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
			'required' => 'Alamat harus di isi!',
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Edit Profile | Sistem Informasi UMKM';
			$this->load->view('temp_admin/header', $data);
			$this->load->view('temp_admin/sidebar', $data);
			$this->load->view('profile/edit', $data);
			$this->load->view('temp_admin/footer');
		} else {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$phone = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');

			//cek jika ada gambar yang diupload
			$upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['tb_user']['foto'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
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
						redirect('user/profile');
                }
            }

			$this->db->set('nama', $nama);
			$this->db->where('email', $email);
			$this->db->set('no_hp', $phone);
			$this->db->set('alamat', $alamat);
			$this->db->update('tb_user');

			$this->session->set_flashdata('message',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
            redirect('user/profile');
		}

	}

	function changePassword()
    {
        $data['title'] = 'Ganti Password | Sistem Informasi UMKM';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        //tampil data dari setting
	    $data['setting'] = $this->db->get('tb_setting')->result_array();
      
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('profile/ganti-password', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah!</div>');
                redirect('user/changePassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password sebelumnya!</div>');
                    redirect('user/changePassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tb_user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password diupdate!</div>');
                    redirect('user/profile');
                }
            }
        }
    }

}