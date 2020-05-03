<?php
session_start();
include 'koneksi_db.php';

$kodemotor = $_POST['kodemotor'];
$namamotor = $_POST['namamotor'];
$tahun    = $_POST['tahun'];
$harga   = $_POST['harga'];
$penjual   = $_POST['penjual'];

$query = mysqli_query($koneksi_db, "UPDATE tbl_motor set nm_motor = '$namamotor', thn_keluar ='$tahun',hrg_motor = '$harga',nm_penjual = '$penjual' Where kd_motor = '$kodemotor';");

if($query)
{

	echo '<script>
	alert("Edit Motor Berhasil!");
	location.href = "data_motor.php";
	</script>';
}else{
	echo '<script>
	alert("Edit Motor Gagal!")
	location.href = "data_motor.php"
	</script>';
}
?>