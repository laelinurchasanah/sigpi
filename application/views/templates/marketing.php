

<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>

			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-logo">
				<img src="<?= base_url('assets/icon/') ?>gpi.png" alt="grahapesonaindah" width="80px" class="mx-auto d-block" style="margin-top:10px">
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">

					<a href="<?= base_url('indexmarketing') ?>" class="mx-auto d-block">
						<?php 
						$id =  $this->session->userdata('iduser');

						$this->db->select('*');
						$this->db->from('tb_user');
						$this->db->where('id_user', $id);
						$query = $this->db->get()->result();

						?>
						<?= ucfirst($query[0]->username); ?> | <?= ucfirst($query[0]->role); ?>
					</a>

				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="<?= base_url('indexmarketing') ?>" <?= $this->uri->segment(1) == 'indexmarketing' || $this->uri->segment(1) == '' ? 'class=" nav-link active"' : 'class="nav-link" ' ?>">
								<i class="fa fa-tachometer-alt"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blok/blokreadmarketing') ?>" <?= $this->uri->segment(1) == 'blok' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-home"></i>
								<p>Blok</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url('suku_bunga/bungaread') ?>" <?= $this->uri->segment(1) == 'suku_bunga' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-money-bill"></i>
								<p>Suku Bunga</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('booking/bookingread') ?>" <?= $this->uri->segment(1) == 'booking' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-book"></i>
								<p>Booking</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('bichecking/bicheckingreadmarketing') ?>" <?= $this->uri->segment(1) == 'bichecking' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-clone"></i>
								<p>BI Checking</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('berkas_kpr/berkasreadmarketing') ?>" <?= $this->uri->segment(1) == 'berkas_kpr' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-folder-open"></i>
								<p>Berkas KPR</p>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="<?= base_url('pengajuan_kpr/kprread') ?>" <?= $this->uri->segment(1) == 'pengajuan_kpr' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-edit"></i>
								<p>KPR Konsumen</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('jadwal_akad/akadread') ?>" <?= $this->uri->segment(1) == 'jadwal_akad' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-calendar"></i>
								<p>Jadwal Akad</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('jadwal_stk/stkreadmarketing') ?>" <?= $this->uri->segment(1) == 'jadwal_stk' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-calendar-check"></i>
								<p>Jadwal Serah Terima Kunci</p>
							</a>
						</li>
						<!-- PK Konsumen -->
						<li class="nav-item">
							<a href="<?= base_url('pk_konsumen') ?>" <?= $this->uri->segment(1) == 'pk_konsumen'  ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-file"></i>
								<p>PK Konsumen</p>
							</a>
						</li>
						<!-- Sertifikat -->
						<li class="nav-item">
							<a href="<?= base_url('sertifikat') ?>" <?= $this->uri->segment(1) == 'sertifikat'  ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-file"></i>
								<p>Sertifikat</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('progres_rumah/progres_rumahreadmarketing') ?>" <?= $this->uri->segment(1) == 'progres_rumah' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
								<i class="fa fa-gavel"></i>
								<p>Progres Rumah</p>
							</a>
						</li>



						<li class="nav-item has-treeview">
							<a href="#" <?= $this->uri->segment(1) == 'marketing' ||
														$this->uri->segment(1) == 'user' ? 'class="nav-link active"' : 'class="nav-link"'
													?>>
								<i class="fa fa-cogs"></i>
								<p>
									Settings
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('marketing/indexmarketing') ?>" <?= $this->uri->segment(1) == 'marketing' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
										<i class="fa fa-cog"></i>
										<p>Setting Data</p>
									</a>
								</li>

							</ul>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('user/indexmarketing') ?>" <?= $this->uri->segment(1) == 'user' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
										<i class="fa fa-user"></i>
										<p>Setting Account</p>
									</a>
								</li>

							</ul>
						</li>

						<li class="nav-item" style="margin-bottom:30px; margin-top:30px;">
							<a href="<?= base_url('login/logout') ?>" class="nav-link" onclick="return confirm('Apakah anda yakin ingin keluar dari aplikasi ini?')">
								<i class="fa fa-power-off"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark"><?= $title ?></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="javascript:window.history.go(-1);">Home</a></li>
								<li class="breadcrumb-item active"><?= $title ?></li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
