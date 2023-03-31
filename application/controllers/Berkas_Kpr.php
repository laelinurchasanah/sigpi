<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berkas_Kpr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper(array('form', 'url'));
		$this->load->model('m_berkas_kpr');
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$iduser = $this->session->userdata('iduser');
		$data['title'] = 'Berkas';

		$data['berkas'] = $this->m_berkas_kpr->get_join_where($iduser)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_berkas_kpr', $data);
		$this->load->view('templates/footer');
	}
	public function berkasread()
	{
		$data['title'] = 'Berkas';

		$data['berkas'] = $this->m_berkas_kpr->get_join()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_berkas_kpr_read', $data);
		$this->load->view('templates/footer');
	}

	// berkasreadmarketing
	public function berkasreadmarketing()
	{
		$iduser = $this->session->userdata('iduser');
		$data['title'] = 'Berkas';
		$data['berkas'] = $this->m_berkas_kpr->get_join_where_marketing($iduser)->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/marketing', $data);
		$this->load->view('v_berkas_kpr_read_marketing', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$this->load->model('m_booking');
		$iduser = $this->session->userdata('iduser');
		$where = array('nik_konsumen' => $iduser);
		$data['booking'] = $this->m_booking->edit_data($where, 'tb_booking')->result();
		$data['title'] = 'Tambah Berkas';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen', $data);
		$this->load->view('v_berkas_kpr_tambah');
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$tg = date('Y-m-d-H-i-s');
		$tgl = date('Y-m-d');

		// $filenm1 = NULL;
		$filenm2 = NULL;
		$filenm3 = NULL;
		$filenm4 = NULL;
		$filenm5 = NULL;
		$filenm6 = NULL;
		$filenm7 = NULL;
		$filenm8 = NULL;
		$filenm9 = NULL;
		$filenm10 = NULL;
		$filenm11 = NULL;
		$filenm12 = NULL;
		$filenm13 = NULL;
		$filenm14 = NULL;
		$filenm15 = NULL;
		$filenm16 = NULL;
		$filenm17 = NULL;

		// Jika ada input post dengan nama tktp
		// if (!empty($_FILES['tktp']['name'])) {
		// 	$filenm1 = $tg . '-KTP-' . $_FILES['tktp']['name'];

		// 	// removed spaces from filename
		// 	$filenm1 = str_replace(" ", "", $filenm1);

		// 	// ubah . menjadi _ di nama file
		// 	$filenm1 = str_replace(".", "_", $filenm1) . "." . pathinfo($_FILES['tktp']['name'], PATHINFO_EXTENSION);

		// 	$config['upload_path']          = 'berkasuploads/';
		// 	$config['file_name']          	= $filenm1;
		// 	$config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		// 	$config['overwrite']            = true;
		// 	$config['max_size']             = 10000;
		// 	$config['max_width']            = 10240;
		// 	$config['max_height']           = 7680;

		// 	$this->load->library('upload', $config);
		// 	$this->upload->do_upload('tktp');
		// }

		// Jika ada input post dengan nama tkk
		if (!empty($_FILES['tkk']['name'])) {

			// Initialize 

			$filenm2 = $tg . '-KK-' . $_FILES['tkk']['name'];

			// removed spaces from filename
			$filenm2 = str_replace(" ", "", $filenm2);

			// ubah . menjadi _ di nama file
			$filenm2 = str_replace(".", "_", $filenm2) . "." . pathinfo($_FILES['tkk']['name'], PATHINFO_EXTENSION);

			$config1['upload_path'] = 'berkasuploads/';
			$config1['file_name'] = $filenm2;
			$config1['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config1['overwrite'] = true;
			$config1['max_size'] = 10000;
			$config1['max_width'] = 10240;
			$config1['max_height'] = 7680;

			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			$this->upload->do_upload('tkk');
		}

		// Jika ada input post dengan nama tnpwp
		// if (!empty($_FILES['tnpwp']['name'])) {
		// 	$filenm3 = $tg . '-NPWP-'  . $_FILES['tnpwp']['name'];

		// 	// removed spaces from filename
		// 	$filenm3 = str_replace(" ", "", $filenm3);

		// 	// ubah . menjadi _ di nama file
		// 	$filenm3 = str_replace(".", "_", $filenm3) . "." . pathinfo($_FILES['tnpwp']['name'], PATHINFO_EXTENSION);

		// 	$config2['upload_path']          = 'berkasuploads/';
		// 	$config2['file_name']          = $filenm3;
		// 	$config2['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		// 	$config2['overwrite']            = true;
		// 	$config2['max_size']             = 10000;
		// 	$config2['max_width']            = 10240;
		// 	$config2['max_height']           = 7680;

		// 	$this->load->library('upload', $config2);
		// 	$this->upload->initialize($config2);
		// 	$this->upload->do_upload('tnpwp');
		// }

		// Jika ada input post dengan nama tbpjs
		if (!empty($_FILES['tbpjs']['name'])) {
			$filenm4 = $tg . '-BPJS-' . $_FILES['tbpjs']['name'];

			// removed spaces from filename
			$filenm4 = str_replace(" ", "", $filenm4);

			// ubah . menjadi _ di nama file
			$filenm4 = str_replace(".", "_", $filenm4) . "." . pathinfo($_FILES['tbpjs']['name'], PATHINFO_EXTENSION);

			$config3['upload_path'] = 'berkasuploads/';
			$config3['file_name'] = $filenm4;
			$config3['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config3['overwrite'] = true;
			$config3['max_size'] = 10000;
			$config3['max_width'] = 10240;
			$config3['max_height'] = 7680;

			$this->load->library('upload', $config3);
			$this->upload->initialize($config3);
			$this->upload->do_upload('tbpjs');
		}

		// Jika ada input post dengan nama tbukunikah
		if (!empty($_FILES['tbukunikah']['name'])) {
			$filenm5 = $tg . '-BUKU-NIKAH-' . $_FILES['tbukunikah']['name'];

			// removed spaces from filename
			$filenm5 = str_replace(" ", "", $filenm5);

			// ubah . menjadi _ di nama file
			$filenm5 = str_replace(".", "_", $filenm5) . "." . pathinfo($_FILES['tbukunikah']['name'], PATHINFO_EXTENSION);

			$config4['upload_path'] = 'berkasuploads/';
			$config4['file_name'] = $filenm5;
			$config4['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config4['overwrite'] = true;
			$config4['max_size'] = 10000;
			$config4['max_width'] = 10240;
			$config4['max_height'] = 7680;

			$this->load->library('upload', $config4);
			$this->upload->initialize($config4);
			$this->upload->do_upload('tbukunikah');
		}

		// Jika ada input post dengan nama tpasfoto
		if (!empty($_FILES['tpasfoto']['name'])) {
			$filenm6 = $tg . '-PAS-FOTO-' . $_FILES['tpasfoto']['name'];

			// removed spaces from filename
			$filenm6 = str_replace(" ", "", $filenm6);

			// ubah . menjadi _ di nama file
			$filenm6 = str_replace(".", "_", $filenm6) . "." . pathinfo($_FILES['tpasfoto']['name'], PATHINFO_EXTENSION);

			$config5['upload_path'] = 'berkasuploads/';
			$config5['file_name'] = $filenm6;
			$config5['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config5['overwrite'] = true;
			$config5['max_size'] = 10000;
			$config5['max_width'] = 10240;
			$config5['max_height'] = 7680;

			$this->load->library('upload', $config5);
			$this->upload->initialize($config5);
			$this->upload->do_upload('tpasfoto');
		}

		// Jika ada input post dengan nama tsuratketerangankerja
		if (!empty($_FILES['tsuratketerangankerja']['name'])) {
			$filenm7 = $tg . '-SURAT-KETERANGAN-KERJA-' . $_FILES['tsuratketerangankerja']['name'];

			// removed spaces from filename
			$filenm7 = str_replace(" ", "", $filenm7);

			// ubah . menjadi _ di nama file
			$filenm7 = str_replace(".", "_", $filenm7) . "." . pathinfo($_FILES['tsuratketerangankerja']['name'], PATHINFO_EXTENSION);

			$config6['upload_path'] = 'berkasuploads/';
			$config6['file_name'] = $filenm7;
			$config6['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config6['overwrite'] = true;
			$config6['max_size'] = 10000;
			$config6['max_width'] = 10240;
			$config6['max_height'] = 7680;

			$this->load->library('upload', $config6);
			$this->upload->initialize($config6);
			$this->upload->do_upload('tsuratketerangankerja');
		}

		// Jika ada input post dengan nama tslipgaji
		if (!empty($_FILES['tslipgaji']['name'])) {
			$filenm8 = $tg . '-SLIP-GAJI-' . $_FILES['tslipgaji']['name'];

			// removed spaces from filename
			$filenm8 = str_replace(" ", "", $filenm8);

			// ubah . menjadi _ di nama file
			$filenm8 = str_replace(".", "_", $filenm8) . "." . pathinfo($_FILES['tslipgaji']['name'], PATHINFO_EXTENSION);

			$config7['upload_path'] = 'berkasuploads/';
			$config7['file_name'] = $filenm8;
			$config7['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config7['overwrite'] = true;
			$config7['max_size'] = 10000;
			$config7['max_width'] = 10240;
			$config7['max_height'] = 7680;

			$this->load->library('upload', $config7);
			$this->upload->initialize($config7);
			$this->upload->do_upload('tslipgaji');
		}

		// Jika ada input post dengan nama trekeningkoranpayroll
		if (!empty($_FILES['trekeningkoranpayroll']['name'])) {
			$filenm9 = $tg . '-REKENING-PAYROLL-' . $_FILES['trekeningkoranpayroll']['name'];

			// removed spaces from filename
			$filenm9 = str_replace(" ", "", $filenm9);

			// ubah . menjadi _ di nama file
			$filenm9 = str_replace(".", "_", $filenm9) . "." . pathinfo($_FILES['trekeningkoranpayroll']['name'], PATHINFO_EXTENSION);

			$config8['upload_path'] = 'berkasuploads/';
			$config8['file_name'] = $filenm9;
			$config8['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config8['overwrite'] = true;
			$config8['max_size'] = 10000;
			$config8['max_width'] = 10240;
			$config8['max_height'] = 7680;

			$this->load->library('upload', $config8);
			$this->upload->initialize($config8);
			$this->upload->do_upload('trekeningkoranpayroll');
		}

		// Jika ada input post dengan nama tnib
		if (!empty($_FILES['tnib']['name'])) {
			$filenm10 = $tg . '-NIB-' . $_FILES['tnib']['name'];

			// removed spaces from filename
			$filenm10 = str_replace(" ", "", $filenm10);

			// ubah . menjadi _ di nama file
			$filenm10 = str_replace(".", "_", $filenm10) . "." . pathinfo($_FILES['tnib']['name'], PATHINFO_EXTENSION);

			$config9['upload_path'] = 'berkasuploads/';
			$config9['file_name'] = $filenm10;
			$config9['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config9['overwrite'] = true;
			$config9['max_size'] = 10000;
			$config9['max_width'] = 10240;
			$config9['max_height'] = 7680;

			$this->load->library('upload', $config9);
			$this->upload->initialize($config9);
			$this->upload->do_upload('tnib');
		}

		// Jika ada input post dengan nama tsku
		if (!empty($_FILES['tsku']['name'])) {
			$filenm11 = $tg . '-SKU-' . $_FILES['tsku']['name'];

			// removed spaces from filename
			$filenm11 = str_replace(" ", "", $filenm11);

			// ubah . menjadi _ di nama file
			$filenm11 = str_replace(".", "_", $filenm11) . "." . pathinfo($_FILES['tsku']['name'], PATHINFO_EXTENSION);

			$config10['upload_path'] = 'berkasuploads/';
			$config10['file_name'] = $filenm11;
			$config10['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config10['overwrite'] = true;
			$config10['max_size'] = 10000;
			$config10['max_width'] = 10240;
			$config10['max_height'] = 7680;

			$this->load->library('upload', $config10);
			$this->upload->initialize($config10);
			$this->upload->do_upload('tsku');
		}

		// Jika ada input post dengan nama tnpwpperusahaan
		if (!empty($_FILES['tnpwpperusahaan']['name'])) {
			$filenm12 = $tg . '-NPWP-PERUSAHAAN-' . $_FILES['tnpwpperusahaan']['name'];

			// removed spaces from filename
			$filenm12 = str_replace(" ", "", $filenm12);

			// ubah . menjadi _ di nama file
			$filenm12 = str_replace(".", "_", $filenm12) . "." . pathinfo($_FILES['tnpwpperusahaan']['name'], PATHINFO_EXTENSION);

			$config11['upload_path'] = 'berkasuploads/';
			$config11['file_name'] = $filenm12;
			$config11['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config11['overwrite'] = true;
			$config11['max_size'] = 10000;
			$config11['max_width'] = 10240;
			$config11['max_height'] = 7680;

			$this->load->library('upload', $config11);
			$this->upload->initialize($config11);
			$this->upload->do_upload('tnpwpperusahaan');
		}

		// Jika ada input post dengan nama tlaporanlaba
		if (!empty($_FILES['tlaporanlaba']['name'])) {
			$filenm13 = $tg . '-LAPORAN-LABA-' . $_FILES['tlaporanlaba']['name'];

			// removed spaces from filename
			$filenm13 = str_replace(" ", "", $filenm13);

			// ubah . menjadi _ di nama file
			$filenm13 = str_replace(".", "_", $filenm13) . "." . pathinfo($_FILES['tlaporanlaba']['name'], PATHINFO_EXTENSION);

			$config12['upload_path'] = 'berkasuploads/';
			$config12['file_name'] = $filenm13;
			$config12['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config12['overwrite'] = true;
			$config12['max_size'] = 10000;
			$config12['max_width'] = 10240;
			$config12['max_height'] = 7680;

			$this->load->library('upload', $config12);
			$this->upload->initialize($config12);
			$this->upload->do_upload('tlaporanlaba');
		}

		// Jika ada input post dengan nama trekeningkoranusaha
		if (!empty($_FILES['trekeningkoranusaha']['name'])) {
			$filenm14 = $tg . '-REKENING-KORAN-' . $_FILES['trekeningkoranusaha']['name'];

			// removed spaces from filename
			$filenm14 = str_replace(" ", "", $filenm14);

			// ubah . menjadi _ di nama file
			$filenm14 = str_replace(".", "_", $filenm14) . "." . pathinfo($_FILES['trekeningkoranusaha']['name'], PATHINFO_EXTENSION);

			$config13['upload_path'] = 'berkasuploads/';
			$config13['file_name'] = $filenm14;
			$config13['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config13['overwrite'] = true;
			$config13['max_size'] = 10000;
			$config13['max_width'] = 10240;
			$config13['max_height'] = 7680;

			$this->load->library('upload', $config13);
			$this->upload->initialize($config13);
			$this->upload->do_upload('trekeningkoranusaha');
		}

		// Jika ada input post dengan nama tfototempatusahasatu
		if (!empty($_FILES['tfototempatusahasatu']['name'])) {
			$filenm15 = $tg . '-FOTO-TEMPAT-SATU-' . $_FILES['tfototempatusahasatu']['name'];

			// removed spaces from filename
			$filenm15 = str_replace(" ", "", $filenm15);

			// ubah . menjadi _ di nama file
			$filenm15 = str_replace(".", "_", $filenm15) . "." . pathinfo($_FILES['tfototempatusahasatu']['name'], PATHINFO_EXTENSION);

			$config14['upload_path'] = 'berkasuploads/';
			$config14['file_name'] = $filenm15;
			$config14['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config14['overwrite'] = true;
			$config14['max_size'] = 10000;
			$config14['max_width'] = 10240;
			$config14['max_height'] = 7680;

			$this->load->library('upload', $config14);
			$this->upload->initialize($config14);
			$this->upload->do_upload('tfototempatusahasatu');
		}

		// Jika ada input post dengan nama tfototempatusahadua
		if (!empty($_FILES['tfototempatusahadua']['name'])) {
			$filenm16 = $tg . '-FOTO-TEMPAT-DUA-' . $_FILES['tfototempatusahadua']['name'];

			// removed spaces from filename
			$filenm16 = str_replace(" ", "", $filenm16);

			// ubah . menjadi _ di nama file
			$filenm16 = str_replace(".", "_", $filenm16) . "." . pathinfo($_FILES['tfototempatusahadua']['name'], PATHINFO_EXTENSION);

			$config15['upload_path'] = 'berkasuploads/';
			$config15['file_name'] = $filenm16;
			$config15['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config15['overwrite'] = true;
			$config15['max_size'] = 10000;
			$config15['max_width'] = 10240;
			$config15['max_height'] = 7680;

			$this->load->library('upload', $config15);
			$this->upload->initialize($config15);
			$this->upload->do_upload('tfototempatusahadua');
		}

		// Jika ada input post dengan nama tfototempatusahatiga
		if (!empty($_FILES['tfototempatusahatiga']['name'])) {
			$filenm17 = $tg . '-FOTO-TEMPAT-TIGA-' . $_FILES['tfototempatusahatiga']['name'];

			// removed spaces from filename
			$filenm17 = str_replace(" ", "", $filenm17);

			// ubah . menjadi _ di nama file
			$filenm17 = str_replace(".", "_", $filenm17) . "." . pathinfo($_FILES['tfototempatusahatiga']['name'], PATHINFO_EXTENSION);

			$config16['upload_path'] = 'berkasuploads/';
			$config16['file_name'] = $filenm17;
			$config16['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config16['overwrite'] = true;
			$config16['max_size'] = 10000;
			$config16['max_width'] = 10240;
			$config16['max_height'] = 7680;

			$this->load->library('upload', $config16);
			$this->upload->initialize($config16);
			$this->upload->do_upload('tfototempatusahatiga');
		}

		// Data array berdasarkan input post yang ada
		$data = array(
			'id_berkas' => "",
			'id_booking' => $this->input->post('tidbooking'),
			'berkas_kpr' => $this->input->post('tket'),
			'tgl_upload' => $tgl,
			'kk' => $filenm2 ? $filenm2 : NULL,
			'bpjs' => $filenm4 ? $filenm4 : NULL,
			'buku_nikah' => $filenm5 ? $filenm5 : NULL,
			'foto' => $filenm6 ? $filenm6 : NULL,
			'surat_keterangan_kerja' => $filenm7 ? $filenm7 : NULL,
			'slip_gaji' => $filenm8 ? $filenm8 : NULL,
			'rekening_koran_payroll' => $filenm9 ? $filenm9 : NULL,
			'nib' => $filenm10 ? $filenm10 : NULL,
			'sku' => $filenm11 ? $filenm11 : NULL,
			'npwp_perusahaan' => $filenm12 ? $filenm12 : NULL,
			'laporan_laba' => $filenm13 ? $filenm13 : NULL,
			'rekening_koran_usaha' => $filenm14 ? $filenm14 : NULL,
			'foto_tempat_usaha_satu' => $filenm15 ? $filenm15 : NULL,
			'foto_tempat_usaha_dua' => $filenm16 ? $filenm16 : NULL,
			'foto_tempat_usaha_tiga' => $filenm17 ? $filenm17 : NULL,
			'keterangan' => NULL,
			'status' => 'Pending'
		);

		$this->m_berkas_kpr->insert_data($data, 'tb_berkas');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span></button></div>');

		redirect('berkas_kpr');
	}

	public function edit($id_berkas)
	{
		$where = array('id_berkas' => $id_berkas);
		$data['berkas'] = $this->m_berkas_kpr->edit_data($where, 'tb_berkas')->row_array();

		$this->load->model('m_booking');

		$iduser = $this->session->userdata('iduser');
		$where_nik = array('nik_konsumen' => $iduser);
		$data['booking'] = $this->m_booking->edit_data($where_nik, 'tb_booking')->result();
		$data['title'] = 'Edit Data Berkas';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/konsumen');
		$this->load->view('v_berkas_kpr_edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_aksi($id_berkas)
	{
		$where = array('id_berkas' => $id_berkas);
		$data['berkas'] = $this->m_berkas_kpr->edit_data($where, 'tb_berkas')->result_array();

		$berkas = $this->m_berkas_kpr->edit_data($where, 'tb_berkas')->row_array();

		$tg = date('Y-m-d-H-i-s');
		$tgl = date('Y-m-d');

		// $filenm1 = NULL;
		$filenm2 = NULL;
		// $filenm3 = NULL;
		$filenm4 = NULL;
		$filenm5 = NULL;
		$filenm6 = NULL;
		$filenm7 = NULL;
		$filenm8 = NULL;
		$filenm9 = NULL;
		$filenm10 = NULL;
		$filenm11 = NULL;
		$filenm12 = NULL;
		$filenm13 = NULL;
		$filenm14 = NULL;
		$filenm15 = NULL;
		$filenm16 = NULL;
		$filenm17 = NULL;

		// Jika ada input post dengan nama tktp
		// if (!empty($_FILES['tktp']['name'])) {
		// 	$filenm1 = $tg . '-KTP-' . $_FILES['tktp']['name'];

		// 	// removed spaces from filename
		// 	$filenm1 = str_replace(" ", "", $filenm1);

		// 	// ubah . menjadi _ di nama file
		// 	$filenm1 = str_replace(".", "_", $filenm1) . "." . pathinfo($_FILES['tktp']['name'], PATHINFO_EXTENSION);

		// 	$config['upload_path']          = 'berkasuploads/';
		// 	$config['file_name']          	= $filenm1;
		// 	$config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		// 	$config['overwrite']            = true;
		// 	$config['max_size']             = 10000;
		// 	$config['max_width']            = 10240;
		// 	$config['max_height']           = 7680;

		// 	$this->load->library('upload', $config);
		// 	$this->upload->do_upload('tktp');
		// }

		// Jika ada input post dengan nama tkk
		if (!empty($_FILES['tkk']['name'])) {

			// Initialize 

			$filenm2 = $tg . '-KK-' . $_FILES['tkk']['name'];

			// removed spaces from filename
			$filenm2 = str_replace(" ", "", $filenm2);

			// ubah . menjadi _ di nama file
			$filenm2 = str_replace(".", "_", $filenm2) . "." . pathinfo($_FILES['tkk']['name'], PATHINFO_EXTENSION);

			$config1['upload_path'] = 'berkasuploads/';
			$config1['file_name'] = $filenm2;
			$config1['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config1['overwrite'] = true;
			$config1['max_size'] = 10000;
			$config1['max_width'] = 10240;
			$config1['max_height'] = 7680;

			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			$this->upload->do_upload('tkk');
		}

		// Jika ada input post dengan nama tnpwp
		// if (!empty($_FILES['tnpwp']['name'])) {
		// 	$filenm3 = $tg . '-NPWP-'  . $_FILES['tnpwp']['name'];

		// 	// removed spaces from filename
		// 	$filenm3 = str_replace(" ", "", $filenm3);

		// 	// ubah . menjadi _ di nama file
		// 	$filenm3 = str_replace(".", "_", $filenm3) . "." . pathinfo($_FILES['tnpwp']['name'], PATHINFO_EXTENSION);

		// 	$config2['upload_path']          = 'berkasuploads/';
		// 	$config2['file_name']          = $filenm3;
		// 	$config2['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		// 	$config2['overwrite']            = true;
		// 	$config2['max_size']             = 10000;
		// 	$config2['max_width']            = 10240;
		// 	$config2['max_height']           = 7680;

		// 	$this->load->library('upload', $config2);
		// 	$this->upload->initialize($config2);
		// 	$this->upload->do_upload('tnpwp');
		// }

		// Jika ada input post dengan nama tbpjs
		if (!empty($_FILES['tbpjs']['name'])) {
			$filenm4 = $tg . '-BPJS-' . $_FILES['tbpjs']['name'];

			// removed spaces from filename
			$filenm4 = str_replace(" ", "", $filenm4);

			// ubah . menjadi _ di nama file
			$filenm4 = str_replace(".", "_", $filenm4) . "." . pathinfo($_FILES['tbpjs']['name'], PATHINFO_EXTENSION);

			$config3['upload_path'] = 'berkasuploads/';
			$config3['file_name'] = $filenm4;
			$config3['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config3['overwrite'] = true;
			$config3['max_size'] = 10000;
			$config3['max_width'] = 10240;
			$config3['max_height'] = 7680;

			$this->load->library('upload', $config3);
			$this->upload->initialize($config3);
			$this->upload->do_upload('tbpjs');
		}

		// Jika ada input post dengan nama tbukunikah
		if (!empty($_FILES['tbukunikah']['name'])) {
			$filenm5 = $tg . '-BUKU-NIKAH-' . $_FILES['tbukunikah']['name'];

			// removed spaces from filename
			$filenm5 = str_replace(" ", "", $filenm5);

			// ubah . menjadi _ di nama file
			$filenm5 = str_replace(".", "_", $filenm5) . "." . pathinfo($_FILES['tbukunikah']['name'], PATHINFO_EXTENSION);

			$config4['upload_path'] = 'berkasuploads/';
			$config4['file_name'] = $filenm5;
			$config4['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config4['overwrite'] = true;
			$config4['max_size'] = 10000;
			$config4['max_width'] = 10240;
			$config4['max_height'] = 7680;

			$this->load->library('upload', $config4);
			$this->upload->initialize($config4);
			$this->upload->do_upload('tbukunikah');
		}

		// Jika ada input post dengan nama tpasfoto
		if (!empty($_FILES['tpasfoto']['name'])) {
			$filenm6 = $tg . '-PAS-FOTO-' . $_FILES['tpasfoto']['name'];

			// removed spaces from filename
			$filenm6 = str_replace(" ", "", $filenm6);

			// ubah . menjadi _ di nama file
			$filenm6 = str_replace(".", "_", $filenm6) . "." . pathinfo($_FILES['tpasfoto']['name'], PATHINFO_EXTENSION);

			$config5['upload_path'] = 'berkasuploads/';
			$config5['file_name'] = $filenm6;
			$config5['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config5['overwrite'] = true;
			$config5['max_size'] = 10000;
			$config5['max_width'] = 10240;
			$config5['max_height'] = 7680;

			$this->load->library('upload', $config5);
			$this->upload->initialize($config5);
			$this->upload->do_upload('tpasfoto');
		}

		// Jika ada input post dengan nama tsuratketerangankerja
		if (!empty($_FILES['tsuratketerangankerja']['name'])) {
			$filenm7 = $tg . '-SURAT-KETERANGAN-KERJA-' . $_FILES['tsuratketerangankerja']['name'];

			// removed spaces from filename
			$filenm7 = str_replace(" ", "", $filenm7);

			// ubah . menjadi _ di nama file
			$filenm7 = str_replace(".", "_", $filenm7) . "." . pathinfo($_FILES['tsuratketerangankerja']['name'], PATHINFO_EXTENSION);

			$config6['upload_path'] = 'berkasuploads/';
			$config6['file_name'] = $filenm7;
			$config6['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config6['overwrite'] = true;
			$config6['max_size'] = 10000;
			$config6['max_width'] = 10240;
			$config6['max_height'] = 7680;

			$this->load->library('upload', $config6);
			$this->upload->initialize($config6);
			$this->upload->do_upload('tsuratketerangankerja');
		}

		// Jika ada input post dengan nama tslipgaji
		if (!empty($_FILES['tslipgaji']['name'])) {
			$filenm8 = $tg . '-SLIP-GAJI-' . $_FILES['tslipgaji']['name'];

			// removed spaces from filename
			$filenm8 = str_replace(" ", "", $filenm8);

			// ubah . menjadi _ di nama file
			$filenm8 = str_replace(".", "_", $filenm8) . "." . pathinfo($_FILES['tslipgaji']['name'], PATHINFO_EXTENSION);

			$config7['upload_path'] = 'berkasuploads/';
			$config7['file_name'] = $filenm8;
			$config7['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config7['overwrite'] = true;
			$config7['max_size'] = 10000;
			$config7['max_width'] = 10240;
			$config7['max_height'] = 7680;

			$this->load->library('upload', $config7);
			$this->upload->initialize($config7);
			$this->upload->do_upload('tslipgaji');
		}

		// Jika ada input post dengan nama trekeningkoranpayroll
		if (!empty($_FILES['trekeningkoranpayroll']['name'])) {
			$filenm9 = $tg . '-REKENING-PAYROLL-' . $_FILES['trekeningkoranpayroll']['name'];

			// removed spaces from filename
			$filenm9 = str_replace(" ", "", $filenm9);

			// ubah . menjadi _ di nama file
			$filenm9 = str_replace(".", "_", $filenm9) . "." . pathinfo($_FILES['trekeningkoranpayroll']['name'], PATHINFO_EXTENSION);

			$config8['upload_path'] = 'berkasuploads/';
			$config8['file_name'] = $filenm9;
			$config8['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config8['overwrite'] = true;
			$config8['max_size'] = 10000;
			$config8['max_width'] = 10240;
			$config8['max_height'] = 7680;

			$this->load->library('upload', $config8);
			$this->upload->initialize($config8);
			$this->upload->do_upload('trekeningkoranpayroll');
		}

		// Jika ada input post dengan nama tnib
		if (!empty($_FILES['tnib']['name'])) {
			$filenm10 = $tg . '-NIB-' . $_FILES['tnib']['name'];

			// removed spaces from filename
			$filenm10 = str_replace(" ", "", $filenm10);

			// ubah . menjadi _ di nama file
			$filenm10 = str_replace(".", "_", $filenm10) . "." . pathinfo($_FILES['tnib']['name'], PATHINFO_EXTENSION);

			$config9['upload_path'] = 'berkasuploads/';
			$config9['file_name'] = $filenm10;
			$config9['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config9['overwrite'] = true;
			$config9['max_size'] = 10000;
			$config9['max_width'] = 10240;
			$config9['max_height'] = 7680;

			$this->load->library('upload', $config9);
			$this->upload->initialize($config9);
			$this->upload->do_upload('tnib');
		}

		// Jika ada input post dengan nama tsku
		if (!empty($_FILES['tsku']['name'])) {
			$filenm11 = $tg . '-SKU-' . $_FILES['tsku']['name'];

			// removed spaces from filename
			$filenm11 = str_replace(" ", "", $filenm11);

			// ubah . menjadi _ di nama file
			$filenm11 = str_replace(".", "_", $filenm11) . "." . pathinfo($_FILES['tsku']['name'], PATHINFO_EXTENSION);

			$config10['upload_path'] = 'berkasuploads/';
			$config10['file_name'] = $filenm11;
			$config10['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config10['overwrite'] = true;
			$config10['max_size'] = 10000;
			$config10['max_width'] = 10240;
			$config10['max_height'] = 7680;

			$this->load->library('upload', $config10);
			$this->upload->initialize($config10);
			$this->upload->do_upload('tsku');
		}

		// Jika ada input post dengan nama tnpwpperusahaan
		if (!empty($_FILES['tnpwpperusahaan']['name'])) {
			$filenm12 = $tg . '-NPWP-PERUSAHAAN-' . $_FILES['tnpwpperusahaan']['name'];

			// removed spaces from filename
			$filenm12 = str_replace(" ", "", $filenm12);

			// ubah . menjadi _ di nama file
			$filenm12 = str_replace(".", "_", $filenm12) . "." . pathinfo($_FILES['tnpwpperusahaan']['name'], PATHINFO_EXTENSION);

			$config11['upload_path'] = 'berkasuploads/';
			$config11['file_name'] = $filenm12;
			$config11['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config11['overwrite'] = true;
			$config11['max_size'] = 10000;
			$config11['max_width'] = 10240;
			$config11['max_height'] = 7680;

			$this->load->library('upload', $config11);
			$this->upload->initialize($config11);
			$this->upload->do_upload('tnpwpperusahaan');
		}

		// Jika ada input post dengan nama tlaporanlaba
		if (!empty($_FILES['tlaporanlaba']['name'])) {
			$filenm13 = $tg . '-LAPORAN-LABA-' . $_FILES['tlaporanlaba']['name'];

			// removed spaces from filename
			$filenm13 = str_replace(" ", "", $filenm13);

			// ubah . menjadi _ di nama file
			$filenm13 = str_replace(".", "_", $filenm13) . "." . pathinfo($_FILES['tlaporanlaba']['name'], PATHINFO_EXTENSION);

			$config12['upload_path'] = 'berkasuploads/';
			$config12['file_name'] = $filenm13;
			$config12['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config12['overwrite'] = true;
			$config12['max_size'] = 10000;
			$config12['max_width'] = 10240;
			$config12['max_height'] = 7680;

			$this->load->library('upload', $config12);
			$this->upload->initialize($config12);
			$this->upload->do_upload('tlaporanlaba');
		}

		// Jika ada input post dengan nama trekeningkoranusaha
		if (!empty($_FILES['trekeningkoranusaha']['name'])) {
			$filenm14 = $tg . '-REKENING-KORAN-' . $_FILES['trekeningkoranusaha']['name'];

			// removed spaces from filename
			$filenm14 = str_replace(" ", "", $filenm14);

			// ubah . menjadi _ di nama file
			$filenm14 = str_replace(".", "_", $filenm14) . "." . pathinfo($_FILES['trekeningkoranusaha']['name'], PATHINFO_EXTENSION);

			$config13['upload_path'] = 'berkasuploads/';
			$config13['file_name'] = $filenm14;
			$config13['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config13['overwrite'] = true;
			$config13['max_size'] = 10000;
			$config13['max_width'] = 10240;
			$config13['max_height'] = 7680;

			$this->load->library('upload', $config13);
			$this->upload->initialize($config13);
			$this->upload->do_upload('trekeningkoranusaha');
		}

		// Jika ada input post dengan nama tfototempatusahasatu
		if (!empty($_FILES['tfototempatusahasatu']['name'])) {
			$filenm15 = $tg . '-FOTO-TEMPAT-SATU-' . $_FILES['tfototempatusahasatu']['name'];

			// removed spaces from filename
			$filenm15 = str_replace(" ", "", $filenm15);

			// ubah . menjadi _ di nama file
			$filenm15 = str_replace(".", "_", $filenm15) . "." . pathinfo($_FILES['tfototempatusahasatu']['name'], PATHINFO_EXTENSION);

			$config14['upload_path'] = 'berkasuploads/';
			$config14['file_name'] = $filenm15;
			$config14['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config14['overwrite'] = true;
			$config14['max_size'] = 10000;
			$config14['max_width'] = 10240;
			$config14['max_height'] = 7680;

			$this->load->library('upload', $config14);
			$this->upload->initialize($config14);
			$this->upload->do_upload('tfototempatusahasatu');
		}

		// Jika ada input post dengan nama tfototempatusahadua
		if (!empty($_FILES['tfototempatusahadua']['name'])) {
			$filenm16 = $tg . '-FOTO-TEMPAT-DUA-' . $_FILES['tfototempatusahadua']['name'];

			// removed spaces from filename
			$filenm16 = str_replace(" ", "", $filenm16);

			// ubah . menjadi _ di nama file
			$filenm16 = str_replace(".", "_", $filenm16) . "." . pathinfo($_FILES['tfototempatusahadua']['name'], PATHINFO_EXTENSION);

			$config15['upload_path'] = 'berkasuploads/';
			$config15['file_name'] = $filenm16;
			$config15['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config15['overwrite'] = true;
			$config15['max_size'] = 10000;
			$config15['max_width'] = 10240;
			$config15['max_height'] = 7680;

			$this->load->library('upload', $config15);
			$this->upload->initialize($config15);
			$this->upload->do_upload('tfototempatusahadua');
		}

		// Jika ada input post dengan nama tfototempatusahatiga
		if (!empty($_FILES['tfototempatusahatiga']['name'])) {
			$filenm17 = $tg . '-FOTO-TEMPAT-TIGA-' . $_FILES['tfototempatusahatiga']['name'];

			// removed spaces from filename
			$filenm17 = str_replace(" ", "", $filenm17);

			// ubah . menjadi _ di nama file
			$filenm17 = str_replace(".", "_", $filenm17) . "." . pathinfo($_FILES['tfototempatusahatiga']['name'], PATHINFO_EXTENSION);

			$config16['upload_path'] = 'berkasuploads/';
			$config16['file_name'] = $filenm17;
			$config16['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config16['overwrite'] = true;
			$config16['max_size'] = 10000;
			$config16['max_width'] = 10240;
			$config16['max_height'] = 7680;

			$this->load->library('upload', $config16);
			$this->upload->initialize($config16);
			$this->upload->do_upload('tfototempatusahatiga');
		}


		// Data array berdasarkan input post yang ada
		$data = array(
			'id_booking' => $this->input->post('tidbooking'),
			'berkas_kpr' => $this->input->post('tket'),
			'tgl_upload' => $tgl,
			'kk' => $filenm2 ? $filenm2 : $berkas['kk'],
			'bpjs' => $filenm4 ? $filenm4 : $berkas['bpjs'],
			'buku_nikah' => $filenm5 ? $filenm5 : $berkas['buku_nikah'],
			'foto' => $filenm6 ? $filenm6 : $berkas['foto'],
			'surat_keterangan_kerja' => $filenm7 ? $filenm7 : $berkas['surat_keterangan_kerja'],
			'slip_gaji' => $filenm8 ? $filenm8 : $berkas['slip_gaji'],
			'rekening_koran_payroll' => $filenm9 ? $filenm9 : $berkas['rekening_koran_payroll'],
			'nib' => $filenm10 ? $filenm10 : $berkas['nib'],
			'sku' => $filenm11 ? $filenm11 : $berkas['sku'],
			'npwp_perusahaan' => $filenm12 ? $filenm12 : $berkas['npwp_perusahaan'],
			'laporan_laba' => $filenm13 ? $filenm13 : $berkas['laporan_laba'],
			'rekening_koran_usaha' => $filenm14 ? $filenm14 : $berkas['rekening_koran_usaha'],
			'foto_tempat_usaha_satu' => $filenm15 ? $filenm15 : $berkas['foto_tempat_usaha_satu'],
			'foto_tempat_usaha_dua' => $filenm16 ? $filenm16 : $berkas['foto_tempat_usaha_dua'],
			'foto_tempat_usaha_tiga' => $filenm17 ? $filenm17 : $berkas['foto_tempat_usaha_tiga'],
			'keterangan' => $berkas['keterangan'],
			'status' => "Pending"
		);

		$where_berkas = array(
			'id_berkas' => $berkas['id_berkas']
		);

		$this->m_berkas_kpr->update_data($where_berkas, $data, 'tb_berkas');

		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');

		redirect('berkas_kpr');
	}

	public function update_status($id_berkas)
	{
		$data = array(
			'status' => $this->input->post('tstatus'),
			'keterangan' => $this->input->post('tketerangan')
		);

		$where = array(
			'id_berkas' => $id_berkas
		);

		$this->m_berkas_kpr->update_data($where, $data, 'tb_berkas');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');

		redirect('berkas_kpr/berkasread');
	}
	public function marketingupdate_status($id_berkas)
	{
		$data = array(
			'status' => $this->input->post('tstatus'),
			'keterangan' => $this->input->post('tketerangan')
		);

		$where = array(
			'id_berkas' => $id_berkas
		);

		$this->m_berkas_kpr->update_data($where, $data, 'tb_berkas');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button></div>');

		redirect('berkas_kpr/berkasreadmarketing');
	}

	public function delete($id_berkas)
	{
		$where = array('id_berkas' => $id_berkas);

		$this->m_berkas_kpr->delete($where, 'tb_berkas');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button></div>');

		redirect('berkas_kpr');
	}
}
