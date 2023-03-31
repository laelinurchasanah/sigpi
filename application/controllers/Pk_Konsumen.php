<?php
use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Pk_Konsumen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pk_konsumen');
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data['title'] = 'PK (Perjanjian Kredit) Konsumen';

		$iduser = $this->session->userdata('iduser');
		$data['pk_konsumen'] = $this->m_pk_konsumen->get_join_where_marketing($iduser)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_pk_konsumen', $data);
		$this->load->view('templates/footer');
	}

	public function pkreadadmin()
	{
		$data['title'] = 'PK (Perjanjian Kredit) Konsumen';
		$data['pk_konsumen'] = $this->m_pk_konsumen->get_data();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_pk_konsumen_read', $data);
		$this->load->view('templates/footer');
	}

	public function pkreadkonsumen()
	{

		$data['title'] = 'PK (Perjanjian Kredit) Konsumen';
		$id = $this->session->userdata('iduser');
		$data['pk_konsumen'] = $this->m_pk_konsumen->get_join_where($id)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_pk_konsumen_read', $data);
		$this->load->view('templates/footer');
	}
	public function readmanager()
	{
		$data['title'] = 'PK (Perjanjian Kredit) Konsumen';
		$data['pk_konsumen'] = $this->m_pk_konsumen->get_data();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_pk_konsumen_read', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah PK (Perjanjian Kredit) Konsumen';
		$data['pk_konsumen'] = $this->m_pk_konsumen->get_data_akad();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_tambah_pk_konsumen', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$data = array(
			'id_akad' => $this->input->post('tid_akad'),
			'tgl_ketersediaan' => $this->input->post('ttgl_ketersediaan'),
			'status_ketersediaan' => $this->input->post('tstatus_ketersediaan'),
		);
		// CEK APAKAH TANGGAL YANG DIINPUT TIDAH KURANG DARI TANGGAL SEKARANG

		$date_now = date('Y-m-d');
		$tgl_ketersediaan = $this->input->post('ttgl_ketersediaan');

		if ($tgl_ketersediaan < $date_now) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Gagal Ditambahkan! Tanggal tidak boleh kurang dari hari ini!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
			redirect('pk_konsumen/tambah');
		}

		// CEK APAKAH ID AKAD SUDAH ADA MENGGUNAKAN QUERY BUILDER
		$cek = $this->db->get_where('tb_pk_konsumen', ['id_akad' => $this->input->post('tid_akad')])->row_array();

		if ($cek) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan! ID Akad Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('pk_konsumen');
		} else {

			$this->m_pk_konsumen->insert_data($data, 'tb_pk_konsumen');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');
			redirect('pk_konsumen');
		}

	}

	public function edit($id)
	{
		$data['title'] = 'Edit PK (Perjanjian Kredit) Konsumen';
		$data['pk_konsumen'] = $this->m_pk_konsumen->get_data_id($id);

		$data['akad'] = $this->m_pk_konsumen->get_data_akad();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_pk_konsumen_edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_aksi()
	{
		$id = $this->input->post('tid_pk');
		$data = array(
			'tgl_ketersediaan' => $this->input->post('ttgl_ketersediaan'),
			'status_ketersediaan' => $this->input->post('tstatus_ketersediaan'),
		);
		// CEK APAKAH TANGGAL YANG DIINPUT TIDAH KURANG DARI TANGGAL SEKARANG

		$date_now = date('Y-m-d');
		$tgl_ketersediaan = $this->input->post('ttgl_ketersediaan');

		if ($tgl_ketersediaan < $date_now) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Gagal Ditambahkan! Tanggal tidak boleh kurang dari hari ini!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
			redirect('pk_konsumen');
		}


		$this->m_pk_konsumen->update_data($data, $id);

		// Jika berhasil, alert notifikasi
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
		}

		redirect('pk_konsumen');
	}

	public function hapus($id)
	{
		$this->m_pk_konsumen->delete_data($id);

		// Jika berhasil, alert notifikasi
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal dihapus!</div>');
		}

		redirect('pk_konsumen');
	}
}
