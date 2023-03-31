<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <?php foreach ($bichecking as $bi) { ?>
        <form action="<?= base_url('bichecking/edit') ?>" method="POST" enctype="multipart/form-data">
            <div hidden="hidden" class="form-group">
                <label>Id Booking</label>
                <input type="text" name="tidbooking" value="<?= $bi->id_booking ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Status BI Checking</label>
                <select class="form-control" name="tstatus" required="">
                    <option value="">--Pilih Status--</option>
                    <!-- <option value="<?= $bi->bi_checking ?>">
							<?= $bi->bi_checking ?>
						</option> -->
                    <option value="lancar">Lancar</option>
                    <option value="macet">Macet</option>
                </select>

            </div>
            <div class="form-group">
                <label>Catatan BI Checking</label>
                <input type="text" maxlength="50" name="tcatatan" required="" class="form-control"
                    value="<?= $bi->catatan_bi_checking ?>">
            </div>


            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
        <?php } ?>
    </div>
</div>