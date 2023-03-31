<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <form action="<?= base_url('type/edit_aksi') ?>" method="POST">
            <!-- csrf -->
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                value="<?= $this->security->get_csrf_hash(); ?>">
            <!-- id -->
            <input type="hidden" name="tid" value="<?php echo $type[0]->id_type_rumah ?>">
            <div class="form-group">
                <!-- Type -->
                <label>Type Rumah</label>
                <input type="text" value="<?php echo $type[0]->type ?>" name="ttype" class="form-control" required="">
            </div>

            <div class="form-group">
                <!-- LB -->
                <label>Luas Bangunan (LB)</label>
                <input type="number" min="10" maxlength="5" value="<?php echo $type[0]->lb ?>" name="tlb"
                    class="form-control" required="">
            </div>

            <div class="form-group">
                <!-- LT -->
                <label>Luas Tanah (LT)</label>
                <input type="number" min="10" maxlength="5" value="<?php echo $type[0]->lt ?>" name="tlt"
                    class="form-control" required="">
            </div>

            <div class="form-group">
                <!-- Harga -->
                <label>Harga</label>
                <input type="text" min="10000000" value="<?php echo $type[0]->harga ?>" name="tharga"
                    class="form-control" required="" id="dot">
            </div>

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
    </div>
</div>

<script>
$('#dot').mask('000.000.000.000', {
    reverse: true
});
</script>

<!-- Number -->
<script>
document.querySelectorAll('input[type="number"]').forEach(input => {
    input.oninput = () => {
        if (input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
    };
})
</script>



<!-- Input -->
<script type="text/javascript" src="<?= base_url("assets/Js") ?>/masknumber.js">

</script>
