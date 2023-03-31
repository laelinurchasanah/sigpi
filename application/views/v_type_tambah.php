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
        <form action="<?= base_url('type/tambah_aksi') ?>" method="POST">
            <div class="form-group">
                <!-- Type -->
                <label>Type Rumah</label>
                <input type="text" name="ttype" min="2" maxlength="20" class="form-control" required="">
            </div>

            <div class="form-group">
                <!-- LB -->
                <label>Luas Bangunan (LB) Dalam m<sup>2</sup></label>
                <input type="number" min="10" maxlength="5" id="dot1" name="tlb" class="form-control" required="">
            </div>

            <div class="form-group">
                <!-- LT -->
                <label>Luas Tanah (LT) Dalam m<sup>2</sup></label>
                <input type="number" min="10" maxlength="5" id="dot2" name="tlt" class="form-control" required="">
            </div>


            <div class="form-group">
                <!-- Harga -->
                <label>Harga Dalam Rupiah</label>
                <input type="text" min="10000000" id="dot" name="tharga" class="form-control" required="">
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

<script>
$('#dot1').mask('000.000.000.000', {
    reverse: true
});
</script>
<script>
$('#dot2').mask('000.000.000.000', {
    reverse: true
});
</script>

<!-- Input -->
<script type="text/javascript" src="<?= base_url("assets/Js") ?>/masknumber.js">

</script>

<!-- Number -->
<script>
document.querySelectorAll('input[type="number"]').forEach(input => {
    input.oninput = () => {
        if (input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
    };
})
</script>
