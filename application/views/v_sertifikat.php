<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">
        <!-- Tombol tambah data -->
        <a href="<?= base_url('sertifikat/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah
            Data</a>
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
                    <th>Action</th>
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
                    <td>
                        <?= $srf->status_ketersediaan ?>
                    </td>
                    <td class="text-center">
                        <a href="<?= base_url('sertifikat/edit/') . $srf->id_sertifikat ?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <!-- <a href="<?= base_url('sertifikat/hapus/') . $srf->id_sertifikat ?>"
								class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><i
									class="fas fa-trash"></i></a> -->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
