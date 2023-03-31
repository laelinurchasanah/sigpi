<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <!-- Card Header -->
    <div class="card-header">
        <!-- Tombol tambah data -->
        <a href="<?= base_url('type/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah
            Data</a>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Type</th>
                    <th>LB</th>
                    <th>LT</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
				foreach ($types as $type) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $type->type  ?></td>
                    <td><?= $type->lb  ?></td>
                    <td><?= $type->lt  ?></td>
                    <td>Rp<?= $type->harga ?></td>
                    <td>
                        <a href="<?= base_url('type/edit/' . $type->id_type_rumah) ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></a>
                        <a href="<?= base_url('type/hapus/' . $type->id_type_rumah) ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>