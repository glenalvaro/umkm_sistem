<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function user_lock($id = '', $val = 0)
	{
		$sql = "UPDATE tb_user SET is_active = ? WHERE id = ?";
		$hasil = $this->db->query($sql, array($val, $id));
		$this->session->success = ($hasil === TRUE ? 1 : -1);
	}

	public function getEdit($where,$table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_user($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($id)
   {
      $this->db->delete('tb_user', ['id' => $id]);
   }

   public function delete_kategori($id)
	{
		$this->db->delete('tb_kategori', ['id' => $id]);
	}

	public function kategori_edit($where,$table)
	{
		return $this->db->get_where($table, $where);
	}

	public function kategori_update($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function getDetail($where,$table)
	{
		return $this->db->get_where($table, $where);
	}

	public function getSetting($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_dataSetting($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
