<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Disposisi Surat</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/favicon.ico" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
	<div class="d-flex" id="wrapper">
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			<!-- Top navigation-->
			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<div class="container-fluid">
					<!-- <button class="btn btn-primary" id="sidebarToggle"><i class="fa fa-bars"></i></button> -->
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto mt-2 mt-lg-0">
							<li class="nav-item"><a class="nav-link" href="<?= base_url('Barang') ?>">Barang</a></li>
							<li class="nav-item active"><a class="nav-link" href="<?= base_url('Penjualan') ?>">Penjualan</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('Prediksi') ?>">Prediksi</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<!-- Page content-->
			<div style="margin: 5% 8%;">
				<div class="container">
					<div>
						<div class="row my-3">
							<div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-2">

							</div>
							<div class="col-12 col-md-6 mb-4 mt-4 mb-lg-0 col-lg-8">
								<div class="card">
									<div class="card-header">
										<h4>Login</h4>
									</div>
									<div class="card-body">

										<form action="<?= base_url('Auth/pros_log') ?>" method="post">
											<div class="form-group">
												<label for="username">Username</label>
												<input type="text" class="form-control" name="username" id="username">
											</div>
											<div class="form-group">
												<label for="username">Password</label>
												<input type="passwrod" class="form-control" name="password" id="password">
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary mt-3 mb-2" style="margin-left: 25%; margin-right: 25%;  width: 350px;">Login</button>
												<center><small style="margin-left: 25%; margin-right: 25%;"> Belum punya akun? <a href="<?= base_url('Auth/register') ?>">Register disini</a> </small></center>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-2">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="<?= base_url() ?>assets/js/scripts.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script>
		$(document).ready(() => {
			<?php if (isset($_SESSION['toast'])) { ?>
				toastr.options.closeButton = true;
				var toastvalue = "<?php echo $_SESSION['toast'] ?>";
				var status = toastvalue.split(":")[0];
				var message = toastvalue.split(":")[1];
				if (status === "success") {
					toastr.success(message, status);
				} else if (status === "error") {
					toastr.error(message, status);
				} else if (status == "warn") {
					toastr.warning(message, status);
				}
			<?php } ?>
		});
	</script>
</body>

</html>
