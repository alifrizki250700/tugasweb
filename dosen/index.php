<!DOCTYPE html>
<html>
<head>
	<title>DOSEN</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="text-center alert alert-info font-weight-bold">DOSEN</div>
		<a href="create.php" class="btn btn-info">Tambah Data</a>
		<br> <br>
		<table class="table table-bordered">
			<thead>					
				<tr>
					<th>NO</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>		
			<tbody>
				<?php
				require '../koneksi.php';
				$query = "select * from dosen";
				$result = mysqli_query($link, $query);
				$no ='1';
				while ($isi = mysqli_fetch_object($result)) {
					?>
					<tr>
						<td><?= $no++;?></td>
						<td><?= $isi-> nip;?></td>
						<td><?= $isi-> Nama_dosen;?></td>
						<td><?= $isi-> Alamat;?></td>
						<td>
							<a href="edit.php?nip=<?php echo $isi->nip; ?>" 
								class="btn btn-info">Edit</a>
							
							<a href="delet.php?nip=<?php echo $isi->nip; ?>" 
	  		  			onclick="return confirm('Apakah yakin ingin menghapus data?')" class="btn btn-warning">Hapus</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>