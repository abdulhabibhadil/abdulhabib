<?php //filename: dosen.php
// 1. koneksi
include("db.php");

// 2. query
$query = "SELECT * FROM dosen";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Dosen</h1>
<a href="template.php?page=formdosen&action=add">Tambah Data</a>
<table border="1">
<thead>
	<tr>
		<th>id</th>
		<th>kode dosen</th>
		<th>nama</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php
	while($row = mysqli_fetch_assoc($hasil)){
	?>
	<tr>
		<td><?php echo $row['id']; ?> </td>
		<td><?php echo $row['kode_dosen']; ?> </td>
		<td><?php echo $row['nama']; ?> </td>
		<td>
			<a href="template.php?page=formdosen&id=<?php echo $row['id'];?>&action=edit">Edit</a>
			<a href="proses_dosen.php?action=delete&id=<?php echo $row['id'];?>">Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
</tbody>
</table>