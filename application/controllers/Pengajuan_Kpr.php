<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_Kpr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengajuan_kpr');
		$this->load->helper(array('url'));
	}

	public function index()
	{

		$data['title'] = 'KPR';

		$data['kpr'] = $this->m_pengajuan_kpr->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_pengajuan_kpr_read', $data);
		$this->load->view('templates/footer');
	}
	public function kprread()
	{
		$iduser = $this->session->userdata('iduser');
		$data['title'] = 'KPR';
		$data['kpr'] = $this->m_pengajuan_kpr->get_join_where_marketing($iduser)->result();
		;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_pengajuan_kpr', $data);
		$this->load->view('templates/footer');
	}
	public function kprreadmanager()
	{

		$data['title'] = 'KPR';

		$data['kpr'] = $this->m_pengajuan_kpr->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_pengajuan_kpr_read', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$this->load->model('m_berkas_kpr');
		$this->load->model('m_bank');
		// $data['berkas'] = $this->m_berkas_kpr->get_join()->result();
		$data['berkas'] = $this->m_berkas_kpr->get_join_status()->result();
		$data['bank'] = $this->m_bank->get_data('tb_bank')->result();
		$data['title'] = 'Tambah KPR';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_pengajuan_kpr_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$tg = date('Y-m-d-H-i-s');
		$tgl = date('Y-m-d');

		$filenm1 = NULL;

		if (!empty($_FILES['tgambar1']['name'])) {
			$filenm1 = $tg . "-SP3K-" . $_FILES['tgambar1']['name'];

			// removed spaces from filename
			$filenm1 = str_replace(" ", "", $filenm1);

			// ubah . menjadi _ di nama file
			$filenm1 = str_replace(".", "_", $filenm1) . "." . pathinfo($_FILES['tgambar1']['name'], PATHINFO_EXTENSION);

			$config['upload_path'] = 'sp3k/';
			$config['file_name'] = $filenm1;
			$config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config['overwrite'] = true;
			$config['max_size'] = 10000;
			$config['max_width'] = 10240;
			$config['max_height'] = 7680;

			$this->load->library('upload', $config);
			$this->upload->do_upload('tgambar1');
		}

		$data = array(
			'id_berkas' => $this->input->post('tidberkas'),
			'id_bank' => $this->input->post('tidbank'),
			'tgl_kpr' => $tgl,
			'status_kpr' => $this->input->post('tstatus'),
			'sp3k' => $filenm1,

		);

		// PENGECEKAN APAKAH ID KAVLING SUDAH ADA ATAU BELUM
		$cek = $this->m_pengajuan_kpr->cek_id_kavling($data['id_berkas']);

		if ($cek->num_rows() > 0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			Data Gagal Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('pengajuan_kpr/kprread');
		} else {
			$this->m_pengajuan_kpr->insert_data($data, 'tb_kpr');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');
			redirect('pengajuan_kpr/kprread');
		}
	}
	function kpredit($id)
	{
		$where = array('id_kpr' => $id);
		$data['kpr'] = $this->m_pengajuan_kpr->edit_data($where, 'tb_kpr')->result();
		//$this->load->view('v_progress_edit',$data);

		$data['title'] = 'Edit Kpr';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_pengajuan_kpr_edit', $data);
		$this->load->view('templates/footer');
	}
	public function edit()
	{
		$tg = date('Y-m-d-H-i-s');
		$tgl = date('Y-m-d');

		$filenm1 = NULL;

		if (!empty($_FILES['tgambar1']['name'])) {
			$filenm1 = $tg . "-SP3K-" . $_FILES['tgambar1']['name'];

			// removed spaces from filename
			$filenm1 = str_replace(" ", "", $filenm1);

			// ubah . menjadi _ di nama file
			$filenm1 = str_replace(".", "_", $filenm1) . "." . pathinfo($_FILES['tgambar1']['name'], PATHINFO_EXTENSION);

			$config['upload_path'] = 'sp3k/';
			$config['file_name'] = $filenm1;
			$config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config['overwrite'] = true;
			$config['max_size'] = 10000;
			$config['max_width'] = 10240;
			$config['max_height'] = 7680;

			$this->load->library('upload', $config);
			$this->upload->do_upload('tgambar1');
		}

		$data = array(
			'status_kpr' => $this->input->post('tstatus'),
			'sp3k' => $filenm1,
		);
		$where = array(
			'id_kpr' => $this->input->post('tid'),
		);

		$this->m_pengajuan_kpr->update_data($where, $data, 'tb_kpr');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');
		redirect('pengajuan_kpr/kprread');
	}

	public function delete($id_kpr)
	{
		$where = array('id_kpr' => $id_kpr);

		$this->m_pengajuan_kpr->delete($where, 'tb_kpr');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('pengajuan_kpr/kprread');
	}
}