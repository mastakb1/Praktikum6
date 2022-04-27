<?php
if (empty($_POST['nama']) || empty($_POST['email'])) {
	header("Location:Kosong.php");
}else{
echo "<center>Nama :".$_POST['nama']."</center><br>";
echo "<center>Email :".$_POST['email']."</center><br>";
echo "<center>Tanggal Login :".date("1, m/F/Y, g:i:s A")."</center><br>";
}
?>