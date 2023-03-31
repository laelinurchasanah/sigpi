<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_Stk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_stk');
	}

	public function index()
	{

		$data['title'] = 'Jadwal Serah Terima Kunci';

		$data['stk'] = $this->m_stk->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_jadwal_stk_read', $data);
		$this->load->view('templates/footer');
	}
	public function stkreadmarketing()
	{

		$iduser = $this->session->userdata('iduser');
		$data['title'] = 'Jadwal Serah Terima Kunci';
		$data['stk'] = $this->m_stk->get_join_where_marketing($iduser)->result();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_jadwal_stk', $data);
		$this->load->view('templates/footer');
	}
	public function stkreadmanager()
	{

		$data['title'] = 'Jadwal Serah Terima Kunci';

		$data['stk'] = $this->m_stk->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_jadwal_stk_read', $data);
		$this->load->view('templates/footer');
	}
	public function stkreadestate()
	{

		$data['title'] = 'Jadwal Serah Terima Kunci';

		$data['stk'] = $this->m_stk->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_jadwal_stk_read', $data);
		$this->load->view('templates/footer');
	}
	public function stkreadkonsumen()
	{
		$data['title'] = 'Jadwal Serah Terima Kunci';
		$data['stk'] = $this->m_stk->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_jadwal_stk_read', $data);
		$this->load->view('templates/footer');
	}

	public function stkreadpengguna()
	{
		$data['title'] = 'Jadwal Serah Terima Kunci';
		$id = $this->session->userdata('iduser');
		$data['stk'] = $this->m_stk->get_join_where($id)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_jadwal_stk_read', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$this->load->model('m_jadwal_akad');
		$data['akad'] = $this->m_jadwal_akad->get_join_where()->result();
		$data['title'] = 'Tambah Jadwal Serah Terima Kunci';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_jadwal_stk_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$tgl = date('Y-m-d');
		$data = array(
			'id_stk' => "",
			'id_akad' => $this->input->post('tidakad'),
			'tgl_stk' => $tgl,
			'tgl_jadwal_stk' => $this->input->post('tjadwal'),
			'status_stk' => "belum terlaksana",
		);
		// CEK TANGGAL STK
		$date_now = date('Y-m-d');

		$tgl_jadwal_stk = $this->input->post('tjadwal');

		if ($tgl_jadwal_stk < $date_now) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('jadwal_stk/tambah');
		}
		;

		// CEK APAKAH ID AKAD SUDAH ADA MENGGUNAKAN QUERY BUILDER
		$cek = $this->db->get_where('tb_stk', ['id_akad' => $this->input->post('tidakad')])->row_array();

		if ($cek) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan! ID Akad Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('jadwal_stk/stkreadmarketing');
		} else {

			$this->m_stk->insert_data($data, 'tb_stk');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');
			redirect('jadwal_stk/stkreadmarketing');
		}

	}
	function stkedit($id)
	{
		$where = array('id_stk' => $id);
		$data['stk'] = $this->m_stk->edit_data($where, 'tb_stk')->result();
		//$this->load->view('v_progress_edit',$data);

		$data['title'] = 'Edit Jadwal Serah Terima Kunci';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_jadwal_stk_edit', $data);
		$this->load->view('templates/footer');
	}
	public function edit()
	{
		$tgl = date('Y-m-d');
		$data = array(


			'tgl_stk' => $tgl,
			'tgl_jadwal_stk' => $this->input->post('tjadwal'),
			'status_stk' => $this->input->post('tstatus'),
		);
		$where = array(
			'id_stk' => $this->input->post('tid'),
		);
		$date_now = date('Y-m-d');
		$tgl_jadwal_stk = $this->input->post('tjadwal');
		if ($tgl_jadwal_stk < $date_now) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Gagal Diupdate! Tanggal tidak boleh kurang dari hari ini!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button></div>');
			redirect('jadwal_stk/stkreadmarketing');
		}

		$this->m_stk->update_data($where, $data, 'tb_stk');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('jadwal_stk/stkreadmarketing');
	}

	public function delete($id_stk)
	{
		$where = array('id_stk' => $id_stk);

		$this->m_stk->delete($where, 'tb_stk');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('jadwal_stk/stkreadmarketing');
	}
}