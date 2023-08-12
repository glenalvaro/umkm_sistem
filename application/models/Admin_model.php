<?php

class Admin_model extends CI_Model{

 //ambil data berita pada database untuk membuat pagination
 public function get_hal_berita($limit, $start){
      $query = $this->db->get('tb_berita', $limit, $start);
      return $query;
  }

  //count data umkm tiap kabupaten/kota
  function umkmManado()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kota Manado'");
     return $query->num_rows();
  }
  function umkmTomohon()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kota Tomohon'");
     return $query->num_rows();
  }
  function umkmKotamobagu()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kota Kotamobagu'");
     return $query->num_rows();
  }
  function umkmBitung()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kota Bitung'");
     return $query->num_rows();
  }
  function umkmMinsel()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Minahasa Selatan'");
     return $query->num_rows();
  }
  function umkmMinut()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Minahasa Utara'");
     return $query->num_rows();
  }
  function umkmMitra()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Minahasa Tenggara'");
     return $query->num_rows();
  }
  function umkmMinahasa()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Minahasa'");
     return $query->num_rows();
  }
  function umkmSitaro()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Kep.Sitaro'");
     return $query->num_rows();
  }
  function umkmSangihe()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Kep.Sangihe'");
     return $query->num_rows();
  }
  function umkmTalaud()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Kep.Talaud'");
     return $query->num_rows();
  }
  function umkmBolmut()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Bolaang Mongondow Utara'");
     return $query->num_rows();
  }
  function umkmBoltim()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Bolaang Mongondow Timur'");
     return $query->num_rows();
  }
  function umkmBolsel()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Bolaang Mongondow Selatan'");
     return $query->num_rows();
  }
  function umkmBolmong()
  {
     $query = $this->db->query("SELECT * FROM tb_produk where kabupaten ='Kab Bolaang Mongondow'");
     return $query->num_rows();
  }
  //end data umkm


	function jumlahUMKM()
	{   
    $query = $this->db->get('tb_produk');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}

	function jumlahSektor()
	{   
    $query = $this->db->get('tb_kategori');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}

	function jumlahUser()
	{   
    $query = $this->db->get('tb_user');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}

	function jumlahGambar()
	{   
    $query = $this->db->get('galeri_foto');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}

}
