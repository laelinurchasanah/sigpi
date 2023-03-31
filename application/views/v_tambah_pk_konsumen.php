<style>
.card {
    padding: 20px;
}
</style>
<?= $this->session->flashdata('pesan'); ?>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('pk_konsumen/tambah_aksi') ?>" method="POST">
            <!-- Select ID Akad -->
            <div class="form-group">
                <label>Blok</label>
                <select name="tid_akad" class="form-control">
                    <option value="">-- Pilih Blok --</option>
                    <?php foreach ($pk_konsumen as $a): ?>
                    <option value="<?= $a->id_akad ?>">
                        <?= $a->kavling ?>
                    </option>
                    <?php endforeach; ?>
                </select>
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
                    <option value="tersedia">Tersedia</option>
                    <option value="belum tersedia">Belum Tersedia</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>
