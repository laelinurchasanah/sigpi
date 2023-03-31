<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_Akad extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jadwal_akad');
	}

	public function index()
	{

		$data['title'] = 'Jadwal Akad';

		$data['akad'] = $this->m_jadwal_akad->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_jadwal_akad_read', $data);
		$this->load->view('templates/footer');
	}
	public function akadread()
	{
		$iduser = $this->session->userdata('iduser');
		$data['title'] = 'Jadwal Akad';
		$data['akad'] = $this->m_jadwal_akad->get_join_where_marketing($iduser)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_jadwal_akad', $data);
		$this->load->view('templates/footer');
	}
	public function akadreadmanager()
	{
		$data['title'] = 'Jadwal Akad';

		$data['akad'] = $this->m_jadwal_akad->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_jadwal_akad_read', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$this->load->model('m_pengajuan_kpr');
		$data['kpr'] = $this->m_pengajuan_kpr->get_join_where()->result();
		$data['title'] = 'Tambah Jadwal Akad';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_jadwal_akad_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$tgl = date('Y-m-d');
		$data = array(
			'id_akad' => "",
			'id_kpr' => $this->input->post('tidkpr'),
			'tgl_akad' => $tgl,
			'tgl_jadwal_akad' => $this->input->post('tjadwal'),
			'status_akad' => "belum terlaksana",
		);

		// Tgl_jadwal akad tidak boleh kurang dari hari ini

		$date_now = date('Y-m-d');
		$tgl_jadwal_akad = $this->input->post('tjadwal');

		if ($tgl_jadwal_akad < $date_now) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Gagal Ditambahkan! Tanggal tidak boleh kurang dari hari ini!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
			redirect('jadwal_akad/tambah');
		}

		// CEK APAKAH DATA KAVLING SUDAH ADA
		$cek = $this->db->get_where('tb_akad', ['id_kpr' => $this->input->post('tidkpr')])->row_array();

		if ($cek) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('jadwal_akad/tambah');
		} else {
			$this->m_jadwal_akad->insert_data($data, 'tb_akad');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button></div>');
			redirect('jadwal_akad/akadread');
		}
	}
	function akadedit($id)
	{
		$where = array('id_akad' => $id);
		$data['akad'] = $this->m_jadwal_akad->edit_data($where, 'tb_akad')->result();
		//$this->load->view('v_progress_edit',$data);

		$data['title'] = 'Edit Jadwal Akad';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_jadwal_akad_edit', $data);
		$this->load->view('templates/footer');
	}
	public function edit()
	{
		$tgl = date('Y-m-d');
		$data = array(
			'tgl_akad' => $tgl,
			'tgl_jadwal_akad' => $this->input->post('tjadwal'),
			'status_akad' => $this->input->post('tstatus'),
		);


		$where = array(
			'id_akad' => $this->input->post('tid'),
		);
		// Tgl_jadwal akad tidak boleh kurang dari hari ini

		$date_now = date('Y-m-d');
		$tgl_jadwal_akad = $this->input->post('tjadwal');

		if ($tgl_jadwal_akad < $date_now) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Gagal Ditambahkan! Tanggal tidak boleh kurang dari hari ini!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  	<span aria-hidden="true">&times;</span></button></div>');
			redirect('jadwal_akad/akadread');
		}
		;

		$this->m_jadwal_akad->update_data($where, $data, 'tb_akad');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('jadwal_akad/akadread');
	}

	public function delete($id_akad)
	{
		$where = array('id_akad' => $id_akad);

		$this->m_jadwal_akad->delete($where, 'tb_akad');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('jadwal_akad/akadread');
	}
}