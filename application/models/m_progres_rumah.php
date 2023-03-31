<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_progres_rumah extends CI_Model
{

	public function get_data($table)
	{

		return $this->db->get($table);
	}
	public function get_join()
	{
		$this->db->select('*');
		$this->db->from('tb_progress');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_progress.id_kavling');
		$this->db->join('tb_estate', 'tb_estate.nik_estate = tb_progress.nik_estate');
		$query = $this->db->get();
		return $query;
	}
	public function get_join_where($id1)
	{
		$this->db->select('*');
		$this->db->from('tb_booking');
		$this->db->join('tb_progress', 'tb_progress.id_kavling = tb_booking.id_kavling');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_progress.id_kavling');
		$this->db->join('tb_estate', 'tb_estate.nik_estate = tb_progress.nik_estate');
		$this->db->where('tb_booking.nik_konsumen', $id1);
		$query = $this->db->get();
		return $query;
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

	// cek id
	public function cek_id($id)
	{
		$this->db->where('id_kavling', $id);
		$query = $this->db->get('tb_progress');
		return $query;
	}
}
