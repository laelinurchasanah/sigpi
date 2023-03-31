<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_pk_konsumen extends CI_Model
{
	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tb_pk_konsumen');
		$this->db->join('tb_akad', 'tb_akad.id_akad = tb_pk_konsumen.id_akad');
		$this->db->join('tb_kpr', 'tb_kpr.id_kpr = tb_akad.id_kpr');
		$this->db->join('tb_berkas', 'tb_berkas.id_berkas = tb_kpr.id_berkas');
		$this->db->join('tb_booking', 'tb_booking.id_booking = tb_berkas.id_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->where('status_akad', 'terlaksana');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_data_akad()
	{
		$this->db->select('*');
		$this->db->from('tb_akad');
		$this->db->join('tb_kpr', 'tb_kpr.id_kpr = tb_akad.id_kpr');
		$this->db->join('tb_berkas', 'tb_berkas.id_berkas = tb_kpr.id_berkas');
		$this->db->join('tb_booking', 'tb_booking.id_booking = tb_berkas.id_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->where('status_akad', 'terlaksana');
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_data($data)
	{
		$this->db->insert('tb_pk_konsumen', $data);
	}

	public function get_data_id($id)
	{
		$this->db->select('*');
		$this->db->from('tb_pk_konsumen');
		$this->db->join('tb_akad', 'tb_akad.id_akad = tb_pk_konsumen.id_akad');
		$this->db->join('tb_kpr', 'tb_kpr.id_kpr = tb_akad.id_kpr');
		$this->db->join('tb_berkas', 'tb_berkas.id_berkas = tb_kpr.id_berkas');
		$this->db->join('tb_booking', 'tb_booking.id_booking = tb_berkas.id_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->where('id_pk', $id);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_join_where($id)
	{
		$this->db->select('*');
		$this->db->from('tb_pk_konsumen');
		$this->db->join('tb_akad', 'tb_akad.id_akad = tb_pk_konsumen.id_akad');
		$this->db->join('tb_kpr', 'tb_kpr.id_kpr = tb_akad.id_kpr');
		$this->db->join('tb_berkas', 'tb_berkas.id_berkas = tb_kpr.id_berkas');
		$this->db->join('tb_booking', 'tb_booking.id_booking = tb_berkas.id_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->join('tb_bank', 'tb_bank.id_bank = tb_kpr.id_bank');
		$this->db->where('tb_booking.nik_konsumen', $id);
		$query = $this->db->get();
		return $query;
	}

	public function get_join_where_marketing($id)
	{
		$this->db->select('*');
		$this->db->from('tb_pk_konsumen');
		$this->db->join('tb_akad', 'tb_akad.id_akad = tb_pk_konsumen.id_akad');
		$this->db->join('tb_kpr', 'tb_kpr.id_kpr = tb_akad.id_kpr');
		$this->db->join('tb_berkas', 'tb_berkas.id_berkas = tb_kpr.id_berkas');
		$this->db->join('tb_booking', 'tb_booking.id_booking = tb_berkas.id_booking');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->join('tb_bank', 'tb_bank.id_bank = tb_kpr.id_bank');
		$this->db->where('tb_booking.nik_marketing', $id);
		$query = $this->db->get();
		return $query;
	}

	public function update_data($data, $id)
	{
		$this->db->where('id_pk', $id);
		$this->db->update('tb_pk_konsumen', $data);
	}

	public function delete_data($id)
	{
		$this->db->where('id_pk', $id);
		$this->db->delete('tb_pk_konsumen');
	}
}