<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('perbaikan/edit_aksi') ?>" method="POST">
            <!--CSRF  -->
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                value="<?= $this->security->get_csrf_hash(); ?>">
            <!-- ID PK Konsumen -->
            <div class="form-group">
                <label>ID Perbaikan</label>
                <input type="text" name="tid_perbaikan" class="form-control" value="<?= $perbaikan[0]->id_perbaikan ?>"
                    readonly>
            </div>


            <!-- Status  -->
            <div class="form-group">
                <label>Status </label>
                <select name="ttstatus" class="form-control">
                    <option value="">-</option>
                    <option value="proses">Proses</option>
                    <option value="finish">Finish</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>
