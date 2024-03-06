<<<<<<< HEAD
<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="hasil_daftar.php">
			<h2>Form Pendaftaran</h2>
			<hr />
			<div class="container px-3">
				<div class="form-group row mb-3">
					<label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
					<div class="col-8">
						<input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" placeholder="Luciya Agatha" required>
					</div>
				</div>

				<div class="form-group row mb-3">
					<label for="email" class="col-4 col-form-label">Email</label>
					<div class="col-8">
						<input name="email" type="email" class="form-control" id="email" placeholder="ciyawnzz@gmail.com" required>
					</div>
				</div>

				<div class="form-group row mb-3">
					<label for="alamat" class="col-4 col-form-label">Alamat</label>
					<div class="col-8">
						<textarea name="alamat" class="form-control" id="alamat" placeholder="Bekasi" required></textarea>
					</div>
				</div>

				<div class="form-group row mb-3">
					<label for="telepon" class="col-4 col-form-label">Telepon</label>
					<div class="col-8">
						<input name="telepon" type="tel" class="form-control" id="telepon" placeholder="081295331710" required>
					</div>
				</div>

				<div class="form-group row mb-3">
					<div class="offset-4 col-8">
						<input type="submit" name="kirim" value="Submit" class="btn btn-primary">
					</div>
            	</div>
			</div>
		</form>
	</div>

</body>
=======
<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="hasil_daftar.php">
			<h2>Form Pendaftaran</h2>
			<hr />
			<div class="container px-3">
				<div class="form-group row mb-3">
					<label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
					<div class="col-8">
						<input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" placeholder="Luciya Agatha" required>
					</div>
				</div>

				<div class="form-group row mb-3">
					<label for="email" class="col-4 col-form-label">Email</label>
					<div class="col-8">
						<input name="email" type="email" class="form-control" id="email" placeholder="ciyawnzz@gmail.com" required>
					</div>
				</div>

				<div class="form-group row mb-3">
					<label for="alamat" class="col-4 col-form-label">Alamat</label>
					<div class="col-8">
						<textarea name="alamat" class="form-control" id="alamat" placeholder="Bekasi" required></textarea>
					</div>
				</div>

				<div class="form-group row mb-3">
					<label for="telepon" class="col-4 col-form-label">Telepon</label>
					<div class="col-8">
						<input name="telepon" type="tel" class="form-control" id="telepon" placeholder="081295331710" required>
					</div>
				</div>

				<div class="form-group row mb-3">
					<div class="offset-4 col-8">
						<input type="submit" name="kirim" value="Submit" class="btn btn-primary">
					</div>
            	</div>
			</div>
		</form>
	</div>

</body>
>>>>>>> 9455039 (update)
</html>