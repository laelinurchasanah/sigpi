<style>
	.card {
		padding: 20px;
	}
</style>
<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">
		<form action="<?= base_url('user/tambah_aksi') ?>" method="POST">
			<div class="form-group">
				<label>NIK</label>
				<input type="text" required="" name="tnik" class="form-control" autofocus="">
				<?= form_error('tnik', '<div class="text-small text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" required="" name="tnama" class="form-control" autofocus="">
				<?= form_error('tnama', '<div class="text-small text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Alamat</label>

				<textarea name="talamat" required="" class="form-control"></textarea>
				<?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>No. Telp</label>
				<input type="text" name="ttelp" required="" class="form-control">
				<?= form_error('ttelp', '<div class="text-small text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="tusername" required="" class="form-control" autofocus="">
				<?= form_error('tusername', '<div class="text-small text-danger">', '</div>'); ?>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="text" name="tpassword" required="" class="form-control">
				<?= form_error('tpassword', '<div class="text-small text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Role</label>
				<select class="form-control" name="trole" required="">
					<option value="">--Pilih--</option>
					<option value="admin">Admin</option>
					<option value="marketing">Marketing</option>
					<option value="estate">Estate</option>
					<option value="konsumen">Konsumen</option>
				</select>
			</div>


			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
			<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
		</form>
	</div>
</div>
