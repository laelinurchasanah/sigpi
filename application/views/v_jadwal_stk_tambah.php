<style>
.card {
    padding: 20px;
}
</style>
<?= $this->session->flashdata('pesan'); ?>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <?php $this->session->flashdata('pesan'); ?>
    <div class="card">
        <form action="<?= base_url('jadwal_stk/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Blok</label>
                <select class="form-control" required="" name="tidakad">
                    <option value="">--Pilih Blok--</option>
                    <?php foreach ($akad as $a): ?>
                    <option value="<?= $a->id_akad ?>">
                        <?= $a->kavling ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Jadwal Serah Terima Kunci</label>
                <input type="date" required="" name="tjadwal" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>