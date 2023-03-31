<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data['title'] = 'Admin';
		$data['admin'] = $this->m_admin->get_data('tb_admin')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_admin', $data);
		$this->load->view('templates/footer');
	}
	
	public function tambah()
	{
		$data['title'] = 'Tambah Admin';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_admin_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
	
			$data = array(
				'id_user' => $this->input->post('tnik'),
				'username' => $this->input->post('tusername'),
				'password' => $this->input->post('tpassword'),
				'role' => "admin",
				
			);

			$this->m_admin->insert_data($data, 'tb_user');
			
				$datad = array(
				'nik_admin' => $this->input->post('tnik'),
				'id_user' => $this->input->post('tnik'),
				'nama_admin' => $this->input->post('tnama'),
				'alamat_admin' => $this->input->post('talamat'),
				'telp_admin' => $this->input->post('ttelp'),
				
				
			);
				$this->m_admin->insert_data($datad, 'tb_admin');
			
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

    		redirect('admin');

	}
	public function edit()
	{
	
			$data = array(
			'nik_admin' => $this->input->post('tnik'),
				'nama_admin' => $this->input->post('tnama'),
				'alamat_admin' => $this->input->post('talamat'),
				'telp_admin' => $this->input->post('ttelp'),
	
			);
			$where = array(
				'nik_admin' => $this->input->post('tnik'),
			);

			$this->m_admin->update_data($where,$data, 'tb_admin');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

    		redirect('admin');
		
	}
	function adminedit($id){
		$where = array('nik_admin' => $id);
		$data['admin'] = $this->m_admin->edit_data($where,'tb_admin')->result();
		//$this->load->view('v_kavling_edit',$data);

		$data['title'] = 'Edit Admin';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_admin_edit',$data);
		$this->load->view('templates/footer');
	}
public function delete($nik_admin)
	{
		$where = array('nik_admin' => $nik_admin);
		$where2 = array('id_user' => $nik_admin);
		$this->m_admin->delete($where, 'tb_admin');
		$this->m_admin->delete($where2, 'tb_user');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('admin');
	}
	
}

