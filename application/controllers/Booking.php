<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_booking');
		$this->load->model('m_blok');
		$this->load->model('m_type');
		$this->load->helper(array('url'));

	}

	public function index()
	{
		$data['title'] = 'Booking';
		$data['booking'] = $this->m_booking->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_booking', $data);
		$this->load->view('templates/footer');
	}
	public function bookingread()
	{
		$data['title'] = 'Booking';
		$iduser = $this->session->userdata('iduser');
		$data['booking'] = $this->m_booking->get_join_where_marketing($iduser)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_booking_read', $data);
		$this->load->view('templates/footer');
	}
	public function bookingreadmanager()
	{
		$data['title'] = 'Booking';
		$data['booking'] = $this->m_booking->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_booking_readkonsumen', $data);
		$this->load->view('templates/footer');
	}

	public function bookingkonsumen()
	{
		$data['title'] = 'Booking';
		$id = $this->session->userdata('iduser');
		$data['role'] = $this->session->userdata('role');
		$data['booking'] = $this->m_booking->get_where($id)->result();
		$data['id'] = $id;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_booking_readkonsumen', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Booking';
		$this->load->model('m_blok');
		$this->load->model('m_konsumen');
		$this->load->model('m_marketing');
		$data['kavling'] = $this->m_blok->get_data_available('tb_kavling')->result();
		$data['type'] = $this->m_type->get_data('tb_type_rumah')->result();
		$data['konsumen'] = $this->m_konsumen->get_data('tb_konsumen')->result();
		$data['marketing'] = $this->m_marketing->get_data('tb_marketing')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_booking_tambah', $data);
		$this->load->view('templates/footer');
	}


	public function tambahkonsumen()
	{
		$data['title'] = 'Tambah Booking';
		$this->load->model('m_blok');
		$this->load->model('m_konsumen');
		$this->load->model('m_marketing');
		$where = array(
			'nik_konsumen' => $this->session->userdata('iduser'),
		);
		$data['kavling'] = $this->m_blok->get_data_available('tb_kavling')->result();
		$data['type'] = $this->m_type->get_data('tb_type_rumah')->result();
		$data['konsumen'] = $this->m_konsumen->get_id('tb_konsumen', $where)->result();
		$data['marketing'] = $this->m_marketing->get_data('tb_marketing')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_booking_tambahkonsumen', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$tg = date('Y-m-d-H-i-s');
		$tgl = date('Y-m-d');
		$iduser = $this->session->userdata('iduser');
		$where = $this->input->post('tidkavling');

		$filenm1 = $tg . $_FILES['btf']['name'];
		$filenm2 = $tg . $_FILES['bktp']['name'];
		$filenm3 = $tg . $_FILES['bnpwp']['name'];

		if (!empty($_FILES['btf']['name'])) {

			// removed spaces from filename
			$filenm1 = str_replace(" ", "", $filenm1);
			// ubah . menjadi _ di nama file
			$filenm1 = str_replace(".", "_", $filenm1) . "." . pathinfo($_FILES['btf']['name'], PATHINFO_EXTENSION);

			$config1['upload_path'] = './gambarbooking/';
			$config1['file_name'] = $filenm1;
			$config1['allowed_types'] = 'gif|jpg|png|jpeg';
			$config1['overwrite'] = true;
			$config1['max_size'] = 10000;
			$config1['max_width'] = 10240;
			$config1['max_height'] = 7680;

			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			$this->upload->do_upload('btf');
		}

		if (!empty($_FILES['bktp']['name'])) {

			// ktp
			// removed spaces from filename
			$filenm2 = str_replace(" ", "", $filenm2);
			// ubah . menjadi _ di nama file
			$filenm2 = str_replace(".", "_", $filenm2) . "." . pathinfo($_FILES['bktp']['name'], PATHINFO_EXTENSION);

			$config2['upload_path'] = './gambarbooking/';
			$config2['file_name'] = $filenm2;
			$config2['allowed_types'] = 'gif|jpg|png|jpeg';
			$config2['overwrite'] = true;
			$config2['max_size'] = 10000;
			$config2['max_width'] = 10240;
			$config2['max_height'] = 7680;

			$this->load->library('upload', $config2);
			$this->upload->initialize($config2);
			$this->upload->do_upload('bktp');
		}

		if (!empty($_FILES['bnpwp']['name'])) {

			// npwp
			// removed spaces from filename
			$filenm3 = str_replace(" ", "", $filenm3);
			// ubah . menjadi _ di nama file
			$filenm3 = str_replace(".", "_", $filenm3) . "." . pathinfo($_FILES['bnpwp']['name'], PATHINFO_EXTENSION);

			$config3['upload_path'] = './gambarbooking/';
			$config3['file_name'] = $filenm3;
			$config3['allowed_types'] = 'gif|jpg|png|jpeg';
			$config3['overwrite'] = true;
			$config3['max_size'] = 10000;
			$config3['max_width'] = 10240;
			$config3['max_height'] = 7680;

			$this->load->library('upload', $config3);
			$this->upload->initialize($config3);
			$this->upload->do_upload('bnpwp');
		}



		$data = array(
			'id_booking' => "",
			'nik_admin' => $iduser,
			'nik_marketing' => $this->input->post('tidmarketing'),
			'nik_konsumen' => $this->input->post('tidkonsumen'),
			'id_kavling' => $this->input->post('tidkavling'),
			'tgl_booking' => $tgl,
			'cara_bayar' => $this->input->post('tcarabayar'),
			'status_booking' => 'invalid',
			'bukti_tf' => $filenm1,
			'ktp' => $filenm2,
			'npwp' => $filenm3,
		);

		// PENGECEKAN APAKAH NIK KONSUMEN SUDAH PERNAH BOOKING
		$cek = $this->m_booking->cek_nik($this->input->post('tidkonsumen'));

		if ($cek) {
			$this->session->set_flashdata('pesan_booking', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan, Konsumen Sudah Pernah Booking!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('booking/tambah');
		} else {
			$this->m_booking->insert_data($data, 'tb_booking');
			$this->m_blok->update_status($where, 'tb_kavling');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('booking');
		}
	}

	public function tambah_aksikonsumen()
	{
		$tg = date('Y-m-d-H-i-s');
		$tgl = date('Y-m-d');
		$iduser = $this->session->userdata('iduser');
		$where = $this->input->post('tidkavling');

		$filenm1 = $tg . $_FILES['btf']['name'];
		$filenm2 = $tg . $_FILES['bktp']['name'];
		$filenm3 = $tg . $_FILES['bnpwp']['name'];

		if (!empty($_FILES['btf']['name'])) {

			// removed spaces from filename
			$filenm1 = str_replace(" ", "", $filenm1);
			// ubah . menjadi _ di nama file
			$filenm1 = str_replace(".", "_", $filenm1) . "." . pathinfo($_FILES['btf']['name'], PATHINFO_EXTENSION);

			$config1['upload_path'] = './gambarbooking/';
			$config1['file_name'] = $filenm1;
			$config1['allowed_types'] = 'gif|jpg|png|jpeg';
			$config1['overwrite'] = true;
			$config1['max_size'] = 10000;
			$config1['max_width'] = 10240;
			$config1['max_height'] = 7680;

			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			$this->upload->do_upload('btf');
		}

		if (!empty($_FILES['bktp']['name'])) {

			// ktp
			// removed spaces from filename
			$filenm2 = str_replace(" ", "", $filenm2);
			// ubah . menjadi _ di nama file
			$filenm2 = str_replace(".", "_", $filenm2) . "." . pathinfo($_FILES['bktp']['name'], PATHINFO_EXTENSION);

			$config2['upload_path'] = './gambarbooking/';
			$config2['file_name'] = $filenm2;
			$config2['allowed_types'] = 'gif|jpg|png|jpeg';
			$config2['overwrite'] = true;
			$config2['max_size'] = 10000;
			$config2['max_width'] = 10240;
			$config2['max_height'] = 7680;

			$this->load->library('upload', $config2);
			$this->upload->initialize($config2);
			$this->upload->do_upload('bktp');
		}

		if (!empty($_FILES['bnpwp']['name'])) {

			// npwp
			// removed spaces from filename
			$filenm3 = str_replace(" ", "", $filenm3);
			// ubah . menjadi _ di nama file
			$filenm3 = str_replace(".", "_", $filenm3) . "." . pathinfo($_FILES['bnpwp']['name'], PATHINFO_EXTENSION);

			$config3['upload_path'] = './gambarbooking/';
			$config3['file_name'] = $filenm3;
			$config3['allowed_types'] = 'gif|jpg|png|jpeg';
			$config3['overwrite'] = true;
			$config3['max_size'] = 10000;
			$config3['max_width'] = 10240;
			$config3['max_height'] = 7680;

			$this->load->library('upload', $config3);
			$this->upload->initialize($config3);
			$this->upload->do_upload('bnpwp');
		}


		$data = array(
			'id_booking' => "",
			'nik_admin' => "10000001",
			'nik_marketing' => $this->input->post('tidmarketing'),
			'nik_konsumen' => $this->input->post('tidkonsumen'),
			'id_kavling' => $this->input->post('tidkavling'),
			'tgl_booking' => $tgl,
			'cara_bayar' => $this->input->post('tcarabayar'),
			'status_booking' => 'invalid',
			'bukti_tf' => $filenm1,
			'ktp' => $filenm2,
			'npwp' => $filenm3,
		);

		// PENGECEKAN APAKAH NIK KONSUMEN SUDAH PERNAH BOOKING
		$cek = $this->m_booking->cek_nik($this->input->post('tidkonsumen'));

		if ($cek) {
			$this->session->set_flashdata('pesan_booking', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan, Konsumen Sudah Pernah Booking!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('booking/tambahkonsumen');
		} else {
			$this->m_booking->insert_data($data, 'tb_booking');
			$this->m_blok->update_status($where, 'tb_kavling');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('booking/bookingkonsumen');
		}
	}



	// ajax kavling
	public function get_harga_kavling()
	{
		$id = $this->input->post('id');
		$data = $this->m_blok->get_harga_kavling($id);
		echo json_encode($data);
	}

	public function edit()
	{
		$tg = date('Y-m-d-H-i-s');
		$tgl = date('Y-m-d');

		$filenm4 = $tg . '-KWITANSI-' . $_FILES['tkwitansi']['name'];

		// removed spaces from filename
		$filenm4 = str_replace(" ", "", $filenm4);

		// ubah . menjadi _ di nama file
		$filenm4 = str_replace(".", "_", $filenm4) . "." . pathinfo($_FILES['tkwitansi']['name'], PATHINFO_EXTENSION);

		$config4['upload_path'] = 'gambarbooking/';
		$config4['file_name'] = $filenm4;
		$config4['allowed_types'] = 'gif|jpg|png|jpeg';
		//$conf1ig['overwrite']            = true;
		$config4['max_size'] = 10000;
		$config4['max_width'] = 10240;
		$config4['max_height'] = 7680;

		$this->load->library('upload', $config4);
		$this->upload->do_upload('tkwitansi');

		$data = array(

			'kwitansi_booking' => $filenm4,
			'status_booking' => 'valid',
		);
		$where = array(
			'id_booking' => $this->input->post('tidbooking'),
		);

		$this->m_booking->update_data($where, $data, 'tb_booking');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('booking/bookingread');
	}
	function bookingedit($id)
	{
		$where = array('id_booking' => $id);
		$data['booking'] = $this->m_booking->edit_data($where, 'tb_booking')->result();
		//$this->load->view('v_progress_edit',$data);

		$data['title'] = 'Edit Booking';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_booking_edit', $data);
		$this->load->view('templates/footer');
	}
	function bookingeditmarketing($id)
	{
		$where = array('id_booking' => $id);
		$data['booking'] = $this->m_booking->edit_data($where, 'tb_booking')->result();
		//$this->load->view('v_progress_edit',$data);

		$data['title'] = 'Edit Booking';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_booking_edit', $data);
		$this->load->view('templates/footer');
	}
	public function delete($id_booking)
	{
		$where = array('id_booking' => $id_booking);

		// Mendapatkan id kavling berdasarkan id booking dari tabel booking menggunakan query builder
		$id_kavling = $this->db->get_where('tb_booking', ['id_booking' => $id_booking])->row()->id_kavling;

		// Mengubah status kavling menjadi available setelah data booking dihapus menggunakan query builder
		$this->db->set('status', 'available');
		$this->db->where('id_kavling', $id_kavling);
		$this->db->update('tb_kavling');

		$this->m_booking->delete($where, 'tb_booking');

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('booking');
	}
	public function deletemarketing($id_booking)
	{
		$where = array('id_booking' => $id_booking);

		// Mendapatkan id kavling berdasarkan id booking dari tabel booking menggunakan query builder
		$id_kavling = $this->db->get_where('tb_booking', ['id_booking' => $id_booking])->row()->id_kavling;

		// Mengubah status kavling menjadi available setelah data booking dihapus menggunakan query builder
		$this->db->set('status', 'available');
		$this->db->where('id_kavling', $id_kavling);
		$this->db->update('tb_kavling');

		$this->m_booking->delete($where, 'tb_booking');

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('booking/bookingread');
	}
}
