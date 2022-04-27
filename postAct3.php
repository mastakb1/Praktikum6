<?php
if (empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['alamat']) || empty($_POST['jenisKelamin']) || empty($_POST['hobi']) || empty($_POST['tanggalLahir'])) {
	header("Location:Kosong.php");
}else{
echo "<center>Selamat Datang! ".$_POST['nama']."</center><br><br>";
echo "<center>~~~Biodata Anda~~~ </center><br>";	
echo "<center>Nama :".$_POST['nama']."</center><br>";
echo "<center>Email :".$_POST['email']."</center><br>";
echo "<center>Alamat :".$_POST['alamat']."</center><br>";
echo "<center>Jenis Kelamin :".$_POST['jenisKelamin']."</center><br>";
echo "<center>Hobi :".$_POST['hobi']."</center><br>";
echo "<center>Tanggal Lahir :".$_POST['tanggalLahir']."</center><br>";
echo "<center>Tanggal Login :".date("1, m/F/Y, g:i:s A")."</center><br>";
}
?>