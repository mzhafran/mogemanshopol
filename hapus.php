<?php

include "koneksi_db.php";

$kodebuku = $_GET['id'];

$hapus = mysqli_query($koneksi_db, "DELETE FROM tbl_motor WHERE kd_motor='$kodebuku'");
if($hapus){ 
    echo "<script>alert('Data Berhasil Di Hapus');document.location='data_motorm.php'</script>";
}else{  
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='data_motor.php'</script>";
}
?>