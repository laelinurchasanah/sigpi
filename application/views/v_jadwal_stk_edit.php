<style>
.card {
    padding: 20px;
}
</style>
<?= $this->session->flashdata('pesan'); ?>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <?php foreach ($stk as $st) { ?>
        <form action="<?= base_url('jadwal_stk/edit') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group" hidden="hidden">
                <label>Id Stk</label>
                <input type="text" required="" name="tid" value="<?= $st->id_stk ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Tanggal Jadwal Serah Terima Kunci</label>
                <input type="date" required="" name="tjadwal" value="<?= $st->tgl_jadwal_stk ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Status Serah Terima Kunci</label>
                <select class="form-control" name="tstatus" required="">

                    <option value="<?= $st->status_stk ?>">
                        <?= $st->status_stk ?>
                    </option>
                    <option value="terlaksana">Terlaksana</option>
                    <option value="belum terlaksana">belum terlaksana</option>
                </select>

            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
        <?php } ?>
    </div>
</div>
