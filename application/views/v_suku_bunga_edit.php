<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <?php foreach ($bunga as $bna) { ?>
        <form action="<?= base_url('suku_bunga/edit') ?>" method="POST">
            <div class="form-group" hidden="hidden">
                <label>Id Bunga</label>
                <input type="text" name="tidbunga" class="form-control" value="<?= $bna->id_bunga ?>">

            </div>
            <div class="form-group">
                <label>Bank</label>
                <select class="form-control" name="tidbank" required="">
                    <option value="<?= $bna->id_bunga ?>">
                        <?= $bna->bank ?>
                    </option>
                    <?php foreach ($bank as $bnk) { ?>
                    <option value="<?= $bnk->id_bank ?>">
                        <?= $bnk->bank ?>
                    </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Suku Bunga</label>
                <textarea type="text" maxlength="200" name="tbunga" required="" class="form-control"
                    value="<?= $bna->suku_bunga ?>"></textarea>
                <?= form_error('tbunga', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
        <?php } ?>
    </div>
</div>
