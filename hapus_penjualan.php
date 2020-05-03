<?php

include "koneksi_db.php";

$kodebuku = $_GET['id'];

$hapus = mysqli_query($koneksi_db, "DELETE FROM tbl_penjualan WHERE kd_penjualan='$kodebuku'");
if($hapus){ 
    echo "<script>alert('Data Berhasil Di Hapus');document.location='penjualan.php'</script>";
}else{  
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='penjualan.php'</script>";
}
?>