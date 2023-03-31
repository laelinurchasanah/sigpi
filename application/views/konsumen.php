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
                <img src="<?= base_url('assets/icon/') ?>gpi.png" alt="grahapesonaindah" width="80px"
                    class="mx-auto d-block" style="margin-top:10px">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-1 pb-3 mb-3 d-flex">

                    <a href="<?= base_url('indexkonsumen') ?>" class="mx-auto d-block">
                        Konsumen
                    </a>
                </div>
                <?php foreach ($konsumen as $ksn): ?>
                <p><?php echo $ksn->nama_konsumen ?></p>
                <?php endforeach ?>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('indexkonsumen') ?>"
                                <?= $this->uri->segment(1) == 'indexkonsumen' || $this->uri->segment(1) == '' ? 'class=" nav-link active"' : 'class="nav-link" ' ?>">
                                <i class="fa fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('blok/blokreadkonsumen') ?>"
                                <?= $this->uri->segment(1) == 'blok' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                <i class="fa fa-folder-open"></i>
                                <p>Blok</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('booking/bookingkonsumen') ?>"
                                <?= $this->uri->segment(1) == 'booking' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                <i class="fa fa-book"></i>
                                <p>Booking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('berkas_kpr') ?>"
                                <?= $this->uri->segment(1) == 'berkas_kpr' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                <i class="fa fa-folder-open"></i>
                                <p>Berkas KPR</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('progres_rumah/progres_rumahreadkonsumen') ?>"
                                <?= $this->uri->segment(1) == 'progres_rumah' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                <i class="fa fa-gavel"></i>
                                <p>Progres Rumah</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('komplain/komplainreadkonsumen') ?>"
                                <?= $this->uri->segment(1) == 'komplain' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                <i class="fa fa-pen-square"></i>
                                <p>Komplain</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('perbaikan/perbaikanreadkonsumen') ?>"
                                <?= $this->uri->segment(1) == 'perbaikan' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                <i class="fa fa-eraser"></i>
                                <p>Perbaikan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pk_konsumen/pkreadkonsumen') ?>"
                                <?= $this->uri->segment(1) == 'pk_konsumen' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                <i class="fa fa-handshake"></i>
                                <p>Info PK Bank</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('sertifikat/sertifikatreadkonsumen') ?>"
                                <?= $this->uri->segment(1) == 'sertifikat' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                <i class="fa fa-file"></i>
                                <p>Info Sertifikat</p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#"
                                <?= $this->uri->segment(1) == 'konsumen' || $this->uri->segment(1) == 'user' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="fa fa-cogs"></i>
                                <p>
                                    Settings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('konsumen/indexkonsumen') ?>"
                                        <?= $this->uri->segment(1) == 'konsumen' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                        <i class="fa fa-cog"></i>
                                        <p>Setting Data</p>
                                    </a>
                                </li>

                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('user/indexkonsumen') ?>"
                                        <?= $this->uri->segment(1) == 'user' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                        <i class="fa fa-user"></i>
                                        <p>Setting Account</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">

                            <a href="<?= base_url('login/logout') ?>" class="nav-link"
                                style="margin-top:30px; margin-bottom:30px"
                                onclick="return confirm('Apakah anda yakin ingin keluar dari aplikasi ini?')">
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
                            <h1 class="m-0 text-dark">
                                <?= $title ?>
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="javascript:window.history.go(-1);">Home</a></li>
                                <li class="breadcrumb-item active"><?= $title ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.cont
ainer-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">