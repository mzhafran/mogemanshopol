<?php
include 'koneksi_db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi_db, "insert into tbl_account(username_account,email_account,password_account,alamat_account,level) values ('$username','$email','$password','$alamat','user')");

if($query)
{
	echo '<script>
	alert("Create Account Success!");
	location.href = "formlogin.php";
	</script>';
} else{
	echo '<script>
	alert("Create Account Failed!");
	location.href = "formregis.php";
	</script>';	
}
?>