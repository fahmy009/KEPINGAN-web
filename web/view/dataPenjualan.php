<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/sticky-footer.css">

    <title>Kepingan</title>
</head>
<body>

<?php include "web/elemen/navbar.php"; ?>

<!-- body -->
<div class="container-fluid">
    <h2>Penjualan Bulanan</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputPenjualan">
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
                <thead>
                <tr>
                    <td><b>NO</b></td>
                    <td><b>Tanggal</b></td>
                    <td><b>Jumlah</b></td>
                    <td><b>Kontrol</b></td>
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
                            <a href="#editPenjualan" onclick="setData(<?php echo $single['id'] ?>)"
                               class="btn btn-info">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="http://localhost/KEPINGAN/?c=dataPenjualanController&f=deleteData&id=<?php echo $single['id']; ?>"
                               class="btn btn-danger">
                                <i class="material-icons">delete</i>
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

<?php include "web/elemen/footer.php"; ?>
<script type="text/javascript">
    function onChange() {
        var e = document.getElementById("bulan");
        var bulan = e.options[e.selectedIndex].value;
        window.location = "http://localhost/KEPINGAN/?c=dataPenjualanController&f=getData&month=" + bulan;
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

<script type="text/javascript">
    function setData(id) {
        var idProduct = id;
        <?php
        $modelSapi = new ModelDataSapi();
        $dataSapi = $modelSapi->getData();
        foreach ($dataSapi as $data) {
            echo "if (idProduct==$data[id]) {\$(\"#beratEdit\").val(\"$data[berat]\");\$(\"#tanggalLahirEdit\").val(\"$data[tanggalLahir]\");\$(\"#id\").val(\"$data[id]\");}";
        };
        ?>
        $("#labelBerat").addClass("active");
        $("#labelTanggal").addClass("active");
    }
</script>
<script src="assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>