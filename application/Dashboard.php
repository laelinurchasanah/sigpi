<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Login';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);

		$this->load->view('v_login');
		$this->load->view('templates/footer');
	}
}
