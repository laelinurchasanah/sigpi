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
					<th>NIK</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No. Telp</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php $no = 1;
				foreach ($konsumen as $ksn) : ?>
					<tr class="text-center">
						<td><?= $no++ ?></td>
						<td><?= $ksn->nik_konsumen  ?></td>
						<td><?= $ksn->nama_konsumen  ?></td>
						<td><?= $ksn->alamat_konsumen  ?></td>
						<td><?= $ksn->telp_konsumen  ?></td>
						<td>
							<a href="<?= base_url('konsumen/konsumenedit/' . $ksn->nik_konsumen) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
