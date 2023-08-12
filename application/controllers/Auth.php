<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//resource untuk login sistem

class Auth extends CI_Controller {

	public function index()
	{
		//log pengunjung
		$ip    = $this->input->ip_address(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$waktu = time(); //
		$timeinsert = date("Y-m-d H:i:s");
		  
		// Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
		$ss = isset($s)?($s):0;
		  
		 
		// Kalau belum ada, simpan data user tersebut ke database
		if($ss == 0){
		$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
		}
		 
		// Jika sudah ada, update
		else{
		$this->db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
		}
		 
		  
		$pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
		 
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row(); 
		 
		$totalpengunjung = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; // hitung total pengunjung
		 
		$bataswaktu = time() - 300;
		 
		$pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online
		  
		 
		$data['pengunjunghariini']=$pengunjunghariini;
		$data['totalpengunjung']=$totalpengunjung;
		$data['pengunjungonline']=$pengunjungonline;

		$this->form_validation->set_rules('email', 'Email', 'required|trim',[
			'required' => 'Masukan Email!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Masukan Password!'
		]);

		//tampil data dari setting
	    $data['setting'] = $this->db->get('tb_setting')->result_array();

		if($this->form_validation->run() == false ){
		$data['title'] = 'Masuk | Sistem Informasi UKM';
		$this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/login', $data);
		$this->load->view('temp_web/footer', $data);
		} else {
			$this->cek_login();
		}
	}

	private function cek_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		//jika user ada
		if($user){
			//jika user tidak aktif
			if($user['is_active'] == 1){
				//cek password
				if(password_verify($password, $user['password'])){
					$data = [
						'email' => $user['email'],
						'level' => $user['level']
					];

					$this->session->set_userdata($data);
						if($user['level'] == 1) {
							redirect('admin');
						} else {
							redirect('user/profile');
						}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" 
            		role="alert">Password Salah !</div>');
            		redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" 
            	role="alert">Email belum di aktivasi !</div>');
            	redirect('auth');
			}
		} else {
			 	$this->session->set_flashdata('message', '<div class="alert alert-danger" 
            	role="alert">Email yang anda masukan tidak terdaftar !</div>');
            	redirect('auth');
		}
	}


	public function daftar()
	{
		//data log pengunjung
		$ip    = $this->input->ip_address(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$waktu = time(); //
		$timeinsert = date("Y-m-d H:i:s");
		  
		// Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
		$ss = isset($s)?($s):0;
		  
		 
		// Kalau belum ada, simpan data user tersebut ke database
		if($ss == 0){
		$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
		}
		 
		// Jika sudah ada, update
		else{
		$this->db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
		}
		 
		  
		$pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
		 
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row(); 
		 
		$totalpengunjung = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; // hitung total pengunjung
		 
		$bataswaktu = time() - 300;
		 
		$pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online
		  
		 
		$data['pengunjunghariini']=$pengunjunghariini;
		$data['totalpengunjung']=$totalpengunjung;
		$data['pengunjungonline']=$pengunjungonline;

		//tampil data dari setting
	    $data['setting'] = $this->db->get('tb_setting')->result_array();
	    
			//proses validasi
	     $this->form_validation->set_rules('nama', 'Name', 'required|trim',[
     	'required' => 'Nama wajib di isi!'
    	]);
	 
	    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
	        'is_unique' => 'Email ini sudah terdaftar!',
	        'required' => 'Email wajib di isi!'
	    ]);
	    $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|trim',[
	     'required' => 'No Hp wajib di isi!'
	    ]);
	    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
	     'required' => 'Alamat wajib di isi!'
	    ]);
	    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
	        'matches' => 'Password tidak sama!',
	        'min_length' => 'Password harus berisi 4 karakter atau lebih!',
	         'required' => 'Password wajib di isi!',
	    ]);
	    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false)
		{
		$data['title'] = 'Daftar Akun UMKM';
		$this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/daftar', $data);
		$this->load->view('temp_web/footer', $data);
	 	} else {
	 		$email = $this->input->post('email', true);
	 		$data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'foto' => 'default.png',
                'password' => password_hash($this->input->post('password1'), 
                 PASSWORD_DEFAULT),
                'level' => 2,
                'is_active' => 0,
                'date_created' => time()
           ];

           //siapkan token
           $token = base64_encode(random_bytes(32));
           $user_token = [
           		'email' => $email,
           		'token' => $token,
           		'date_created' => time()
           ];

           $this->db->insert('tb_user', $data);
           $this->db->insert('user_token', $user_token);

           $this->_sendEmail($token, 'verify');

           $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Pendaftaran akun berhasil ! Silakan aktivasi akun melalui email.</div>');
           	redirect('auth');
	 	}
	}


	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' 	=> 'smtp',
			'smtp_host' => 'mail.umkm-provsulut.com',
			'smtp_user' => 'informasi@umkm-provsulut.com',
			'smtp_pass' => 'email_umkm',
			'smtp_port' => 465,
			'smtp_crypto' => 'ssl',
			'mailtype' 	=> 'html',
			'charset' 	=> 'utf-8',
			'wordwrap' => TRUE,
			'newline'	=> "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('informasi@umkm-provsulut.com', 'UMKM Provinsi Sulut');
		$this->email->to($this->input->post('email'));

		if($type == 'verify') {
			$this->email->subject('Verifikasi Akun UMKM');
			$this->email->message('Klik link ini untuk verifikasi akun anda : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
		} else if($type == 'forgot'){
			$this->email->subject('Reset Password');
			$this->email->message('Klik link ini untuk reset password anda : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
		}
		
		if($this->email->send()){
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if($user){
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if($user_token){
				if(time() - $user_token['date_created'] < (60 * 60 * 24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('tb_user');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-success" 
		    		role="alert">'. $email .' telah di aktivasi! Silakan Login.</div>');
		    		redirect('auth');
				} else {
					$this->db->delete('tb_user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger" 
		    		role="alert">Verifikasi akun gagal! Token Expired!</div>');
		    		redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" 
		    	role="alert">Verifikasi akun gagal! Token Salah!</div>');
		    	redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" 
		    role="alert">Verifikasi akun gagal! Email salah.</div>');
		    redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
	    $this->session->unset_userdata('level');

	    $this->session->set_flashdata('message', '<div class="alert alert-success" 
	    role="alert">Logged out Berhasil!</div>');
	    redirect('auth');

	}

	public function forgotPassword()
	{
		//tampil data dari setting
	    $data['setting'] = $this->db->get('tb_setting')->result_array();

		$this->form_validation->set_rules('email', 'Email', 'required|trim',[
			'required' => 'Masukan Email!'
		]);

		//tampil data dari setting
	    $data['setting'] = $this->db->get('tb_setting')->result_array();

		if($this->form_validation->run() == false ){
		$data['title'] = 'Lupa Password | Sistem Informasi UKM';
		$this->load->view('temp_web/lupa-password', $data);
		} else {
			$email = $this->input->post('email');
            $user = $this->db->get_where('tb_user', ['email' => $email, 'is_active' => 1])->row_array();
			
			if($user){
				$token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silakan periksa email Anda untuk mengatur ulang kata sandi Anda !</div>');
                redirect('auth/forgotPassword');
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" 
	    		role="alert">Email tidak terdaftar atau tidak teraktivasi!</div>');
                redirect('auth/forgotPassword');
			}
		}
	}

	public function resetPassword()
	{
		$email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal! Token salah.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal! Email salah.</div>');
            redirect('auth');
        }
	}

	public function changePassword()
    {
    	if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

    	//tampil data dari setting
	    $data['setting'] = $this->db->get('tb_setting')->result_array();

	    $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]',[
	    	'required' => 'Password tidak boleh kosong!',
	    	'matches' => 'Pasword tidak sama dengan confirm password'
	    ]);
        $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|min_length[3]|matches[password1]',[
        	'required' => 'Confirm password tidak boleh kosong!',
        	'matches' => 'Confirm password tidak sama dengan password'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Reset Password | Sistem Informasi UKM';
		$this->load->view('temp_web/ganti-password', $data);
        } else {
        	$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('tb_user');

            $this->session->unset_userdata('reset_email');

            $this->db->delete('user_token', ['email' => $email]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kata sandi telah diubah! Silahkan masuk.</div>');
            redirect('auth');
            
        }
    }
}
