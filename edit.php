<?php
    $kodemotor = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="inputmotor.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Halaman Input Motor</title>
    <link rel="stylesheet"  >
</head>
<body>
    <div class="container">     
        <div class="wall">

            <h4 class="text-center">FORM EDIT MOTOR</h4>
      <hr>
        
                <form action="cekinput.php" method="post">
            <div class="form-group">
                <label for="kodemotor">Kode Motor</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-motorcycle"></i></div>
                  </div>
                  <input type="text" name="kodemotor" class="form-control" placeholder="Input Kode Here" value="<?php echo $kodemotor ?>">
                </div>
            </div>

            <div class="form-group">
                 <label>Nama Motor</label>

                 <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-motorcycle"></i></div>
                    </div>
                    <input type="text" name="namamotor" class="form-control" placeholder="Input Name Here">
                 </div>
             </div>

                      <div class="form-group">
          <label>Tahun Keluar</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-motorcycle"></i></div>
            </div>
          <input type="text" name="tahun" class="form-control" placeholder="Input Year Here">
          </div>
        </div>

                 <div class="form-group">
          <label>Harga Motor</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
          <input type="text" name="harga" class="form-control" placeholder="Input Price Here">
          </div>
        </div>

                 <div class="form-group">
          <label>Nama Penjual</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
          <input type="text" name="penjual" class="form-control" placeholder="Input Seller Here">
          </div>
        </div>
        
        <button type="submit" class="btn btn-secondary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>        
      </form>
      </div>      
    </div>              
<!-- <body>
<form action="edit_motor.php" method="post">
    <div id="container">
        <div id="home">
            <div id="wall">
            
    <div class="form-group">
                   <center><label for="kode" class="text-dark">Kode Motor</label>
                    <input type="text" class="form-control" name="kode" value="<?php echo $kode ?>" readonly></center>
                </div>
    <p><center>Nama Motor : <input type="text"  name="judulbuku" required=""><br></center></p>
    <p><center>Tahun Keluar    : <input type="text" name="author" required=""><br></center></p>
    <p><center>Harga Motor   : <input type="text" name="tahun" required=""><br></center></p>
    <p><center>Nama Penjual   : <input type="text" name="penerbit" required=""><br></center></p>
    <br><p><center><button type="submit" >save</button></center>
</form>
<div class="tombol-back">
    </div>
</div>
</div>
</body> -->