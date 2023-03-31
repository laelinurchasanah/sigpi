<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('bank/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>Bank</label>
                <input type="text" min="1" maxlength="20" name="tbank" class="form-control" autofocus="" required="">
                <?= form_error('tbank', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label>Cabang</label>
                <input type="text" min="1" maxlength="30" name="tcabang" class="form-control" required="">
                <?= form_error('tcabang', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="talamat" maxlength="200" class="form-control" required=""></textarea>
                <?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
            </div>


            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>
