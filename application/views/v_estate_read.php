
<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
    
      
    </div>
  <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr class="text-center">
              <th>No.</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No. Telp</th>
              <th>Action</th>
          </tr>
          </thead>
     

          <tbody>

            <?php $no = 1;
            foreach  ($estate as $est) : ?> 
              <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $est->nik_estate  ?></td>
		<td><?= $est->nama_estate  ?></td>
		<td><?= $est->alamat_estate  ?></td>
		<td><?= $est->telp_estate  ?></td>
                 <td>
                 <a href="<?= base_url('estate/estateedit/' . $est->nik_estate) ?>" class="btn btn-warning btn-sm" ><i class="fas fa-edit"></i></a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>     
      </table>
    </div>
</div>
