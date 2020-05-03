<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style_buku.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
  <title>Form Motor</title>
  </head>
  <body>
  <body>
    <div class="container">
        <div id="header">
            <div id="logo">
             <h2 style="background-color:red ">MOGEMAN</h2>
  <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio"  name="options" id="option1" checked><a href="data_user.php"> Data User</a>
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2"><a href="penjualan.php">Data Pembelian</a>
</div>
        </div>
        </div>
     
        <div class="content">
        <table class="table table-striped table-warning">
         <thead>
            <tr>
             <th scope="col">No</th>
             <th scope="col">Kode Motor</th>
             <th scope="col">Nama Motor</th>
             <th scope="col">Tahun Keluar</th>
             <th scope="col">Harga Motor</th>
             <th scope="col">Nama Penjual</th>
             <th scope="col">Aksi</th>

            </tr>
         </thead>
         <tbody>
    <?php 
    require "koneksi_db.php";
    $query = "SELECT * FROM tbl_motor ORDER BY kd_motor";
    $sql    = mysqli_query ($koneksi_db,$query);
    $no = 1;
    while ($data=mysqli_fetch_assoc($sql)) {
?>            

                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['kd_motor']?></td>
                            <td><?php echo $data['nm_motor']?></td>
                            <td><?php echo $data['hrg_motor']?></td>
                            <td><?php echo $data['nm_motor']?></td>
                            <td><?php echo $data['nm_penjual']?></td>
                            <td class="center"><a href="edit.php?id=<?php echo $data['kd_motor']; ?>" > Edit </a>|<a href="hapus.php?id=<?php echo $data['kd_motor']; ?>"
                                onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['nm_motor']; ?>?')"> hapus</a></td>
                            </tr>
                            
                            </td>
                        
                        </tr>
                    
                        <?php $no++; }?>
                    </tbody>
                    </table>
            
            </td>
            
         </tr>
               
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>