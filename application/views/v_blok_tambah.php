<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <?= $this->session->flashdata('pesan_kavling'); ?>
    <div class="card">
        <form action="<?= base_url('blok/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <label>Blok</label>
                <input type="text" min="1" maxlength="10" required="" name="tkavling" class="form-control" autofocus="">
                <?= form_error('tkavling', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <!-- Type Rumah -->
            <div class="form-group">
                <label>Type Rumah</label>
                <select class="form-control" name="tid_type_rumah" id="">
                    <option value="">--Pilih Type Rumah--</option>
                    <?php foreach ($type as $tr): ?>
                    <option value="<?= $tr->id_type_rumah ?>">
                        <?= $tr->type ?>
                    </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="tstatus" required="">
                    <option value="">--Pilih Status--</option>
                    <option value="available">Available</option>
                    <option value="sold">Sold</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>
<script>
$('#dot').mask('##.000.#.000', {
    reverse: true
});
$('#dot1').mask('##.000.#.000', {
    reverse: true
});
$('#dot2').mask('000.000.000.000', {
    reverse: true
});
</script>