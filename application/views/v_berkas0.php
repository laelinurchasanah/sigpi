<?= $this->session->flashdata('pesan'); ?>
<div class="card">
	<div class="card-header">
		<a href="<?= base_url('berkas_kpr/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Data</i></a>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr class="text-center">
					<th>No.</th>
					<th>Id Booking</th>
					<th>Admin</th>
					<th>Marketing</th>
					<th>Konsumen</th>
					<th>Kavling</th>
					<th>Tanggal</th>
					<th>Ket. Berkas KPR</th>
					<th>Berkas KPR</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>

				<?php $no = 1;
				foreach ($berkas as $bks) : ?>
					<tr class="text-center">
						<td><?= $no++ ?></td>
						<td><?= $bks->id_booking  ?></td>
						<td><?= $bks->nama_admin ?></td>
						<td><?= $bks->nama_marketing ?></td>
						<td><?= $bks->nama_konsumen ?></td>
						<td><?= $bks->kavling ?></td>
						<td><?= $bks->tgl_upload ?></td>
						<td><?= $bks->berkas_kpr ?></td>
						<td><a href="<?= base_url('berkaskpr/' . $bks->upload_berkas . ".pdf")  ?>" class="btn btn-success btn-sm">Lihat Berkas<i class="fas fa-zoom">
						<td>
							<a href="<?= base_url('berkas_kpr/delete/' . $bks->id_berkas) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
