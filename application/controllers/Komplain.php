<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komplain extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_komplain');
	}

	public function index()
	{

		$data['title'] = 'Komplain';

		$data['komplain'] = $this->m_komplain->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_komplain', $data);
		$this->load->view('templates/footer');
	}
	public function komplainreadmanager()
	{

		$data['title'] = 'Komplain';

		$data['komplain'] = $this->m_komplain->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_komplain_read_admin', $data);
		$this->load->view('templates/footer');
	}

	public function komplainreadkonsumen()
	{

		$data['title'] = 'Komplain';
		$iduser = $this->session->userdata('iduser');
		$data['komplain'] = $this->m_komplain->get_join_where($iduser)->result();
		// $data['komplains'] = $this->m_komplain->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_komplain_read', $data);
		$this->load->view('templates/footer');
	}
	public function komplainreadadmin()
	{
		$data['title'] = 'Komplain';
		$iduser = $this->session->userdata('iduser');
		// $data['komplain'] = $this->m_komplain->get_join_where($iduser)->result();
		$data['komplain'] = $this->m_komplain->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_komplain_read_admin', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$this->load->model('m_stk');
		$data['title'] = 'Tambah Komplain';

		$iduser = $this->session->userdata('iduser');
		$data['komplain'] = $this->m_stk->get_join_komplain($iduser)->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_komplain_tambah', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$tg = date('Y-m-d-H-i-s');
		$tgl = date('Y-m-d');
		$data = array(
			'id_komplain' => "",
			'id_stk' => $this->input->post('tidstk'),
			'nik_estate' => "",
			'tgl_komplain' => $tgl,
			'ket_komplain' => $this->input->post('tket'),
			'status_komplain' => "belum diterima",
			'upload_file' => "gambar1" . $this->input->post('tidstk') . $tg,
		);

		$this->m_komplain->insert_data($data, 'tb_komplain');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		$filenm1 = "gambar1" . $this->input->post('tidstk') . $tg;
		$config['upload_path'] = FCPATH . 'komplain/';
		$config['file_name'] = $filenm1;
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['overwrite'] = true;
		$config['max_size'] = 10000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);
		$this->upload->do_upload('tgambar1');
		redirect('komplain/komplainreadkonsumen');
	}
	function komplainedit($id)
	{


		$where = array('id_komplain' => $id);
		$data['komplain'] = $this->m_komplain->edit_data($where, 'tb_komplain')->result();


		$data['title'] = 'Edit Data Komplain';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_komplain_edit', $data);
		$this->load->view('templates/footer');
	}
	function komplaineditadmin($id)
	{
		$where = array('id_komplain' => $id);
		$data['komplain'] = $this->m_komplain->edit_data($where, 'tb_komplain')->result();
		$data['title'] = 'Edit Data Komplain';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_komplain_edit_admin', $data);
		$this->load->view('templates/footer');
	}
	public function edit()
	{
		$idestate = $this->session->userdata('iduser');

		$data = array(
			'nik_estate' => $idestate,
			'status_komplain' => $this->input->post('tstatus'),
		);
		$where = array(
			'id_komplain' => $this->input->post('tid'),
		);

		$this->m_komplain->update_data($where, $data, 'tb_komplain');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('komplain/index');
	}
	public function editadmin()
	{
		$idestate = $this->session->userdata('iduser');
		$data = array(
			'nik_estate' => $idestate,
			'status_komplain' => $this->input->post('tstatus'),
		);
		$where = array(
			'id_komplain' => $this->input->post('tid'),
		);
		$this->m_komplain->update_data($where, $data, 'tb_komplain');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('komplain/komplainreadadmin');
	}

	public function delete($id_komplain)
	{
		$where = array('id_komplain' => $id_komplain);

		$this->m_komplain->delete($where, 'tb_komplain');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('komplain');
	}
}