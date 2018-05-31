<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Sapi</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Simulasi Kerja Pabrik Susu Sapi Rembangan</span>
      <span class="site-heading-lower">KEPINGAN</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halamanController&f=dataSapi">Data Sapi</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halamanController&f=hasilSusuHarian">Hasil Susu Harian</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halamanController&f=dataPenjualan">Data Penjualan Harian</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=peramalanController&f=ramal">Ramalan Penjualan</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halamanController&f=tentang">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php include "web/elemen/modal.php"; ?>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">KEPINGAN</span>
                <span class="section-heading-lower">Data Sapi</span>
              </h2>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahSapi">
                  Tambah
              </button>
              <hr>
              <?php if ($data != 'kosong') { ?>
                  <table class="table table-hover">
                      <thead class="thead-dark">
                      <tr>
                          <th>id Sapi</th>
                          <th>Berat (kg)</th>
                          <th>Tanggal Lahir</th>
                          <th>Umur (tahun)</th>
                          <th>Kontrol</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($data as $single) { ?>
                          <tr>
                              <td><?php echo $single['id']; ?></td>
                              <td><?php echo $single['berat']; ?></td>
                              <td><?php echo $single['tanggalLahir']; ?></td>
                              <td><?php echo $single['umur']; ?></td>
                              <td>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editSapi" onclick="setData(<?php echo $single['id']; ?>)">
                                      Ubah
                                  </button>
                                  <a href="http://localhost/KEPINGAN/?c=dataSapiController&f=deleteData&id=<?php echo $single['id']; ?>"
                                     class="btn btn-danger" data-toggle="modal" data-target="#editSapi">
                                      Hapus
                                  </a>
                              </td>
                          </tr>
                      <?php } ?>
                      </tbody>
                  </table>
              <?php } else { ?>
                  <blockquote>
                      <h3>Tidak Ada Data</h3>
                  </blockquote>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; KEPINGAN 2018</p>
      </div>
    </footer>

    <script type="text/javascript">
        function setData(id) {
            var idProduct = id;
            <?php
            if ($data != 'kosong') {
            foreach ($data as $dat) { ?>
            if (idProduct == <?php echo $dat['id']; ?>) {
                $("#beratEdit").val("<?php echo $dat['berat']; ?>");
                $("#tanggalEdit").val("<?php echo $dat['tanggalLahir']; ?>");
                $("#idSapiEdit").val("<?php echo $dat['id']; ?>");
            }
            <?php
            }
            }; ?>
        }
    </script>
    <script src="assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
