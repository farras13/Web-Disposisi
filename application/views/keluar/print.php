<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Preview Print Surat Keluar</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/favicon.ico" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- icon font -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<style>
		body {
			height: 842px;
			width: 595px;
			/* to centre page on screen*/
			margin-left: auto;
			margin-right: auto;
			font-size: 10pt;
		}
		.mi {
			background: white;
			border-radius: 30px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
	</style>
</head>

<body>
	<div class="card">
		<h5 class="card-header">
			<img src="<?= base_url('assets/logo.png') ?>" alt="" width="70" height="70" class="d-inline-block align-text-top">
		</h5>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<p class="float-end" style="font-size: small;">Phone : (0274)869454, Call Center 0823 1403 4559 <br> E_mail kancab, yogyakarta@asabri.co.id </p>
				</div>

				<div class="my-4">
					<center><b>
							<h4 class="card-title">Special title treatment</h4>
						</b></center>
				</div>
				<div class="row mb-3">
					<label for="inp1" class="col-sm-2 col-form-label">Kode Surat</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="inp1" value="<?= $pm->kode_surat ?>" readonly>
					</div>
					<div class="col-sm-2">
						<label for="inp2" class="col-form-label">No Surat</label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="inp2" value="<?= $pm-> no_surat?>" readonly>
					</div>
				</div>				
				<div class="row mb-3">
					<label for="inp3" class="col-sm-2 col-form-label">Nomor Agenda</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inp3" value="<?= $pm->kode_surat.' / '.$pm->no_surat ?>" readonly>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inp4" class="col-sm-2 col-form-label">Tujuan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inp4" value="<?= $pm->tujuan ?>" readonly>
					</div>
				</div>
				<div class="row mb-4">
					<label for="inp5" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inp5" value="<?= $pm->alamat ?>" readonly>
					</div>
				</div>
				<div class="row mb-4">
					<label for="inp6" class="col-sm-2 col-form-label">Perihal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inp6" value="<?= $pm->perihal ?>" readonly>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inp8" class="col-sm-2 col-form-label">Catatan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inp8" value="<?= $pm->catatan ?>" readonly>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>

</html>