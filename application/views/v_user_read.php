<?= $this->session->flashdata('pesan'); ?>
<div class="card">

	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr class="text-center">
					<th>No.</th>
					<th>Id user</th>
					<th>Username</th>
					<th>Role</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php $no = 1;
				foreach ($user as $usr) : ?>
					<tr class="text-center">
						<td><?= $no++ ?></td>
						<td><?= $usr->id_user  ?></td>
						<td><?= $usr->username ?></td>
						<td><?= $usr->role ?></td>
						<td>
							<a href="<?= base_url('user/useredit/' . $usr->id_user) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
