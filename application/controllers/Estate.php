<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_estate');
	}

	public function index()
	{
		$data['title'] = 'Estate';
		$data['estate'] = $this->m_estate->get_data('tb_estate')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_estate', $data);
		$this->load->view('templates/footer');
	}
	public function indexestate()
	{
	$iduser =  $this->session->userdata('iduser');
		$where = array(
			'nik_estate' => $iduser
			);
		$data['title'] = 'Estate';
		$data['estate'] = $this->m_estate->get_id('tb_estate',$where)->result();
		  
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_estate_read', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$data['title'] = 'Tambah Estate';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_estate_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
	
			$data = array(
				'id_user' => $this->input->post('tnik'),
				'username' => $this->input->post('tusername'),
				'password' => $this->input->post('tpassword'),
				'role' => "estate",
				
			);

			$this->m_estate->insert_data($data, 'tb_user');
			
				$datad = array(
				'nik_estate' => $this->input->post('tnik'),
				'id_user' => $this->input->post('tnik'),
				'nama_estate' => $this->input->post('tnama'),
				'alamat_estate' => $this->input->post('talamat'),
				'telp_estate' => $this->input->post('ttelp'),
				
				
			);
				$this->m_estate->insert_data($datad, 'tb_estate');
			
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

    		redirect('estate');

	}
	public function edit()
	{
	
			$data = array(
		
			'nik_estate' => $this->input->post('tnik'),
				'id_user' => $this->input->post('tnik'),
				'nama_estate' => $this->input->post('tnama'),
				'alamat_estate' => $this->input->post('talamat'),
				'telp_estate' => $this->input->post('ttelp'),
	
			);
			$where = array(
				'nik_estate' => $this->input->post('tnik'),
			);

			$this->m_estate->update_data($where,$data, 'tb_estate');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');
			if($this->session->userdata('level')=="admin"){redirect('estate');}
						elseif($this->session->userdata('level')=="estate"){redirect('estate/indexestate');}
    		
		
	}
	function estateedit($id){
		$where = array('nik_estate' => $id);
		$data['estate'] = $this->m_estate->edit_data($where,'tb_estate')->result();
		//$this->load->view('v_kavling_edit',$data);

		$data['title'] = 'Edit Estate';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_estate_edit',$data);
		$this->load->view('templates/footer');
	}
public function delete($nik_estate)
	{
		$where = array('nik_estate' => $nik_estate);
		$where2 = array('id_user' => $nik_estate);
		$this->m_estate->delete($where, 'tb_estate');
		$this->m_estate->delete($where2, 'tb_user');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('estate');
	}
	
}

