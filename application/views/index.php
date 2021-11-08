<section class="mi my-4 mx-5">
	<div class="container">
		<h1>Dashboard</h1>
		<h6>Informasi mengenai data yang anda tampilkan</h6>
		<hr>
		<div class="card-group">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Surat Masuk</h3>
					<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium veniam eaque quo? Eos aut veniam deleniti, vel placeat quibusdam sit fugiat eveniet, iste quo architecto est quis ab omnis delectus. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				<div class="card-footer">
					<a href="<?= base_url('home/masuk') ?>" class="btn btn-primary float-end"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Surat Keluar</h3>
					<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex beatae illum vel fugit, voluptates minus assumenda, praesentium nostrum nihil sunt iure placeat cumque voluptate iste architecto, sint quisquam accusantium unde. This card has supporting text below as a natural lead-in to additional content.</p>
				</div>
				<div class="card-footer">
					<a href="<?= base_url('home/masuk') ?>" class="btn btn-primary float-end"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<hr>
		<div class="card-group">
			<?php for ($i=0; $i < 4; $i++) {  ?>					
				<div class="card">
					<div class="card-body">
						<p class="card-title"><b><?= $claim[$i]; ?></b></p>
						<div class="row mt-4">
							<div class="col-md-6" style="background-color: whitesmoke;">
								<center>
									<h5>Masuk</h5>
									<h6 class="card-text"><?= $masuk[$i]; ?></h6>
								</center>
							</div>
							<div class="col-md-6" style="background-color: grey;">
								<center>
									<h5>Keluar</h5>
									<h6 class="card-text"><?= $keluar[$i]; ?></h6>
								</center>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div class="card-group">
			<?php for ($i=4; $i < 7; $i++) {  ?>					
				<div class="card">
					<div class="card-body">
						<p class="card-title"><b><?= $claim[$i]; ?></b></p>
						<div class="row mt-4">
							<div class="col-md-6" style="background-color: whitesmoke;">
								<center>
									<h5>Masuk</h5>
									<h6 class="card-text"><?= $masuk[$i]; ?></h6>
								</center>
							</div>
							<div class="col-md-6" style="background-color: grey;">
								<center>
									<h5>Keluar</h5>
									<h6 class="card-text"><?= $keluar[$i]; ?></h6>
								</center>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
