<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <!-- Session pesan_akad -->
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card">
        <form action="<?= base_url('jadwal_akad/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Blok</label>
                <select class="form-control" name="tidkpr" required="">
                    <option value="">--Pilih Blok--</option>
                    <?php foreach ($kpr as $kp) { ?>
                    <option value="<?= $kp->id_kpr ?>">
                        <?= $kp->kavling ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Jadwal Akad</label>
                <input type="date" name="tjadwal" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>