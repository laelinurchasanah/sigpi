<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('pengajuan_kpr/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
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
                    <th>Action</th>
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

                    <td>
                        <?php if ($kp->sp3k != NULL): ?>
                        <a href="<?= base_url('sp3k/' . $kp->sp3k) ?>" class="btn btn-success btn-sm"><i
                                class="fas fa-zoom"> SP3K </i></a>
                        <?php else: ?>
                        <span class="text-danger">SP3K Belum Diupload</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('pengajuan_kpr/kpredit/' . $kp->id_kpr) ?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <!-- <a href="<?= base_url('pengajuan_kpr/delete/' . $kp->id_kpr) ?>" class="btn btn-danger btn-sm"
								onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i
									class="fas fa-trash"></i></a> -->
                    </td>

                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
