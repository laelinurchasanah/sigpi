</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<p>2022</p>
	</div>
	<strong>&#169;Graha Pesona Indah</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/template') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template') ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/template') ?>/dist/js/demo.js"></script>
<!-- page script -->
<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>


<script>
	// Fungsi change pada select #keterangan, jika dipilih "Karyawan" maka akan hapus atribut hidden pada div #data-karyawan dan jadikan required pada input di dalam div #data-karyawan. Begitu juga dengan "Wirausaha".

	$('#keterangan').change(function() {
		if ($(this).val() == 'Karyawan') {
			$('#data-karyawan').removeAttr('hidden');
			$('#data-karyawan input').attr('required', '');
		} else {
			$('#data-karyawan').attr('hidden', '');
			$('#data-karyawan input').removeAttr('required');
		}

		if ($(this).val() == 'Wirausaha') {
			$('#data-wirausaha').removeAttr('hidden');
			$('#data-wirausaha input').attr('required', '');
		} else {
			$('#data-wirausaha').attr('hidden', '');
			$('#data-wirausaha input').removeAttr('required');
		}
	});
</script>


<script>
	// booking_kavling mengubah harga kavling sesuai dengan pilihan kavling ajax
	$(document).ready(function() {
		$('#booking_kavling').change(function() {
			var id = $(this).val();
			$.ajax({
				url: "<?= base_url('booking/get_harga_kavling') ?>",
				method: "POST",
				data: {
					id: id
				},
				async: true,
				dataType: 'json',
				success: function(data) {
					$('#booking_harga_kavling').val(data.harga);
				}
			});
			return false;
		});
	});
</script>

</body>

</html>
