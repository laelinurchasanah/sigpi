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
                    <th>Id Komplain</th>
                    <th>Kavling</th>
                    <th>Nama Konsumen</th>
                    <th>Tanggal Komplain</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
				foreach ($komplain as $kpl) : ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $kpl->id_komplain  ?></td>
                    <td><?= $kpl->kavling ?></td>
                    <td><?= $kpl->nama_konsumen ?></td>
                    <td><?= $kpl->tgl_komplain ?></td>
                    <td><?= $kpl->ket_komplain ?></td>
                    <td><?= $kpl->status_komplain ?></td>
                    <td><a href="<?= base_url('komplain/' . $kpl->upload_file . ".pdf")  ?>"
                            class="btn btn-success btn-sm">Lihat Dokumen<i class="fas fa-zoom">
                    </td>
                    <td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>