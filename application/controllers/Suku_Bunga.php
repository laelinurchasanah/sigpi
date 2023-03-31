<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suku_Bunga extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_suku_bunga');
	}

	public function index()
	{
		$data['title'] = 'Suku Bunga';
		$data['bunga'] = $this->m_suku_bunga->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_suku_bunga', $data);
		$this->load->view('templates/footer');
	}
	public function bungaread()
	{
		$data['title'] = 'Suku Bunga';
		$data['bunga'] = $this->m_suku_bunga->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_suku_bunga_read', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$data['title'] = 'Tambah Suku Bunga';
		$this->load->model('m_bank');
		$datad['bank'] = $this->m_bank->get_data('tb_bank')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_suku_bunga_tambah', $datad);
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{

		$data = array(
			'id_bunga' => "",
			'id_bank' => $this->input->post('tid'),
			'tgl_update' => date('Y-m-d'),

			'suku_bunga' => $this->input->post('tbunga'),

		);

		$this->m_suku_bunga->insert_data($data, 'tb_bunga');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('suku_bunga');
	}
	public function edit()
	{

		$data = array(
			'id_bunga' => $this->input->post('tidbunga'),
			'id_bank' => $this->input->post('tidbank'),
			'tgl_update' => date('Y-m-d'),

			'suku_bunga' => $this->input->post('tbunga'),
		);
		$where = array(
			'id_bunga' => $this->input->post('tidbunga'),
		);

		$this->m_suku_bunga->update_data($where, $data, 'tb_bunga');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('suku_bunga');
	}
	function bungaedit($id)
	{
		$where = $id;
		$data['bunga'] = $this->m_suku_bunga->edit_data($where)->result();

		$this->load->model('m_bank');
		$datad['bank'] = $this->m_bank->get_data('tb_bank')->result();
		$data['title'] = 'Edit Suku Bunga';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $datad);
		$this->load->view('v_suku_bunga_edit', $data);
		$this->load->view('templates/footer');
	}
	public function delete($id_bunga)
	{
		$where = array('id_bunga' => $id_bunga);

		$this->m_suku_bunga->delete($where, 'tb_bunga');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('suku_bunga');
	}
}
