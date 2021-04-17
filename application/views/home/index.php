<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/adminlte/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/adminlte/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/adminlte/plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
	<div class="card card-outline card-primary">
		<div class="card-header text-center">
			<a href="<?php echo base_url() ?>" class="h1"><b>Register</b></a>
		</div>
		<div class="card-body">
			<form method="post" name="register" id="register">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Nama" name="nama" autocomplete="off">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Tempat" name="tempat" autocomplete="off">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-map-pin"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="tanggal_lahir" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask placeholder="Tanggal Lahir" autocomplete="off">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-calendar"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<select class="form-control" name="jenis_kelamin">
						<option>-- PILIH Jenis Kelamin --</option>
						<option value="L">Laki - Laki</option>
						<option value="P">Perempuan</option>
					</select>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<select class="form-control" name="paket">
						<option>-- PILIH PAKET --</option>
						<?php foreach ($paket as $item) {
							?>
							<option value="<?php echo $item['id_paket'] ?>"><?php echo $item['nama'] ?> - <?php echo "Rp " . number_format($item['biaya'], 0, ",", ",") ?></option>
						<?php } ?>
					</select>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-archive"></span>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-12">
						<button type="button" class="btn btn-block btn-primary" id="btn-register">Register</button>
					</div>
				</div>
			</form>
		</div>
		<!-- /.form-box -->
	</div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/theme/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/theme/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/theme/adminlte/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>assets/theme/adminlte//plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/theme/adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="<?php echo base_url() ?>assets/theme/adminlte/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
	var base_url = '<?php echo base_url()  ?>';
</script>
<script src="<?php echo base_url() ?>assets/js/<?php echo $javascript ?>"></script>
<script>
	$(function() {
		$('[data-mask]').inputmask()
	});
</script>
</body>
</html>
