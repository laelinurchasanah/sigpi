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
				foreach ($sertifikat as $srf):
					?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $srf->id_akad ?>
                    </td>
                    <td><?= $srf->nama_konsumen ?></td>
                    <td>
                        <?= $srf->kavling ?>
                    </td>
                    <td>
                        <?= $srf->tgl_ketersediaan ?>
                    </td>
                    <td><?= $srf->status_ketersediaan ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
