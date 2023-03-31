<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_perbaikan extends CI_Model
{

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function get_data()
	{
		$this->db->select('*, tb_perbaikan.status AS status');
		$this->db->from('tb_perbaikan');
		$this->db->join('tb_komplain', 'tb_komplain.id_komplain = tb_perbaikan.id_komplain');
		$this->db->join('tb_stk', 'tb_stk.id_stk = tb_komplain.id_stk');
		$this->db->join('tb_akad', 'tb_akad.id_akad = tb_stk.id_akad');
		$this->db->join('tb_kpr', 'tb_kpr.id_kpr = tb_akad.id_kpr');
		$this->db->join('tb_berkas', 'tb_berkas.id_berkas = tb_kpr.id_berkas');
		$this->db->join('tb_booking', 'tb_booking.id_booking = tb_berkas.id_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->join('tb_estate', 'tb_estate.nik_estate=tb_perbaikan.nik_estate');
		$query = $this->db->get();
		return $query;
	}

	public function get_data_komplain()
	{
		$this->db->select('*');
		$this->db->from('tb_komplain');
		$this->db->from('tb_stk', 'tb_stk.id_stk = tb_komplain.id_stk');
		$this->db->from('tb_akad', 'tb_akad.id_akad = tb_stk.id_akad');
		$this->db->join('tb_kpr', 'tb_kpr.id_kpr = tb_akad.id_kpr');
		$this->db->join('tb_berkas', 'tb_berkas.id_berkas = tb_kpr.id_berkas');
		$this->db->join('tb_booking', 'tb_booking.id_booking = tb_berkas.id_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->where('status_komplain', 'finish');
		$query = $this->db->get();
		return $query;


	}
	public function get_join_where($id)
	{
		$this->db->select('*, tb_perbaikan.status AS status');
		$this->db->from('tb_perbaikan');
		$this->db->join('tb_komplain', 'tb_komplain.id_komplain = tb_perbaikan.id_komplain');
		$this->db->join('tb_stk', 'tb_stk.id_stk = tb_komplain.id_stk');
		$this->db->join('tb_akad', 'tb_akad.id_akad = tb_stk.id_akad');
		$this->db->join('tb_kpr', 'tb_kpr.id_kpr = tb_akad.id_kpr');
		$this->db->join('tb_berkas', 'tb_berkas.id_berkas = tb_kpr.id_berkas');
		$this->db->join('tb_booking', 'tb_booking.id_booking = tb_berkas.id_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->join('tb_estate', 'tb_estate.nik_estate=tb_perbaikan.nik_estate');
		$this->db->where('tb_booking.nik_konsumen', $id);
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
?>
