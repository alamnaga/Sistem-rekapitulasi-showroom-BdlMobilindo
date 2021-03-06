<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="assets/img/logo.jpg">
					</div>
					<div class="card fat">
						<div class="card-body">
							<center>
								<h4 class="card-title">Sisten Rekapitulasi Showroom</h4>
							</center>
							<center>
								<h4 class="card-title">BDL Mobilindo</h4>
							</center>
							<form method="post" class="my-login-validation" action="<?= base_url('auth') ?>">
								<div class="form-group">
									<label for="user">User</label>
									<input id="user" type="user" class="form-control" name="user" value="" required autofocus placeholder="Masukan Username" value="<? set_value('user'); ?>">
									<div class="invalid-feedback">
										User is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" value="" required autofocus placeholder="Masukan Password" value="<? set_value('user'); ?>">
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>
						</div>


						<button type="submit" class="btn btn-primary btn-block">
							Login
						</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>

</html>