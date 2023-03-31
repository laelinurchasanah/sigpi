<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <?php foreach ($bank as $bnk) { ?>
        <form action="<?= base_url('bank/edit') ?>" method="POST">
            <div class="form-group" hidden="hidden">
                <label>Bank</label>
                <input type="text" name="tidbank" class="form-control" autofocus="" value="<?= $bnk->id_bank ?>">
                <?= form_error('tidbank', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Bank</label>
                <input type="text" name="tbank" required="" class="form-control" autofocus="" value="<?= $bnk->bank ?>">
                <?= form_error('tbank', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <div class="form-group">
                <label>Cabang</label>
                <input type="text" maxlength="20" required="" name="tcabang" class="form-control"
                    value="<?= $bnk->cabang ?>">
                <?= form_error('tcabang', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" maxlength="50" required="" name="talamat" class="form-control"
                    value="<?= $bnk->alamat_bank ?>">
                <?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
        <?php } ?>
    </div>
</div>
