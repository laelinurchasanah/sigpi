<style>
	.card {
		padding: 20px;
	}
</style>
<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">
		<?php foreach ($user as $usr) { ?>
			<form action="<?= base_url('user/edit') ?>" method="POST">
				<div class="form-group">
					<label>NIK</label>
					<input type="text" required="" name="tiduser" class="form-control" value="<?= $usr->id_user  ?>" readonly="readonly">
					<?= form_error('tiduser', '<div class="text-small text-danger">', '</div>'); ?>
				</div>

				<div class="form-group">
					<label>Username</label>
					<input type="text" required="" name="tusername" class="form-control" value="<?= $usr->username  ?>" autofocus="">
					<?= form_error('tusername', '<div class="text-small text-danger">', '</div>'); ?>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="text" required="" name="tpassword" class="form-control" value="<?= $usr->password  ?>">
					<?= form_error('tpassword', '<div class="text-small text-danger">', '</div>'); ?>
				</div>


				<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
				<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
			</form>
		<?php } ?>
	</div>
</div>
