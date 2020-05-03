    <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="pinjam.css" rel="stylesheet" type="text/css">
    <title>Data Penjualan</title>
  </head>
  <body>
    <div class="container">
        <div id="header">
            <div id="logo">
             <h2>MOGEMAN</h2>
             <h4 class="alert alert-primary text-right mt-2px">PENJUALAN</h4>
             <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio"  name="options" id="option1" checked><a href="data_user.php" class="text-white"> Data User</a>
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2"><a href="data_motor.php" class="text-white">Data Motor</a>
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2"><a href="toko_online.php" class="text-white">Home</a>
  </label>
</div>
            </div> 
        </div>
        <div class="content">
         <table class="table" >
            <thead class="thead-dark">
             <tr>
             <th scope="col">No</th>
             <th scope="col">Kode Penjualan</th>
             <th scope="col">Kode Motor</th>
             <th scope="col">Id Account</th>
             <th scope="col">Tgl-Pembelian</th>             
             <th scope="col">Status</th>
             <th scope="col">Aksi</th>
             </tr>
            </thead>
            <tbody style="color : black">
            <?php
            include'koneksi_db.php';
            $no = 1;
            $query =mysqli_query($koneksi_db,"SELECT *  FROM tbl_penjualan INNER JOIN tbl_account on(tbl_penjualan.id_account = tbl_account.id_account) WHERE status ='terjual'");
            while($res = $query->fetch_assoc()):
            ?>
            
               <tr>
                 <td><?php echo $no++ ?></td>
                 <td><?php echo $res['kd_penjualan'];?></td>
                 <td><?php echo $res['kd_motor'];?></td>
                 <td><?php echo $res['id_account'];?></td>
                 <td><?php echo $res['tgl_pembelian'];?></td>                 
                 <td><?php echo $res['status']?></td>
                 <td ><a href="hapus_penjualan.php?id=<?php echo $res['kd_penjualan']; ?>"
                                onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $res['kd_penjualan']; ?>?')" class="text-dark">hapus</a></td>
              </tr>
            <?php endwhile; ?>
            <?php $no++; ?>
            </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>