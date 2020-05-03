<?php
    $idaccount = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="editaccount.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Form Edit Account</title>
</head>
<body>
    <div class="container">
        <div class="wall">
            <h4> Form Edit Account</h4>
            <hr>

            <form action="cek_editaccount.php" method="post">

            
        <div class="form-group">
          <label for="idaccount">Id Account</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user"></i></div>
            </div>
          <input type="text" name="idaccount" class="form-control" placeholder="Input Username Here" value="<?php echo $idaccount ?>" readonly>
          </div>
        </div>

        <div class="form-group">
                 <label>Username Account</label>

                 <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-motorcycle"></i></div>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Input email Here">
                 </div>
             </div>

         <div class="form-group">
                 <label>Email Account</label>

                 <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-motorcycle"></i></div>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Input email Here">
                 </div>
             </div>

                      <div class="form-group">
          <label>Alamat Account</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-motorcycle"></i></div>
            </div>
          <input type="text" name="alamat" class="form-control" placeholder="Input Address Here">
          </div>
        </div>
                         
        <div class="form-group">
                 <label>Email Account</label>

                 <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-motorcycle"></i></div>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Input email Here">
                 </div>
             </div>

                 <div class="form-group">
          <label>Status</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
          <input type="text" name="level" class="form-control" placeholder="Input Status Here">
          </div>
        </div>
        
        <button type="submit" class="btn btn-secondary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>        
      </form>
      </div>      
    </div>               

</body>
</html>