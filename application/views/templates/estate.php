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
			<img src="<?= base_url('assets/icon/') ?>gpi.png" alt="grahapesonaindah"  width="80px"  class="mx-auto d-block" style="margin-top:10px">
		</a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<a href="<?= base_url('indexestate') ?>"class="mx-auto d-block">
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
            <a href="<?= base_url('indexestate') ?>"<?=$this->uri->segment(1) == 'indexestate' || $this->uri->segment(1) == '' ? 'class=" nav-link active"' : 'class="nav-link" ' ?>">
            <i class="fa fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('blok/blokreadestate') ?>"<?=$this->uri->segment(1) == 'kavling'  ? 'class="nav-link active"' : 'class="nav-link"'?>">
              <i class="fa fa-home"></i>
              <p>Blok</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('progres_rumah') ?>"<?=$this->uri->segment(1) == 'progres_rumah'  ? 'class="nav-link active"' : 'class="nav-link"'?>">
              <i class="fa fa-gavel"></i>
              <p>Progress Rumah</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('jadwal_stk/stkreadestate') ?>"<?=$this->uri->segment(1) == 'jadwal_stk'  ? 'class="nav-link active"' : 'class="nav-link"'?>">
              <i class="fa fa-calendar-check"></i>
              <p>Jadwal Serah Terima Kunci</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('komplain/index') ?>"<?=$this->uri->segment(1) == 'komplain'  ? 'class="nav-link active"' : 'class="nav-link"'?>">
              <i class="fa fa-pen-square"></i>
              <p>Komplain</p>
            </a>
          </li>

					<li class="nav-item">
            <a href="<?= base_url('perbaikan/index') ?>"<?=$this->uri->segment(1) == 'perbaikan'  ? 'class="nav-link active"' : 'class="nav-link"'?>">
              <i class="fa fa-eraser"></i>
              <p>Perbaikan</p>
            </a>
          </li>
          

            <li class="nav-item has-treeview">
            <a href="#" <?=$this->uri->segment(1) == 'estate' || $this->uri->segment(1) == 'user'? 'class="nav-link active"' : 'class="nav-link"'?>>
              <i class="fa fa-cogs"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               <a href="<?= base_url('estate/indexestate') ?>"<?=$this->uri->segment(1) == 'estate'  ? 'class="nav-link active"' : 'class="nav-link"'?>">
                  <i class="fa fa-cog"></i>
                  <p>Setting Data</p>
                </a>
              </li>
            
            </ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
               <a href="<?= base_url('user/indexestate') ?>"<?=$this->uri->segment(1) == 'user'  ? 'class="nav-link active"' : 'class="nav-link"'?>">
                  <i class="fa fa-user"></i>
                  <p>Setting Account</p>
                </a>
              </li>
            
            </ul>
          </li>

           <li class="nav-item">
                <a href="<?= base_url('login/logout') ?>" style="margin-bottom:30px; margin-top:30px;" class="nav-link" onclick="return confirm('Apakah anda yakin ingin keluar dari aplikasi ini?')">
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
