<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/sticky-footer.css">

    <title>Hasil Susu Harian</title>
</head>
<body>

<?php include "web/elemen/navbar.php"; ?>

<!-- body -->
<div class="container-fluid">
    <h2>Hasil Susu Harian</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahSusuHarian">
        Tambah
    </button>
    <hr>
    <?php if ($data != 'kosong') { ?>
        <table class="table table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <th>Tanggal</th>
                <th>id Sapi</th>
                <th>Jumlah (Lt)</th>
                <th>Kontrol</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $single) { ?>
                <tr>
                    <td><?php echo $single['id']; ?></td>
                    <td><?php echo $single['tanggal']; ?></td>
                    <td><?php echo $single['idSapi']; ?></td>
                    <td><?php echo $single['jumlah']; ?></td>
                    <td>
                        <a href="#editSusuHarian" onclick="setData(<?php echo $single['id']  ?>)" class="btn waves-effect waves-light yellow accent-3 modal-trigger">
                            <i class="material-icons">edit</i>
                        </a>
                        <a href="http://localhost/KEPINGAN/?c=dataHasilSusuController&f=deleteData&id=<?php echo $single['id'] ?>" class="btn waves-effect waves-light red accent-3">
                            <i class="material-icons">delete</i>
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

<script src="assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>