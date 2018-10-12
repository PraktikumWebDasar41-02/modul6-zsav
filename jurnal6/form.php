<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><input type="radio" name="Kelas" value="IF_01">IF-01<br>
				<input type="radio" name="Kelas" value="MI_02">MI-02<br>
				<input type="radio" name="Kelas" value="IF_03">IF-03</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="Jenis Kelamin" value="Laki-laki">Laki-laki<br><input type="radio" name="Jenis Kelamin" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td><input type="checkbox" name="Hobi" value="renang">Renang<br>
				<input type="checkbox" name="Hobi" value="tidur">Tidur<br>
				<input type="checkbox" name="Hobi" value="makan">Makan</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><select>
				  <option value="FIT">FIT</option>
				  <option value="FKB">FKB</option>
				  <option value="FEB">FEB</option>
				  <option value="FRI">FRI</option>
				</select></td>
		</tr><td>Alamat</td>
		<td><input type="text" name="alamat"></td>
		<tr>
			<td><input type="submit" name="kirim" value="submit"></td>
		</tr>
		</table>
	</form>

</body>
</html>
<?php
include "1.php";
	
if (isset($_POST['kirim'])) {
	if (empty(['nim'])==10 && $_POST['nim']!="") {
		$nim = $_POST['nim'];
	}else{
		echo "masukkan 10 angka";
	}
	if (strlen($_POST['nama'])==20 && $_POST['nama']=="") {
		echo "Masukkan nama anda";
	}else{
		$nama=$_POST['nama'];
	}
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	if (isset($_POST['Kelas'])) {
	$Kelas=$_POST['Kelas'];
	}
	if (isset($_POST['Jenis kelamin'])) {
	$jk = $_POST['Jenis Kelamin'];
	}
	if (isset($_POST['Hobi'])) {
	$Hb = $_POST['Hobi'];
	}
	if (isset($_POST['Fakultas'])) {
	$fk = $_POST['Fakultas'];
	}
	$alamat = $_POST['alamat'];
	if (isset($nim) && isset($nama) && isset($Kelas) && isset($jk) && isset($Hb) && isset($fk) && isset($alamat)) {
		session_start();
		$_SESSION['nimm']=$nim;
		$que = mysqli_query($conn,"INSERT INTO t_jurnal6(NIM,Nama,Kelas,Jenis_kelamin,Hobi,Fakultas,alamat) VALUES($nim,'$nama','$Kelas','$jk','$Hb','fk','alamat')");
		if (isset($que)) {
			echo "data tidak valid";
			header("location:index.php");
			
		}else{
			echo "data tidak tersimpan";
		}
	}
}

?>