<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_type extends CI_Model
{

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// get data from tbl kavling
	public function get_kavling_where_id()
	{
		$this->db->select('*');
		$this->db->from('tb_kavling');
		$this->db->join('tb_type_rumah', 'tb_type_rumah.id_type_rumah = tb_kavling.id_type_rumah');
		$this->db->where('tb_kavling.id_type_rumah', $this->uri->segment(3));
		$query = $this->db->get();
		return $query;
	}
}
