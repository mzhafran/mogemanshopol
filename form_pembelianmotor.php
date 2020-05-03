<?php
    include 'koneksi_db.php';
    $query = mysqli_query($koneksi_db, "SELECT max(kd_penjualan) as maxKode FROM tbl_penjualan");
    $data = mysqli_fetch_array($query);
    $kodepenjualan = $data['maxKode'];
    $noUrut = (int) substr($kodepenjualan, 3, 3);
    $noUrut++;
    $char = 'BL';
    $kode = $char . sprintf("%03s", $noUrut);
    ?>    
<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'koneksi_db.php';
    $kd_motor ="";
    $motor ="";
    $nm_penjual ="";
    $id_akun ="";
    $user ="";

    if(isset($_POST['cari'])){
        $kd_motor = $_POST['kd_motor'];

        $query = "SELECT * from tbl_motor WHERE kd_motor = '$kd_motor'";
        $hasil = mysqli_query($koneksi_db, $query);
        $data = mysqli_fetch_array($hasil);

        if($hasil){
            $motor = $data['nm_motor'];
            $nm_penjual = $data['nm_penjual'];

        }else{
            echo "gagal";
        }
        $id_akun = $_POST['id_account'];

        $query1 = "SELECT * from tbl_account WHERE id_account = '$id_akun'";
        $hasil1 = mysqli_query($koneksi_db, $query1);
        $data1 = mysqli_fetch_array($hasil1);

        if ($hasil1) {
                     # code...
            $user = $data1['username_account'];
                 }         
    }
        if(isset($_POST['submit'])){
            $kdpenjualan = $_POST['kode'];
            $kode_motor = $_POST['kd_motor'];
            $nama_motor = $_POST['motor'];
            $nama_penjual = $_POST['nm_penjual'];
            $kode_user = $_POST['id_account'];
            $nama_user = $_POST['user'];
            $tglpembelian = $_POST['tgl_pembelian'];

            $insert = "INSERT INTO tbl_penjualan (kd_penjualan, kd_motor, id_account, tgl_pembelian,status) 
                        VALUES ('$kdpenjualan', '$kode_motor', '$kode_user', '$tglpembelian','terjual')";
            $add = mysqli_query($koneksi_db, $insert);

            if($insert){
                echo 'Data Berhasil Disimpan <br> <a href="form_pembelianmotor.php">Kembali</a>';
            } else {
                echo 'Data Gagal Disimpan <br> <a href="form_pembelianmotor.php">Kembali</a>';
            }
        }
    ?>
    <div class="container-fluid bg-secondary">
        <div class="row h-100">
            <div class="col-md-3 m-auto bg-light">
                <form action="form_pembelianmotor.php" method="post">

                <h3>Pembelian Motor</h3>

                <div class="form-group">
                    <label for="kode" class="text-dark">Kode Penjualan</label>
                    <input type="text" class="form-control" name="kode" value="<?php echo $kode ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="sel1">Kode Motor</label><br>
                    <input type="text" name="kd_motor" value="<?php echo $kd_motor?>">
                    <input type="submit" name="cari" value="cari"><br>
                    <label>Nama Motor</label>
                    <input class="form-control" type="text" name="motor" value="<?php echo $motor ?>" readonly>
                    <label>Nama Penjual</label>
                    <input class="form-control" type="text" name="nm_penjual" value="<?php echo $nm_penjual ?>" readonly>                                        
                </div>
                <div class="form-group">
                    <label>Id Account</label><br>
                    <input type="text" name="id_account" value="<?php echo $id_akun?>">
                    <input type="submit" name="cari" value="cari"><br>
                    <label>Nama User</label>
                    <input type="text" name="user" class="form-control" value="<?php echo $user ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="tgl_pembelian" class="text-dark">Tgl Pembelian</label>
                    <input type="date" class="form-control" name="tgl_pembelian" value="<?php echo date("Y-m-d")?>"readonly>
                </div>                           

                <div class="form-group">
                    <a href="form_pembelianmotor.php" class="btn btn-dark">Reset</a>
                    <input type="submit" name="submit" class="btn btn-primary">
                    <a href="toko_online.php" class="btn btn-success">Home</a>
                </div>
                </form>
            </div>
        </div>
    </div>