<?php

class Indexmarketing extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_dashboard');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	function index()
	{
		$konsumen = $this->m_dashboard->get_data("tb_konsumen")->num_rows();
		$kavling = $this->m_dashboard->get_data("tb_kavling")->num_rows();
		$estate = $this->m_dashboard->get_data("tb_estate")->num_rows();
		$marketing = $this->m_dashboard->get_data("tb_marketing")->num_rows();

		$data['title'] = 'Dashboard Marketing';
		$data['konsumen'] = $konsumen;
		$data['kavling'] = $kavling;
		$data['estate'] = $estate;
		$data['marketing'] = $marketing;
		$data['title'] = 'Dashboard Marketing';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);

		$this->load->view('dashboardmarketing');
		$this->load->view('templates/footer');
	}
}
