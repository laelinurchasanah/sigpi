<style>
.card {
    padding: 20px;
}
</style>
<?= $this->session->flashdata('pesan'); ?>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('sertifikat/edit_aksi/') ?>" method="POST">
            <!-- csrf -->
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                value="<?= $this->security->get_csrf_hash(); ?>">
            <!-- id Sertifikat-->
            <div class="form-group">
                <label>ID Sertifikat Konsumen</label>
                <input type="text" name="tid_sertifikat" class="form-control"
                    value="<?= $sertifikat[0]->id_sertifikat ?>" readonly>
            </div>


            <!-- Tanggal Ketersediaan -->
            <div class="form-group">
                <label>Tanggal Ketersediaan</label>
                <input type="date" name="ttgl_ketersediaan" class="form-control">
            </div>

            <!-- Status Ketersediaan -->
            <div class="form-group">
                <label>Status Ketersediaan</label>
                <select name="tstatus_ketersediaan" class="form-control">
                    <option value="">-- Pilih Status Ketersediaan --</option>
                    <option value="tersedia"
                        <?php echo $sertifikat[0]->status_ketersediaan == 'tersedia' ? "selected" : "" ?>>Tersedia
                    </option>
                    <option value="belum tersedia"
                        <?php $sertifikat[0]->status_ketersediaan == 'belum tersedia' ? "selected" : "" ?>>Belum
                        Tersedia</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>









        </form>
    </div>
</div>