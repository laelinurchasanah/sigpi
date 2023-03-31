
	  <div class="panel-body">
    <!-- Small boxes (Stat box) -->
<div class="card">
<form action="<?= base_url('kavling/tambah_aksi') ?>" method="POST">
	<div class="form-group">
		<label>Nama Mahasiswa</label>
		<input type="text" name="nama_mhs" class="form-control" autofocus="">
		<?= form_error('nama_mhs', '<div class="text-small text-danger">', '</div>'); ?>
	</div>
	<div class="form-group">
	    <label>Jenis Kelamin</label>
	    <br>
	    <label class="radio-inline">    
	        <input type="radio" value="l" name="jk" /> Laki-laki
	    </label>
	    <label class="radio-inline">
	        <input type="radio" value="p" name="jk"/> Perempuan
	    </label>
	</div>
	<div class="form-group">
		<label>Prodi</label>
		<input type="text" name="prodi" class="form-control">
		<?= form_error('prodi', '<div class="text-small text-danger">', '</div>'); ?>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control"></textarea>
		<?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
		<?= form_error('email', '<div class="text-small text-danger">', '</div>'); ?>
	</div>

	<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
	<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
</form>
</div>
</div>