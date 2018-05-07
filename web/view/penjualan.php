<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Home - KEPINGAN</title>

    <link href="assets/css/material-icons.css" rel="stylesheet">
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="blue" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://localhost/KEPINGAN" class="brand-logo">KEPINGAN</a>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

<!-- konten utama -->
<div>
    <div id="notif"></div>
    <?php $count = 1;
    if ($data != 'kosong') { ?>
        <h1>Penjualan Bulanan</h1>
        <div class="row">
            <div class="col s4">
                <div class="input-field">
                    <select name="bulan" id="bulan">
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
            <div class="col s4">
                <a href="#addData" class="white-text btn modal-trigger">Tambah Data</a>
            </div>
        </div>
        <div class="container">
            <table id="tabel">
                <thead>
                <tr>
                    <td>No</td>
                    <td>Tanggal</td>
                    <td>Jumlah</td>
                </tr>
                </thead>
                <tbody id="isi">
                <?php foreach ($data as $single) { ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $single['Tanggal']; ?></td>
                        <td><?php echo $single['JumlahTerjual']; ?></td>
                    </tr>
                    <?php $count++;
                } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <div class="card orange">
                    <div class="card-content white-text">
                        <span class="card-title">Tidak Ada Data Penjualan</span>
                        <p>Mulailah dengan menambah data</p>
                    </div>
                    <div class="card-action">
                        <a href="#addData" class="white-text modal-trigger">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</div>
<div id="addData" class="modal">
    <div class="modal-content">
        <h4>Tambah Data Penjualan</h4>
        <div class="input-field">
            <label for="jumlah">Jumlah Penjualan</label>
            <input type="number" id="jumlah" name="jumlah">
        </div>
    </div>
    <div class="modal-footer">
        <button class="modal-close waves-effect btn-flat">Batal</button>
        <button type="button" onclick="addData()" class="modal-close waves-effect btn-flat">Selesai</button>
    </div>
</div>

<!--  Scripts-->
<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/materialize.js"></script>
<script>
    var dialog = null;
    document.addEventListener('DOMContentLoaded', function () {
        var options;
        var modal = document.querySelectorAll('.modal');
        var select = document.querySelectorAll('select');
        var instancesModal = M.Modal.init(modal, options);
        var instancesSelect = M.FormSelect.init(select, options);
    });
    (function ($) {
        $(function () {

            $('.sidenav').sidenav();

        }); // end of document ready
    })(jQuery); // end of jQuery name space

    function addData() {
        $.ajax(
            'http://localhost/KEPINGAN/?c=penjualan&f=addData',
            {
                type: "post",
                data: {
                    jumlah: $("#jumlah").val()
                },
                cache: false
            }
        ).done(function (data) {
            if (data == true) {
                //TODO : aksijika pengiriman data berhasil
                notif("SUKSES", "", "green");
            } else {
                //TODO : aksi jika pengiriman data gagal
                notif("GAGAL", "Gagal saat mengirim data", "red");
            }
        }).fail(function () {
            //TODO : aksi juga operasi gagal
        });
    }

    function notif(judul, isi, kelas) {
        $("#notif").append(
            "<div id='isi-notif' class='col s10 offset-s1'>" +
            "<div class='card " + kelas + "'>" +
            "<span class='card-title' id='judul'>" + judul +
            "</span>" +
            "<div class='card-content white-text'>" +
            "<span class='card-title' id='judul'></span>" +
            "<p id='isi'>" + isi +
            "</p>" +
            "</div>" +
            "</div>" +
            "</div>"
        );
    }

    function refreshTabel(JSONData) {
        $.each(JSONData, function (i, item) {
            var $tr = $('<tr>').append(
                $('<td>').text(item.rank),
                $('<td>').text(item.content),
                $('<td>').text(item.UID)
            );.appendTo('#isi');
        });
    }
</script>

</body>
</html>
