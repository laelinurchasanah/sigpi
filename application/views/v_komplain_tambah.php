<style>
	.card {
		padding: 20px;
	}
</style>
<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">

		<?php foreach ($komplain as $kpl) { ?>
			<form action="<?= base_url('komplain/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group" hidden="hidden">
					<label>Id Booking</label>
					<input type="text" required="" name="tidstk" class="form-control" autofocus="" value="<?= $kpl->id_stk  ?>">

				</div>

				<div class="form-group">
					<label>Keterangan Komplain</label>
					<input type="text" required="" name="tket" class="form-control" autofocus="">
				</div>
				<div class="form-group">
					<label>Form Komplain</label>
					<a href="https://docs.google.com/document/d/1bos4NvYXnbfAHGz_geWHnw5XPMP4tVbC/edit?usp=share_link&ouid=118111682377207247821&rtpof=true&sd=true" class="btn btn-primary btn-sm">Download</a>
				</div>

				<div class="form-group">
					<label>File</label>
					<input type="file" required="" name="tgambar1" class="form-control">
				</div>


				<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
				<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
			</form>
		<?php } ?>
	</div>
</div>
