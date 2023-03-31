<style>
.card-header {
    text-align: center;
    align-items: center;
}

.card-header h3 {
    font-weight: bold;
    margin-bottom: 30px;
    margin-top: 20px !important;
}

.card-header img {
    width: 60%;
}

@media only screen and (max-width: 700px) {
    .card-header h3 {
        font-weight: bold;
        margin-bottom: 20px;
        margin-top: 20px !important;
        font-size: 18px;
    }

    .card-header img {
        width: 90%;
    }
}
</style>
<div class="card">
    <div class="card-header">
        <h3>MASTER PLAN</h3>
        <img src="<?php echo base_url('assets/beranda/'); ?>images/masterplan.jpg" class="masterplan">
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Kavling</th>
                    <th>Type</th>
                    <th>Type</th>
                    <th>LB</th>
                    <th>LT</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
            </thead>


            <tbody>

                <?php $no = 1;
				foreach ($kavling as $kvl): ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $kvl->kavling ?>
                    </td>
                    <td>
                        <?= $kvl->type ?>
                    </td>
                    <td>
                        <?= $kvl->type ?>
                    </td>
                    <td>
                        <?= $kvl->lb ?>
                    </td>
                    <td>
                        <?= $kvl->lt ?>
                    </td>
                    <td>Rp.<?= $kvl->harga ?></td>
                    <td>
                        <?= $kvl->status ?>
                    </td>

                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
