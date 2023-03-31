-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2023 at 03:41 PM
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
-- Database: `db_gpi`
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
(1, 1, '2022-12-29', '2022-12-30', 'terlaksana'),
(2, 2, '2022-12-29', '2022-12-31', 'terlaksana');

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
(2, 'BTN Syariah', 'Depok', 'Depok');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int NOT NULL,
  `id_booking` int NOT NULL,
  `berkas_kpr` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `ktp` text NOT NULL,
  `kk` text NOT NULL,
  `npwp` text NOT NULL,
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

INSERT INTO `tb_berkas` (`id_berkas`, `id_booking`, `berkas_kpr`, `tgl_upload`, `ktp`, `kk`, `npwp`, `bpjs`, `buku_nikah`, `foto`, `surat_keterangan_kerja`, `slip_gaji`, `rekening_koran_payroll`, `nib`, `sku`, `npwp_perusahaan`, `laporan_laba`, `rekening_koran_usaha`, `foto_tempat_usaha_satu`, `foto_tempat_usaha_dua`, `foto_tempat_usaha_tiga`, `keterangan`, `status`) VALUES
(1, 2, 'Karyawan', '2022-12-29', '2022-12-29-17-23-54-KTP-kaosdasaar_png.png', '2022-12-29-17-23-54-KK-gm_png.png', '2022-12-29-17-23-54-NPWP-headerweb_png.png', '2022-12-29-17-23-54-BPJS-WhatsAppImage2022-12-15at19_43_58_jpeg.jpeg', '2022-12-29-17-23-54-BUKU-NIKAH-WhatsAppImage2022-12-15at19_44_00(2)_jpeg.jpeg', '2022-12-29-17-23-54-PAS-FOTO-1671951311903_png.png', '2022-12-29-17-23-54-SURAT-KETERANGAN-KERJA-SPR-GIA-A1-IKA-1_page-0001_jpg.jpg', '2022-12-29-17-23-54-SLIP-GAJI-HISTORITRANSAKSIika_pdf.pdf', '2022-12-29-17-23-54-REKENING-PAYROLL-8465372695Sep2022_pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Diterima'),
(2, 3, 'Karyawan', '2022-12-29', '2022-12-29-17-42-23-KTP-751443_jpg.jpg', '2022-12-29-17-42-23-KK-1567541(1)_jpg.jpg', '2022-12-29-17-42-23-NPWP-1631202_jpg.jpg', '2022-12-29-17-42-23-BPJS-1631256_jpg.jpg', '2022-12-29-17-42-23-BUKU-NIKAH-1864812_jpg.jpg', '2022-12-29-17-42-23-PAS-FOTO-5332109_jpg.jpg', '2022-12-29-17-42-23-SURAT-KETERANGAN-KERJA-5332213_jpg.jpg', '2022-12-29-17-42-23-SLIP-GAJI-bg1_png.png', '2022-12-29-17-42-23-REKENING-PAYROLL-mina_jpg.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id_booking` int NOT NULL,
  `nik_admin` varchar(20) NOT NULL,
  `nik_marketing` varchar(20) NOT NULL,
  `nik_konsumen` varchar(20) NOT NULL,
  `id_kavling` int NOT NULL,
  `tgl_booking` date NOT NULL,
  `harga` varchar(12) NOT NULL,
  `dp` varchar(10) NOT NULL,
  `booking` varchar(10) NOT NULL,
  `plafon` varchar(10) NOT NULL,
  `cara_bayar` enum('kpr','cash') DEFAULT NULL,
  `bukti_tf` text NOT NULL,
  `status_booking` enum('invalid','valid') NOT NULL,
  `kwitansi_booking` text NOT NULL,
  `bi_checking` enum('lancar','macet') DEFAULT NULL,
  `catatan_bi_checking` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id_booking`, `nik_admin`, `nik_marketing`, `nik_konsumen`, `id_kavling`, `tgl_booking`, `harga`, `dp`, `booking`, `plafon`, `cara_bayar`, `bukti_tf`, `status_booking`, `kwitansi_booking`, `bi_checking`, `catatan_bi_checking`) VALUES
(2, '10000001', '20000001', '4000001', 1, '2022-12-29', '475000000', '0', '2.000.000', '475.000.00', 'kpr', '2022-12-29-17-19-42saldoblokir_jpeg.jpeg', 'invalid', '', 'lancar', 'Tidak ada pinjaman'),
(3, '10000001', '20000001', '4000002', 2, '2022-12-29', '475000000', '0', '1.000.000', '475.000.00', 'kpr', '2022-12-29-17-20-41booking_jpeg.jpeg', 'invalid', '', 'lancar', 'Kol 1 CC Mandiri Baki debet 5.550.999');

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
(1, 1, '2022-12-29', '6,29% 2 tahun ');

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
('30000001', '30000001', 'kumis', 'bogor', '071292514377');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kavling`
--

CREATE TABLE `tb_kavling` (
  `id_kavling` int NOT NULL,
  `kavling` text NOT NULL,
  `lb` varchar(20) NOT NULL,
  `lt` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `status` enum('available','booked','sold') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kavling`
--

INSERT INTO `tb_kavling` (`id_kavling`, `kavling`, `lb`, `lt`, `harga`, `status`) VALUES
(1, 'A1', '36', '70', '470.000.000', 'sold'),
(2, 'A2', '36', '72', '475.000.000', 'sold'),
(3, 'A3', '36', '70', '470.000.000', 'available'),
(4, 'A4', '36', '72', '475.000.000', 'available'),
(5, 'A5', '36', '72', '485.000.000', 'available');

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
  `status_komplain` enum('terima','proses','finish') DEFAULT NULL,
  `upload_file` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komplain`
--

INSERT INTO `tb_komplain` (`id_komplain`, `id_stk`, `nik_estate`, `tgl_komplain`, `ket_komplain`, `status_komplain`, `upload_file`) VALUES
(1, 1, '10000001', '2023-01-02', 'komplain ', 'terima', 'gambar112023-01-02-03-40-23');

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
('4000002', '4000002', 'Dita', 'bogor', '081292514322');

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
  `sp3k` text,
  `status_pembayaran` enum('lunas','belum lunas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kpr`
--

INSERT INTO `tb_kpr` (`id_kpr`, `id_berkas`, `id_bank`, `tgl_kpr`, `status_kpr`, `sp3k`, `status_pembayaran`) VALUES
(1, 1, 1, '2022-12-29', 'accept', '2022-12-29-17-25-47-SP3K-8465372695Oct2022_pdf.pdf', 'lunas'),
(2, 2, 1, '2022-12-29', 'accept', '2022-12-29-17-44-45-SP3K-naya_jpg.jpg', 'lunas');

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
('20000001', '20000001', 'Hendri', 'bogor', '091292514377');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int NOT NULL,
  `id_kpr` int NOT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `jenis_pembayaran` enum('','DP','Saldo Blokir','') DEFAULT NULL,
  `bukti_pembayaran` text,
  `status_bayar` enum('valid','not valid') DEFAULT NULL,
  `kwitansi_pembayaran` text,
  `nik_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_kpr`, `tgl_pembayaran`, `jenis_pembayaran`, `bukti_pembayaran`, `status_bayar`, `kwitansi_pembayaran`, `nik_admin`) VALUES
(1, 1, '2022-12-29', 'DP', '2022-12-29-17-26-278465372695Oct2022_pdf.pdf', 'valid', '2022-12-29-17-27-10kwitansi_png.png', '10000001'),
(2, 2, '2022-12-29', 'DP', '2022-12-29-17-45-401631256_jpg.jpg', 'valid', '2022-12-29-17-46-23mina1_jpeg.jpeg', '10000001');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pk_konsumen`
--

CREATE TABLE `tb_pk_konsumen` (
  `id_pk` int NOT NULL,
  `id_akad` int NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `status` enum('belum tersedia','tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_sertifikat`
--

CREATE TABLE `tb_sertifikat` (
  `id_sertifikat` int NOT NULL,
  `id_akad` int NOT NULL,
  `sertifikat` text NOT NULL,
  `tanggal_ketersediaan` date NOT NULL,
  `status` enum('belum tersedia','tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(2, 2, '2022-12-29', '2022-12-31', 'belum terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_rumah`
--

CREATE TABLE `tb_type_rumah` (
  `id_type_rumah` int NOT NULL,
  `type` varchar(20) NOT NULL,
  `lb` int NOT NULL,
  `lt` int NOT NULL,
  `harga` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_type_rumah`
--

INSERT INTO `tb_type_rumah` (`id_type_rumah`, `type`, `lb`, `lt`, `harga`) VALUES
(1, 'standar', 36, 72, '475000000'),
(2, 'hook', 36, 107, '557000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` enum('admin','marketing','estate','konsumen') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role`) VALUES
('', 'admin', '123', 'admin'),
('10000001', 'admin2', '123', 'admin'),
('20000001', 'hendri', 'kr123', 'marketing'),
('30000001', 'kumis', 'kr123', 'estate'),
('4000001', 'sana', 'kr123', 'konsumen'),
('4000002', 'dita', 'cs123', 'konsumen');

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
  ADD PRIMARY KEY (`id_kavling`);

--
-- Indexes for table `tb_komplain`
--
ALTER TABLE `tb_komplain`
  ADD PRIMARY KEY (`id_komplain`),
  ADD KEY `id_stk` (`id_stk`);

--
-- Indexes for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`nik_konsumen`);

--
-- Indexes for table `tb_kpr`
--
ALTER TABLE `tb_kpr`
  ADD PRIMARY KEY (`id_kpr`);

--
-- Indexes for table `tb_marketing`
--
ALTER TABLE `tb_marketing`
  ADD PRIMARY KEY (`nik_marketing`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`);

--
-- Indexes for table `tb_pk_konsumen`
--
ALTER TABLE `tb_pk_konsumen`
  ADD PRIMARY KEY (`id_pk`),
  ADD KEY `id_akad` (`id_akad`);

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
  ADD KEY `id_akad` (`id_akad`);

--
-- Indexes for table `tb_stk`
--
ALTER TABLE `tb_stk`
  ADD PRIMARY KEY (`id_stk`),
  ADD KEY `id_akad` (`id_akad`);

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
  MODIFY `id_akad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `id_berkas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id_booking` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_bunga`
--
ALTER TABLE `tb_bunga`
  MODIFY `id_bunga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kavling`
--
ALTER TABLE `tb_kavling`
  MODIFY `id_kavling` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_komplain`
--
ALTER TABLE `tb_komplain`
  MODIFY `id_komplain` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kpr`
--
ALTER TABLE `tb_kpr`
  MODIFY `id_kpr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  MODIFY `id_perbaikan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pk_konsumen`
--
ALTER TABLE `tb_pk_konsumen`
  MODIFY `id_pk` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_progress`
--
ALTER TABLE `tb_progress`
  MODIFY `id_progress` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  MODIFY `id_sertifikat` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_stk`
--
ALTER TABLE `tb_stk`
  MODIFY `id_stk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_type_rumah`
--
ALTER TABLE `tb_type_rumah`
  MODIFY `id_type_rumah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_komplain`
--
ALTER TABLE `tb_komplain`
  ADD CONSTRAINT `tb_komplain_ibfk_1` FOREIGN KEY (`id_stk`) REFERENCES `tb_stk` (`id_stk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tb_pk_konsumen`
--
ALTER TABLE `tb_pk_konsumen`
  ADD CONSTRAINT `tb_pk_konsumen_ibfk_1` FOREIGN KEY (`id_akad`) REFERENCES `tb_akad` (`id_akad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  ADD CONSTRAINT `tb_sertifikat_ibfk_1` FOREIGN KEY (`id_akad`) REFERENCES `tb_akad` (`id_akad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_stk`
--
ALTER TABLE `tb_stk`
  ADD CONSTRAINT `tb_stk_ibfk_1` FOREIGN KEY (`id_akad`) REFERENCES `tb_akad` (`id_akad`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
