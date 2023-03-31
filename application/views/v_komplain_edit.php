<style>
	.card {
		padding: 20px;
	}
</style>
<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">
		<?php foreach ($komplain as $kpl) { ?>
			<form action="<?= base_url('komplain/edit') ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group" hidden="hidden">
					<label>Id Komplain</label>
					<input type="text" required="" name="tid" value="<?= $kpl->id_komplain ?>" class="form-control">

				</div>
				<div class="form-group">
					<label>Status Komplain</label>
					<select class="form-control" name="tstatus" required="">
						<option>--Pilih Status Komplain--</option>
						<option value="belum diterima">Belum diterima</option>
						<option value="terima">Terima</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
				<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
			</form>
		<?php } ?>
	</div>
</div>