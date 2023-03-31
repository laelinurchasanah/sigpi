<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_blok extends CI_Model
{
	public function get_data()
	{
		// Select * from tb_kavling join tb_type
		$this->db->select('*');
		$this->db->from('tb_kavling');
		$this->db->join('tb_type_rumah', 'tb_type_rumah.id_type_rumah = tb_kavling.id_type_rumah');
		return $this->db->get();
	}

	// get data available
	public function get_data_available($table)
	{
		$this->db->where('status', 'available');
		return $this->db->get($table);
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
	function update_status($wherea)
	{
		$r = "sold";
		$data = array(
			'status' => $r,
		);
		$where = array(
			'id_kavling' => $wherea,

		);

		$this->db->where($where);
		$this->db->update('tb_kavling', $data);
	}
	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// Pengecekan nama kavling sudah ada atau belum
	public function cek_nama($nama_kavling)
	{
		$this->db->where('kavling', $nama_kavling);
		$result = $this->db->get('tb_kavling')->num_rows();
		return $result;
	}

	public function get_harga_kavling()
	{
		$id = $this->input->post('id');
		$this->db->where('id_kavling', $id);
		$result = $this->db->get('tb_kavling')->row();
		return $result;
	}
}
