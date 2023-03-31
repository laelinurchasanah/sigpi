<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">

    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>ID Komplain</th>
                    <th>Estate</th>
                    <th>Kavling</th>
                    <th>Konsumen</th>
                    <th>Tanggal Perbaikan</th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                <?php
				$no = 1;
				foreach ($perbaikan as $pr):
					?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
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

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>