<style>
	.card {
		padding: 20px;
	}
</style>
<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">
		<?php foreach ($marketing as $mkt) { ?>
			<form action="<?= base_url('marketing/edit') ?>" method="POST">
				<div class="form-group">
					<label>NIK Marketing</label>
					<input type="text" required="" name="tnik" class="form-control" value="<?= $mkt->nik_marketing  ?>" readonly="readonly">
					<?= form_error('tnik', '<div class="text-small text-danger">', '</div>'); ?>
				</div>
				<div class="form-group">
					<label>Nama Marketing</label>
					<input type="text" required="" name="tnama" class="form-control" value="<?= $mkt->nama_marketing  ?>" autofocus="">
					<?= form_error('tnama', '<div class="text-small text-danger">', '</div>'); ?>
				</div>
				<div class="form-group">
					<label>Alamat Marketing</label>

					<input type="text" required="" name="talamat" class="form-control" value="<?= $mkt->alamat_marketing  ?>" autofocus="">
					<?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
				</div>
				<div class="form-group">
					<label>No. Telp Marketing</label>
					<input type="text" required="" name="ttelp" class="form-control" value="<?= $mkt->telp_marketing  ?>">
					<?= form_error('ttelp', '<div class="text-small text-danger">', '</div>'); ?>
				</div>

				<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
				<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
			</form>
		<?php } ?>
	</div>
</div>
