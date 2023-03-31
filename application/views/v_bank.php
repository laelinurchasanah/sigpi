<?= $this->session->flashdata('pesan'); ?>
<div class="card">
	<div class="card-header">
		<a href="<?= base_url('bank/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Data</i></a>

	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr class="text-center">
					<th>No.</th>
					<th>Id Bank</th>
					<th>Bank</th>
					<th>Cabang</th>
					<th>Alamat</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php $no = 1;
				foreach ($bank as $bnk) : ?>
					<tr class="text-center">
						<td><?= $no++ ?></td>
						<td><?= $bnk->id_bank  ?></td>
						<td><?= $bnk->bank ?></td>
						<td><?= $bnk->cabang ?></td>
						<td><?= $bnk->alamat_bank ?></td>
						<td>
							<a href="<?= base_url('bank/bankedit/' . $bnk->id_bank) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
							<a href="<?= base_url('bank/delete/' . $bnk->id_bank) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
