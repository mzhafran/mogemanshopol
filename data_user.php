<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body style="background-color:pink">

<div class=”panel panel-primary”>      
    <center><img src ="gambar.jpg" align="center" class="responsive img materialboxed" alt=""></center><br>
    <center><table width="1000" border="4"></center>
        <tr>
            <td colspan="2" align="center"><h1>SISTEM INFORMASI AKUN MOGEMAN</h1> </td>
        </tr>
        
        <tr>
            <td width = "300">
                <ul>
                    <li><a href="data_user.php">USER</a></li>
                    <li><a href="data_motor.php">MOTOR</a></li>
                    <li><a href="penjualan.php">PENJUALAN</a></li>
                    <li><a href="toko_online.php">HOME</a></li>
                <ul>

            </td>
           <td width="1500">
            <table border="4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username Account</th>
                        <th>Email Account</th>
                        <th>Alamat Account</th>
                        <th>Email Account</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                    <tbody>
                        <?php 
                            require 'koneksi_db.php';
                            $query = "SELECT * FROM tbl_account ORDER BY id_account";
                            $sql = mysqli_query($koneksi_db,$query);
                            $no = 1; 
                            while($data = mysqli_fetch_assoc($sql)){

                        ?>
                        <tr>
                            <td>
                            <tr>
                            <td><?=$no; ?></td>
                            
                            <td><?=$data['username_account']?></td>
                            <td><?=$data['email_account']?></td>
                            <td><?=$data['alamat_account']?></td>
                            <td><?=$data['email_account']?></td>
                            <td class="center"><?php echo $data['level'];?></td>
                            
                            <td class="center">
                                <a href="edit_account.php?id=<?php
                                echo $data['id_account'];?>">Edit</a>
                                <a href="hapus_account.php?id=<?php echo $data['id_account']; ?>" 
                                onClick = "return confirm('Apakah Anda ingin menghapus  <?php echo $data['username_account']; ?>?')"> Hapus</a></td>

                            </tr>
                            
                            </td>
                        
                        </tr>
                        <?php $no++; }?>
                    </tbody>
            
            
            
            </table>
            
            </td>
            
         </tr>
               
    </table>
</body>
</html>