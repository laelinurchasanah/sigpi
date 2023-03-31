<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('konsumen/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>NIK Konsumen</label>
                <input type="number" min="3" maxlength="18" required="" name="tnik" class="form-control" autofocus="">
                <?= form_error('tnik', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nama Konsumen</label>
                <input type="text" maxlength="30" required="" name="tnama" class="form-control" autofocus="">
                <?= form_error('tnama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Alamat Konsumen</label>
                <textarea name="talamat" maxlength="100" required="" class="form-control"></textarea>
                <?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>No. Telp Konsumen</label>
                <input type="number" maxlength="14" min="5" required="" name="ttelp" class="form-control">
                <?= form_error('ttelp', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" maxlength="30" required="" name="tusername" class="form-control" autofocus="">
                <?= form_error('tusername', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" min="5" maxlength="30" required="" name="tpassword" class="form-control">
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
