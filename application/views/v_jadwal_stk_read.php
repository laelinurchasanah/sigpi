<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">


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

                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
