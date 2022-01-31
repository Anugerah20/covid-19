<?php

$link = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($link, true);

//var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap 5 -->
   <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />

   <!-- Custom CSS -->
   <link rel="stylesheet" href="../src/css/custom.css" />

   <!-- Icons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

   <title>Data Corona Indonesia</title>

</head>

<body>
   <!-- START: Navigasi -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
         <a href="#" class="navbar-brand">
            <i class="fas fa-virus"></i>
         </a>
         <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="navbar-nav text-center ms-auto px-3">
               <li class="nav-item">
                  <a href="data-corona.php" class="nav-link" aria-current="page">beranda</a>
               </li>
               <li class="nav-item">
                  <a href="tentang-kami.php" class="nav-link">tentang kami</a>
               </li>
               <li class="nav-item">
                  <a href="kontak.php" class="nav-link">kontak</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- END: Navigasi -->


   <!-- START: Deskripsi -->
   <div class="text-center mt-deskripsi">
      <h2>
         data sebaran <span class="bold-deskripsi">corona</span>
      </h2>
      <p class="mt-text">
         jumlah corona negara indonesia <img src="../img/bendera-indonesia.png" alt="indonesia" height="30" />
      </p>
   </div>
   <!-- END: Deskripsi -->

   <!-- START: Card -->
   <div class="container mt-5">
      <div class="row">

         <div class="col-md-3 py-2">
            <div class="card shadow rounded bg-danger text-white">
               <div class="card-body">
                  <h3 class="card-title text-center"><i class="fas fa-frown"></i> jumlah positif</h3>
                  <h4 class="card-text  text-center"><?= $data[0]['positif']; ?></h4>
               </div>
            </div>
         </div>

         <div class="col-md-3 py-2">
            <div class="card shadow rounded bg-success text-white">
               <div class="card-body">
                  <h3 class="card-title text-center"><i class="fas fa-smile-beam"></i> jumlah sembuh</h3>
                  <h4 class="card-text  text-center"><?= $data[0]['sembuh']; ?></h4>
               </div>
            </div>
         </div>

         <div class="col-md-3 py-2">
            <div class="card shadow rounded bg-warning text-white">
               <div class="card-body">
                  <h3 class="card-title text-center"><i class="fas fa-sad-cry"></i> jumlah meninggal</h3>
                  <h4 class="card-text  text-center"><?= $data[0]['meninggal']; ?></h4>
               </div>
            </div>
         </div>

         <div class="col-md-3 py-2">
            <div class="card shadow rounded bg-secondary text-white">
               <div class="card-body">
                  <h3 class="card-title text-center"><i class="fas fa-frown-open"></i> jumlah dirawat</h3>
                  <h4 class="card-text  text-center"><?= $data[0]['dirawat']; ?></h4>
               </div>
            </div>
         </div>

      </div>
   </div>
   <!-- END: Card -->

   <!-- JavaScript Bootstrap 5 -->
   <script src="../bootstrap/js/popper.min.js"></script>
   <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>