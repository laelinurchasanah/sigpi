<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Type extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_type');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "Type Rumah";
		$data['types'] = $this->m_type->get_data('tb_type_rumah')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_type', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Type Rumah";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_type_tambah', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$data = array(
			'type' => $this->input->post('ttype'),
			'lb' => $this->input->post('tlb'),
			'lt' => $this->input->post('tlt'),
			'harga' => $this->input->post('tharga')
		);

		$this->m_type->insert_data($data, 'tb_type_rumah');

		// Jika berhasil, alert notifikasi
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Ditambah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Gagal Ditambah! Nama Kavling Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
		}
		redirect('type');
	}

	public function edit($id)
	{
		$data['title'] = "Edit Type Rumah";
		$where = array('id_type_rumah' => $id);
		$data['type'] = $this->m_type->edit_data($where, 'tb_type_rumah')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_type_edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_aksi()
	{
		$id = $this->input->post('tid');
		$data = array(
			'type' => $this->input->post('ttype'),
			'lb' => $this->input->post('tlb'),
			'lt' => $this->input->post('tlt'),
			'harga' => $this->input->post('tharga')
		);

		$where = array('id_type_rumah' => $id);
		$this->m_type->update_data($where, $data, 'tb_type_rumah');

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
		redirect('type');
	}

	public function hapus($id)
	{

		$where = array('id_type_rumah' => $id);

		// Pengecekan apakah type rumah yang akan dihapus memiliki kavling
		$cek = $this->m_type->get_kavling_where_id($id, 'tb_kavling')->num_rows();

		// Jika ada kavling, maka tidak bisa dihapus
		if ($cek > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Tidak bisa menghapus type rumah yang memiliki kavling!</div>');
		} else {

			$this->m_type->delete($where, 'tb_type_rumah');

			// Jika berhasil, alert notifikasi
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button></div>');
			} else {
				$this->session->set_flashdata('pesan', 'pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data Gagal Dihapus! Nama Kavling Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button></div>');
			}
		}

		redirect('type');
	}
}
