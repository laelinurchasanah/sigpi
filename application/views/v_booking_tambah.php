<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <!-- Session pesan_booking -->
    <?= $this->session->flashdata('pesan_booking'); ?>
    <div class="card">
        <form action="<?= base_url('booking/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Marketing</label>
                <select class="form-control" name="tidmarketing" required="">
                    <option value="">--Pilih Marketing--</option>
                    <?php foreach ($marketing as $mkt) { ?>
                    <option value="<?= $mkt->nik_marketing ?>">
                        <?= $mkt->nama_marketing ?>
                    </option>
                    <?php } ?>
                </select>

            </div>
            <div class="form-group">
                <label>Konsumen</label>
                <select class="form-control" name="tidkonsumen" required="">
                    <option value="">--Pilih Konsumen--</option>
                    <?php foreach ($konsumen as $ksn) { ?>
                    <option value="<?= $ksn->nik_konsumen ?>">
                        <?= $ksn->nama_konsumen ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Blok</label>
                <select id="booking_kavling" class="form-control" name="tidkavling" required="">
                    <option value="">--Pilih Blok--</option>
                    <?php foreach ($kavling as $kvl) { ?>
                    <option value="<?= $kvl->id_kavling ?>">
                        <?= $kvl->kavling ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Cara Bayar</label>
                <select class="form-control" name="tcarabayar" required="" required="">
                    <option value="kpr">KPR</option>
                </select>
            </div>
            <div class="form-group">
                <label>Bukti Transfer</label>
                <input type="file" name="btf" required="" class="form-control">
            </div>
            <div class="form-group">
                <label>KTP</label>
                <input type="file" name="bktp" required="" class="form-control">
            </div>
            <div class="form-group">
                <label>NPWP</label>
                <input type="file" name="bnpwp" required="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>