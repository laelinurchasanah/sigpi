<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indexmanager extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_dashboard');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function index()
	{

		$konsumen = $this->m_dashboard->get_data("tb_konsumen")->num_rows();
		$kavling = $this->m_dashboard->get_data("tb_kavling")->num_rows();
		$estate = $this->m_dashboard->get_data("tb_estate")->num_rows();
		$marketing = $this->m_dashboard->get_data("tb_marketing")->num_rows();

		$data['konsumen'] = $konsumen;
		$data['kavling'] = $kavling;
		$data['estate'] = $estate;
		$data['marketing'] = $marketing;


		$data['title'] = 'Dashboard Manager';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('dashboardmanager', $data);
		$this->load->view('templates/footer');
	}
}
