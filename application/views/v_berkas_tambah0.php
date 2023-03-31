<style>
	.card {
		padding: 20px;
	}
</style>

<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">
		<?php foreach ($booking as $bkg) { ?>
			<form action="<?= base_url('berkas_kpr/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group" hidden="hidden">
					<label>Id Booking</label>
					<input type="text" name="tidbooking" class="form-control" autofocus="" value="<?= $bkg->id_booking  ?>">
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<!-- Select 2 option, karyawan atau wirausaha -->
					<select name="tket" id="keterangan" class="form-control">
						<option value="Karyawan">Karyawan</option>
						<option value="Wirausaha">Wirausaha</option>
					</select>
				</div>

				<h4 class="mt-5">Data Diri</h4>
				<hr>

				<div class="form-group" id="data-diri">
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<!-- Form input file -->
								<label>Upload KTP</label>
								<input type="file" name="berkas[]" required class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Upload KK</label>
								<input type="file" name="berkas[]" required class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Upload NPWP</label>
								<input type="file" name="berkas[]" required class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>BPJS</label>
								<input type="file" name="berkas[]" required class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Buku Nikah</label>
								<input type="file" name="berkas[]" required class="form-control">
								<span class="text-danger">*Jika sudah menikah</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Pas Foto</label>
								<input type="file" name="berkas[]" required class="form-control">
								<span class="text-danger">*Harap diisi. Background bebas</span>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group" id="data-karyawan">

					<h4 class="mt-5">Data Karyawan</h4>
					<hr>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<!-- Form input file -->
								<label>Surat Keterangan Kerja</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Slip Gaji 3 Bulan Terakhir</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Rekening koran Payroll 3 Bulan Terakhir</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group" id="data-wirausaha" hidden>

					<h4 class="mt-5">Data Wirausaha</h4>
					<hr>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<!-- Form input file -->
								<label>NIB</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>SKU</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>NPWP Perusahaan</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>Laporan Laba Perusahaan 6 Bulan Terakhir</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Rekening Koran Usaha 6 Bulan Terakhir</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
					</div>

					<h4 class="mt-5">Foto Usaha</h4>
					<hr>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>Foto Tempat Usaha (1)</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Foto Tempat Usaha (2)</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Foto Tempat Usaha (3)</label>
								<input type="file" name="berkas[]" class="form-control">
								<span class="text-danger">*Harap diisi</span>
							</div>
						</div>
					</div>
				</div>


				<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
				<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
			</form>
		<?php } ?>
	</div>
</div>
