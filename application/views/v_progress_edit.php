<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <?php foreach ($progress as $prg) { ?>
        <form action="<?= base_url('progres_rumah/edit') ?>" method="POST" enctype="multipart/form-data">
            <div hidden="hidden" class="form-group">
                <label>Id Progress</label>
                <input type="text" required="" name="tidprogress" value="<?= $prg->id_progress ?>" class="form-control">
            </div>
            <div hidden="hidden" class="form-group">
                <label>Id Progress</label>
                <input type="text" required="" name="tidkavling" value="<?= $prg->id_kavling ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="tstatus" required="">
                    <option value="<?= $prg->status_progress ?>">
                        <?= $prg->status_progress ?>
                    </option>
                    <option value="belum dibangun">Belum Dibangun</option>
                    <option value="pembangunan">Pembangunan</option>
                    <option value="siap huni">Siap Huni</option>
                </select>

            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" min="1" maxlength="30" name="tdescription" value="<?= $prg->description ?>"
                    class="form-control">

            </div>

            <div class="form-group">
                <!-- Text merah kosongkan jika tidak ingin diubah -->
                <label>Gambar 1</label>
                <input type="file" name="tgambar1" id="gambar1" class="form-control">
                <input type="hidden" name="tgambar1lama" value="<?php echo $prg->gambar1 ?>">
                <span class="text-danger text-bold">* Kosongkan jika tidak ingin diubah</span>
            </div>

            <img src="<?= base_url('gambarprogress1/') . $prg->gambar1 ?>" id="showGambar1" alt="">

            <!-- Gambar 2 -->
            <div class="form-group">
                <label>Gambar 2</label>
                <input type="file" name="tgambar2" id="gambar2" class="form-control">
                <input type="hidden" name="tgambar2lama" value="<?php echo $prg->gambar2 ?>">
                <span class="text-danger text-bold">* Kosongkan jika tidak ingin diubah</span>
            </div>

            <img src="<?= base_url('gambarprogress1/') . $prg->gambar2 ?>" id="showGambar2" alt="">

            <!-- Gambar 3 -->
            <div class="form-group">
                <label>Gambar 3</label>
                <input type="file" src="<?php $prg->gambar3 ?>" name="tgambar3" id="gambar3" class="form-control">
                <input type="hidden" name="tgambar3lama" value="<?php echo $prg->gambar3 ?>">
                <span class="text-danger text-bold">* Kosongkan jika tidak ingin diubah</span>
            </div>

            <img src="<?= base_url('gambarprogress1/') . $prg->gambar3 ?>" id="showGambar3" alt="">

            <!-- Gambar 4 -->
            <div class="form-group">
                <label>Gambar 4</label>
                <input type="file" name="tgambar4" src="<?php $prg->gambar4 ?>" id="gambar4" class="form-control">
                <input type="hidden" name="tgambar4lama" value="<?php echo $prg->gambar4 ?>">
                <span class="text-danger text-bold">* Kosongkan jika tidak ingin diubah</span>
            </div>

            <img src="<?= base_url('gambarprogress1/') . $prg->gambar4 ?>" id="showGambar4" alt="">

            <!-- Gambar 5 -->
            <div class="form-group">
                <label>Gambar 5</label>
                <input type="file" name="tgambar5" src="<?php $prg->gambar5 ?>" id="gambar5" class="form-control">
                <input type="hidden" name="tgambar5lama" value="<?php echo $prg->gambar5 ?>">
                <span class="text-danger text-bold">* Kosongkan jika tidak ingin diubah</span>
            </div>

            <img src="<?= base_url('gambarprogress1/') . $prg->gambar5 ?>" id="showGambar5" alt="">

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
        <?php } ?>
    </div>
</div>
<script>
// Fungsi menampilkan gambar 1
var gambar1 = document.getElementById('gambar1');
var showGambar1 = document.getElementById('showGambar1');

gambar1.addEventListener('change', function() {
    const file = new FileReader();
    file.readAsDataURL(gambar1.files[0]);

    file.onload = function(e) {
        showGambar1.src = e.target.result;
    }
});

// Fungsi menampilkan gambar 2
var gambar2 = document.getElementById('gambar2');
var showGambar2 = document.getElementById('showGambar2');

gambar2.addEventListener('change', function() {
    const file = new FileReader();
    file.readAsDataURL(gambar2.files[0]);

    file.onload = function(e) {
        showGambar2.src = e.target.result;
    }
});

// Fungsi menampilkan gambar 3
var gambar3 = document.getElementById('gambar3');
var showGambar3 = document.getElementById('showGambar3');

gambar3.addEventListener('change', function() {
    const file = new FileReader();
    file.readAsDataURL(gambar3.files[0]);

    file.onload = function(e) {
        showGambar3.src = e.target.result;
    }
});

// Fungsi menampilkan gambar 4
var gambar4 = document.getElementById('gambar4');
var showGambar4 = document.getElementById('showGambar4');

gambar4.addEventListener('change', function() {
    const file = new FileReader();
    file.readAsDataURL(gambar4.files[0]);

    file.onload = function(e) {
        showGambar4.src = e.target.result;
    }
});

// Fungsi menampilkan gambar 5
var gambar5 = document.getElementById('gambar5');
var showGambar5 = document.getElementById('showGambar5');

gambar5.addEventListener('change', function() {
    const file = new FileReader();
    file.readAsDataURL(gambar5.files[0]);

    file.onload = function(e) {
        showGambar5.src = e.target.result;
    }
});
</script>