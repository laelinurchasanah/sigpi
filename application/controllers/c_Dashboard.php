<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_dashboard');

	}

	function dash()
	{
		$konsumen = $this->m_dashboard->get_data("tb_konsumen")->num_rows();
		$kavling = $this->m_dashboard->get_data("tb_kavling")->num_rows();
		$estate = $this->m_dashboard->get_data("tb_estate")->num_rows();
		$marketing = $this->m_dashboard->get_data("tb_marketing")->num_rows();
		$berkas = $this->m_dashboard->get_data("tb_berkas")->num_rows();
	}
}