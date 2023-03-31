<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perbaikan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_perbaikan');
	}

	public function index()
	{
		$data['title'] = 'Perbaikan';

		$data['perbaikan'] = $this->m_perbaikan->get_data()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_perbaikan', $data);
		$this->load->view('templates/footer');
	}
	public function perbaikanreadadmin()
	{
		$data['title'] = 'Perbaikan';

		$data['perbaikan'] = $this->m_perbaikan->get_data()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_perbaikan_read', $data);
		$this->load->view('templates/footer');
	}
	public function perbaikanreadkonsumen()
	{
		$data['title'] = 'Perbaikan';
		$id = $this->session->userdata('iduser');
		$data['perbaikan'] = $this->m_perbaikan->get_join_where($id)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_perbaikan_readkonsumen', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Perbaikan';
		$data['perbaikan'] = $this->m_perbaikan->get_data_komplain();
		$this->load->model('m_estate');
		$where = array(
			'nik_estate' => $this->session->userdata('iduser'),
		);
		$this->load->model('m_komplain');
		$data['komplain'] = $this->m_komplain->get_join_where_status()->result();
		$data['estate'] = $this->m_estate->get_id('tb_estate', $where)->result();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_perbaikan_tambah', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$data = array(
			'id_komplain' => $this->input->post('tid_komplain'),
			'nik_estate' => $this->input->post('tnik_estate'),
			'tanggal_perbaikan' => $this->input->post('ttgl_perbaikan'),
			'tanggal_selesai' => $this->input->post('ttgl_selesai'),
			'status' => $this->input->post('ttstatus'),
		);


		$date_now = date('Y-m-d');

		$tgl_perbaikan = $this->input->post('ttgl_perbaikan');
		$tgl_selesai = $this->input->post('ttgl_selesai');

		if ($tgl_perbaikan < $date_now) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan! Tanggal tidak boleh kurang dari hari ini!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('perbaikan/tambah');
		} elseif ($tgl_selesai < $date_now) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan! Tanggal tidak boleh kurang dari hari ini!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('perbaikan/tambah');
		} elseif ($tgl_selesai < $date_now && $tgl_perbaikan < $date_now) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan! Tanggal tidak boleh kurang dari hari ini!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('perbaikan/tambah');
		}

		//CEK APAKAH ID KOMPLAIN SUDAH DIGUNAKAKAN QUERY BUILDER
		$cek = $this->db->get_where('tb_perbaikan', ['id_komplain' => $this->input->post('tid_komplain')])->row_array();

		if ($cek) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan! ID Akad Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('perbaikan');
		} else {
			$this->m_perbaikan->insert_data($data, 'tb_perbaikan');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');
			redirect('perbaikan');
		}
	}

	public function edit($id)
	{
		$where = array('id_perbaikan' => $id);
		$data['title'] = 'Edit Perbaikan';
		$data['perbaikan'] = $this->m_perbaikan->edit_data($where, 'tb_perbaikan')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_perbaikan_edit', $data);
		$this->load->view('templates/footer');

	}

	public function edit_aksi()
	{

		$data = array(

			'status' => $this->input->post('ttstatus'),
		);


		$where = array(
			'id_perbaikan' => $this->input->post('tid_perbaikan'),
		);

		$this->m_perbaikan->update_data($where, $data, 'tb_perbaikan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('perbaikan');
	}

	public function delete($id_perbaikan)
	{
		$where = array('id_perbaikan' => $id_perbaikan);

		$this->m_perbaikan->delete($where, 'tb_perbaikan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('perbaikan');
	}

}
?>