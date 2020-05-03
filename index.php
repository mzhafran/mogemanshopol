<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="TokoOnline.css">

    <title>Toko Online</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
      <div class="container">

        <h3><i class="fas fa-motorcycle text-dark mr-2"></i></h3>
        <a class="navbar-brand font-weight-bold font-weight-bold" href="#">MOGEMAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item active">
              <a class="nav-link" href="Toko_Online.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Reseller <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Hubungi Kami <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Bantuan <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="formlogin.php">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="formregis.php">Daftar <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
          </form>
          <div class="icon mt-2">
            <h5>
            <i class="fas fa-cart-plus ml-3 mr-3" data-toggle="tooltip" title="Keranjang Belanja"></i>
            <i class="fas fa-envelope ml-3 mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell ml-3 mr-3" data-toggle="tooltip" title="Nontifikasi"></i>
            </h5>
          </div>
        </div>
      </div>
    </nav>

    <div class="row mt-5 no-gutters">
      <div class="col-md-2 bg-light">    
        <ul class="list-group list-group-flush p-2 pt-4 ">
          <li class="list-group-item bg-secondary"><i class="fas fa-list"> Kategori Motor</i></li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i>
            <a href="Motor80an.php" class="text-dark">Tahun 80</a></li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i>
            <a href="Motor90an.php" class="text-dark">Tahun 90</a></li>        
        </ul>

         <ul class="list-group list-group-flush p-2 pt-4 ">
          <li class="list-group-item bg-secondary"><i class="fas fa-list"> Data Data</i></li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i>
            <a href="data_user.php" class="text-dark">Data User</a></li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i>
            <a href="data_motor.php" class="text-dark">Data Motor</a></li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i>
            <a href="penjualan.php" class="text-dark">Data Penjualan</a></li>         
        </ul>
      </div>
      
      <div class="col-md-10">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="slider.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4">CHECK OUR NEW ITEM! <span class="font-weight-bold">MOGEMAN</span></h1>
                <hr class="my-4">
                <p class="lead font-weight-bold">Please Stay At Home!</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="slider3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4">CHECK OUR NEW ITEM! <span class="font-weight-bold">MOGEMAN</span></h1>
                <hr class="my-4">
                <p class="lead font-weight-bold">Please Stay At Home!</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="motor5.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4">CHECK OUR NEW ITEM! <span class="font-weight-bold">MOGEMAN</span></h1>
                <hr class="my-4">
                <p class="lead font-weight-bold">Please Stay At Home!</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <h4 class="text-center font-weight-bold m-4">Produk Terbaru</h4>

        <div class="row mx-auto">
          <div class="card mr-2 ml-2" style="width: 16rem;">
            <img src="sale.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
              <h5 class="card-title">Byson CC 150 TYPE A</h5>              
              <p class="card-text">Motor Klasik Byson Modif</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="far fa-star text-warning"></i><br>
              <a href="#" class="btn btn-primary mt-3" data-target="#produk1" data-toggle="modal">Detail</a>
              <a href="form_pembelianmotor.php" class="btn btn-danger mt-3">Rp. 13.000.000</a>
            </div>
          </div>

           <div class="card mr-2 ml-2" style="width: 16rem;">
            <img src="sale3.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
              <h5 class="card-title ">Superior 100 Type A</h5>              
              <p class="card-text">Motor Klasik Superior A</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="far fa-star text-warning"></i><br>
              <a href="#" class="btn btn-primary mt-3" data-target="#produk2" data-toggle="modal">Detail</a>
              <a href="form_pembelianmotor.php" class="btn btn-danger mt-3">Rp. 10.000.000</a>
            </div>
          </div>

          <div class="card mr-2 ml-2" style="width: 16rem;">
            <img src="sale5.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
              <h5 class="card-title">Byson CC 150 Type B</h5>              
              <p class="card-text">Motor Klasik Byson B</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="far fa-star text-warning"></i><br>
              <a href="#" class="btn btn-primary mt-3" data-target="#produk3" data-toggle="modal">Detail</a>
              <a href="form_pembelianmotor.php" class="btn btn-danger mt-3">Rp. 12.500.000</a>
            </div>
          </div>

          <div class="card mr-2 ml-2" style="width: 16rem;">
            <img src="sale6.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
              <h5 class="card-title">Vintage Superior 110</h5>              
              <p class="card-text">Motor Klasik Ala Dusties</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="far fa-star text-warning"></i><br>
              <a href="#" class="btn btn-primary mt-3" data-target="#produk4" data-toggle="modal">Detail</a>
              <a href="form_pembelianmotor.php" class="btn btn-danger mt-3">Rp. 8.500.000</a>
            </div>
          </div>

          <div class="row mx-auto mt-5">
          <div class="card mr-2 ml-2" style="width: 16rem;">
            <img src="sale22.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
              <h5 class="card-title">Streling 80 TYPE A</h5>              
              <p class="card-text">Motor Klasik Streling Type B</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
              <i class="far fa-star text-warning"></i><br>
              <a href="#" class="btn btn-primary mt-3" data-target="#produk5" data-toggle="modal">Detail</a>
              <a href="form_pembelianmotor.php" class="btn btn-danger mt-3">Rp. 7.800.000</a>
            </div>
          </div>

           <div class="card mr-2 ml-2" style="width: 16rem;">
            <img src="sale221.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
              <h5 class="card-title ">Streling 80 Type C</h5>              
              <p class="card-text">Motor Klasik Streling Type C</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
              <i class="far fa-star text-warning"></i><br>
              <a href="#" class="btn btn-primary mt-3" data-target="#produk6" data-toggle="modal">Detail</a>
              <a href="form_pembelianmotor.php" class="btn btn-danger mt-3">Rp. 10.000.000</a>
            </div>
          </div>

          <div class="card mr-2 ml-2" style="width: 16rem;">
            <img src="sale222.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
              <h5 class="card-title">AlioMal Vintage Type B</h5>              
              <p class="card-text">Motor Klasik Vintage AlioMal</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
              <i class="far fa-star text-warning"></i><br>
              <a href="#" class="btn btn-primary mt-3" data-target="#produk7" data-toggle="modal">Detail</a>
              <a href="form_pembelianmotor.php" class="btn btn-danger mt-3">Rp. 5.500.000</a>
            </div>
          </div>

          <div class="card mr-2 ml-2" style="width: 16rem;">
            <img src="sale223.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
              <h5 class="card-title">Yamaha 172 Type R</h5>              
              <p class="card-text">Motor Klasik Ala Yamaha</p>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
              <i class="far fa-star text-warning"></i><br>
              <a href="#" class="btn btn-primary mt-3" data-target="#produk8" data-toggle="modal">Detail</a>
              <a href="form_pembelianmotor.php" class="btn btn-danger mt-3">Rp. 7.500.000</a>
            </div>
          </div>

          <div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="sale.jpg">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless bg-light" style="border-radius: 5px;">
                        <tr>
                          <th>Nama Produk</th>
                          <td>Motor Klasik Byson</td>
                        </tr>
                        <tr>
                          <th>Kode Produk</th>
                          <td>MT009</td>
                        </tr>
                        <tr>
                          <th>Merk/Type</th>
                          <td>Byson</td>
                        </tr>
                         <tr>
                          <th>Biaya Ongkir</th>
                          <td>Standar</td>
                        </tr>
                         <tr>
                          <th>Rating Produk</th>
                          <td><i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="far fa-star text-warning"></i>
                          </td>
                        </tr>
                        <tr>
                          <th>Stock Produk</th>
                          <td>5 Buah</td>
                        </tr>
                         <tr>
                          <th>Harga Produk</th>
                          <td>Rp. 13.000.000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-success"><a href="form_pembelianmotor.php." class="text-white">Beli</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="sale1.jpg">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless bg-light" style="border-radius: 5px;">
                        <tr>
                          <th>Nama Produk</th>
                          <td>Motor Klasik Superior A</td>
                        </tr>
                        <tr>
                          <th>Kode Produk</th>
                          <td>MT010</td>
                        </tr>
                        <tr>
                          <th>Merk/Type</th>
                          <td>Superior</td>
                        </tr>
                         <tr>
                          <th>Biaya Ongkir</th>
                          <td>Standar</td>
                        </tr>
                         <tr>
                          <th>Rating Produk</th>
                          <td><i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="far fa-star text-warning"></i>
                          </td>
                        </tr>
                        <tr>
                          <th>Stock Produk</th>
                          <td>5 Buah</td>
                        </tr>
                         <tr>
                          <th>Harga Produk</th>
                          <td>Rp. 10.000.000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-success"><a href="form_pembelianmotor.php" class="text-white">Beli</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="sale5.jpg">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless bg-light" style="border-radius: 5px;">
                        <tr>
                          <th>Nama Produk</th>
                          <td>Motor Klasik Byson B</td>
                        </tr>
                        <tr>
                          <th>Kode Produk</th>
                          <td>MT011</td>
                        </tr>
                        <tr>
                          <th>Merk/Type</th>
                          <td>Byson</td>
                        </tr>
                         <tr>
                          <th>Biaya Ongkir</th>
                          <td>Standar</td>
                        </tr>
                         <tr>
                          <th>Rating Produk</th>
                          <td><i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="far fa-star text-warning"></i>
                          </td>
                        </tr>
                        <tr>
                          <th>Stock Produk</th>
                          <td>5 Buah</td>
                        </tr>
                         <tr>
                          <th>Harga Produk</th>
                          <td>Rp. 12.500.000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-success"><a href="form_pembelianmotor.php" class="text-white">Beli</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="sale4.jpg">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless bg-light" style="border-radius: 5px;">
                        <tr>
                          <th>Nama Produk</th>
                          <td>Motor Klasik Ala Dusties</td>
                        </tr>
                        <tr>
                          <th>Kode Produk</th>
                          <td>MT012</td>
                        </tr>
                        <tr>
                          <th>Merk/Type</th>
                          <td>Vintage</td>
                        </tr>
                         <tr>
                          <th>Biaya Ongkir</th>
                          <td>Standar</td>
                        </tr>
                         <tr>
                          <th>Rating Produk</th>
                          <td><i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="far fa-star text-warning"></i>
                          </td>
                        </tr>
                        <tr>
                          <th>Stock Produk</th>
                          <td>5 Buah</td>
                        </tr>
                         <tr>
                          <th>Harga Produk</th>
                          <td>Rp. 8.500.000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-success"><a href="form_pembelianmotor.php" class="text-white">Beli</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="sale22.jpg">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless bg-light" style="border-radius: 5px;">
                        <tr>
                          <th>Nama Produk</th>
                          <td>Motor Klasik Streling Type B</td>
                        </tr>
                        <tr>
                          <th>Kode Produk</th>
                          <td>MT005</td>
                        </tr>
                        <tr>
                          <th>Merk/Type</th>
                          <td>Streling</td>
                        </tr>
                         <tr>
                          <th>Biaya Ongkir</th>
                          <td>Standar</td>
                        </tr>
                         <tr>
                          <th>Rating Produk</th>
                          <td><i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-warning"></i>
                          </td>
                        </tr>
                        <tr>
                          <th>Stock Produk</th>
                          <td>5 Buah</td>
                        </tr>
                         <tr>
                          <th>Harga Produk</th>
                          <td>Rp. 7.800.000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-success"><a href="form_pembelianmotor.php" class="text-white">Beli</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     <div class="modal fade" id="produk6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="sale221.jpg">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless bg-light" style="border-radius: 5px;">
                        <tr>
                          <th>Nama Produk</th>
                          <td>Motor Klasik Streling Type C</td>
                        </tr>
                        <tr>
                          <th>Kode Produk</th>
                          <td>MT006</td>
                        </tr>
                        <tr>
                          <th>Merk/Type</th>
                          <td>Streling</td>
                        </tr>
                         <tr>
                          <th>Biaya Ongkir</th>
                          <td>Standar</td>
                        </tr>
                         <tr>
                          <th>Rating Produk</th>
                          <td><i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-warning"></i>
                          </td>
                        </tr>
                        <tr>
                          <th>Stock Produk</th>
                          <td>5 Buah</td>
                        </tr>
                         <tr>
                          <th>Harga Produk</th>
                          <td>Rp. 10.000.000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-success"><a href="form_pembelianmotor.php" class="text-white">Beli</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     <div class="modal fade" id="produk7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="sale222.jpg">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless bg-light" style="border-radius: 5px;">
                        <tr>
                          <th>Nama Produk</th>
                          <td>Motor Klasik Vintage AlioMal</td>
                        </tr>
                        <tr>
                          <th>Kode Produk</th>
                          <td>MT007</td>
                        </tr>
                        <tr>
                          <th>Merk/Type</th>
                          <td>AlioMal</td>
                        </tr>
                         <tr>
                          <th>Biaya Ongkir</th>
                          <td>Standar</td>
                        </tr>
                         <tr>
                          <th>Rating Produk</th>
                          <td><i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-warning"></i>
                          </td>
                        </tr>
                        <tr>
                          <th>Stock Produk</th>
                          <td>5 Buah</td>
                        </tr>
                         <tr>
                          <th>Harga Produk</th>
                          <td>Rp. 5.500.000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-success"><a href="form_pembelianmotor.php" class="text-white">Beli</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="modal fade" id="produk8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="sale223.jpg">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless bg-light" style="border-radius: 5px;">
                        <tr>
                          <th>Nama Produk</th>
                          <td>Motor Klasik Ala Yamaha</td>
                        </tr>
                         <tr>
                          <th>Kode Produk</th>
                          <td>MT008</td>
                        </tr>
                        <tr>
                          <th>Merk/Type</th>
                          <td>Yamaha</td>
                        </tr>
                         <tr>
                          <th>Biaya Ongkir</th>
                          <td>Standar</td>
                        </tr>
                         <tr>
                          <th>Rating Produk</th>
                          <td><i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-warning"></i>
                          </td>
                        </tr>
                        <tr>
                          <th>Stock Produk</th>
                          <td>5 Buah</td>
                        </tr>
                         <tr>
                          <th>Harga Produk</th>
                          <td>Rp. 7.500.000</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-success"><a href="form_pembelianmotor.php" class="text-white">Beli</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-dark text-white p-5">
      <div class="row">
        <div class="col-md-3">
          <h5>LAYANAN PELANGGAN</h5>
          <ul>
            <li>Pusat Bantuan</li>
            <li>Cara Pembelian</li>
            <li>Pengiriman</li>
            <li>Cara Pengembalian</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>TENTANG KAMI</h5>
          <p>Situs ini adalah situs jual beli motor klasik online yang dibangun untuk memudahkan para penggemar motor klasik atau modif menemukan yang mereka cari.</p>
        </div>
        <div class="col-md-3">
          <h5>MITRA KERJA SAMA</h5>
          <ul>
            <li>GOJEK</li>
            <li>GRAB</li>
            <li>JNE</li>
            <li>PT. POS Indonesia</li>
            <li>TIKI</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>HUBUNGI KAMI</h5>
          <ul>
            <li>021-293-7868</li>
            <li>MogeMan@gmail.com</li>
          </ul>
        </div>  
      </div>
    </footer>

    <div class="copyright text-center text-white font-weight-bold bg-secondary p-2">
      <p>Developed by MogeMan Copyright <i class="far fa-copyright"></i> 2020</p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
