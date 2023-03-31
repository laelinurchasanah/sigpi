<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">
        <!-- Tombol tambah data -->
        <a href="<?= base_url('pk_konsumen/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
            Tambah Data</a>
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
                    <td class="text-center">
                        <a href="<?= base_url('pk_konsumen/edit/') . $pk->id_pk ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></a>
                        <!-- <a href="<?= base_url('pk_konsumen/hapus/') . $pk->id_pk ?>" class="btn btn-danger btn-sm"
								onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a> -->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
