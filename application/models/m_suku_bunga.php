<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_suku_bunga extends CI_Model
{

	public function get_data($table)
	{

		return $this->db->get($table);
	}
	public function get_join()
	{
		$this->db->select('*');
		$this->db->from('tb_bunga');
		$this->db->join('tb_bank', 'tb_bank.id_bank = tb_bunga.id_bank');
		$query = $this->db->get();
		return $query;
	}


	function edit_data($id)
	{
		//return $this->db->get_where($table,$where);
		$this->db->select('*');
		$this->db->from('tb_bunga');
		$this->db->join('tb_bank', 'tb_bank.id_bank = tb_bunga.id_bank');
		$this->db->where('tb_bunga.id_bunga', $id);
		$query = $this->db->get();
		return $query;
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
