<!DOCTYPE html>
<html>
<head>
	<title> title Coba siswa</title>
</head>
<h1> Data Mahasiswa</h1>

<body>
	<a href='<?php echo base_url("c_page/tambahdata"); ?>'>Tambah Data</a>
	<table border="1">
		<thead>
	<br></br>
			

		<tr>
			<th>no </th>
			<th>nim</th>
			<th>namamahasiswa</th>
			<th>jeniskelamin</th>
			<th>alamat</th>
			<th>no_hp</th>
			<th>action</th>
		</tr>
		<?php 
			$no=1; foreach ($mhs as $panggil) {
		 ?>
		 </thead>
		 <tbody>
		 	<tr>
		 		<th><?php echo $no++; ?></th>
		 		<th><?php echo $panggil['nim']?></th>
		 		<th><?php echo $panggil['namamahasiswa']?></th>
		 		<th><?php echo $panggil['jeniskelamin']?></th>
		 		<th><?php echo $panggil['alamat']?></th>
		 		<th><?php echo $panggil['no_hp']?></th>
		 		<th>
		 			<a href='<?php echo base_url('C_page/editdata/').$panggil['id'];?>'>Ubah</a>
		 			<a href='<?php echo base_url('C_proses/hapusmhs/').$panggil['id'];?>'>hapus</a>
		 		</th>
		 	</tr>
		 </tbody>
		<?php }?>
	</table>

</body>
</html>