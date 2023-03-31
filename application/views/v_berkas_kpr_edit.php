<style>
	.card {
		padding: 20px;
	}
</style>

<div class="panel-body">
	<!-- Small boxes (Stat box) -->
	<div class="card">
		<?php foreach ($booking as $bkg) { ?>
			<form action="<?= base_url('berkas_kpr/edit_aksi/' . $berkas['id_berkas']) ?>" method="POST"
				enctype="multipart/form-data">
				<div class="form-group" hidden="hidden">
					<label>Id Booking</label>
					<input type="text" name="tidbooking" class="form-control" autofocus="" value="<?= $bkg->id_booking ?>">
				</div>
				<!-- tidberkas -->
				<div class="form-group" hidden="hidden">
					<label>Id Berkas</label>
					<input type="text" name="tidberkas" class="form-control" value="<?= $berkas['id_berkas'] ?>">
				</div>

				<div class="form-group">
					<label>Keterangan</label>
					<!-- Select 2 option, karyawan atau wirausaha -->
					<select name="tket" id="keterangan" class="form-control" require="">
						<option value="Karyawan">Karyawan</option>
						<option value="Wirausaha">Wirausaha</option>
					</select>
				</div>

				<div class="form-group">
					<label>Keterangan File Yang Diubah</label><br />
					<!-- text area -->
					<textarea class="form-control" rows="5" readonly><?= $berkas['keterangan'] ?></textarea>
				</div>

				<h4 class="mt-5">Data Diri</h4>
				<hr>

				<div class="form-group" id="data-diri">
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>Upload KK</label>
								<input type="file" name="tkk" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>BPJS</label>
								<input type="file" name="tbpjs" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Buku Nikah</label>
								<input type="file" name="tbukunikah" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Pas Foto</label>
								<input type="file" name="tpasfoto" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
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
								<input type="file" name="tsuratketerangankerja" require class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Slip Gaji 3 Bulan Terakhir</label>
								<input type="file" name="tslipgaji" require class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Rekening koran Payroll 3 Bulan Terakhir</label>
								<input type="file" name="trekeningkoranpayroll" require class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group" id="data-wirausaha">

					<h4 class="mt-5">Data Wirausaha</h4>
					<hr>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<!-- Form input file -->
								<label>NIB</label>
								<input type="file" name="tnib" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>SKU</label>
								<input type="file" name="tsku" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>NPWP Perusahaan</label>
								<input type="file" name="tnpwpperusahaan" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>Laporan Laba Perusahaan 6 Bulan Terakhir</label>
								<input type="file" name="tlaporanlaba" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Rekening Koran Usaha 6 Bulan Terakhir</label>
								<input type="file" name="trekeningkoranusaha" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
					</div>

					<h4 class="mt-5">Foto Usaha</h4>
					<hr>

					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>Foto Tempat Usaha (1)</label>
								<input type="file" name="tfototempatusahasatu" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Foto Tempat Usaha (2)</label>
								<input type="file" name="tfototempatusahadua" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Foto Tempat Usaha (3)</label>
								<input type="file" name="tfototempatusahatiga" class="form-control">
								<span class="text-danger">*Harap ubah sesuai dengan keterangan</span>
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