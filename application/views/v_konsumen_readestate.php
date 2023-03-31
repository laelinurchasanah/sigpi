<?= $this->session->flashdata('pesan'); ?>
<div class="card">
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

					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
