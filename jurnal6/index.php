<?php
session_start();
include '1.php';
$nimm = $_SESSION['nimms'];
$sql = mysqli_query($conn,"SELECT * FROM t_jurnal6 WHERE Nim ='$nimm");
if ($array=mysqli_fetch_array($sql)) {
$nimm = $array['nim'];
$nama = $array['nama'];
$Kelas = $_SESSION['Kelas'];
$jk = $array ['Jenis kelamin'];
$hbb = $array['Hobi'];
$faku = $array['Fakultas'];
$almt = $arrayp['alamat'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>nim : </td>
			<td><?php echo $nimm?></td>
		</tr>
		<tr>
			<td>nama : </td>
			<td><?php echo $nama?></td>
		</tr>
		<tr>
			<td>nama : </td>
			<td><?php echo $Kelas?></td>
		</tr>
		<tr>
			<td>Hobi :</td>
			<td><?php foreach($_SESSION['hobi'] as $vae){
				echo "$vae<br>";}?></td>
		</tr>
	</table>
</body>
</html>
