<?php 
 
class IndexAdmin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	$this->load->model('m_dashboard');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$booking = $this->m_dashboard->get_data("tb_booking")->num_rows();
		$kavling = $this->m_dashboard->get_data_kavling()->num_rows();
		$user = $this->m_dashboard->get_data("tb_user")->num_rows();

			$data['title'] = 'Dashboard Admin';
			$data['booking'] = $booking ;
			$data['kavling'] =$kavling ;
			$data['user'] = $user ;
			$a['d'] = $this->session->userdata('level') ;
	$this->load->view('templates/header', $data);
	$this->load->view('templates/admin', $data);
		$this->load->view('dashboard',$data);
	$this->load->view('templates/footer');
	}
}