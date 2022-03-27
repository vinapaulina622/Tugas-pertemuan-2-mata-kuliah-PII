<?php
    include 'model.php';
    $model = new Model();
    $index = 1;
    $result = $model->tampil_data("SELECT * FROM penumpang");
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

    <title>Sidebar #1</title>
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
          <span class="logo-text">Pina</span>
        </div>
          
        <div class="nav-menu">
          <ul>
            <li class="active"><a href="tiket/index.php" class="d-flex align-items-center"><span class="wrap-icon icon-home2 mr-3"></span><span class="menu-text">Home</span></a></li>
            <li><a href="tiket/view_ticket.php" class="d-flex align-items-center"><span class="wrap-icon icon-book mr-3"></span><span class="menu-text">Daftar Ticket</span></a></li>
            <li><a href="view_penjualan.php" class="d-flex align-items-center"><span class="wrap-icon icon-shopping-cart mr-3"></span><span class="menu-text">Ticket</span></a></li>
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
                        
                    </div>
                    <a href="tambah.php" class="btn btn-primary my-5">Tambah Ticket</a>

                    <h3 class="text-dark">Daftar Ticket</h3>
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Id Penumpang</th>
                                <th scope="col">Nama Penumpang</th>
                                <th scope="col">Id Ticket</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <?php
                            $result = $model->tampil_data(); if (!empty($result)) {
                            foreach ($result as $data) : ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $index ?></th>
                                <td scope="row"><?= $data->id_penumpang?></td>
                                <td scope="row"><?= $data->nama_penumpang ?></td>
                                <td scope="row"><?= $data->id_ticket ?></td>
                                <td scope="row">
                                    <a href="edit.php?id_penumpang=<?= $data->id_penumpang ?>" class="btn btn-primary">Edit</a>
                                    <a href="proses.php?id_penumpang=<?= $data->id_penumpang?>" class="btn btn-danger text-white" onclick="return confirm('Apakah Anda Yakin ? ')">Delete</a>
                                </td>
                            </tr>
                            <?php $index++ ?>
                            <?php endforeach; } else { ?>
                            <tr>
                                <td colspan="9">Belum ada data barang.</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        

                    </table>
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