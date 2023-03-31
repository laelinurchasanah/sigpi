<?= $this->session->flashdata('pesan'); ?>
<div class="card">

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

					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
