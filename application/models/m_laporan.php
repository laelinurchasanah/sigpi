<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_laporan extends CI_Model
{
	// fungsi get data yang menampilkan nama konsumen, kavling, harga, nama marketing, tanggal booking, tanggal akad, status akad dimana status akad terlaksana

	public function get_data()
	{
		$this->db->select('tb_akad.*, tb_kpr.*, tb_berkas.*, tb_booking.*, tb_konsumen.*, tb_kavling.*, tb_type_rumah.*, tb_marketing.*, tb_admin.*');
		$this->db->from('tb_akad');
		$this->db->join('tb_kpr', 'tb_kpr.id_kpr = tb_akad.id_kpr');
		$this->db->join('tb_berkas', 'tb_berkas.id_berkas = tb_kpr.id_berkas');
		$this->db->join('tb_booking', 'tb_booking.id_booking = tb_berkas.id_booking');
		$this->db->join('tb_konsumen', 'tb_konsumen.nik_konsumen = tb_booking.nik_konsumen');
		$this->db->join('tb_kavling', 'tb_kavling.id_kavling = tb_booking.id_kavling');
		$this->db->join('tb_type_rumah', 'tb_type_rumah.id_type_rumah = tb_kavling.id_type_rumah');
		$this->db->join('tb_marketing', 'tb_marketing.nik_marketing = tb_booking.nik_marketing');
		$this->db->join('tb_admin', 'tb_admin.nik_admin = tb_booking.nik_admin');
		$this->db->where('tb_akad.status_akad', 'terlaksana');

		if(!empty($this->input->post('awal')) or !empty($this->input->post('akhir')) ){
            $this->db->where('tb_akad.tgl_akad >=', $this->input->post('awal'));
            $this->db->where('tb_akad.tgl_akad <=', $this->input->post('akhir'));
			 
		}

		if(!empty($_GET['awal']) or !empty($_GET['akhir']) ){
            $this->db->where('tb_akad.tgl_akad >=', $_GET['awal']);
            $this->db->where('tb_akad.tgl_akad <=', $_GET['akhir']);
			 
		}
		return $this->db->get();
	}
}