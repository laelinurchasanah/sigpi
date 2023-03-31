<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<?= $this->session->flashdata('pesan'); ?>
		<div class="card">
			<div class="card-body login-card-body">
				<img src="<?= base_url('assets/icon/') ?>Graha Indah.png" alt="grahapesona indah" width="100px" class="mx-auto d-block">
				<p style="color:brown" class=" login-box-msg">LOGIN</p>
				<form action="<?= base_url('login/aksi_login') ?>" method="POST">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" autofocus="">
						<?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" autofocus="">
						<?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
					</div>
					<div class="form-group">
						<label>Role</label>
						<br>
						<label class="radio-inline">
							<input type="radio" value="admin" name="level" /> Admin
						</label>
						<label class="radio-inline">
							<label class="radio-inline">
								<input type="radio" value="manager" name="level" />
								Manager
							</label>
							<input type="radio" value="marketing" name="level" /> Marketing
						</label>
						<label class="radio-inline">
							<input type="radio" value="estate" name="level" /> Estate
						</label>
						<label class="radio-inline">
							<input type="radio" value="konsumen" name="level" /> Konsumen
						</label>
					</div>
					<div class="row">
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>


				<!-- /.social-auth-links -->


			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="../../plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../../dist/js/adminlte.min.js"></script>

</body>

</html>
