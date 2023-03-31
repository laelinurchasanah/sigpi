<style>
.card {
    padding: 20px;
}
</style>
<div class="panel-body">
    <!-- Small boxes (Stat box) -->
    <?php
	// Session flashdata
	if ($this->session->flashdata('pesan')) {
		echo $this->session->flashdata('pesan');
	}
	?>
    <div class="card">
        <form action="<?= base_url('progres_rumah/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Blok</label>
                <select class="form-control" name="tidkavling" required="">
                    <option value="">--Pilih Blok--</option>
                    <?php foreach ($kavling as $kvl) { ?>
                    <option value="<?= $kvl->id_kavling ?>">
                        <?= $kvl->kavling ?>
                    </option>
                    <?php } ?>
                </select>

            </div>
            <div class="form-group">
                <label>Estate</label>
                <select class="form-control" name="tidestate" required="">
                    <?php foreach ($estate as $est) { ?>
                    <option value="<?= $est->nik_estate ?>">
                        <?= $est->nama_estate ?>
                    </option>
                    <?php } ?>
                </select>

            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="tstatus" required="">
                    <option value="">--Pilih Status--</option>
                    <option value="belum dibangun">Belum Dibangun</option>
                    <option value="pembangunan">Pembangunan</option>
                    <option value="siap huni">Siap Huni</option>
                </select>

            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea type="text" min="1" maxlength="30" name="tdescription" class="form-control"></textarea>

            </div>
            <div class="form-group">
                <label>Gambar 1</label>
                <input type="file" required="" name="tgambar1" id="gambar1" class="form-control">
            </div>

            <img src="" id="showGambar1" alt="">

            <!-- Gambar 2 -->
            <div class="form-group">
                <label>Gambar 2</label>
                <input type="file" name="tgambar2" required="" id="gambar2" class="form-control">
            </div>

            <img src="" id="showGambar2" alt="">

            <!-- Gambar 3 -->
            <div class="form-group">
                <label>Gambar 3</label>
                <input type="file" required="" name="tgambar3" id="gambar3" class="form-control">
            </div>

            <img src="" id="showGambar3" alt="">

            <!-- Gambar 4 -->
            <div class="form-group">
                <label>Gambar 4</label>
                <input type="file" name="tgambar4" id="gambar4" class="form-control">
            </div>

            <img src="" id="showGambar4" alt="">

            <!-- Gambar 5 -->
            <div class="form-group">
                <label>Gambar 5</label>
                <input type="file" name="tgambar5" id="gambar5" class="form-control">
            </div>

            <img src="" id="showGambar5" alt="">

            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
        </form>
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