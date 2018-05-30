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
    <h2>Data Sapi</h2>
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
                           class="btn btn-primary" data-toggle="modal" data-target="#editSapi">
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


<?php include "web/elemen/footer.php"; ?>
<?php include "web/elemen/modal.php"; ?>

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
</body>
</html>