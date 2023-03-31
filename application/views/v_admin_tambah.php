<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('admin/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>NIK Admin</label>
                <input type="number" name="tnik" class="form-control" autofocus="" required="" min="5" maxLength="18">
                <?= form_error('tnik', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nama Admin</label>
                <input type="text" name="tnama" class="form-control" autofocus="" required="" min="1" maxlength="30">
                <?= form_error('tnama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Alamat Admin</label>

                <textarea name="talamat" class="form-control" required="" min="1" maxlength="100"></textarea>
                <?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>No. Telp Admin</label>
                <input type="number" name="ttelp" class="form-control" required="" min="5" maxLength="14">
                <?= form_error('ttelp', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="tusername" class="form-control" autofocus="" required="" min="1"
                    maxlength="30">
                <?= form_error('tusername', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" name="tpassword" class="form-control" required="" min="3" maxlength="30">
                <?= form_error('tpassword', '<div class="text-small text-danger">', '</div>'); ?>
            </div>



            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>

<!-- Number -->
<script>
document.querySelectorAll('input[type="number"]').forEach(input => {
    input.oninput = () => {
        if (input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
    };
})
</script>
