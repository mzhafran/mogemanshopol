<?php
session_start();
include 'koneksi_db.php';

$kodemotor = $_POST['idaccount'];
$usernameaccount = $_POST['username'];
$emailaccount    = $_POST['email'];
$alamataccont   = $_POST['alamat'];
$emailaccount    = $_POST['email'];
$status   = $_POST['level'];

$query = mysqli_query($koneksi_db, "UPDATE tbl_account set username_account = '$usernameaccount', email_account ='$emailaccount',alamat_account = '$alamataccont',email_account ='$emailaccount',level = '$status' Where id_Account = '$idaccount';");

if($query)
{

	echo '<script>
	alert("Edit Motor Berhasil!");
	location.href = "data_user.php";
	</script>';
}else{
	echo '<script>
	alert("Edit Motor Gagal!")
	location.href = "data_user.php"
	</script>';
}
?>