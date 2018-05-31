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
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halamanController&f=dataSapi">Data Sapi</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://localhost/KEPINGAN/?c=halamanController&f=hasilSusuHarian">Hasil Susu Harian</a>
            </li>
            <li class="nav-item active px-lg-4">
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
                <span class="section-heading-lower">Data Penjualan Harian</span>
              </h2>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPenjualan">
                  Tambah
              </button>
              <hr>
              <div class="row">
                  <div class="col-sm-3">
                      <div class="form-group">
                          <label for="bulan">Bulan</label>
                          <select name="bulan" class="form-control" id="bulan" onchange="onChange()">
                              <option value="01">Januari</option>
                              <option value="02">Februari</option>
                              <option value="03">Maret</option>
                              <option value="04">April</option>
                              <option value="05">Mei</option>
                              <option value="06">Juni</option>
                              <option value="07">Juli</option>
                              <option value="08">Agustus</option>
                              <option value="09">September</option>
                              <option value="10">Oktober</option>
                              <option value="11">November</option>
                              <option value="12">Desember</option>
                          </select>
                      </div>
                  </div>
              </div>
              <?php $count = 1;
              if ($data != 'kosong') { ?>
                  <div class="table-responsive">
                      <br>
                      <table id="tabel" class="table text-center">
                          <thead class="thead-dark">
                          <tr>
                            <th>NO</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Kontrol</th>
                          </tr>
                          </thead>
                          <tbody id="isi">
                          <?php foreach ($data as $single) {
                              ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  <td><?php echo $single['tanggal']; ?></td>
                                  <td><?php echo $single['jumlah']; ?></td>
                                  <td>
                                      <button type="button" class="btn btn-primary" data-toggle="modal"
                                              data-target="#editPenjualan" onclick="setData(<?php echo $single['id'] ?>)">
                                          Ubah
                                      </button>
                                      <a href="http://localhost/KEPINGAN/?c=dataPenjualanController&f=deleteData&id=<?php echo $single['id']; ?>"
                                         class="btn btn-danger">
                                          Hapus
                                      </a>
                                  </td>
                              </tr>
                              <?php $count++;
                          } ?>
                          </tbody>
                      </table>
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

    <script type="text/javascript">
        function onChange() {
            var e = document.getElementById("bulan");
            var bulan = e.options[e.selectedIndex].value;
            window.location = "http://localhost/KEPINGAN/?c=dataPenjualanController&f=getData&month=" + bulan;
        }

        function setData(id) {
            var idProduct = id;
            <?php
            if ($data != 'kosong') {
            foreach ($data as $dat) { ?>
            if (idProduct == <?php echo $dat['id']; ?>) {
                $("#penjualanTanggalEdit").val("<?php echo $dat['tanggal']; ?>");
                $("#jumlahTerjualEdit").val(<?php echo $dat['jumlah']; ?>);
                $("#idPenjualanEdit").val(<?php echo $dat['id']; ?>);
            }
            <?php }
            }; ?>
        }

        var month = <?php
            if (!isset($_GET['month'])) {
                echo "'01'";
            } else {
                echo "'$_GET[month]'";
            }
            ?>;
        var e = document.getElementById("bulan").value = month;

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
