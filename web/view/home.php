<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="assets/bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="assets/css/material-icons.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.css">
    <link rel="stylesheet" href="assets/css/open-iconic.css">


    <title>Kepingan</title>
</head>
<body>

<?php include "web/elemen/navbar.php"; ?>

<div class="container-fluid">
  <div class="jumbotron">
    <h1 class="display-4">KEPINGAN</h1>
    <p class="lead">Simulasi Kerja Pabrik Susu Sapi Rembangan adalah sistem yang berisikan pengelolahan data sapi, data susu harian, dan
      data penjualan. Sistem ini juga bisa meramalkan penjualan harian dengan metode Leastsquare</p>
      <hr class="my-4">
      <p>Pabrik Susu Sapi Rembangan</p>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-12 text-center">
          <i class="material-icons" style="font-size:80px">book</i>
            <p class="text-center">Sistem ini dapat mencatat data sapi, data produksi susu harian, dan data penjualan</p>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
            <i class="material-icons" style="font-size:80px">lightbulb_outline</i>
            <p>Dari data yang penjualan yang ada dapat diramalan penjualan selanjutnya dengan metode <i>Leastsquare</i></p>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
          <i class="material-icons" style="font-size:80px">wb_sunny</i>
            <p>Dengan adanya ramalan penjualan diharapkan pabrik dapat mengira ngira berapa distributor yang dibutuhkan untuk menyebarkan susu</p>
        </div>
    </div>
</div>

<?php include "web/elemen/footer.php"; ?>

<script src="assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
