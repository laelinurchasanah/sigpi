<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$data['title'] = 'User';
		$data['user'] = $this->m_user->get_data('tb_user')->result();
		  
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_user', $data);
		$this->load->view('templates/footer');
	}
		public function indexestate()
	{
	$iduser =  $this->session->userdata('iduser');
		$where = array(
			'id_user' => $iduser
			);
		$data['title'] = 'User';
		$data['user'] = $this->m_user->get_id('tb_user',$where)->result();
		  
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_user_read', $data);
		$this->load->view('templates/footer');
	}
	public function indexmarketing()
	{
	$iduser =  $this->session->userdata('iduser');
		$where = array(
			'id_user' => $iduser
			);
		$data['title'] = 'User';
		$data['user'] = $this->m_user->get_id('tb_user',$where)->result();
		  
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_user_read', $data);
		$this->load->view('templates/footer');
	}
	public function indexkonsumen()
	{
	$iduser =  $this->session->userdata('iduser');
		$where = array(
			'id_user' => $iduser
			);
		$data['title'] = 'User';
		$data['user'] = $this->m_user->get_id('tb_user',$where)->result();
		  
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_user_read', $data);
		$this->load->view('templates/footer');
	}
	
	public function tambah()
	{
		$data['title'] = 'Tambah User';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_user_tambah');
		$this->load->view('templates/footer');
	}
	
	public function edit()
	{
	
			$data = array(
		
				'id_user' => $this->input->post('tiduser'),
				'username' => $this->input->post('tusername'),
				'password' => $this->input->post('tpassword'),
	
			);
			$where = array(
				'id_user' => $this->input->post('tiduser'),
			);

			$this->m_user->update_data($where,$data, 'tb_user');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

			if($this->session->userdata('level')=="admin"){redirect('user');}
				elseif($this->session->userdata('level')=="estate"){redirect('user/indexestate');}
					elseif($this->session->userdata('level')=="marketing"){redirect('user/indexmarketing');}
						elseif($this->session->userdata('level')=="konsumen"){redirect('user/indexkonsumen');}
    		//redirect('user');
		
	}
	function useredit($id){
		$where = array('id_user' => $id);
		$data['user'] = $this->m_user->edit_data($where,'tb_user')->result();
		//$this->load->view('v_kavling_edit',$data);

		$data['title'] = 'Edit User';

		$this->load->view('templates/header', $data);
//		$this->load->view('templates/admin', $data);
		if($this->session->userdata('level')=="admin"){$this->load->view('templates/admin', $data);}
				elseif($this->session->userdata('level')=="estate"){$this->load->view('templates/estate', $data);}
					elseif($this->session->userdata('level')=="marketing"){$this->load->view('templates/marketing', $data);}
						elseif($this->session->userdata('level')=="konsumen"){$this->load->view('templates/konsumen', $data);}
		$this->load->view('v_user_edit',$data);
		$this->load->view('templates/footer');
	}
public function delete($id_user)
	{
		$where = array('id_user' => $id_user);

		$this->m_user->delete($where, 'tb_user');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('user');
	}
	
}

