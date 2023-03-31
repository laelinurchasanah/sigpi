-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2023 at 03:12 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpi_fix`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `nik_admin` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama_admin` text NOT NULL,
  `alamat_admin` text NOT NULL,
  `telp_admin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`nik_admin`, `id_user`, `nama_admin`, `alamat_admin`, `telp_admin`) VALUES
('10000001', '10000001', 'Admin', 'bogor', '081292514377');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akad`
--

CREATE TABLE `tb_akad` (
  `id_akad` int NOT NULL,
  `id_kpr` int NOT NULL,
  `tgl_akad` date DEFAULT NULL,
  `tgl_jadwal_akad` date DEFAULT NULL,
  `status_akad` enum('terlaksana','belum terlaksana') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akad`
--

INSERT INTO `tb_akad` (`id_akad`, `id_kpr`, `tgl_akad`, `tgl_jadwal_akad`, `status_akad`) VALUES
(1, 6, '2023-01-07', '2023-01-07', 'terlaksana'),
(2, 7, '2023-01-07', '2023-01-07', 'terlaksana'),
(3, 8, '2023-01-07', '2023-01-07', 'terlaksana'),
(6, 9, '2023-01-12', '2023-01-14', 'terlaksana'),
(7, 11, '2023-01-12', '2023-01-13', 'terlaksana'),
(8, 12, '2023-01-12', '2023-01-16', 'terlaksana'),
(9, 13, '2023-01-14', '2023-01-16', 'terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` int NOT NULL,
  `bank` text NOT NULL,
  `cabang` text NOT NULL,
  `alamat_bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`id_bank`, `bank`, `cabang`, `alamat_bank`) VALUES
(1, 'BTN', 'Bogor', 'bogor'),
(2, 'BTN Syariah', 'Depok', 'Depok'),
(3, 'Mandiri', 'Jakarta Pusat', 'Jakarta Pusat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int NOT NULL,
  `id_booking` int NOT NULL,
  `berkas_kpr` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `kk` text NOT NULL,
  `bpjs` text NOT NULL,
  `buku_nikah` text NOT NULL,
  `foto` text NOT NULL,
  `surat_keterangan_kerja` text,
  `slip_gaji` text,
  `rekening_koran_payroll` text,
  `nib` text,
  `sku` text,
  `npwp_perusahaan` text,
  `laporan_laba` text,
  `rekening_koran_usaha` text,
  `foto_tempat_usaha_satu` text,
  `foto_tempat_usaha_dua` text,
  `foto_tempat_usaha_tiga` text,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`id_berkas`, `id_booking`, `berkas_kpr`, `tgl_upload`, `kk`, `bpjs`, `buku_nikah`, `foto`, `surat_keterangan_kerja`, `slip_gaji`, `rekening_koran_payroll`, `nib`, `sku`, `npwp_perusahaan`, `laporan_laba`, `rekening_koran_usaha`, `foto_tempat_usaha_satu`, `foto_tempat_usaha_dua`, `foto_tempat_usaha_tiga`, `keterangan`, `status`) VALUES
(1, 2, 'Karyawan', '2022-12-29', '2022-12-29-17-23-54-KK-gm_png.png', '2022-12-29-17-23-54-BPJS-WhatsAppImage2022-12-15at19_43_58_jpeg.jpeg', '2022-12-29-17-23-54-BUKU-NIKAH-WhatsAppImage2022-12-15at19_44_00(2)_jpeg.jpeg', '2022-12-29-17-23-54-PAS-FOTO-1671951311903_png.png', '2022-12-29-17-23-54-SURAT-KETERANGAN-KERJA-SPR-GIA-A1-IKA-1_page-0001_jpg.jpg', '2022-12-29-17-23-54-SLIP-GAJI-HISTORITRANSAKSIika_pdf.pdf', '2022-12-29-17-23-54-REKENING-PAYROLL-8465372695Sep2022_pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lengkap', 'Diterima'),
(2, 3, 'Karyawan', '2022-12-29', '2022-12-29-17-42-23-KK-1567541(1)_jpg.jpg', '2022-12-29-17-42-23-BPJS-1631256_jpg.jpg', '2022-12-29-17-42-23-BUKU-NIKAH-1864812_jpg.jpg', '2022-12-29-17-42-23-PAS-FOTO-5332109_jpg.jpg', '2022-12-29-17-42-23-SURAT-KETERANGAN-KERJA-5332213_jpg.jpg', '2022-12-29-17-42-23-SLIP-GAJI-bg1_png.png', '2022-12-29-17-42-23-REKENING-PAYROLL-mina_jpg.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Diterima'),
(3, 12, 'Karyawan', '2023-01-07', '2023-01-07-03-50-05-KK-buktibayar2_jpg.jpg', '2023-01-07-03-50-05-BPJS-buktibayar2_jpg.jpg', '2023-01-07-03-50-05-BUKU-NIKAH-buktibayar2_jpg.jpg', '2023-01-07-03-50-05-PAS-FOTO-buktibayar2_jpg.jpg', '2023-01-07-03-50-05-SURAT-KETERANGAN-KERJA-buktibayar2_jpg.jpg', '2023-01-07-03-50-05-SLIP-GAJI-buktibayar2_jpg.jpg', '2023-01-07-03-50-05-REKENING-PAYROLL-buktibayar2_jpg.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Diterima'),
(4, 15, 'Karyawan', '2023-01-07', '2023-01-07-13-50-56-KK-kwitansi2_png.png', '2023-01-07-13-50-56-BPJS-kwitansi2_png.png', '2023-01-07-13-50-56-BUKU-NIKAH-kwitansi2_png.png', '2023-01-07-13-50-56-PAS-FOTO-kwitansi2_png.png', '2023-01-07-13-50-56-SURAT-KETERANGAN-KERJA-kwitansi2_png.png', '2023-01-07-13-50-56-SLIP-GAJI-kwitansi2_png.png', '2023-01-07-13-50-56-REKENING-PAYROLL-kwitansi2_png.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Diterima'),
(5, 17, 'Karyawan', '2023-01-12', '2023-01-12-03-33-48-KK-saldoblokir_jpeg.jpeg', '2023-01-12-03-33-48-BPJS-kwitansisaldoblokir_jpeg.jpeg', '2023-01-12-03-33-48-BUKU-NIKAH-kwitansisaldoblokir_jpeg.jpeg', '2023-01-12-03-33-48-PAS-FOTO-kwitansisaldoblokir_jpeg.jpeg', '2023-01-12-03-33-48-SURAT-KETERANGAN-KERJA-kwitansisaldoblokir_jpeg.jpeg', '2023-01-12-03-33-48-SLIP-GAJI-kwitansisaldoblokir_jpeg.jpeg', '2023-01-12-03-33-48-REKENING-PAYROLL-kwitansisaldoblokir_jpeg.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Diterima'),
(6, 20, 'Karyawan', '2023-01-12', '2023-01-12-05-49-03-KK-db-skripsi_PNG.PNG', '2023-01-12-05-49-03-BPJS-db-skripsi_PNG.PNG', '2023-01-12-05-49-03-BUKU-NIKAH-db-skripsi_PNG.PNG', '2023-01-12-05-49-03-PAS-FOTO-Screenshot2023-01-04214400_png.png', '2023-01-12-05-49-03-SURAT-KETERANGAN-KERJA-relasi-gpi-fixed8jan_PNG.PNG', '2023-01-12-05-49-03-SLIP-GAJI-relasi-gpi-fixed8jan_PNG.PNG', '2023-01-12-05-49-03-REKENING-PAYROLL-relasi-gpi-fixed8jan_PNG.PNG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Diterima'),
(8, 24, 'Karyawan', '2023-01-12', '2023-01-12-23-38-54-KK-IMG_20220423_111207_jpg.jpg', '2023-01-12-23-38-54-BPJS-IMG_20220423_111207_jpg.jpg', '2023-01-12-23-38-54-BUKU-NIKAH-IMG_20220423_111207_jpg.jpg', '2023-01-12-23-38-54-PAS-FOTO-IMG_20220423_111207_jpg.jpg', '2023-01-12-23-38-54-SURAT-KETERANGAN-KERJA-IMG_20220423_111207_jpg.jpg', '2023-01-12-23-38-54-SLIP-GAJI-IMG_20220423_111207_jpg.jpg', '2023-01-12-23-38-54-REKENING-PAYROLL-IMG_20220423_111207_jpg.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Diterima'),
(9, 25, 'Karyawan', '2023-01-14', '2023-01-14-13-37-26-KK-screencapture-localhost-gpi-sertifikat-tambah-2023-01-13-21_01_32_png.png', '2023-01-14-13-37-26-BPJS-screencapture-localhost-gpi-sertifikat-tambah-2023-01-13-21_01_32_png.png', '2023-01-14-13-37-26-BUKU-NIKAH-screencapture-localhost-gpi-sertifikat-tambah-2023-01-13-21_01_32_png.png', '2023-01-14-13-37-26-PAS-FOTO-screencapture-localhost-gpi-sertifikat-tambah-2023-01-13-21_01_32_png.png', '2023-01-14-13-37-26-SURAT-KETERANGAN-KERJA-screencapture-localhost-gpi-pk-konsumen-tambah-2023-01-13-21_00_05_png.png', '2023-01-14-13-37-26-SLIP-GAJI-screencapture-localhost-gpi-pk-konsumen-tambah-2023-01-13-21_00_05_png.png', '2023-01-14-13-37-26-REKENING-PAYROLL-screencapture-localhost-gpi-pk-konsumen-tambah-2023-01-13-21_00_05_png.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id_booking` int NOT NULL,
  `nik_admin` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nik_marketing` varchar(20) NOT NULL,
  `nik_konsumen` varchar(20) NOT NULL,
  `id_kavling` int NOT NULL,
  `tgl_booking` date NOT NULL,
  `cara_bayar` enum('kpr','cash') DEFAULT NULL,
  `bukti_tf` text NOT NULL,
  `ktp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `npwp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_booking` enum('invalid','valid') NOT NULL,
  `kwitansi_booking` text,
  `bi_checking` enum('lancar','macet') DEFAULT NULL,
  `catatan_bi_checking` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id_booking`, `nik_admin`, `nik_marketing`, `nik_konsumen`, `id_kavling`, `tgl_booking`, `cara_bayar`, `bukti_tf`, `ktp`, `npwp`, `status_booking`, `kwitansi_booking`, `bi_checking`, `catatan_bi_checking`) VALUES
(12, '10000001', '20000001', '4000002', 2, '2023-01-07', 'kpr', '2023-01-07-03-46-17buktibayar1_jpg.jpg', '2023-01-07-03-46-17buktibayar1_jpg.jpg', '2023-01-07-03-46-17buktibayar1_jpg.jpg', 'valid', '2023-01-07-03-46-29kwitansi2_png.png', 'lancar', '-'),
(20, '10000001', '1000000500', '3305087011000022', 6, '2023-01-12', 'kpr', '2023-01-12-05-43-39Screenshot_20230110_235621_jpg.jpg', '2023-01-12-05-43-39Screenshot_20230110_235621_jpg.jpg', '2023-01-12-05-43-39Screenshot_20230110_235621_jpg.jpg', 'valid', '2023-01-12-05-47-411673225700780_png.png', 'lancar', 'Kol 1 CC Mandiri Baki debet 5.550.999'),
(24, '10000001', '1000000500', '4000001', 5, '2023-01-12', 'kpr', '2023-01-12-22-22-36IMG_20220423_111207_jpg.jpg', '2023-01-12-22-22-36IMG_20220423_111207_jpg.jpg', '2023-01-12-22-22-36IMG_20220423_111207_jpg.jpg', 'valid', '2023-01-12-22-38-11WhatsAppImage2023-01-10at12_39_34_jpeg.jpeg', 'lancar', 'Tidak ada pinjaman'),
(26, '10000001', '20000001', '100000018', 1, '2023-01-14', 'kpr', '2023-01-14-14-44-26screencapture-localhost-gpi-sertifikat-tambah-2023-01-13-21_01_32_png.png', '2023-01-14-14-44-26screencapture-localhost-gpi-sertifikat-tambah-2023-01-13-21_01_32_png.png', '2023-01-14-14-44-26screencapture-localhost-gpi-sertifikat-tambah-2023-01-13-21_01_32_png.png', 'valid', '2023-01-14-15-03-33screencapture-localhost-gpi-pk-konsumen-tambah-2023-01-13-21_00_05_png.png', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bunga`
--

CREATE TABLE `tb_bunga` (
  `id_bunga` int NOT NULL,
  `id_bank` int NOT NULL,
  `tgl_update` date NOT NULL,
  `suku_bunga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bunga`
--

INSERT INTO `tb_bunga` (`id_bunga`, `id_bank`, `tgl_update`, `suku_bunga`) VALUES
(1, 1, '2022-12-29', '6,29% 2 tahun '),
(2, 3, '2023-01-06', '7,50% fix 2 tahun');

-- --------------------------------------------------------

--
-- Table structure for table `tb_estate`
--

CREATE TABLE `tb_estate` (
  `nik_estate` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama_estate` text NOT NULL,
  `alamat_estate` text NOT NULL,
  `telp_estate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_estate`
--

INSERT INTO `tb_estate` (`nik_estate`, `id_user`, `nama_estate`, `alamat_estate`, `telp_estate`) VALUES
('30000001', '30000001', 'kumis', 'Citayam, Bogor', '071292514377'),
('3309808279012', '3309808279012', 'Rahmad', 'CIbinong', '0899933378979');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kavling`
--

CREATE TABLE `tb_kavling` (
  `id_kavling` int NOT NULL,
  `id_type_rumah` int DEFAULT NULL,
  `kavling` text NOT NULL,
  `status` enum('available','booked','sold') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kavling`
--

INSERT INTO `tb_kavling` (`id_kavling`, `id_type_rumah`, `kavling`, `status`) VALUES
(1, 1, 'A1', 'sold'),
(2, 1, 'A2', 'sold'),
(3, 1, 'A3', 'available'),
(4, 1, 'A4', 'available'),
(5, 1, 'A5', 'sold'),
(6, 3, 'A6', 'sold'),
(7, 3, 'A7', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komplain`
--

CREATE TABLE `tb_komplain` (
  `id_komplain` int NOT NULL,
  `id_stk` int NOT NULL,
  `nik_estate` varchar(20) NOT NULL,
  `tgl_komplain` date DEFAULT NULL,
  `ket_komplain` text,
  `status_komplain` enum('belum diterima','terima') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `upload_file` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komplain`
--

INSERT INTO `tb_komplain` (`id_komplain`, `id_stk`, `nik_estate`, `tgl_komplain`, `ket_komplain`, `status_komplain`, `upload_file`) VALUES
(1, 1, '10000001', '2023-01-02', 'komplain ', 'terima', 'gambar112023-01-02-03-40-23'),
(2, 2, '30000001', '2023-01-07', 'Dinding retak rambut', 'terima', 'gambar122023-01-07-04-12-35'),
(3, 3, '30000001', '2023-01-07', 'Komplain bocor', 'terima', 'gambar132023-01-07-14-28-02'),
(4, 2, '30000001', '2023-01-12', 'Komplain bocor', 'terima', 'gambar122023-01-12-10-02-48'),
(5, 9, '30000001', '2023-01-14', 'komplain ', 'terima', 'gambar192023-01-14-13-42-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `nik_konsumen` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama_konsumen` text NOT NULL,
  `alamat_konsumen` text NOT NULL,
  `telp_konsumen` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`nik_konsumen`, `id_user`, `nama_konsumen`, `alamat_konsumen`, `telp_konsumen`) VALUES
('4000001', '4000001', 'Sana', 'bogor', '081292514311'),
('4000002', '4000002', 'Dita', 'bogor', '081292514322'),
('3305087011000022', '3305087011000022', 'Farah', 'Jakarta', '081292514300'),
('100000018', '100000018', 'Freen Salocha', 'Cibinong, Bogor, Jawa Barat, Indonesia', '081221129001'),
('1092888767', '1092888767', 'becky', 'bogor', '082299311781');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kpr`
--

CREATE TABLE `tb_kpr` (
  `id_kpr` int NOT NULL,
  `id_berkas` int NOT NULL,
  `id_bank` int NOT NULL,
  `tgl_kpr` date DEFAULT NULL,
  `status_kpr` enum('process','accept','reject') DEFAULT NULL,
  `sp3k` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kpr`
--

INSERT INTO `tb_kpr` (`id_kpr`, `id_berkas`, `id_bank`, `tgl_kpr`, `status_kpr`, `sp3k`) VALUES
(1, 1, 1, '2022-12-29', 'accept', '2022-12-29-17-25-47-SP3K-8465372695Oct2022_pdf.pdf'),
(2, 2, 1, '2022-12-29', 'accept', '2022-12-29-17-44-45-SP3K-naya_jpg.jpg'),
(7, 3, 3, '2023-01-07', 'accept', NULL),
(8, 4, 2, '2023-01-07', 'accept', '2023-01-07-14-01-29-SP3K-sp3k_jpeg.jpeg'),
(9, 5, 1, '2023-01-12', 'accept', '2023-01-12-03-34-48-SP3K-SP3K_pdf.pdf'),
(11, 6, 1, '2023-01-12', 'accept', '2023-01-12-09-25-48-SP3K-Screenshot_20230110_235621_jpg.jpg'),
(12, 8, 1, '2023-01-12', 'accept', '2023-01-12-23-58-22-SP3K-IMG_20220423_111207_jpg.jpg'),
(13, 9, 1, '2023-01-14', 'accept', '2023-01-14-13-39-24-SP3K-screencapture-localhost-gpi-pk-konsumen-tambah-2023-01-13-21_00_05_png.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_marketing`
--

CREATE TABLE `tb_marketing` (
  `nik_marketing` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama_marketing` text NOT NULL,
  `alamat_marketing` text NOT NULL,
  `telp_marketing` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_marketing`
--

INSERT INTO `tb_marketing` (`nik_marketing`, `id_user`, `nama_marketing`, `alamat_marketing`, `telp_marketing`) VALUES
('20000001', '20000001', 'Hendri', 'bogor', '091292514377'),
('1000000500', '1000000500', 'Surya', 'Depok', '089901876544');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perbaikan`
--

CREATE TABLE `tb_perbaikan` (
  `id_perbaikan` int NOT NULL,
  `id_komplain` int NOT NULL,
  `nik_estate` int NOT NULL,
  `tanggal_perbaikan` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` enum('-','proses','finish') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perbaikan`
--

INSERT INTO `tb_perbaikan` (`id_perbaikan`, `id_komplain`, `nik_estate`, `tanggal_perbaikan`, `tanggal_selesai`, `status`) VALUES
(11, 1, 30000001, '2023-01-08', '2023-01-15', 'proses'),
(13, 3, 30000001, '2023-01-08', '2023-01-11', 'proses'),
(15, 2, 30000001, '2023-01-14', '2023-01-14', 'proses'),
(17, 5, 30000001, '2023-01-16', '2023-01-17', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pk_konsumen`
--

CREATE TABLE `tb_pk_konsumen` (
  `id_pk` int NOT NULL,
  `id_akad` int NOT NULL,
  `tgl_ketersediaan` varchar(20) NOT NULL,
  `status_ketersediaan` enum('belum tersedia','tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pk_konsumen`
--

INSERT INTO `tb_pk_konsumen` (`id_pk`, `id_akad`, `tgl_ketersediaan`, `status_ketersediaan`) VALUES
(13, 2, '2023-01-13', 'tersedia'),
(15, 6, '2023-01-14', 'tersedia'),
(16, 7, '2023-01-14', 'tersedia'),
(17, 8, '2023-01-14', 'tersedia'),
(18, 9, '2023-01-17', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress`
--

CREATE TABLE `tb_progress` (
  `id_progress` int NOT NULL,
  `id_kavling` int NOT NULL,
  `nik_estate` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `gambar1` text,
  `gambar2` text,
  `gambar3` text,
  `gambar4` text,
  `gambar5` text,
  `status_progress` enum('','pembangunan','belum dibangun','siap huni') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_progress`
--

INSERT INTO `tb_progress` (`id_progress`, `id_kavling`, `nik_estate`, `description`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `status_progress`) VALUES
(1, 2, '30000001', '-', 'gia01.jpeg', 'WhatsApp_Image_2022-12-16_at_12_43_17.jpeg', 'kosong.jpg', 'kosong.jpg', 'kosong.jpg', 'pembangunan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sertifikat`
--

CREATE TABLE `tb_sertifikat` (
  `id_sertifikat` int NOT NULL,
  `id_akad` int NOT NULL,
  `tgl_ketersediaan` varchar(20) NOT NULL,
  `status_ketersediaan` enum('belum tersedia','tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sertifikat`
--

INSERT INTO `tb_sertifikat` (`id_sertifikat`, `id_akad`, `tgl_ketersediaan`, `status_ketersediaan`) VALUES
(9, 2, '2023-01-12', 'tersedia'),
(12, 8, '2023-01-14', 'tersedia'),
(13, 9, '2023-01-24', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stk`
--

CREATE TABLE `tb_stk` (
  `id_stk` int NOT NULL,
  `id_akad` int NOT NULL,
  `tgl_stk` date DEFAULT NULL,
  `tgl_jadwal_stk` date DEFAULT NULL,
  `status_stk` enum('terlaksana','belum terlaksana') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_stk`
--

INSERT INTO `tb_stk` (`id_stk`, `id_akad`, `tgl_stk`, `tgl_jadwal_stk`, `status_stk`) VALUES
(1, 1, '2023-01-02', '2022-12-30', 'terlaksana'),
(2, 2, '2022-12-29', '2022-12-31', 'belum terlaksana'),
(3, 3, '2023-01-07', '2023-01-12', 'terlaksana'),
(6, 6, '2023-01-12', '2023-01-13', 'belum terlaksana'),
(7, 7, '2023-01-12', '2023-01-13', 'terlaksana'),
(8, 8, '2023-01-13', '2023-01-17', 'belum terlaksana'),
(9, 9, '2023-01-14', '2023-01-24', 'belum terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_rumah`
--

CREATE TABLE `tb_type_rumah` (
  `id_type_rumah` int NOT NULL,
  `type` varchar(250) NOT NULL,
  `lt` int NOT NULL,
  `lb` int NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_type_rumah`
--

INSERT INTO `tb_type_rumah` (`id_type_rumah`, `type`, `lt`, `lb`, `harga`) VALUES
(1, 'Magnolia', 55, 60, '550.000.000'),
(2, 'Standar', 72, 36, '470.000.000'),
(3, 'Mawar', 84, 40, '650.000.000'),
(5, 'Pesona', 107, 45, '657.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text NOT NULL,
  `role` enum('admin','marketing','estate','konsumen','manager') DEFAULT NULL,
  `kode_verifikasi` text,
  `status_user` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `role`, `kode_verifikasi`, `status_user`) VALUES
('', 'admin', '', '123', 'admin', '', '0'),
('10000001', 'admin2', '', '123', 'admin', '', '0'),
('100000018', 'freen', NULL, 'cs123', 'konsumen', NULL, NULL),
('1000000500', 'surya', NULL, 'kr123', 'marketing', NULL, NULL),
('1092888767', 'becky', NULL, 'cs123', 'konsumen', NULL, NULL),
('20000001', 'hendri', '', 'kr123', 'marketing', '', '0'),
('30000001', 'kumis', '', 'kr123', 'estate', '', '0'),
('3305087011000022', 'farah', NULL, 'cs123', 'konsumen', NULL, NULL),
('3309808279012', 'rahmad', NULL, 'kr123', 'estate', NULL, NULL),
('4000001', 'sana', '', 'kr123', 'konsumen', '', '0'),
('4000002', 'dita', '', 'cs123', 'konsumen', '', '0'),
('5000002', 'manager', '', '123', 'manager', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`nik_admin`);

--
-- Indexes for table `tb_akad`
--
ALTER TABLE `tb_akad`
  ADD PRIMARY KEY (`id_akad`),
  ADD KEY `id_kpr` (`id_kpr`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `nik_admin` (`nik_admin`),
  ADD KEY `nik_marketing` (`nik_marketing`),
  ADD KEY `nik_konsumen` (`nik_konsumen`),
  ADD KEY `id_kavling` (`id_kavling`);

--
-- Indexes for table `tb_bunga`
--
ALTER TABLE `tb_bunga`
  ADD PRIMARY KEY (`id_bunga`);

--
-- Indexes for table `tb_estate`
--
ALTER TABLE `tb_estate`
  ADD PRIMARY KEY (`nik_estate`);

--
-- Indexes for table `tb_kavling`
--
ALTER TABLE `tb_kavling`
  ADD PRIMARY KEY (`id_kavling`),
  ADD KEY `fk_type_rumah` (`id_type_rumah`);

--
-- Indexes for table `tb_komplain`
--
ALTER TABLE `tb_komplain`
  ADD PRIMARY KEY (`id_komplain`);

--
-- Indexes for table `tb_kpr`
--
ALTER TABLE `tb_kpr`
  ADD PRIMARY KEY (`id_kpr`);

--
-- Indexes for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`),
  ADD KEY `id_komplain` (`id_komplain`);

--
-- Indexes for table `tb_pk_konsumen`
--
ALTER TABLE `tb_pk_konsumen`
  ADD PRIMARY KEY (`id_pk`),
  ADD KEY `fk_id_akad` (`id_akad`);

--
-- Indexes for table `tb_progress`
--
ALTER TABLE `tb_progress`
  ADD PRIMARY KEY (`id_progress`);

--
-- Indexes for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`),
  ADD KEY `fk_sertifikat` (`id_akad`);

--
-- Indexes for table `tb_stk`
--
ALTER TABLE `tb_stk`
  ADD PRIMARY KEY (`id_stk`);

--
-- Indexes for table `tb_type_rumah`
--
ALTER TABLE `tb_type_rumah`
  ADD PRIMARY KEY (`id_type_rumah`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akad`
--
ALTER TABLE `tb_akad`
  MODIFY `id_akad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `id_berkas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id_booking` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_bunga`
--
ALTER TABLE `tb_bunga`
  MODIFY `id_bunga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kavling`
--
ALTER TABLE `tb_kavling`
  MODIFY `id_kavling` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_komplain`
--
ALTER TABLE `tb_komplain`
  MODIFY `id_komplain` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kpr`
--
ALTER TABLE `tb_kpr`
  MODIFY `id_kpr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  MODIFY `id_perbaikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_pk_konsumen`
--
ALTER TABLE `tb_pk_konsumen`
  MODIFY `id_pk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_progress`
--
ALTER TABLE `tb_progress`
  MODIFY `id_progress` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  MODIFY `id_sertifikat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_stk`
--
ALTER TABLE `tb_stk`
  MODIFY `id_stk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_type_rumah`
--
ALTER TABLE `tb_type_rumah`
  MODIFY `id_type_rumah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kavling`
--
ALTER TABLE `tb_kavling`
  ADD CONSTRAINT `fk_type_rumah` FOREIGN KEY (`id_type_rumah`) REFERENCES `tb_type_rumah` (`id_type_rumah`);

--
-- Constraints for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  ADD CONSTRAINT `tb_perbaikan_ibfk_1` FOREIGN KEY (`id_komplain`) REFERENCES `tb_komplain` (`id_komplain`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
