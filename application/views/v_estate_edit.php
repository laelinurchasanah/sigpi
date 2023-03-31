<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <?php foreach ($estate as $est) { ?>
        <form action="<?= base_url('estate/edit') ?>" method="POST">
            <div class="form-group">
                <label>NIK Estate</label>
                <input type="number" name="tnik" class="form-control" required="" value="<?= $est->nik_estate ?>"
                    readonly="readonly">
                <?= form_error('tnik', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nama Estate</label>
                <input type="text" maxlength="30" name="tnama" required="" class="form-control"
                    value="<?= $est->nama_estate ?>" autofocus="">
                <?= form_error('tnama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Alamat Estate</label>
                <input type="text" maxlength="100" name="talamat" required="" class="form-control"
                    value="<?= $est->alamat_estate ?>" autofocus="">
                <?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>No. Telp Estate</label>
                <input type="number" maxlength="14" name="ttelp" required="" class="form-control"
                    value="<?= $est->telp_estate ?>">
                <?= form_error('ttelp', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
        <?php } ?>
    </div>
</div>
