<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsumen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_konsumen');
	}

	public function index()
	{
		$data['title'] = 'Konsumen';
		$data['konsumen'] = $this->m_konsumen->get_data('tb_konsumen')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_konsumen', $data);
		$this->load->view('templates/footer');
	}
	public function indexkonsumen()
	{
		$iduser = $this->session->userdata('iduser');
		$where = array(
			'nik_konsumen' => $iduser,

		);
		$data['title'] = 'Konsumen';
		$data['konsumen'] = $this->m_konsumen->get_id('tb_konsumen', $where)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_konsumen_read', $data);
		$this->load->view('templates/footer');

	}
	public function konsumenreadestate()
	{

		$data['title'] = 'Konsumen';
		$data['konsumen'] = $this->m_konsumen->get_data('tb_konsumen')->result();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_konsumen_readestate', $data);
		$this->load->view('templates/footer');
	}
	public function konsumenreadmarketing()
	{

		$data['title'] = 'Konsumen';
		$data['konsumen'] = $this->m_konsumen->get_data('tb_konsumen')->result();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_konsumen_readestate', $data);
		$this->load->view('templates/footer');
	}
	public function konsumenreadmanager()
	{

		$data['title'] = 'Konsumen';
		$data['konsumen'] = $this->m_konsumen->get_data('tb_konsumen')->result();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_konsumen_readestate', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Konsumen';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_konsumen_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{

		$data = array(
			'id_user' => $this->input->post('tnik'),
			'username' => $this->input->post('tusername'),
			'password' => $this->input->post('tpassword'),
			'role' => "konsumen",

		);

		$this->m_konsumen->insert_data($data, 'tb_user');

		$datad = array(
			'nik_konsumen' => $this->input->post('tnik'),
			'id_user' => $this->input->post('tnik'),
			'nama_konsumen' => $this->input->post('tnama'),
			'alamat_konsumen' => $this->input->post('talamat'),
			'telp_konsumen' => $this->input->post('ttelp'),


		);
		$this->m_konsumen->insert_data($datad, 'tb_konsumen');

		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('konsumen');

	}
	public function edit()
	{

		$data = array(

			'nik_konsumen' => $this->input->post('tnik'),
			'id_user' => $this->input->post('tnik'),
			'nama_konsumen' => $this->input->post('tnama'),
			'alamat_konsumen' => $this->input->post('talamat'),
			'telp_konsumen' => $this->input->post('ttelp'),

		);
		$where = array(
			'nik_konsumen' => $this->input->post('tnik'),
		);

		$this->m_konsumen->update_data($where, $data, 'tb_konsumen');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');
		if ($this->session->userdata('level') == "admin") {
			redirect('konsumen');
		} elseif ($this->session->userdata('level') == "konsumen") {
			redirect('konsumen/indexkonsumen');
		}


	}
	function konsumenedit($id)
	{
		$where = array('nik_konsumen' => $id);
		$data['konsumen'] = $this->m_konsumen->edit_data($where, 'tb_konsumen')->result();
		//$this->load->view('v_kavling_edit',$data);

		$data['title'] = 'Edit Konsumen';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_konsumen_edit', $data);
		$this->load->view('templates/footer');
	}
	public function delete($nik_konsumen)
	{
		$where = array('nik_konsumen' => $nik_konsumen);
		$where2 = array('id_user' => $nik_konsumen);
		$this->m_konsumen->delete($where, 'tb_konsumen');
		$this->m_konsumen->delete($where2, 'tb_user');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('konsumen');
	}

}
