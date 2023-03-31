<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <!-- Button -->
        <a href="<?= base_url('booking/tambah') ?>" class="btn btn-primary btn-sm float-right"><i
                class="fas fa-plus"></i> Tambah Booking</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Id Booking</th>
                    <th>Admin</th>
                    <th>Marketing</th>
                    <th>Konsumen</th>
                    <th>Blok</th>
                    <th>Harga</th>
                    <th>KTP</th>
                    <th>NPWP</th>
                    <th>Status Booking</th>
                    <th>Kwitansi Booking</th>
                    <th>Cara Bayar</th>
                    <th>Bukti TF</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
				foreach ($booking as $bkg): ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $bkg->id_booking ?>
                    </td>
                    <td><?= $bkg->nama_admin ?></td>
                    <td>
                        <?= $bkg->nama_marketing ?>
                    </td>
                    <td><?= $bkg->nama_konsumen ?></td>
                    <td>
                        <?= $bkg->kavling ?>
                    </td>
                    <td><?= $bkg->harga ?></td>

                    <td>
                        <a target="_blank" href="<?= base_url('gambarbooking/' . $bkg->ktp) ?>"
                            class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a target="_blank" href="<?= base_url('gambarbooking/' . $bkg->npwp) ?>"
                            class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>

                    </td>
                    <td>
                        <?php if ($bkg->status_booking == 'invalid'): ?>
                        <span class="text-danger"><?= $bkg->status_booking ?></span>
                        <?php else: ?>
                        <span class="text-success">
                            <?= $bkg->status_booking ?>
                        </span>
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($bkg->kwitansi_booking == 'invalid'): ?>
                        <span class="text-danger"><?= $bkg->kwitansi_booking ?></span>
                        <?php else: ?>
                        <a href="<?= base_url('gambarbooking/') . $bkg->kwitansi_booking ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                        <?php endif ?>
                    </td>
                    <td><?= $bkg->cara_bayar ?></td>
                    <td><a href="<?= base_url('gambarbooking/') . $bkg->bukti_tf ?>" class="btn btn-success btn-sm"><i
                                class="fas fa-zoom"> Struk </i></a></td>
                    <td>
                        <a href="<?= base_url('booking/bookingedit/' . $bkg->id_booking) ?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('booking/delete/' . $bkg->id_booking) ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
