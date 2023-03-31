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
					<th>Id Booking</th>
					<th>Admin</th>
					<th>Marketing</th>
					<th>Konsumen</th>
					<th>Kavling</th>
					<th>Status BI Checking</th>
					<th>Catatan BI Checking</th>
					<th>Action</th>
				</tr>
			</thead>


			<tbody>

				<?php $no = 1;
				foreach ($bichecking as $bi) : ?>
					<tr class="text-center">
						<td><?= $no++ ?></td>
						<td><?= $bi->id_booking  ?></td>
						<td><?= $bi->nama_admin ?></td>
						<td><?= $bi->nama_marketing ?></td>
						<td><?= $bi->nama_konsumen ?></td>
						<td><?= $bi->kavling ?></td>
						<td><?= $bi->bi_checking ?></td>
						<td><?= $bi->catatan_bi_checking ?></td>

						<td>
							<a href="<?= base_url('bichecking/bicheckingedit/' . $bi->id_booking) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
