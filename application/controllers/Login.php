<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}
	public function index()
	{
		$data['title'] = 'Login';

		$this->load->view('templates/header', $data);
		//		$this->load->view('templates/sidebar', $data);

		$this->load->view('v_login');
		//$this->load->view('templates/footer');
	}
	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$where = array(
			'username' => $username,
			'password' => ($password),
			'role' => $level
		);
		$cek = $this->m_login->cek_login("tb_user", $where)->num_rows();
		$hasil = $this->m_login->cek_login("tb_user", $where)->result();
		if ($cek > 0) {
			foreach ($hasil as $sess) {
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['usernam'] = $sess->username;
				$sess_data['leve'] = $sess->role;
				//$this->session->set_userdata($sess_data);
			}
			$data_session = array(
				'iduser' => $sess_data['id_user'],
				'nama' => $username,
				'level' => $sess_data['leve'],
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			if ($sess->role == "admin") {
				redirect(base_url("indexadmin"));
			} elseif ($sess->role == "manager") {
				redirect(base_url("indexmanager"));
			} elseif ($sess->role == "marketing") {
				redirect(base_url("indexmarketing"));
			} elseif ($sess->role == "estate") {
				redirect(base_url("indexestate"));
			} elseif ($sess->role == "konsumen") {
				redirect(base_url("indexkonsumen"));
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Periksa username dan password!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');
			$data['title'] = 'Login';

			$this->load->view('templates/header', $data);
			//		$this->load->view('templates/sidebar', $data);

			$this->load->view('v_login');
			//$this->load->view('templates/footer');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
