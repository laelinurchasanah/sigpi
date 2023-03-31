<head>
    <style>
    .card {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        position: relative;
        overflow: hidden;
        width: 100%;
        margin: 0 auto;
    }

    .content-card {
        display: flex;
        flex-direction: row;
    }

    .left {
        display: flex;
        flex: 1;
        height: 400px;
        justify-content: center;
        align-items: center;
    }

    .card-left {
        height: 100%;
        width: 100%;
        background-color: #00b4cf;
        align-items: center;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }

    .card-left img {
        margin-top: 40px;
        width: 300px;
        border-radius: 50%;
        vertical-align: middle !important;

    }

    .right {
        display: flex;
        flex: 1;
        height: 400px;
        background-color: #fff;
        justify-content: center;
        align-items: center;
    }

    .card-right {
        width: 100%;
        height: 80%;
        display: flex;
    }

    .row {
        width: 90%;
        display: flex;
        flex-direction: row;
        margin-left: 20px;
    }

    .row-left,
    .row-right {
        display: flex;
        flex: 1;
    }

    .row-right p {
        margin-left: 10px;
        text-transform: capitalize;

    }

    .row-right {
        margin-left: -40px;
    }

    .card-body-table h4 {
        margin-bottom: 20px;
        margin-left: 30px;
        margin-top: 30px;
    }

    label {
        text-transform: capitalize;
    }

    @media only screen and (max-width: 700px) {
        .content-card {
            flex-direction: column;
        }

        .row {
            width: 100%;
        }

        .card-left img {
            margin-top: 5px;
        }

        .row-right {
            margin-left: -20px;
        }

        label {
            font-size: 12px;
        }

        .card-right {
            margin-right: 10px;
            margin-left: -20px;
        }

        .row-right p {
            font-size: 14px;

        }

        .card-body-table h4 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .card-body-table {
            margin-right: 30px;
            margin-bottom: 20px;
        }




    }
    </style>
</head>
<section class="content">
    <div class="card">
        <div class="content-card">
            <div class="left">
                <div class="card-left">
                    <img src="<?= base_url('assets/icon/') ?>gia.png" alt="User Image">
                </div>
            </div>

            <div class="right">
                <div class="card-right">
                    <div class="card-body">
                        <?php foreach ($booking as $bkg) { ?>
                        <div class="row">
                            <div class="row-left"><label>Nama</label></div>
                            <div class="row-right"><label>
                                    <?= $bkg->nama_konsumen ?>
                                </label></div>
                        </div>
                        <div class="row">
                            <div class="row-left"><label>Blok</label></div>
                            <div class="row-right"><label>
                                    <?= $bkg->kavling ?>
                                </label></div>
                        </div>
                        <?php } ?>

                        <!-- Booking -->
                        <div class="row">
                            <div class="row-left"><label>Booking</label></div>
                            <?php if ($booking): ?>
                            <?php foreach ($booking as $bkg) { ?>
                            <?php if ($bkg->kwitansi_booking != NULL): ?>
                            <div class="row-right text-success">
                                <label>
                                    <?= $bkg->status_booking ?>
                                </label>
                            </div>
                            <?php else: ?>
                            <div class="row-right">
                                <label class="text-danger">
                                    <?= $bkg->status_booking ?>
                                </label>
                            </div>
                            <?php endif; ?>
                            <?php } ?>
                            <?php endif; ?>
                        </div>

                        <!-- BI Checking -->
                        <div class="row">
                            <div class="row-left"><label>BI Checking</label></div>
                            <?php if ($booking): ?>
                            <?php foreach ($booking as $bkg) { ?>
                            <?php if ($bkg->bi_checking != NULL): ?>
                            <div class="row-right text-success">
                                <label>
                                    <?= $bkg->bi_checking ?>
                                </label>
                            </div>
                            <?php else: ?>
                            <div class="row-right">
                                <label class="text-danger">BI Checking Belum Ada</label>
                            </div>
                            <?php endif; ?>
                            <?php } ?>
                            <?php endif; ?>
                        </div>

                        <!-- Peringatan Berkas -->
                        <div class="row">
                            <div class="row-left"><label>Berkas</label></div>
                            <?php if ($berkas): ?>
                            <?php foreach ($berkas as $bks) { ?>
                            <div class="row-right">

                                <?php if ($bks->status_berkas == 'Diterima'): ?>
                                <span class="text-success">
                                    <label>
                                        <?= $bks->status_berkas ?>
                                    </label>
                                </span>

                                <?php else: ?>
                                <span class="text-danger">
                                    <label>
                                        <?= $bks->status_berkas ?>
                                    </label>
                                </span>
                                <?php endif; ?>
                            </div>
                            <?php } ?>
                            <?php else: ?>
                            <div class="row-right">
                                <label class="text-danger">Upload Berkas Maksimal 14 Hari Setelah
                                    Booking!</label>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="row">
                            <div class="row-left"><label>Status KPR</label></div>
                            <?php if ($kpr): ?>
                            <?php foreach ($kpr as $kp) { ?>
                            <div class="row-right"><label>
                                    <?= $kp->status_kpr ?>
                                </label></div>
                            <?php } ?>
                            <?php else: ?>
                            <div class="row-right">
                                <label class="text-danger">Belum Tersedia</label>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="row">
                            <div class="row-left"><label>SP3K</label></div>
                            <?php if ($kpr): ?>
                            <?php foreach ($kpr as $kp) { ?>
                            <?php if ($kp->sp3k != NULL): ?>
                            <div class="row-right">
                                <a target="_blank" href="<?= base_url('sp3k/' . $kp->sp3k) ?>"
                                    class="btn btn-success btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                            <?php else: ?>
                            <div class="row-right">
                                <label class="text-danger">SP3K Belum Diupload</label>
                            </div>
                            <?php endif; ?>
                            <?php } ?>
                            <?php endif; ?>
                        </div>


                        <?php foreach ($akad as $akd) { ?>
                        <div class="row">
                            <div class="row-left"><label>Jadwal Akad</label></div>
                            <div class="row-right">
                                <label>
                                    <?= $akd->tgl_jadwal_akad ?>
                                </label>
                                <p>
                                    <?= $akd->status_akad ?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>


                        <?php foreach ($stk as $st) { ?>
                        <div class="row">
                            <div class="row-left"><label>Jadwal STK</label></div>
                            <div class="row-right"><label>
                                    <?= $st->tgl_jadwal_stk ?>
                                </label>
                                <p>
                                    <?= $st->status_stk ?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>

        <!-- Hak Akses Tabel -->
        <div class="card-body-table">
            <h4>Hak Akses User</h4>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>User</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>Konsumen</td>
                        <td>Melihat blok, melakukan booking, melihat BI Checking, Upload berkas KPR, menerima status
                            pengajuan KPR, menerima jadwal akad, menerima jadwal serah terima kunci, menerima
                            informasi PK konsumen, menerima informasi copy sertifikat rumah, melakukan komplain,
                            melihat perbaikan, dan setting data akun.</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</section>
