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
                <h3></h3>
                <div class="row">
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    <?php echo $kavling; ?>
                                    <sup style="font-size: 20px"></sup>
                                </h3>
                                <p>Data Blok</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-home"></i>
                            </div>
                            <a href="<?= base_url('blok/blokreadmarketing') ?>" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>
                                    <?php echo $konsumen; ?>
                                </h3>

                                <p>Data Konsumen</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="<?= base_url('konsumen/konsumenreadmarketing') ?>" class="small-box-footer">More
                                info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- ./col -->
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
                            <td>Marketing</td>
                            <td>Melihat blok,melihat progres rumah, mengelola booking, mengelola BI Checking, mengelola
                                berkas konsumen,
                                mengelola KPR konsumen, mengelola jadwal akad, mengelola jadwal serah terima kunci,
                                mengelola PK konsumen, dan mengelola copy sertifikat konsumen.</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>