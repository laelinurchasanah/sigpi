<style>
	.card {
		padding: 20px;
	}
</style>
<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">
		<form action="<?= base_url('sertifikat/edit_aksi/') ?>" method="POST">
			<!-- csrf -->
			<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
			<!-- id -->
			<input type="hidden" name="tid_pk" value="<?php echo $sertifikat[0]->id_pk ?>">

			<!-- Select ID Akad -->
			<div class="form-group">
				<label>Kavling</label>
				<select name="tid_akad" class="form-control">
					<option value="">-- Pilih Kavling --</option>
					<?php foreach ($akad as $a) : ?>
						<option value="<?= $a->id_akad ?>"><?= $a->kavling ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<!-- NIK Admin -->
			<div class="form-group">
				<label>NIK Admin</label>
				<select name="tnik_admin" class="form-control">
					<option value="">-- Pilih NIK Admin --</option>
					<?php foreach ($admin as $a) : ?>
						<option value="<?= $a->nik_admin ?>"><?= $a->nik_admin ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<!-- Tanggal Ketersediaan -->
			<div class="form-group">
				<label>Tanggal Ketersediaan</label>
				<input type="date" name="ttgl_ketersediaan" class="form-control">
			</div>

			<!-- Status Ketersediaan -->
			<div class="form-group">
				<label>Status Ketersediaan</label>
				<select name="tstatus_ketersediaan" class="form-control">
					<option value="">-- Pilih Status Ketersediaan --</option>
					<option value="tersedia" <?php echo $sertifikat[0]->status_ketersediaan == 'tersedia' ? "selected" : "" ?>>Tersedia</option>
					<option value="belum tersedia" <?php $sertifikat[0]->status_ketersediaan == 'belum tersedia' ? "selected" : "" ?>>Belum Tersedia</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
			<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
		</form>
	</div>
</div>
