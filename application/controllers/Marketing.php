<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Marketing extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_marketing');
	}

	public function index()
	{
		$data['title'] = 'Marketing';
		$data['marketing'] = $this->m_marketing->get_data('tb_marketing')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_marketing', $data);
		$this->load->view('templates/footer');
	}
	public function indexmarketing()
	{
		$iduser =  $this->session->userdata('iduser');
		$where = array(
			'nik_marketing' => $iduser
		);
		$data['title'] = 'Marketing';
		$data['marketing'] = $this->m_marketing->get_id('tb_marketing', $where)->result();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_marketing_read', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Marketing';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_marketing_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{

		$data = array(
			'id_user' => $this->input->post('tnik'),
			'username' => $this->input->post('tusername'),
			'password' => $this->input->post('tpassword'),
			'role' => "marketing",

		);

		$this->m_marketing->insert_data($data, 'tb_user');

		$datad = array(
			'nik_marketing' => $this->input->post('tnik'),
			'id_user' => $this->input->post('tnik'),
			'nama_marketing' => $this->input->post('tnama'),
			'alamat_marketing' => $this->input->post('talamat'),
			'telp_marketing' => $this->input->post('ttelp'),


		);
		$this->m_marketing->insert_data($datad, 'tb_marketing');

		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('marketing');
	}
	public function edit()
	{

		$data = array(

			'nik_marketing' => $this->input->post('tnik'),
			'id_user' => $this->input->post('tnik'),
			'nama_marketing' => $this->input->post('tnama'),
			'alamat_marketing' => $this->input->post('talamat'),
			'telp_marketing' => $this->input->post('ttelp'),

		);
		$where = array(
			'nik_marketing' => $this->input->post('tnik'),
		);

		$this->m_marketing->update_data($where, $data, 'tb_marketing');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');
		if ($this->session->userdata('level') == "admin") {
			redirect('marketing');
		} elseif ($this->session->userdata('level') == "marketing") {
			redirect('marketing/indexmarketing');
		}
	}
	function marketingedit($id)
	{
		$where = array('nik_marketing' => $id);
		$data['marketing'] = $this->m_marketing->edit_data($where, 'tb_marketing')->result();
		//$this->load->view('v_kavling_edit',$data);

		$data['title'] = 'Edit Marketing';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_marketing_edit', $data);
		$this->load->view('templates/footer');
	}
	public function delete($nik_marketing)
	{
		$where = array('nik_marketing' => $nik_marketing);
		$where2 = array('id_user' => $nik_marketing);
		$this->m_marketing->delete($where, 'tb_marketing');
		$this->m_marketing->delete($where2, 'tb_user');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('marketing');
	}
}
