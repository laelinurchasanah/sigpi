<?= $this->session->flashdata('pesan'); ?>
<div class="card">
	<div class="card-header">
		<a href="<?= base_url('admin/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Data</i></a>

	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr class="text-center">
					<th>No.</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No. Telp</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php $no = 1;
				foreach ($admin as $adm) : ?>
					<tr class="text-center">
						<td><?= $no++ ?></td>
						<td><?= $adm->nik_admin  ?></td>
						<td><?= $adm->nama_admin  ?></td>
						<td><?= $adm->alamat_admin  ?></td>
						<td><?= $adm->telp_admin  ?></td>
						<td>
							<a href="<?= base_url('admin/adminedit/' . $adm->nik_admin) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
							<a href="<?= base_url('admin/delete/' . $adm->nik_admin) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
