<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
	nim<input type="text" name="nim"><br>
	nama<input type="text" name="nama"><br>
		<input type="submit" name="kirim" value="login">
	</form>

</body>
</html>
<?php
include '1.php';
if (isset($_POST['kirim'])) {
	session_start();
	if (strlen($_POST['nama'])>35 || $_POST ['nama']=="") {
		echo "nama anda kurang";}
		else{$nama = $_POST ['nama'];}
	if (strlen($_POST['nim']) == 10 && $_POST['nim']!=""&&is_numeric($_POST['nim'])) {
		$data = $_POST['nim'];}
		else{echo "masukkan 10 angka saja";}
		$syntax = mysqli_query($conn,"SELECT * FROM t_jurnal6 WHERE nim='$nim'");
		$array = mysqli_num_rows($syntax);
		if ($array>0) {
			echo "berhasil login!!";
			header("location : index.php")
			# code...
		}
	}
}