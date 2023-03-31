<?= $this->session->flashdata('pesan'); ?>
<div class="card">
	<div class="card-header">
		<a href="<?= base_url('suku_bunga/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Data</i></a>

	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr class="text-center">
					<th>No.</th>
					<th>Id Bunga</th>
					<th>Bank</th>
					<th>Tanggal Update</th>
					<th>Suku Bunga</th>
					<th>Action</th>
				</tr>
			</thead>


			<tbody>

				<?php $no = 1;
				foreach ($bunga as $bna) : ?>
					<tr class="text-center">
						<td><?= $no++ ?></td>
						<td><?= $bna->id_bunga  ?></td>
						<td><?= $bna->bank ?></td>
						<td><?= $bna->tgl_update ?></td>
						<td><?= $bna->suku_bunga ?></td>
						<td>
							<a href="<?= base_url('suku_bunga/bungaedit/' . $bna->id_bunga) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
							<a href="<?= base_url('suku_bunga/delete/' . $bna->id_bunga) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
