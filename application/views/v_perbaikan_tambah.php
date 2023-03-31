<style>
.card {
    padding: 20px;
}
</style>
<?= $this->session->flashdata('pesan'); ?>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('perbaikan/tambah_aksi') ?>" method="POST">
            <!-- Select ID Komplain -->
            <div class="form-group">
                <label>Komplain</label>
                <select name="tid_komplain" class="form-control">
                    <option value="">-- Pilih ID Komplain --</option>
                    <?php foreach ($komplain as $kpl): ?>
                    <option value="<?= $kpl->id_komplain ?>">
                        <?= $kpl->id_komplain ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- NIK Estate -->
            <div class="form-group">
                <label>NIK Estate</label>
                <select name="tnik_estate" class="form-control">
                    <?php foreach ($estate as $est): ?>
                    <option value="<?= $est->nik_estate ?>">
                        <?= $est->nik_estate ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Tanggal Perbaikan -->
            <div class="form-group">
                <label>Tanggal Perbaikan</label>
                <input type="date" id="tgl_perbaikan" name="ttgl_perbaikan" class="form-control" required="">
            </div>
            <!-- Tanggal Selesai -->
            <div class="form-group">
                <label>Tanggal Selesai</label>
                <input type="date" id="tgl_selesai" name="ttgl_selesai" class="form-control" required="">
            </div>

            <!-- Status  -->
            <div class="form-group">
                <label>Status </label>
                <select name="ttstatus" class="form-control">
                    <option value="">--Pilih Status--</option>
                    <option value="proses">Proses</option>
                    <option value="finish">Finish</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>