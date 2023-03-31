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
                    <th>Id Akad</th>
                    <th>Marketing</th>
                    <th>Konsumen</th>
                    <th>Blok</th>
                    <th>Bank</th>
                    <th>Tanggal Penjadwalan</th>
                    <th>Status KPR</th>
                    <th>Tanggal Akad</th>
                    <th>Status Akad</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
				foreach ($akad as $akd): ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $akd->id_akad ?>
                    </td>
                    <td><?= $akd->nama_marketing ?></td>
                    <td>
                        <?= $akd->nama_konsumen ?>
                    </td>
                    <td><?= $akd->kavling ?></td>
                    <td>
                        <?= $akd->bank ?>
                    </td>
                    <td><?= $akd->tgl_akad ?></td>
                    <td>
                        <?= $akd->status_kpr ?>
                    </td>
                    <td><?= $akd->tgl_jadwal_akad ?></td>
                    <td>
                        <?= $akd->status_akad ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
