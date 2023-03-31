<?= $this->session->flashdata('pesan'); ?>

<style>
.master {
    text-align: center;
    align-items: center;
}

.master h3 {
    font-weight: bold;
    margin-bottom: 30px;
    margin-top: 20px !important;
}

.master img {
    width: 60%;
}

@media only screen and (max-width: 700px) {
    .master h3 {
        font-weight: bold;
        margin-bottom: 20px;
        margin-top: 20px !important;
        font-size: 18px;
    }

    .master img {
        width: 90%;
    }
}
</style>
<div class="card">

    <div class="master">
        <h3>MASTER PLAN</h3>
        <img src="<?php echo base_url('assets/beranda/'); ?>images/masterplan.jpg" class="masterplan">
    </div>

    <div class="card-header">
        <a href="<?= base_url('blok/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <!-- <th>Id Kavling</th> -->
                    <th>Kavling</th>
                    <th>Type</th>
                    <th>LB</th>
                    <th>LT</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
				foreach ($kavling as $kvl): ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <!-- <td>
											<?= $kvl->id_kavling ?>
										</td> -->
                    <td><?= $kvl->kavling ?></td>
                    <td>
                        <?= $kvl->type ?>
                    </td>
                    <td>
                        <?= $kvl->lb ?>
                    </td>
                    <td>
                        <?= $kvl->lt ?>
                    </td>
                    <td>Rp<?= $kvl->harga ?></td>
                    <td>
                        <?= $kvl->status ?>
                    </td>
                    <td>
                        <a href="<?= base_url('blok/blokedit/' . $kvl->id_kavling) ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></a>
                        <a href="<?= base_url('blok/delete/' . $kvl->id_kavling) ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
