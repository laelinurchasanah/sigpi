<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sertifikat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_sertifikat');
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data['title'] = 'Sertifikat';
		$data['sertifikat'] = $this->m_sertifikat->get_data();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_sertifikat', $data);
		$this->load->view('templates/footer');
	}
	public function readadmin()
	{
		$data['title'] = 'Sertifikat';
		$data['sertifikat'] = $this->m_sertifikat->get_data();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_sertifikat_readkonsumen', $data);
		$this->load->view('templates/footer');
	}
	public function readmanager()
	{
		$data['title'] = 'Sertifikat';
		$data['sertifikat'] = $this->m_sertifikat->get_data();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_sertifikat_readkonsumen', $data);
		$this->load->view('templates/footer');
	}
	public function sertifikatreadkonsumen()
	{

		$data['title'] = 'Info Sertifikat';
		$id = $this->session->userdata('iduser');
		$data['sertifikat'] = $this->m_sertifikat->get_join_where($id)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_sertifikat_readkonsumen', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Sertifikat';
		$data['sertifikat'] = $this->m_sertifikat->get_data_akad();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_tambah_sertifikat', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$data = array(
			'id_akad' => $this->input->post('tid_akad'),

			'tgl_ketersediaan' => $this->input->post('ttgl_ketersediaan'),
			'status_ketersediaan' => $this->input->post('tstatus_ketersediaan'),
		);

		$this->m_sertifikat->insert_data($data);

		// Jika berhasil, alert notifikasi
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Ditambah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Gagal Ditambah kavling sudah ada! Nama Kavling Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
		}

		redirect('sertifikat');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Sertifikat';
		$data['sertifikat'] = $this->m_sertifikat->get_data_id($id);
		$data['akad'] = $this->m_sertifikat->get_data_akad();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_sertifikat_edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_aksi()
	{
		$id = $this->input->post('tid_sertifikat');
		$data = array(
			'id_akad' => $this->input->post('tid_akad'),
			'tgl_ketersediaan' => $this->input->post('ttgl_ketersediaan'),
			'status_ketersediaan' => $this->input->post('tstatus_ketersediaan'),
		);

		$this->m_sertifikat->update_data($data, $id);

		// Jika berhasil, alert notifikasi
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Gagal Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
		}

		redirect('sertifikat');
	}

	public function hapus($id)
	{
		$this->m_sertifikat->delete_data($id);

		// Jika berhasil, alert notifikasi
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Gagal Dihapus! Nama Kavling Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
		}

		redirect('sertifikat');
	}
}