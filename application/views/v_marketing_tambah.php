<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('marketing/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>NIK Marketing</label>
                <input type="number" required="" name="tnik" class="form-control" autofocus="" min="5" maxlength="18">
                <?= form_error('tnik', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nama Marketing</label>
                <input type="text" required="" name="tnama" class="form-control" autofocus="" min="1" maxlength="30"
                    required>
                <?= form_error('tnama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Alamat Marketing</label>

                <textarea name="talamat" required="" class="form-control" required="" min="1" maxlength="40"></textarea>
                <?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>No. Telp Marketing</label>
                <input type="number" required="" name="ttelp" class="form-control" min="0" maxLength="13">
                <?= form_error('ttelp', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" required="" name="tusername" class="form-control" autofocus="" maxLength="30">
                <?= form_error('tusername', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" required="" name="tpassword" class="form-control" maxLength="30">
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
