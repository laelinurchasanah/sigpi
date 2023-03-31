<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">
        <!-- Tombol tambah data -->
        <a href="<?= base_url('perbaikan/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah
            Data</a>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Komplain</th>
                    <th>Estate</th>
                    <th>Kavling</th>
                    <th>Konsumen</th>
                    <th>Tanggal Perbaikan</th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
				$no = 1;
				foreach ($perbaikan as $pr):
					?>
                <tr class="text-center">
                    <td><?= $pr->id_perbaikan ?></td>
                    <td>
                        <?= $pr->id_komplain ?>
                    </td>
                    <td><?= $pr->nik_estate ?></td>
                    <td>
                        <?= $pr->kavling ?>
                    </td>
                    <td>
                        <?= $pr->nama_konsumen ?>
                    </td>
                    <td>
                        <?= $pr->tanggal_perbaikan ?>
                    </td>
                    <td><?= $pr->tanggal_selesai ?></td>
                    <td>
                        <?= $pr->status ?>
                    </td>
                    <td class="text-center">
                        <a href="<?= base_url('perbaikan/edit/') . $pr->id_perbaikan ?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <!-- <a href="<?= base_url('perbaikan/delete/') . $pr->id_perbaikan ?>" class="btn btn-danger btn-sm"
								onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a> -->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>