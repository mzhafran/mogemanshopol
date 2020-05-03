<?php
include 'koneksi_db.php';

$kodebuku = $_POST['kode'];
$JudulBuku = $_POST['namamotor'];
$Author    = $_POST['tahun'];
$Tahun   = $_POST['harga'];
$Penerbit   = $_POST['penjual'];

$query = mysqli_query($koneksi_db, "INSERT into tbl_motor(kd_motor,nm_motor,thn_keluar,hrg_motor,nm_penjual) values ('$kodebuku','$JudulBuku','$Author','$Tahun','$Penerbit')");

if($query)
{

	echo '<script>
	alert("Input Motor Berhasil!");
	location.href = "form_inputmotor.php";
	</script>';
}else{
	echo '<script>
	alert("Input Motor Gagal!")
	location.href = "form_inputmotor.php"
	</script>';
}
?>