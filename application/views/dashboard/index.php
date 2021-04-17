<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3><?php echo $total_registrasi_user ?></h3>

						<p>Data User</p>
					</div>
					<div class="icon">
						<i class="ion ion-person"></i>
					</div>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3><?php echo $total_paket_hemat ?></h3>

						<p>Data Paket Hemat</p>
					</div>
					<div class="icon">
						<i class="ion ion-archive"></i>
					</div>

				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3><?php echo $total_paket_standar ?></h3>

						<p>Data Paket Standar</p>
					</div>
					<div class="icon">
						<i class="ion ion-archive"></i>
					</div>

				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3><?php echo $total_paket_premium ?></h3>

						<p>Data Paket Premium</p>
					</div>
					<div class="icon">
						<i class="ion ion-archive"></i>
					</div>

				</div>
			</div>
			<!-- ./col -->
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-primary">
					<div class="inner">
						<h3><?php echo $total_registrasi_paket ?></h3>

						<p>Total Data Paket</p>
					</div>
					<div class="icon">
						<i class="ion ion-archive"></i>
					</div>

				</div>
			</div>
			<!-- ./col -->
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3><?php echo "Rp " . number_format($total_pembiayaan_paket, 0, ",", ","); ?></h3>

						<p>Total Pembayaran</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>

				</div>
			</div>
			<!-- ./col -->
		</div>
    </section>
    <!-- /.content -->
