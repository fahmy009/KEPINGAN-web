<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halaman&f=dataSapi">Data Sapi</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halaman&f=hasilSusuHarian">Hasil Susu Harian</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halaman&f=dataPenjualan">Data Penjualan Harian</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=peramalanController&f=ramal">Ramalan Penjualan</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halaman&f=tentang">Tentang</a>
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
                <span class="section-heading-lower">Ramalan Penjualan</span>
              </h2>
              <hr>
              <?php $count = 1;
              if ($dataPenjualan != 'kosong') {
                  $totalPenjualan = 0;
                  $totalRamal = 0; ?>
                  <div class="table-responsive">
                      <h3>Tabel Distribusi Penjualan</h3>
                      <div class="row">
                          <div class="col-sm-4 offset-1">
                              <table id="tabelDistribusi" class="table text-center table-hover table-striped">
                                  <thead class="thead-dark">
                                  <tr class="table-primary">
                                      <th><b>NO</b></th>
                                      <th><b>Tanggal</b></th>
                                      <th><b>Jumlah</b></th>
                                  </tr>
                                  </thead>
                                  <tbody id="isi">
                                  <?php foreach ($dataPenjualan as $single) {
                                      ?>
                                      <tr>
                                          <td><?php echo $count; ?></td>
                                          <td><?php echo $single['tanggal']; ?></td>
                                          <td><?php echo $single['jumlah']; ?></td>
                                      </tr>
                                      <?php
                                      $count++;
                                      $totalPenjualan += $single['jumlah'];
                                  } ?>
                                  </tbody>
                              </table>
                          </div>
                          <div class="col-sm-6">
                              <canvas id="grafik"></canvas>
                          </div>
                      </div>
                      <hr>
                      <h3>Tabel Perhitungan</h3>
                      <div class="col-sm-8 offset-sm-2">
                          <table id="tabelPerhitungan" class="table table-hover text-center">
                              <thead class="thead-dark">
                              <tr>
                                  <th>hari ke</th>
                                  <th>Penjualan (Y)</th>
                                  <th>X</th>
                                  <th>XY</th>
                                  <th>XX</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                              $a = 1;
                              foreach ($penjualan as $item) { ?>
                                  <tr>
                                      <td><?php echo $a; ?></td>
                                      <td><?php echo $item['y']; ?></td>
                                      <td><?php echo $item['x']; ?></td>
                                      <td><?php echo $item['xy']; ?></td>
                                      <td><?php echo $item['xx']; ?></td>
                                  </tr>
                                  <?php
                                  $a++;
                              } ?>
                              </tbody>
                          </table>
                      </div>
                      <hr>
                      <h3>Tabel Peramalan</h3>
                      <div class="col-sm-8 offset-sm-2">
                          <table id="tabelPeramalan" class="table table-hover text-center">
                              <thead class="thead-dark">
                              <tr>
                                  <th>Hari Ke</th>
                                  <th>Jumlah</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php for ($b = 0; $b < count($penjualan); $b++) { ?>
                                  <tr>
                                      <td><?php echo $a; ?></td>
                                      <?php
                                      $ramal = $nilaiA + ($nilaiB * $nilaiX);
                                      $totalRamal += $ramal;
                                      ?>
                                      <td><?php echo $ramal; ?></td>
                                  </tr>
                                  <?php
                                  $a++;
                                  $nilaiX += $dekremen;
                              } ?>
                              </tbody>
                          </table>
                      </div>
                      <hr>
                      <h3>Presentase Akurasi</h3>
                      <div class="col-sm-8 offset-sm-2">
                          <h4>POA = (&sum;Penjualan : &sum;Peramalan) * 100%</h4>
                          <h4>POA = <?php
                              $presentase = ($totalPenjualan / $totalRamal) * 100;
                              echo "($totalPenjualan : $totalRamal) * 100% = $presentase" ?>
                          </h4>
                      </div>
                      <br>
                      <br>
                      <br>
                  </div>
              <?php } else { ?>
                  <div class="col-sm-5">
                      <h1>TIDAK ADA DATA</h1>
                  </div>
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

    <script src="assets/chartJS/chart.bundle.js"></script>
    <script>
        var ctx = document.getElementById('grafik').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
                datasets: [{
                    label: "Data Penjualan",
                    backgroundColor: 'rgb(255,152,0)',
                    borderColor: 'rgb(109,76,65)',
                    data: [0, 10, 5, 2, 20, 30, 45],
                }]
            },

            // Configuration options go here
            options: {}
        });
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
