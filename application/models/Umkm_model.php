<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Umkm_model extends CI_Model
{
	public function getalldataumkm()
	{
		//jika session level nya 1 maka data umkm tampil semua
		if($this->session->userdata('level') == 1){
         $query = "SELECT * from tb_produk";
         return $this->db->query($query)->result_array();

      //tapi jika session selain 1 maka hanya data umkm berdasarkan email yang tampil 
      }else{
  		  $id = $this->session->userdata('email');
        $query = "SELECT * from tb_produk where email = '$id'";
        return $this->db->query($query)->result_array();
      }   	
	}

	public function editDataUmkm($where,$table)
	{
		return $this->db->get_where($table, $where);
	}

	public function detailUmkm($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function uploadImage($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

   public function detailFoto($id)
	{
		$query = "SELECT `galeri_foto`.`id_umkm`, `nama_usaha`, `nama_foto` FROM `tb_produk` INNER JOIN `galeri_foto` ON `tb_produk`.`id`=`galeri_foto`.`id_umkm` Where `galeri_foto`.`id_umkm`=$id";
        return $this->db->query($query)->result_array();
	}

	 //ambil data galeri foto dari database
    public function get_umkm_list($limit, $start){
        $query = $this->db->get('galeri_foto', $limit, $start);
        return $query;
    }

    public function delete_umkm($id)
   {
      $this->db->delete('tb_produk', ['id' => $id]);
   }

   public function GetUMKM($where,$table)
   {
   	return $this->db->get_where($table,$where);
   }

   public function getFotoUMKM($id)
   	{
		$query = "SELECT `galeri_foto`.`id_umkm`, `nama_usaha`, `nama_foto` FROM `tb_produk` INNER JOIN `galeri_foto` ON `tb_produk`.`id`=`galeri_foto`.`id_umkm` Where `galeri_foto`.`id_umkm`=$id";
        return $this->db->query($query)->result_array();
	}

	public function update_dataUMKM($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function bacaSelengkapnya($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	//model untuk controller berita

	public function getBerita($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function EditBerita($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_dataBerita($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete_berita($id)
   	{
      $this->db->delete('tb_berita', ['id' => $id]);
   	}
}