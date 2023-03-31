<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('jadwal_stk/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Id Serah Terima Kunci</th>
                    <th>Marketing</th>
                    <th>Konsumen</th>
                    <th>Blok</th>
                    <th>Bank</th>
                    <th>Tanggal Penjadwalan</th>
                    <th>Status KPR</th>
                    <th>Tanggal Serah Terima Kunci</th>
                    <th>Status Serah Terima Kunci</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
				foreach ($stk as $st): ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $st->id_stk ?>
                    </td>
                    <td><?= $st->nama_marketing ?></td>
                    <td>
                        <?= $st->nama_konsumen ?>
                    </td>
                    <td><?= $st->kavling ?></td>
                    <td>
                        <?= $st->bank ?>
                    </td>
                    <td><?= $st->tgl_stk ?></td>
                    <td>
                        <?= $st->status_kpr ?>
                    </td>
                    <td><?= $st->tgl_jadwal_stk ?></td>
                    <td>
                        <?= $st->status_stk ?>
                    </td>

                    <td>
                        <a href="<?= base_url('jadwal_stk/stkedit/' . $st->id_stk) ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></a>
                        <!-- <a href="<?= base_url('jadwal_stk/delete/' . $st->id_stk) ?>" class="btn btn-danger btn-sm"
								onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i
									class="fas fa-trash"></i></a> -->
                    </td>

                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
