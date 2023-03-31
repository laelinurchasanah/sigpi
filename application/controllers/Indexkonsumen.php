<?php

class Indexkonsumen extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_booking');
		$this->load->model('m_pengajuan_kpr');
		$this->load->model('m_jadwal_akad');
		$this->load->model('m_stk');
		$this->load->model('m_berkas_kpr');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	function index()
	{
		$a = $this->session->userdata('iduser');
		$booking = $this->m_booking->get_where($a)->result();
		$kpr = $this->m_pengajuan_kpr->get_join_pembayaran($a)->result();
		$akad = $this->m_jadwal_akad->get_dashboard($a)->result();
		$berkas = $this->m_berkas_kpr->get_join_dashboard($a)->result();

		$data['title'] = 'Konsumen';
		$where = array(
			'username' => $a,

		);
		// $cek = $this->db->query("SELECT * FROM tb_user where username = '$username' AND password = '$password'");
		// $row = $cek->row_array();
		// if ($cek->num_rows() >= 1) { //cek jumlah record
		// 	// buat session
		// 	$this->session->set_userdata(array('username' => $row['username']));

		// }


		$stk = $this->m_stk->get_join_komplain($a)->result();
		$data['booking'] = $booking;
		$data['kpr'] = $kpr;
		$data['akad'] = $akad;
		$data['stk'] = $stk;
		$data['berkas'] = $berkas;
		$data['title'] = 'Dashboard Konsumen';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);

		$this->load->view('dashboardkonsumen');
		$this->load->view('templates/footer');
	}
}
