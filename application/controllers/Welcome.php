<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//resource untuk halaman website

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Umkm_model', 'umkm');
		$this->load->model('Admin_model','home');
		$this->load->helper('text');
		$this->load->library('pagination');
	}

	public function index()
	{
		$data['title'] = 'Usaha Kecil Menengah Mikro | Provinsi Sulawesi Utara';

		//hitung statistik pengunjung
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

	    //tampil data dari produk umkm
	    $data['ambilUmkm'] = $this->db->get('tb_produk')->result_array();

	    //tampil data dari kategori umkm
	    $data['ambilSektor'] = $this->db->get('tb_kategori')->result_array();
	    
	    $data['jumlah_umkm'] = $this->home->jumlahUMKM();
		$data['jumlah_sektor'] = $this->home->jumlahSektor();
		$data['jumlah_user'] = $this->home->jumlahUser();
		$data['jumlah_gambar'] = $this->home->jumlahGambar();

		//panggil fungsi count di model
		$data['manado'] = $this->home->umkmManado();
		$data['tomohon'] = $this->home->umkmTomohon();
		$data['bitung'] = $this->home->umkmBitung();
		$data['kotamobagu'] = $this->home->umkmKotamobagu();
		$data['minsel'] = $this->home->umkmMinsel();
		$data['minut'] = $this->home->umkmMinut();
		$data['mitra'] = $this->home->umkmMitra();
		$data['minahasa'] = $this->home->umkmMinahasa();
		$data['sitaro'] = $this->home->umkmSitaro();
		$data['sangihe'] = $this->home->umkmSangihe();
		$data['bolmut'] = $this->home->umkmBolmut();
		$data['boltim'] = $this->home->umkmBoltim();
		$data['bolsel'] = $this->home->umkmBolsel();
		$data['bolmong'] = $this->home->umkmBolmong();
		$data['talaud'] = $this->home->umkmTalaud();


		$this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/content', $data);
		$this->load->view('temp_web/footer', $data);
	}

	public function lihat_umkm($id)
	{
		$data['title'] = 'Usaha Kecil Menengah Mikro | Provinsi Sulawesi Utara';

		//hitung statistik pengunjung
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

	    $where = array('id' => $id);
	    $data['dataUmkm'] = $this->umkm->GetUMKM($where, 'tb_produk')->result();
	    $data['FotoUmkm'] = $this->umkm->getFotoUMKM($id);
	    $this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/detail-umkm', $data);
		$this->load->view('temp_web/footer');

	}

	public function berita()
	{
		 //konfigurasi pagination
        $config['base_url'] = site_url('welcome/berita'); //site url
        $config['total_rows'] = $this->db->count_all('tb_berita'); //total row
        $config['per_page'] = 3;  //show record per halaman
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
        $config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
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
 
        //panggil function get_halaman berita yang ada pada model admin. 
        $data['berita'] = $this->home->get_hal_berita($config["per_page"], $data['page']);           
 		
 		//kirim data ini di view
        $data['halaman'] = $this->pagination->create_links();
        
		$data['title'] = 'Usaha Kecil Menengah Mikro | Provinsi Sulawesi Utara';

		//hitung statistik pengunjung
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
	    $this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/berita', $data);
		$this->load->view('temp_web/footer');

	}

	public function baca_berita($id)
	{
		$data['title'] = 'Usaha Kecil Menengah Mikro | Provinsi Sulawesi Utara';

		//hitung statistik pengunjung
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
		$where = array('id' => $id);
		$data['lihatBerita'] = $this->umkm->bacaSelengkapnya($where, 'tb_berita')->result();
	    $data['setting'] = $this->db->get('tb_setting')->result_array();
	    $this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/lihat_berita', $data);
		$this->load->view('temp_web/footer');

	}

	public function galery()
	{
		$data['title'] = 'Usaha Kecil Menengah Mikro | Gallery';

		//hitung statistik pengunjung
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

	    //tampil data dari tb galery
	    $data['fotoUmkm'] = $this->db->get('galeri_foto')->result_array();

	     //tampil data dari tb produk
	    $data['dataSektor'] = $this->db->get('tb_kategori')->result_array();

	    $this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/galery', $data);
		$this->load->view('temp_web/footer');

	}

	public function profil()
	{
		$data['title'] = 'Usaha Kecil Menengah Mikro | Profil';

		//hitung statistik pengunjung
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

	    $this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/profile', $data);
		$this->load->view('temp_web/footer');

	}


	public function info()
	{
		$data['title'] = 'Usaha Kecil Menengah Mikro | Info';

		//hitung statistik pengunjung
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

	    $this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/info', $data);
		$this->load->view('temp_web/footer');

	}

	public function hubungi_kami()
	{
		$data['title'] = 'Usaha Kecil Menengah Mikro | Contact';

		//hitung statistik pengunjung
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

	    $this->load->view('temp_web/header', $data);
		$this->load->view('temp_web/contact', $data);
		$this->load->view('temp_web/footer');

	}
}
