<?php
session_start();
include 'koneksi_db.php';

$kodepenjualan = $_POST['kodepenjualan'];
$kodemotor = $_POST['kodemotor'];
$idaccount    = $_POST['id'];
$tglpembelian   = $_POST['tgl'];
$level   = $_POST['level'];

$query = mysqli_query($koneksi_db, "UPDATE tbl_penjualan set kd_motor = '$kodemotor',id_account = '$idaccount',tgl_pembelian = '$tglpembelian',level = '$level' Where kd_penjualan = '$kodepenjualan';");

if($query)
{

	echo '<script>
	alert("Edit Data Berhasil!");
	location.href = "penjualan.php";
	</script>';
}else{
	echo '<script>
	alert("Edit Data Gagal!")
	location.href = "penjualan.php"
	</script>';
}
?>