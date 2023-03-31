<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <div class="card-header">
            <!-- Button -->
            <?php
			if (!$booking):
				?>

            <a href="<?= base_url('booking/tambahkonsumen') ?>" class="btn btn-primary btn-sm float-right"><i
                    class="fas fa-plus"></i> Tambah Booking</a>

            <?php endif; ?>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Id Booking</th>
                        <th>Tanggal Booking</th>
                        <th>Admin</th>
                        <th>Marketing</th>
                        <th>Konsumen</th>
                        <th>Kavling</th>
                        <th>Harga</th>
                        <th>KTP</th>
                        <th>NPWP</th>
                        <th>Cara Bayar</th>
                        <th>Bukti TF</th>
                        <th>Status Booking</th>
                        <th>Kwitansi Booking</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
					foreach ($booking as $bkg): ?>
                    <tr class="text-center">
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $bkg->id_booking ?>
                        </td>
                        <td>
                            <?= $bkg->tgl_booking ?>
                        </td>
                        <td>
                            <?= $bkg->nama_admin ?>
                        </td>
                        <td>
                            <?= $bkg->nama_marketing ?>
                        </td>
                        <td>
                            <?= $bkg->nama_konsumen ?>
                        </td>
                        <td>
                            <?= $bkg->kavling ?>
                        </td>
                        <td>
                            <?= $bkg->harga ?>
                        </td>
                        <td>
                            <?php if (!$bkg->ktp): ?>
                            <span class="text-danger">Tidak ada file</span>
                            <?php else: ?>
                            <a target="_blank" href="<?= base_url('gambarbooking/') . $bkg->ktp ?>"
                                class="btn btn-success btn-sm">
                                <i class="fas fa-eye"></i>
                                <?php endif ?>
                        </td>
                        <td>
                            <?php if (!$bkg->npwp): ?>
                            <span class="text-danger">Tidak ada file</span>
                            <?php else: ?>
                            <a target="_blank" href="<?= base_url('gambarbooking/') . $bkg->npwp ?>"
                                class="btn btn-success btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <?php endif ?>
                        </td>

                        <td>
                            <?= $bkg->cara_bayar ?>
                        </td>

                        <td><a href="<?= base_url('gambarbooking/') . $bkg->bukti_tf ?>"
                                class="btn btn-success btn-sm"><i class="fas fa-zoom"> Struk </i></a></td>
                        <td>
                            <?php if ($bkg->status_booking == 'invalid'): ?>
                            <span class="text-danger">
                                <?= $bkg->status_booking ?>
                            </span>
                            <?php else: ?>
                            <span class="text-success">
                                <?= $bkg->status_booking ?>
                            </span>
                            <?php endif ?>
                        </td>
                        <td>
                            <?php if (!$bkg->kwitansi_booking): ?>
                            <span class="text-danger">Belum Tersedia</span>
                            <?php else: ?>
                            <a href="<?= base_url('gambarbooking/') . $bkg->kwitansi_booking ?>"
                                class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                            <?php endif ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>