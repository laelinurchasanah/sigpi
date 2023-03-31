<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blok extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_blok');
		$this->load->model('m_type');
	}

	public function index()
	{
		$data['title'] = 'Blok';
		$data['kavling'] = $this->m_blok->get_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_blok', $data);
		$this->load->view('templates/footer');
	}
	public function blokreadestate()
	{
		$data['title'] = 'Blok';
		$data['kavling'] = $this->m_blok->get_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_blok_read', $data);
		$this->load->view('templates/footer');
	}
	public function blokreadmanager()
	{
		$data['title'] = 'Blok';
		$data['kavling'] = $this->m_blok->get_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_blok_read', $data);
		$this->load->view('templates/footer');
	}
	public function blokreadmarketing()
	{
		$data['title'] = 'Blok';
		$data['kavling'] = $this->m_blok->get_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_blok_read', $data);
		$this->load->view('templates/footer');
	}
	public function blokreadkonsumen()
	{
		$data['title'] = 'Blok';
		$data['kavling'] = $this->m_blok->get_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_blok_read', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Blok';
		$data['kavling'] = $this->m_blok->get_data()->result();
		$data['type'] = $this->m_type->get_data('tb_type_rumah')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_blok_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$data = array(
			'id_kavling' => "",
			'kavling' => $this->input->post('tkavling'),
			'id_type_rumah' => $this->input->post('tid_type_rumah'),
			'status' => $this->input->post('tstatus'),
		);

		// PENGECEKAN APAKAH NAMA KAVLING SUDAH ADA ATAU BELUM
		$cek = $this->m_blok->cek_nama($data['kavling']);

		// JIKA NAMA KAVLING SUDAH ADA
		if ($cek > 0) {
			$this->session->set_flashdata('pesan_kavling', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan! Nama Kavling Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('blok/tambah');
		}
		// JIKA NAMA KAVLING BELUM ADA
		else {
			$this->m_blok->insert_data($data, 'tb_kavling');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');

			redirect('blok');
		}
	}
	public function edit()
	{
		$data = array(

			'id_kavling' => $this->input->post('tidkavling'),
			'kavling' => $this->input->post('tkavling'),
			'id_type_rumah' => $this->input->post('tid_type_rumah'),
			'status' => $this->input->post('tstatus'),
		);
		$where = array(
			'id_kavling' => $this->input->post('tidkavling'),
		);

		$this->m_blok->update_data($where, $data, 'tb_kavling');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('blok');
	}
	function blokedit($id)
	{
		$where = array('id_kavling' => $id);
		$data['kavling'] = $this->m_blok->edit_data($where, 'tb_kavling')->result();
		$data['type'] = $this->m_type->get_data('tb_type_rumah')->result();
		$data['title'] = 'Edit Blok';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_blok_edit', $data);
		$this->load->view('templates/footer');
	}
	public function delete($id_kavling)
	{
		$where = array('id_kavling' => $id_kavling);

		$this->m_blok->delete($where, 'tb_kavling');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('blok');
	}
}
