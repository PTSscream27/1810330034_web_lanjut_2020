<!DOCTYPE html>	
<html>
<head>
	<title>Mahasiswa Index</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('mahasiswa/index')?>" class="nav-link active">Home</a>
			<a href="<?= site_url('mahasiswa/tambah')?>"class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">LULU</a>
		</div>
	</nav>
	<div class="alert alert-success text-center">
		Data Mahasiswa
	</div>
	<div class="container">
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($tabel as $isi) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $isi->nim; ?></td>
						<td><?php echo $isi->nama; ?></td>
						<td><?php echo $isi->alamat; ?></td>
						<td>
							<a href="#" class="btn btn-warning btm-sm">Edit</a>
							<a href="#" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
		
	</div>


</body>
</html>