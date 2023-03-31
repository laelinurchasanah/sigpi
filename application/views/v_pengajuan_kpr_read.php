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
                    <th>Id KPR</th>
                    <th>Admin</th>
                    <th>Marketing</th>
                    <th>Konsumen</th>
                    <th>Blok</th>
                    <th>Bank</th>
                    <th>Tanggal</th>
                    <th>Status KPR</th>
                    <th>SP3K</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
				foreach ($kpr as $kp): ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $kp->id_kpr ?>
                    </td>
                    <td><?= $kp->nama_admin ?></td>
                    <td>
                        <?= $kp->nama_marketing ?>
                    </td>
                    <td><?= $kp->nama_konsumen ?></td>
                    <td>
                        <?= $kp->kavling ?>
                    </td>
                    <td><?= $kp->bank ?></td>
                    <td>
                        <?= $kp->tgl_kpr ?>
                    </td>
                    <td><?= $kp->status_kpr ?></td>
                    <td><a href="<?= base_url('sp3k/' . $kp->sp3k . ".pdf") ?>" class="btn btn-success btn-sm"><i
                                class="fas fa-zoom"> SP3K </i></a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
