<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/manualcss/style.css">
	<style>
		body {
			background-image: url("astro.jpg");
			color: white;
		}
	</style>

</head>

<body>
	<div class="content">
		<div class=" row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default" style="margin-top: 50px;">
					<div class="panel-heading" style="margin-bottom: 10px;">
						<h3 class="panel-title">
							<center><b>Login Admin</b></center>
						</h3>
					</div>

					<center>
						<div class="panel-body" style=" width: 30%;  ">
							<form class="form-horizontal" form method="post" action="<?php echo base_url(); ?>index.php/login/cek_login">
								<fieldset>
									<div id="error" class="form-group" style="margin-bottom: 30px; font-style: italic; color: red; display: none;">
										<label id="error_login"></label>
									</div>

									<div class="form-group" style="margin-bottom: 15px; margin-top: 15px; ">
										<div class="col-md-12">
											<input id="username" class="form-control" placeholder="Username" name="username" type="username" value="" required>
										</div>
									</div>

									<div class="form-group" style="margin-bottom: 15px;">
										<div class="col-md-12">
											<input id="password" class="form-control" placeholder="Password" name="password" type="password" value="" required>
										</div>
									</div>

									<button class="btn btn-primary" style="margin-bottom: 30px;">LOGIN</button>
									<center>
										<div class="login-question">Belum punya akun? <a>Daftar Akun</a>.</div>
									</center>

								</fieldset>
							</form>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>

	<center>
		<footer class="mt-5 mb-3">
			<div class="container my-auto">
				<div class="text-center my-auto" style="margin-top: 20px;">
					<span>developed by <a href="http://herdistory.blogspot.com/" target="_blank" style="color: white;"><b>Herdi Yusli</b><a></span>
				</div>
			</div>
		</footer>
	</center>
</body>

</html>
