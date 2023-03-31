<?= $this->session->flashdata('pesan'); ?>
<div class="card">
	<div class="card-header">
		<a href="<?= base_url('marketing/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Data</i></a>

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
				foreach ($marketing as $mkt) : ?>
					<tr class="text-center">
						<td><?= $no++ ?></td>
						<td><?= $mkt->nik_marketing  ?></td>
						<td><?= $mkt->nama_marketing  ?></td>
						<td><?= $mkt->alamat_marketing  ?></td>
						<td><?= $mkt->telp_marketing  ?></td>
						<td>
							<a href="<?= base_url('marketing/marketingedit/' . $mkt->nik_marketing) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
							<a href="<?= base_url('marketing/delete/' . $mkt->nik_marketing) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
