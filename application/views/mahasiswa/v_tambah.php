<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="" class="nav-link active">Home</a>
			<a href="" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">LULU</a>
		</div>
	</nav>
	<div class="alert alert-success text-center mt-3">
		Tambah Data Mahasiswa

	</div>
	<div class="container">
		<div class="card">
			<div class="card-header">form data mahasiswa</div>
			<div class="card-body">
				
				<form action="<?= site_url('mahasiswa/proses_tambah')?>" method="post">
					<div class="form-group">
						<label for="">NIM</label>
						<input type="Text" class="form-control" name="txtnim">
					</div>
					<div class="form-group">
						<label for="">NAMA</label>
						<input type="Text" class="form-control" name="txtnama">
					</div>
					<div class="form-group">
						<label for="">Alamat</label>
						<textarea name="txtalamat" cols="30"
						class="form-control" rows="3"></textarea>
					</div>
					<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
					<a href="<?= site_url('mahasiswa')?>" class="btn btn-warning">Batal</a>
				</form>
			</div>
		</div>

	</div>
</body>
</html>