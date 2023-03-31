<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_konsumen extends CI_Model
{

	public function get_data($table)
	{

		return $this->db->get($table);


	}
	function auth()
	{
		return $this->db->get($_SESSION
			['type'], $_SESSION['id']);

	}
	function get_id($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
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
