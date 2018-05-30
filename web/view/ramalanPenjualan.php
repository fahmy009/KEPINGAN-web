<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="assets/pickadate/themes/classic.css">

    <title>Kepingan</title>
</head>
<body>

<?php include "web/elemen/navbar.php"; ?>

<!-- body -->
<div class="container-fluid">
    <h2>Ramalan Penjualan</h2>
    <br>
    <form action="http://localhost/KEPINGAN/?c=peramalanController&f=ramal" method="post">
        <div class="row">
            <div class="offset-sm-1 col-sm-4">
                <label for="awal">Tanggal Awal</label>
            </div>
            <div class="col-sm-4">
                <label for="akhir">Tanggal Akhir</label>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-4">
                <input type="date" class="form-control" id="awal" name="tanggalAwal" required>
            </div>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="akhir" name="tanggalAkhir" required>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-success">Cek</button>
            </div>
        </div>
    </form>
    <hr>
    <?php
    if (isset($_GET['pilih'])) { ?>

    <?php } else { ?>
        <?php $count = 1;
        if ($dataPenjualan != 'kosong') {
            $totalPenjualan = 0;
            $totalRamal = 0; ?>
            <div>
                <h3>Tabel Distribusi Penjualan</h3>
                <hr>
                <div class="row">
                    <div class="col-sm-4 offset-1">
                        <table id="tabelDistribusi" class="table text-center table-hover table-striped">
                            <thead>
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
                        <thead>
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
                        <thead>
                        <tr>
                            <th>Hari Ke</th>
                            <th>Nilai Peramalan</th>
                            <th>Nilai Aktual</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($peramalan as $item) { ?>
                            <tr>
                                <td><?php echo $a; ?></td>
                                <td><?php echo $item['ramal']; ?></td>
                                <td><?php echo $item['aktual'] ?></td>
                            </tr>
                            <?php
                            $a++;
                        } ?>
                        </tbody>
                    </table>
                </div>
                <hr>
                <h3>Presentase Akurasi</h3>
                <div class="col-sm-8 offset-sm-2">
                    <h4>Mean Absolute </h4>

<!--                    <h4>POA = (&sum;Penjualan : &sum;Peramalan) * 100%</h4>-->
<!--                    <h4>POA = --><?php
//                        $presentase = ($totalPenjualan / $totalRamal) * 100;
//                        echo "($totalPenjualan : $totalRamal) * 100% = $presentase" ?>
<!--                    </h4>-->
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
    <?php } ?>
</div>


<?php include "web/elemen/footer.php"; ?>
<?php include "web/elemen/modal.php"; ?>

<script src="assets/chartJS/chart.bundle.js"></script>
<script src="assets/pickadate/picker.js"></script>

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
                backgroundColor: 'rgb(128,216,255)',
                borderColor: 'rgb(248,187,208)',
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
</body>
</html>