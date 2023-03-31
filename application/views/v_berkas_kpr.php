<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <?php
	if (!$berkas):
		?>
    <div class="card-header">
        <a href="<?= base_url('berkas_kpr/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah
                Data</i></a>
    </div>
    <?php
	endif;
	?>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-responsive">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Id Booking</th>
                    <th>Admin</th>
                    <th>Marketing</th>
                    <th>Konsumen</th>
                    <th>Kavling</th>
                    <th>Tanggal</th>
                    <th>KK</th>
                    <th>BPJS</th>
                    <th>Buku Nikah</th>
                    <th>Foto</th>
                    <th>Surat Kerja</th>
                    <th>Slip Gaji</th>
                    <th>Rekening Koran Payroll</th>
                    <th>NIB</th>
                    <th>SKU</th>
                    <th>NPWP Perusahaan</th>
                    <th>Laporan Laba</th>
                    <th>Rekening Koran Usaha</th>
                    <th>Foto Tempat Usaha 1</th>
                    <th>Foto Tempat Usaha 2</th>
                    <th>Foto Tempat Usaha 3</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
				foreach ($berkas as $bks): ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $bks->id_booking ?>
                    </td>
                    <td><?= $bks->nama_admin ?></td>
                    <td>
                        <?= $bks->nama_marketing ?>
                    </td>
                    <td><?= $bks->nama_konsumen ?></td>
                    <td>
                        <?= $bks->kavling ?>
                    </td>
                    <td><?= $bks->tgl_upload ?></td>
                    <td>
                        <a target="_blank" href="<?= base_url('berkasuploads/' . $bks->kk) ?>"
                            class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a target="_blank" href="<?= base_url('berkasuploads/' . $bks->bpjs) ?>"
                            class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <!-- Jika buku nikah null, maka tampilkan text belum menikah -->
                        <?php if ($bks->buku_nikah == null): ?>
                        <p class="text-danger">Belum Menikah</p>
                        <?php else: ?>
                        <a target="_blank" href="<?= base_url('berkasuploads/' . $bks->buku_nikah) ?>"
                            class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                        <?php endif ?>
                    </td>
                    <td>
                        <a target="_blank" href="<?= base_url('berkasuploads/' . $bks->foto) ?>"
                            class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <?php if ($bks->surat_keterangan_kerja != null): ?>
                    <td>
                        <a target="_blank" href="<?= base_url('berkasuploads/' . $bks->surat_keterangan_kerja) ?>"
                            class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a target="_blank" href="<?= base_url('berkasuploads/' . $bks->slip_gaji) ?>"
                            class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a target="_blank" href="<?= base_url('berkasuploads/' . $bks->rekening_koran_payroll) ?>"
                            class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <?php else: ?>
                    <td><span class="text-danger">Wirausaha</span></td>
                    <td><span class="text-danger">Wirausaha</span></td>
                    <td><span class="text-danger">Wirausaha</span></td>
                    <?php endif ?>
                    <?php if ($bks->nib != null): ?>
                    <td><a target="_blank" href="<?= base_url('berkasuploads/' . $bks->nib) ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a></td>
                    <td><a target="_blank" href="<?= base_url('berkasuploads/' . $bks->sku) ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a></td>
                    <td><a target="_blank" href="<?= base_url('berkasuploads/' . $bks->npwp_perusahaan) ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-zoom"></i></a></td>
                    <td><a target="_blank" href="<?= base_url('berkasuploads/' . $bks->laporan_laba) ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a></td>
                    <td><a target="_blank" href="<?= base_url('berkasuploads/' . $bks->rekening_koran_usaha) ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a></td>
                    <td><a target="_blank" href="<?= base_url('berkasuploads/' . $bks->foto_tempat_usaha_satu) ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a></td>
                    <td><a target="_blank" href="<?= base_url('berkasuploads/' . $bks->foto_tempat_usaha_dua) ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a></td>
                    <td><a target="_blank" href="<?= base_url('berkasuploads/' . $bks->foto_tempat_usaha_tiga) ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a></td>
                    <?php else: ?>
                    <td><span class="text-danger">Karyawan</span></td>
                    <td><span class="text-danger">Karyawan</span></td>
                    <td><span class="text-danger">Karyawan</span></td>
                    <td><span class="text-danger">Karyawan</span></td>
                    <td><span class="text-danger">Karyawan</span></td>
                    <td><span class="text-danger">Karyawan</span></td>
                    <td><span class="text-danger">Karyawan</span></td>
                    <td><span class="text-danger">Karyawan</span></td>
                    <?php endif ?>
                    <!-- keterangan -->
                    <td>
                        <?php if ($bks->keterangan == null): ?>
                        <span class="text-danger">Belum ada keterangan</span>
                        <?php else: ?>
                        <?= $bks->keterangan ?>
                        <?php endif ?>
                    </td>
                    <!-- status -->
                    <td>
                        <?php if ($bks->status_berkas == "Pending"): ?>
                        <span class="badge badge-warning">Menunggu</span>
                        <?php elseif ($bks->status_berkas == "Diterima"): ?>
                        <span class="badge badge-success">Diterima</span>
                        <?php else: ?>
                        <span class="badge badge-danger">Ditolak</span>
                        <?php endif ?>
                    </td>
                    <td>
                        <!-- <a href="<?= base_url('berkas_kpr/delete/' . $bks->id_berkas) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
										<i class="fas fa-trash"></i>
									</a> -->
                        <!-- Jika status == "Ditolak", maka munculkan button edit -->
                        <?php if ($bks->status_berkas == "Ditolak"): ?>
                        <a href="<?= base_url('berkas_kpr/edit/' . $bks->id_berkas) ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <?php endif ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
