<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bank');
	}

	public function index()
	{
		$data['title'] = 'Bank';
		$data['bank'] = $this->m_bank->get_data('tb_bank')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_bank', $data);
		$this->load->view('templates/footer');
	}
	
	public function tambah()
	{
		$data['title'] = 'Tambah Bank';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_bank_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
	
			$data = array(
				'id_bank' => "",
				'bank' => $this->input->post('tbank'),
				'cabang' => $this->input->post('tcabang'),
				'alamat_bank' => $this->input->post('talamat'),
				
			);

			$this->m_bank->insert_data($data, 'tb_bank');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

    		redirect('bank');

	}
	public function edit()
	{
	
			$data = array(
				
				'id_bank' => $this->input->post('tidbank'),
				'bank' => $this->input->post('tbank'),
				'cabang' => $this->input->post('tcabang'),
				'alamat_bank' => $this->input->post('talamat'),
	
			);
			$where = array(
				'id_bank' => $this->input->post('tidbank'),
			);

			$this->m_bank->update_data($where,$data, 'tb_bank');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

    		redirect('bank');
		
	}
	function bankedit($id){
		$where = array('id_bank' => $id);
		$data['bank'] = $this->m_bank->edit_data($where,'tb_bank')->result();
		//$this->load->view('v_kavling_edit',$data);

		$data['title'] = 'Edit Bank';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_bank_edit',$data);
		$this->load->view('templates/footer');
	}
public function delete($id_bank)
	{
		$where = array('id_bank' => $id_bank);

		$this->m_bank->delete($where, 'tb_bank');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('bank');
	}
	
}

