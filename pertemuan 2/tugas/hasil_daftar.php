<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>0878555169</td>
				</tr>
                
				<tr>
					<td>2</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>0856555635</td>
				</tr>

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */

				  if (isset($_POST['kirim'])) {
					$nama_lengkap = $_POST['nama_lengkap'];
					$email = $_POST['email'];
					$alamat = $_POST['alamat'];
					$telepon = $_POST['telepon'];
					
					echo '<tr>';

					echo '<td>';
					echo 3;
					echo '</td>';

					echo '<td>';
					echo $nama_lengkap;
					echo '</td>';

					echo '<td>';
					echo $email;
					echo '</td>';

					echo '<td>';
					echo $alamat;
					echo '</td>';

					echo '<td>';
					echo $telepon;
					echo '</td>';

					echo '</tr>';
				  }
				?>

			</tbody>
		</table>
	</div>
</body>
=======
<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>0878555169</td>
				</tr>
                
				<tr>
					<td>2</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>0856555635</td>
				</tr>

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */

				  if (isset($_POST['kirim'])) {
					$nama_lengkap = $_POST['nama_lengkap'];
					$email = $_POST['email'];
					$alamat = $_POST['alamat'];
					$telepon = $_POST['telepon'];
					
					echo '<tr>';

					echo '<td>';
					echo 3;
					echo '</td>';

					echo '<td>';
					echo $nama_lengkap;
					echo '</td>';

					echo '<td>';
					echo $email;
					echo '</td>';

					echo '<td>';
					echo $alamat;
					echo '</td>';

					echo '<td>';
					echo $telepon;
					echo '</td>';

					echo '</tr>';
				  }
				?>

			</tbody>
		</table>
	</div>
</body>
>>>>>>> 9455039 (update)
</html>