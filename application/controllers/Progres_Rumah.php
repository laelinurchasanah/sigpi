<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Progres_Rumah extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper(array('form', 'url'));
		$this->load->model('m_progres_rumah');
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['title'] = 'Progres Rumah';
		$data['progress'] = $this->m_progres_rumah->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_progress', $data);
		$this->load->view('templates/footer');
	}
	public function progres_rumahreadkonsumen()
	{
		$idu = $this->session->userdata('iduser');
		$data['title'] = 'Progres Rumah';
		$data['progress'] = $this->m_progres_rumah->get_join_where($idu)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);

		$this->load->view('v_progress_read', $data);
		$this->load->view('templates/footer');
	}
	public function progres_rumahreadmanager()
	{
		$data['title'] = 'Progres Rumah';
		$data['progress'] = $this->m_progres_rumah->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_progress_read', $data);
		$this->load->view('templates/footer');
	}
	public function progres_rumahreadadmin()
	{
		$data['title'] = 'Progres Rumah';
		$data['progress'] = $this->m_progres_rumah->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);

		$this->load->view('v_progress_read', $data);
		$this->load->view('templates/footer');
	}
	public function progres_rumahreadmarketing()
	{
		$data['title'] = 'Progres Rumah';
		$data['progress'] = $this->m_progres_rumah->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);

		$this->load->view('v_progress_read', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$data['title'] = 'Tambah Progress';
		$this->load->model('m_blok');
		$this->load->model('m_estate');
		$data['kavling'] = $this->m_blok->get_data('tb_kavling')->result();
		$data['estate'] = $this->m_estate->get_data('tb_estate')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_progress_tambah', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$tg = date('Y-m-d-H');

		$config = array(
			'upload_path' => './gambarprogress1',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'overwrite' => true,
			'max_size' => 10000,
			'max_width' => 10000,
			'max_height' => 10000,
		);

		$this->load->library('upload', $config);

		$images = array();

		foreach ($_FILES as $key => $value) {
			if ($this->upload->do_upload($key)) {
				$images[] = $this->upload->data();
			}
		}

		$data = array(
			'id_progress' => "",
			'id_kavling' => $this->input->post('tidkavling'),
			'nik_estate' => $this->input->post('tidestate'),
			'description' => $this->input->post('tdescription'),
			'status_progress' => $this->input->post('tstatus'),
			// Pengecekan apakah gambar1 kosong atau tidak
			'gambar1' => $images[0]['file_name'] ? $images[0]['file_name'] : 'kosong.jpg',
			// Pengecekan apakah gambar2 kosong atau tidak
			'gambar2' => $images[1]['file_name'] ? $images[1]['file_name'] : 'kosong.jpg',
			// Pengecekan apakah gambar3 kosong atau tidak
			'gambar3' => $images[2]['file_name'] ? $images[2]['file_name'] : 'kosong.jpg',
			// Pengecekan apakah gambar4 kosong atau tidak
			'gambar4' => $images[3]['file_name'] ? $images[3]['file_name'] : 'kosong.jpg',
			// Pengecekan apakah gambar5 kosong atau tidak
			'gambar5' => $images[4]['file_name'] ? $images[4]['file_name'] : 'kosong.jpg',
		);

		// Pengecekan apakah id kavling sudah ada di tabel progress
		$cek = $this->m_progres_rumah->cek_id($this->input->post('tidkavling'));

		if ($cek->num_rows() > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('progres_rumah');
		} else {
			$this->m_progres_rumah->insert_data($data, 'tb_progress');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');
			redirect('progres_rumah');
		}
	}
	public function edit()
	{
		$tg = date('Y-m-d-H');

		$config = array(
			'upload_path' => './gambarprogress1',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'overwrite' => true,
			'max_size' => 10000,
			'max_width' => 10000,
			'max_height' => 10000,
		);

		$this->load->library('upload', $config);

		// Pengecekan apakah gambar1 kosong atau tidak
		if ($this->upload->do_upload('tgambar1')) {
			$gambar1 = $this->upload->data();
			$gambar1 = $gambar1['file_name'];
		} else {
			$gambar1 = $this->input->post('tgambar1lama');
		}

		// Pengecekan apakah gambar2 kosong atau tidak
		if ($this->upload->do_upload('tgambar2')) {
			$gambar2 = $this->upload->data();
			$gambar2 = $gambar2['file_name'];
		} else {
			$gambar2 = $this->input->post('tgambar2lama');
		}

		// Pengecekan apakah gambar3 kosong atau tidak
		if ($this->upload->do_upload('tgambar3')) {
			$gambar3 = $this->upload->data();
			$gambar3 = $gambar3['file_name'];
		} else {
			$gambar3 = $this->input->post('tgambar3lama');
		}

		// Pengecekan apakah gambar4 kosong atau tidak
		if ($this->upload->do_upload('tgambar4')) {
			$gambar4 = $this->upload->data();
			$gambar4 = $gambar4['file_name'];
		} else {
			$gambar4 = $this->input->post('tgambar4lama');
		}

		// Pengecekan apakah gambar5 kosong atau tidak
		if ($this->upload->do_upload('tgambar5')) {
			$gambar5 = $this->upload->data();
			$gambar5 = $gambar5['file_name'];
		} else {
			$gambar5 = $this->input->post('tgambar5lama');
		}

		$data = array(
			'id_kavling' => $this->input->post('tidkavling'),
			'status_progress' => $this->input->post('tstatus'),
			'description' => $this->input->post('tdescription'),
			'gambar1' => $gambar1,
			'gambar2' => $gambar2,
			'gambar3' => $gambar3,
			'gambar4' => $gambar4,
			'gambar5' => $gambar5,
		);

		$where = array(
			'id_progress' => $this->input->post('tidprogress'),
		);

		$this->m_progres_rumah->update_data($where, $data, 'tb_progress');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('progres_rumah');
	}
	function progressedit($id)
	{
		$where = array('id_progress' => $id);
		$data['progress'] = $this->m_progres_rumah->edit_data($where, 'tb_progress')->result();

		$data['title'] = 'Edit Progress';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/estate', $data);
		$this->load->view('v_progress_edit', $data);
		$this->load->view('templates/footer');
	}
	public function delete($id_progress)
	{
		$where = array('id_progress' => $id_progress);

		$this->m_progres_rumah->delete($where, 'tb_progress');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('progres_rumah');
	}
}
