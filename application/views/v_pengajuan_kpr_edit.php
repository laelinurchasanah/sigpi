<style>
	.card {
		padding: 20px;
	}
</style>
<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">
		<?php foreach ($kpr as $kp) { ?>
			<form action="<?= base_url('pengajuan_kpr/edit') ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group" hidden="hidden">
					<label>Id Kpr</label>
					<input type="text" required="" name="tid" value="<?= $kp->id_kpr ?>" class="form-control">
				</div>

				<div class="form-group">
					<label>Status KPR</label>
					<select class="form-control" name="tstatus" required="">
						<option value="<?= $kp->status_kpr ?>"><?= $kp->status_kpr ?></option>
						<option value="accept">Acc</option>
						<option value="process">Process</option>
						<option value="reject">Reject</option>

					</select>
				</div>

				<div class="form-group">
					<label>SP3K</label>
					<input type="file" name="tgambar1" value="<?= $kp->sp3k ?>" class="form-control">
				</div>

				<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
				<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
			</form>
		<?php } ?>
	</div>
</div>
