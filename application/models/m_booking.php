<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_booking extends CI_Model
{

	public function get_data($table)
	{

		return $this->db->get($table);
	}
	public function get_join()
	{
		$this->db->select('*');
		$this->db->from('tb_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->join('tb_type_rumah', 'tb_type_rumah.id_type_rumah = tb_kavling.id_type_rumah');
		$query = $this->db->get();
		return $query;
	}

	function get_where($id)
	{

		$this->db->select('*');
		$this->db->from('tb_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->join('tb_type_rumah', 'tb_type_rumah.id_type_rumah = tb_kavling.id_type_rumah');
		$this->db->where('tb_booking.nik_konsumen', $id);
		$query = $this->db->get();
		return $query;
	}

	public function get_join_where_marketing($id)
	{
		$this->db->select('*');
		$this->db->from('tb_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->join('tb_type_rumah', 'tb_type_rumah.id_type_rumah = tb_kavling.id_type_rumah');
		$this->db->where('tb_marketing.nik_marketing', $id);
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

	// Pengecekan apakah nik konsumen sudah ada di tb_booking
	public function cek_nik($nik)
	{
		$this->db->where('nik_konsumen', $nik);
		$query = $this->db->get('tb_booking');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	// ubah status available
	public function ubah_status_available($id)
	{
		$this->db->set('status', 'available');
		$this->db->where('id_kavling', $id);
		$this->db->update('tb_kavling');
	}
}