<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('estate/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>NIK Estate</label>
                <input type="number" maxlength="18" min="2" required="" name="tnik" class="form-control" autofocus="">
                <?= form_error('tnik', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nama Estate</label>
                <input type="text" maxlength="30" name="tnama" required="" class="form-control" autofocus="">
                <?= form_error('tnama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Alamat Estate</label>
                <textarea name="talamat" maxlength="100" required="" class="form-control"></textarea>
                <?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>No. Telp Estate</label>
                <input type="number" maxlength="14" required="" name="ttelp" class="form-control">
                <?= form_error('ttelp', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" maxlength="30" name="tusername" required="" class="form-control" autofocus="">
                <?= form_error('tusername', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" maxlength="30" required="" name="tpassword" class="form-control">
                <?= form_error('tpassword', '<div class="text-small text-danger">', '</div>'); ?>
            </div>


            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>

<!-- SCRIPT MAX LENGTH -->
<script>
document.querySelectorAll('input[type="number"]').forEach(input => {
    input.oninput = () => {
        if (input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
    };
})
</script>
