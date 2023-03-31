<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bichecking extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper(array('form', 'url'));
		$this->load->model('m_bichecking');
		$this->load->helper(array('url'));
	}

	public function index()
	{

		$data['title'] = 'BI Checking';

		$data['bichecking'] = $this->m_bichecking->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_bichecking', $data);
		$this->load->view('templates/footer');
	}
	public function bicheckingreadmarketing()
	{
		$data['title'] = 'BI Checking';
		$iduser = $this->session->userdata('iduser');
		$data['bichecking'] = $this->m_bichecking->get_join_where_marketing($iduser)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_bichecking_readmarketing', $data);
		$this->load->view('templates/footer');
	}


	public function edit()
	{
		$data = array(

			'bi_checking' => $this->input->post('tstatus'),
			'catatan_bi_checking' => $this->input->post('tcatatan'),

		);
		$where = array(
			'id_booking' => $this->input->post('tidbooking'),
		);

		$this->m_bichecking->update_data($where, $data, 'tb_booking');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('bichecking');

	}
	function bicheckingedit($id)
	{
		$where = array('id_booking' => $id);
		$data['bichecking'] = $this->m_bichecking->edit_data($where, 'tb_booking')->result();
		//$this->load->view('v_progress_edit',$data);

		$data['title'] = 'Status BI Checking';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_bichecking_edit', $data);
		$this->load->view('templates/footer');
	}
	public function editmarketing()
	{
		$data = array(

			'bi_checking' => $this->input->post('tstatus'),
			'catatan_bi_checking' => $this->input->post('tcatatan'),

		);
		$where = array(
			'id_booking' => $this->input->post('tidbooking'),
		);

		$this->m_bichecking->update_data($where, $data, 'tb_booking');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('bichecking/bicheckingreadmarketing');

	}
	function bicheckingeditmarketing($id)
	{
		$where = array('id_booking' => $id);
		$data['bichecking'] = $this->m_bichecking->edit_data($where, 'tb_booking')->result();

		$data['title'] = 'Status BI Checking';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_bichecking_editmarketing', $data);
		$this->load->view('templates/footer');
	}

}