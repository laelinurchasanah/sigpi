<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('suku_bunga/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>Bank</label>
                <select class="form-control" name="tid" required="">
                    <option value="">--Pilih Bank--</option>
                    <?php foreach ($bank as $bnk) { ?>
                    <option value="<?= $bnk->id_bank ?>">
                        <?= $bnk->bank ?>
                    </option>
                    <?php } ?>
                </select>

            </div>

            <div class="form-group">
                <label>Suku Bunga</label>
                <textarea type="text" maxlength="200" name="tbunga" class="form-control" required=""></textarea>
                <?= form_error('tbunga', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>