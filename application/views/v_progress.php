<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('progres_rumah/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Id Progress</th>
                    <th>Blok</th>
                    <th>Estate</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Gambar </th>
                    <th>Action</th>
                </tr>
            </thead>


            <tbody>

                <?php $no = 1;
				foreach ($progress as $prg): ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $prg->id_progress ?>
                    </td>
                    <td><?= $prg->kavling ?></td>
                    <td>
                        <?= $prg->nama_estate ?>
                    </td>
                    <td><?= $prg->description ?></td>
                    <td>
                        <?= $prg->status_progress ?>
                    </td>
                    <!-- Button lihat gambar -->
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#modal-lg<?= $prg->id_progress ?>">
                            <i class="fas fa-eye
										"></i>
                        </button>
                    </td>
                    <td>
                        <a href="<?= base_url('progres_rumah/progressedit/' . $prg->id_progress) ?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <!-- <a href="<?= base_url('progres_rumah/delete/' . $prg->id_progress) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a> -->
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Show gambar dengan modal dan carousel-->
<?php foreach ($progress as $prg): ?>
<div class="modal fade" id="modal-lg<?= $prg->id_progress ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Gambar Progress</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleControls<?= $prg->id_progress ?>" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url('gambarprogress1/') . $prg->gambar1 ?>"
                                alt="First slide">
                        </div>
                        <!-- Cek apakah ada gambar2 -->
                        <?php if ($prg->gambar2 != 'kosong.jpg'): ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('gambarprogress1/') . $prg->gambar2 ?>"
                                alt="Second slide">
                        </div>
                        <?php endif ?>
                        <!-- Cek apakah ada gambar3 -->
                        <?php if ($prg->gambar3 != 'kosong.jpg'): ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('gambarprogress1/') . $prg->gambar3 ?>"
                                alt="Third slide">
                        </div>
                        <?php endif ?>
                        <!-- Cek apakah ada gambar4 -->
                        <?php if ($prg->gambar4 != 'kosong.jpg'): ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('gambarprogress1/') . $prg->gambar4 ?>"
                                alt="Fourth slide">
                        </div>
                        <?php endif ?>
                        <!-- Cek apakah ada gambar5 -->
                        <?php if ($prg->gambar5 != 'kosong.jpg'): ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('gambarprogress1/') . $prg->gambar5 ?>"
                                alt="Fifth slide">
                        </div>
                        <?php endif ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls<?= $prg->id_progress ?>"
                        role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls<?= $prg->id_progress ?>"
                        role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php endforeach ?>