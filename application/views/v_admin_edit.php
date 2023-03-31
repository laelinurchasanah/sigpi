<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <?php foreach ($admin as $adm) { ?>
        <form action="<?= base_url('admin/edit') ?>" method="POST">
            <div class="form-group">
                <label>NIK Admin</label>
                <input type="number" name="tnik" class="form-control" value="<?= $adm->nik_admin ?>"
                    readonly="readonly">
                <?= form_error('tnik', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nama Admin</label>
                <input type="text" name="tnama" class="form-control" maxlength="30" value="<?= $adm->nama_admin ?>"
                    autofocus="" required="">
                <?= form_error('tnama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Alamat Admin</label>
                <input type="text" name="talamat" maxlength="100" required="" class="form-control"
                    value="<?= $adm->alamat_admin ?>">

                <?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>No. Telp Admin</label>
                <input type="number" name="ttelp" required="" min="5" maxlength="14" class="form-control"
                    value="<?= $adm->telp_admin ?>">
                <?= form_error('ttelp', '<div class="text-small text-danger">', '</div>'); ?>
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
        <?php } ?>
    </div>
</div>
