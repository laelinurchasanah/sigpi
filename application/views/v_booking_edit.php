<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <?php foreach ($booking as $bkg) { ?>
        <form action="<?= base_url('booking/edit') ?>" method="POST" enctype="multipart/form-data">
            <div hidden="hidden" class="form-group">
                <label>Id Booking</label>
                <input type="text" name="tidbooking" value="<?= $bkg->id_booking ?>" class="form-control">
            </div>
            <!-- Kwitansi Upload File -->
            <div class="form-group">
                <label>Kwitansi</label>
                <input type="file" name="tkwitansi" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
        <?php } ?>
    </div>
</div>
