<style>
.card-body h4 {
    margin-bottom: 20px;
}

@media only screen and (max-width: 700px) {
    .card-body h4 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
}
</style>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php echo $booking; ?>
                                    <sup style="font-size: 20px"></sup>
                                </h3>
                                <p>Data Booking </p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="<?= base_url('booking') ?>" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    <?php echo $kavling; ?>
                                    <sup style="font-size: 20px"></sup>
                                </h3>
                                <p>Stok Unit</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-home"></i>
                            </div>
                            <a href="<?= base_url('blok') ?>" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>
                                    <?php echo $user; ?>
                                </h3>

                                <p>Data User</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Hak Akses Tabel -->
            <div class="card-body">
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
                            <td>Admin</td>
                            <td>Mengelola Type rumah, mengelola blok, mengelola user, melihat booking, melihat
                                bichecking,melihat berkas kpr, melihat pengajuan KPR, melihat jadwal akad, melihat
                                jadwal serah terima kunci, melihat progres rumah, melihat komplain, melihat perbaikan,
                                melihat PK konsumen, melihat copy sertifikat, mengelola laporan penjualan.</td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td>Estate</td>
                            <td>Melihat blok, mengelola progres rumah, melihat jadwal serah terima kunci, mengelola
                                komplain, mengelola perbaikan</td>
                        </tr>
                        <tr class="text-center">
                            <td>3</td>
                            <td>Marketing</td>
                            <td>Melihat blok,melihat progres rumah, mengelola booking, mengelola BI Checking, mengelola
                                berkas konsumen,
                                mengelola KPR konsumen, mengelola jadwal akad, mengelola jadwal serah terima kunci,
                                mengelola PK konsumen, dan mengelola copy sertifikat konsumen.</td>
                        </tr>
                        <tr class="text-center">
                            <td>4</td>
                            <td>Konsumen</td>
                            <td>Melihat blok, melakukan booking, melihat BI Checking, Upload berkas KPR, menerima status
                                pengajuan KPR, menerima jadwal akad, menerima jadwal serah terima kunci, menerima
                                informasi PK konsumen, menerima informasi copy sertifikat rumah, melakukan komplain,
                                melihat perbaikan, dan setting data akun.</td>
                        </tr>
                        <tr class="text-center">
                            <td>5</td>
                            <td>Manager Marketing</td>
                            <td>Melihat blok, melihat booking, melihat KPR konsumen, melihat jadwal akad, melihat jadwal
                                serah terima kunci, melihat progres rumah, melihat informasi PK konsumen, melihat
                                informasi copy sertifkat, melihat komplain, melihat perbaikan, melihat laporan
                                penjualan.</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

</section>
