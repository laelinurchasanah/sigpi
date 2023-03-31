<?php

defined('BASEPATH') or exit('No direct script access allowed');

// Load librari PhpSpreadsheet
require './vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
	}

	public function index()
	{
		$data['title'] = 'Laporan';

		$data['laporan'] = $this->m_laporan->get_data()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/admin', $data);
		$this->load->view('v_laporan', $data);
		$this->load->view('templates/footer');
	}
	public function laporanreadmanager()
	{
		$data['title'] = 'Laporan';

		$data['laporan'] = $this->m_laporan->get_data()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/manager', $data);
		$this->load->view('v_laporan', $data);
		$this->load->view('templates/footer');
	}

	public function export_excel()
	{
		// Buat object Spreadsheet
		$spreadsheet = new Spreadsheet();

		$sheet = $spreadsheet->getActiveSheet();

		// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$styleArray = [
			'font' => [
				'bold' => true,
				'color' => ['argb' => '000000'],
			],
			'alignment' => [
				'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
			],
			'borders' => [
				'top' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
				'bottom' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
				'left' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
				'right' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
			'fill' => [
				'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
				'startColor' => [
					'argb' => 'FFA500',
				],
			],
		];

		// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
		$styleArray2 = [
			'font' => [
				'bold' => false,
				'color' => ['argb' => '000000'],
			],
			'alignment' => [
				'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
			],
			'borders' => [
				'top' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
				'bottom' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
				'left' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
				'right' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];

		// Set kolom A1 dengan tulisan "Laporan Penjualan"
		$sheet->setCellValue('A1', 'Laporan Penjualan');
		$sheet->mergeCells('A1:H1'); // Set Merge Cell pada kolom A1 sampai E1
		$sheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1

		// Buat header tabel nya pada baris ke 3
		$sheet->setCellValue('A3', "No"); // Set kolom A3 dengan tulisan "NO"
		$sheet->setCellValue('B3', "Marketing"); // Set kolom B3 dengan tulisan "NIS"
		$sheet->setCellValue('C3', "Konsumen"); // Set kolom C3 dengan tulisan "NAMA"
		$sheet->setCellValue('D3', "Harga"); // Set kolom C3 dengan tulisan "NAMA"
		$sheet->setCellValue('E3', "Kavling"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
		$sheet->setCellValue('F3', "Tanggal Booking"); // Set kolom E3 dengan tulisan "ALAMAT"
		$sheet->setCellValue('G3', "Tanggal Akad"); // Set kolom E3 dengan tulisan "ALAMAT"
		$sheet->setCellValue('H3', "Status Akad"); // Set kolom E3 dengan tulisan "ALAMAT"

		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$sheet->getStyle('A1')->applyFromArray($styleArray);
		$sheet->getStyle('A3')->applyFromArray($styleArray);
		$sheet->getStyle('B3')->applyFromArray($styleArray);
		$sheet->getStyle('C3')->applyFromArray($styleArray);
		$sheet->getStyle('D3')->applyFromArray($styleArray);
		$sheet->getStyle('E3')->applyFromArray($styleArray);
		$sheet->getStyle('F3')->applyFromArray($styleArray);
		$sheet->getStyle('G3')->applyFromArray($styleArray);
		$sheet->getStyle('H3')->applyFromArray($styleArray);

		// Panggil data dari model
		$data = $this->m_laporan->get_data()->result();

		$no = 1;
		$numrow = 4;

		// Foreach untuk menampilkan data
		foreach ($data as $row) {
			$sheet->setCellValue('A' . $numrow, $no);
			$sheet->setCellValue('B' . $numrow, $row->nama_marketing);
			$sheet->setCellValue('C' . $numrow, $row->nama_konsumen);
			$sheet->setCellValue('D' . $numrow, $row->harga);
			$sheet->setCellValue('E' . $numrow, $row->kavling);
			$sheet->setCellValue('F' . $numrow, $row->tgl_booking);
			$sheet->setCellValue('G' . $numrow, $row->tgl_akad);
			$sheet->setCellValue('H' . $numrow, $row->status_akad);

			// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
			$sheet->getStyle('A' . $numrow)->applyFromArray($styleArray2);
			$sheet->getStyle('B' . $numrow)->applyFromArray($styleArray2);
			$sheet->getStyle('C' . $numrow)->applyFromArray($styleArray2);
			$sheet->getStyle('D' . $numrow)->applyFromArray($styleArray2);
			$sheet->getStyle('E' . $numrow)->applyFromArray($styleArray2);
			$sheet->getStyle('F' . $numrow)->applyFromArray($styleArray2);
			$sheet->getStyle('G' . $numrow)->applyFromArray($styleArray2);
			$sheet->getStyle('H' . $numrow)->applyFromArray($styleArray2);

			$no++;
			$numrow++;
		}

		// Set width kolom
		$sheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
		$sheet->getColumnDimension('B')->setWidth(20); // Set width kolom B
		$sheet->getColumnDimension('C')->setWidth(20); // Set width kolom C
		$sheet->getColumnDimension('D')->setWidth(20); // Set width kolom D
		$sheet->getColumnDimension('E')->setWidth(20); // Set width kolom E
		$sheet->getColumnDimension('F')->setWidth(20); // Set width kolom F
		$sheet->getColumnDimension('G')->setWidth(20); // Set width kolom G
		$sheet->getColumnDimension('H')->setWidth(20); // Set width kolom G

		// Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
		$sheet->getDefaultRowDimension()->setRowHeight(-1);

		// Set orientasi kertas jadi LANDSCAPE
		$spreadsheet->getActiveSheet()->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

		// Set judul file excel nya
		$spreadsheet->getActiveSheet(0)->setTitle("Laporan Penjualan");
		$spreadsheet->setActiveSheetIndex(0);

		// Proses file excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Laporan Penjualan.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');

		// Write
		$write = new Xlsx($spreadsheet);

		// Save
		$write->save('php://output');
	}
}