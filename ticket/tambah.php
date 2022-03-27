<?php
    include 'model.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="tiket/fonts/icomoon/style.css">

    <link rel="stylesheet" href="tiket/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="tiket/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="tiket/css/style.css">

    <title>Ticket</title>
  </head>
  <body>
  
    
    <aside class="sidebar">
      <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
      </div>
      <div class="side-inner">

        <div class="logo-wrap">
          <div class="logo">
            <span>C</span>
          </div>
          <span class="logo-text">Colorlib</span>
        </div>
          
        <div class="nav-menu">
          <ul>
            <li class="active"><a href="tiket/index.php" class="d-flex align-items-center"><span class="wrap-icon icon-home2 mr-3"></span><span class="menu-text">Home</span></a></li>
            <li><a href="tiket/view_ticket.php" class="d-flex align-items-center"><span class="wrap-icon icon-book mr-3"></span><span class="menu-text">Daftar Ticket</span></a></li>
            <li><a href="view_penjualan" class="d-flex align-items-center"><span class="wrap-icon icon-shopping-cart mr-3"></span><span class="menu-text">Ticket</span></a></li>
          </ul>
        </div>
      </div>
      
    </aside>
    <main>
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12">
                    <div class="d-flex post-entry">
                        <div class="custom-thumbnail">
                            <img src="tiket/images/person_1.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="post-content">
                            <h3>How the gut microbes you're born with affect your lifelong health</h3>
                            <div class="post-meta">
                                <span>Posted:</span> Dec 17, 2019
                            </div>
                        </div>
                    </div>
                    <h3 class="text-dark mb-5">Tambah Penumpang</h3>

                    <form action="proses.php" method="post" enctype="multipart/form-data">
                        
                        <!-- <div class="mb-3 col-5">
                            <label for="id_ticket" class="form-label text-dark">Id Ticket</label>
                            <input type="number" class="form-control" name="id_ticket" id="id_ticket" required>
                        </div> -->
                        <div class="mb-3 col-5">
                            <label for="nama_penumpang" class="form-label text-dark">Nama Penumpang</label>
                            <input type="text" class="form-control" name="nama_penumpang" id="nama_penumpang" required>
                        </div>

                        <div class="mb-3 col-5">
                            <label for="id_ticket" class="form-label text-dark">ID Ticket</label>
                            <input type="text" class="form-control" name="id_ticket" id="id_ticket" required>
                        </div>
                            <button type="submit" name="simpan_penumpang" class="btn btn-primary">Submit</button>
                            <a class="btn btn-danger" href="view_penjualan.php" role="button">Cancel</a>
                        
                    </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>  
    </main>
    
    

    <script src="tiket/js/jquery-3.3.1.min.js"></script>
    <script src="tiket/js/popper.min.js"></script>
    <script src="tiket/js/bootstrap.min.js"></script>
    <script src="tiket/js/main.js"></script>
  </body>
</html>