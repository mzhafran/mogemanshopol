<?php
include 'koneksi_db.php';
$user = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($koneksi_db, "select * from tbl_account where username_account='$user' and password_account='$password'" );
$cek = mysqli_num_rows($query);
if($cek>0)
{
	echo "Login Berhasil";
	echo '<script>
	alert("Log-In Success!");
	location.href = "Toko_Online.php";
	</script>';
	
} else{
	echo "Login Gagal";
	echo '<script>
	alert("Log-in Failed!");
	location.href = "formlogin.php";
	</script>';
}
?>
