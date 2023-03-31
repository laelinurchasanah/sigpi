<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <?php foreach ($konsumen as $ksn) { ?>
        <form action="<?= base_url('konsumen/edit') ?>" method="POST">
            <div class="form-group">
                <label>NIK Konsumen</label>
                <input type="number" min="5" maxlength="18" required="" name="tnik" class="form-control"
                    value="<?= $ksn->nik_konsumen ?>" readonly="readonly">
                <?= form_error('tnik', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Nama Konsumen</label>
                <input type="text" maxlength="30" required="" name="tnama" class="form-control"
                    value="<?= $ksn->nama_konsumen ?>" autofocus="">
                <?= form_error('tnama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>Alamat Konsumen</label>

                <input type="text" maxlength="100" required="" name="talamat" class="form-control"
                    value="<?= $ksn->alamat_konsumen ?>" autofocus="">
                <?= form_error('talamat', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label>No. Telp Konsumen</label>
                <input type="number" maxlength="14" min="5" required="" name="ttelp" class="form-control"
                    value="<?= $ksn->telp_konsumen ?>">
                <?= form_error('ttelp', '<div class="text-small text-danger">', '</div>'); ?>
            </div>


            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
        <?php } ?>
    </div>
</div>
