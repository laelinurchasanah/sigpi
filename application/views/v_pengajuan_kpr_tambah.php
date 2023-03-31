<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('pengajuan_kpr/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Blok</label>
                <select class="form-control" name="tidberkas" required="">
                    <option value="">--Pilih Blok--</option>
                    <?php foreach ($berkas as $bks) { ?>
                    <option value="<?= $bks->id_berkas ?>">
                        <?= $bks->kavling ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Bank</label>
                <select class="form-control" name="tidbank" required="">
                    <option value="">--Pilih Bank--</option>
                    <?php foreach ($bank as $bnk) { ?>
                    <option value="<?= $bnk->id_bank ?>">
                        <?= $bnk->bank ?>
                    </option>
                    <?php } ?>
                </select>

            </div>
            <div class="form-group">
                <label>Status KPR</label>
                <select class="form-control" name="tstatus" required="">
                    <option value="">--Pilih--</option>
                    <option value="accept">Acc</option>
                    <option value="process">Process</option>
                    <option value="reject">Reject</option>
                </select>
            </div>
            <div class="form-group">
                <label>SP3K</label>
                <input type="file" name="tgambar1" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>