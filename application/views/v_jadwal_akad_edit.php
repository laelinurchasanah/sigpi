<style>
	.card {
		padding: 20px;
	}
</style>
<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">
		<?php foreach ($akad as $akd) { ?>
			<form action="<?= base_url('jadwal_akad/edit') ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group" hidden="hidden">
					<label>Id Akad</label>
					<input type="text" name="tid" value="<?= $akd->id_akad ?>" class="form-control" required="">

				</div>

				<div class="form-group">
					<label>Tanggal Jadwal Akad</label>
					<input type="date" name="tjadwal" value="<?= $akd->tgl_jadwal_akad ?>" class="form-control" required="">

				</div>
				<div class="form-group">
					<label>Status Akad</label>
					<select class="form-control" name="tstatus" required="">

						<option value="<?= $akd->status_akad ?>"><?= $akd->status_akad ?></option>
						<option value="terlaksana">Terlaksana</option>
						<option value="belum terlaksana">belum terlaksana</option>
					</select>
				</div>


				<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
				<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
			</form>
		<?php } ?>
	</div>
</div>
