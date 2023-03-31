<?php error_reporting(0); ?>


<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('laporan/export_excel') ?>?awal=<?=$_POST['awal']?>&akhir=<?=$_POST['akhir']?>" class="btn btn-success btn-sm"><i class="fas fa-file">
                Download Laporan </i></a>

        <div style="float:right">

            <table>
                <form action="<?= base_url('laporan/index') ?>" method="POST">
                <tr>
                    <td>
                        <div class="form-group">
                            <label>Dari</label>
                            <input type="date" required="" name="awal" value="<?php echo $_POST['awal'] ? $_POST['awal'] : date('Y-m-d') ; ?>" class="form-control" required>
                        </div>
                    </td>
                    <td>&nbsp;</td>
                    <td>
                         <div class="form-group">
                            <label>Sampai</label>
                            <input type="date" required="" name="akhir" value="<?php echo $_POST['akhir'] ? $_POST['akhir'] : date('Y-m-d') ; ?>"  class="form-control" required>
                        </div>
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <button type="submit" class="btn btn-success" style="margin-top:1em"><i class="fas fa-search"></i> Cari</button>
                    </td>
                    
                </tr>
                </form>

            </table>

        </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Id KPR</th>
                    <th>Admin</th>
                    <th>Marketing</th>
                    <th>Konsumen</th>
                    <th>Kavling</th>
                    <th>Harga</th>
                    <th>Tanggal Booking</th>
                    <th>Tanggal Akad</th>
                    <th>Status Akad</th>
                    <th>Status KPR</th>
                    <!-- <th>SP3K</th> -->
                    <!-- <th>Action</th> -->

                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
				foreach ($laporan as $l): ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $l->id_kpr ?>
                    </td>
                    <td><?= $l->nama_admin ?></td>
                    <td>
                        <?= $l->nama_marketing ?>
                    </td>
                    <td><?= $l->nama_konsumen ?></td>
                    <td>
                        <?= $l->kavling ?>
                    </td>
                    <td><?= $l->harga ?></td>
                    <td>
                        <?= $l->tgl_booking ?>
                    </td>
                    <td>
                        <?= $l->tgl_akad ?>
                    </td>
                    <td>
                        <?= $l->status_akad ?>
                    </td>
                    <td>
                        <?= $l->status_kpr ?>
                    </td>
                    <!-- <td><a href="<?= base_url('sp3k/' . $l->sp3k) ?>" class="btn btn-success btn-sm"><i
												class="fas fa-zoom"> SP3K </i></a></td>
									<td> -->
                    <!-- <a href="<?= base_url('kpr/kpredit/' . $l->id_kpr) ?>" class="btn btn-warning btn-sm"><i
												class="fas fa-edit"></i></a>
										<a href="<?= base_url('kpr/delete/' . $l->id_kpr) ?>" class="btn btn-danger btn-sm"
											onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i
												class="fas fa-trash"></i></a>
									</td> -->



                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>