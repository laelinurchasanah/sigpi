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
                    <th>ID Akad</th>
                    <th>Konsumen</th>
                    <th>Blok</th>
                    <th>Tanggal Ketersediaan</th>
                    <th>Status Ketersediaan</th>

                </tr>
            </thead>
            <tbody>
                <?php
				$no = 1;
				foreach ($pk_konsumen as $pk):
					?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $pk->id_akad ?>
                    </td>
                    <td><?= $pk->nama_konsumen ?></td>
                    <td>
                        <?= $pk->kavling ?>
                    </td>
                    <td>
                        <?= $pk->tgl_ketersediaan ?>
                    </td>
                    <td>
                        <?= $pk->status_ketersediaan ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>