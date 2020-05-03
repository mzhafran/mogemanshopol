<?php
    include 'koneksi_db.php';
    $query = mysqli_query($koneksi_db, "SELECT max(kd_motor) as maxKode FROM tbl_motor");
    $data = mysqli_fetch_array($query);
    $kodepinjam = $data['maxKode'];
    $noUrut = (int) substr($kodepinjam, 3, 3);
    $noUrut++;
    $char = 'MT';
    $kode = $char . sprintf("%03s", $noUrut);
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

			<h4 class="text-center">FORM JUAL MOTOR</h4>
      <hr>
		
                <form action="cekinput.php" method="post">
        	<div class="form-group">
				<label>Kode Motor</label>

		        <div class="input-group">
		      	  <div class="input-group-prepend">
		      	    <div class="input-group-text"><i class="fa fa-motorcycle"></i></div>
		          </div>
		          <input type="text" name="kode" class="form-control" placeholder="Input Kode Here" value="<?php echo $kode ?>">
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

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>