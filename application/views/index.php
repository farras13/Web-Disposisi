<section class="mi my-4 mx-5">
	<div class="container">
		<h1>Table Template</h1>
		<h6>Informasi mengenai data yang anda tampilkan</h6>
		<hr>
		<table class="table table-hover table-responsive-md">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
					<th scope="col">action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
					<td>
						<button class="btn btn-primary"> asd </button>
						<button class="btn btn-warning"> asd </button>
						<button class="btn btn-danger"> asd </button>
					</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
					<td>
						<button class="btn btn-primary"> asd </button>
						<button class="btn btn-warning"> asd </button>
						<button class="btn btn-danger"> asd </button>
					</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
					<td>
						<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> asd </button>
						<button class="btn btn-warning"> asd </button>
						<button class="btn btn-danger"> asd </button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="form">
					<div class="row g-2">
						<div class="col-md-6">
							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
								<label for="floatingInputGrid">Email address</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-floating">
								<select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<label for="floatingSelectGrid">Works with selects</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
								<label for="floatingInputGrid">Email address</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
								<label for="floatingInputGrid">Email address</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
								<label for="floatingInputGrid">Email address</label>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
								<label for="floatingInputGrid">Email address</label>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
								<label for="floatingInputGrid">Email address</label>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
								<label for="floatingInputGrid">Email address</label>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
