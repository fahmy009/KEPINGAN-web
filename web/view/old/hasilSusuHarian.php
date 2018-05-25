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
<!-- Dropdown Suplay -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="http://localhost/KEPINGAN/?c=halaman&f=dataSapi">Data Sapi</a></li>
    <li class="divider"></li>
    <li><a href="#!">Data Pangan Sapi</a></li>
</ul>
<!-- Dropdown Suplay -->
<ul id="dropdown2" class="dropdown-content">
    <li><a href="http://localhost/KEPINGAN/?c=halaman&f=dataPenjualan">Data Penjualan</a></li>
    <li class="divider"></li>
    <li><a href="#!">Ramalan Penjaulan</a></li>
</ul>
<nav class="blue" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://localhost/KEPINGAN" class="brand-logo">KEPINGAN</a>
        <ul class="right hide-on-med-and-down">
            <!-- Dropdown Suplay Trigger -->
            <li>
                <a class="dropdown-trigger" href="#!" data-target="dropdown1">Suplay
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li><a href="http://localhost/KEPINGAN/?c=halaman&f=hasilSusuHarian">Hasil Susu Harian</a></li>
            <!-- Dropdown Penjaulan Trigger -->
            <li>
                <a class="dropdown-trigger" href="#!" data-target="dropdown2">Penjualan
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li><a href="#footer">Tentang</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <!-- <li>
              <a class="dropdown-trigger" href="#!" data-target="dropdown1">Suplay<i class="material-icons right">arrow_drop_down</i>
              </a>
            </li> -->
            <li><a href="#">Hasil Susu Harian</a></li>
            <!-- <li>
              <a class="dropdown-trigger" href="#!" data-target="dropdown2">Penjualan<i class="material-icons right">arrow_drop_down</i>
              </a>
            </li> -->
            <li><a href="#footer">Tentang</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

<!-- Content -->

<div class="container">
    <h1 class="orange-text" style="font-size:20pt">Hasil Susu Sapi Harian</h1>
    <a href="#modalTambah" class="btn waves-effect waves-light blue modal-trigger">Tambah</a>


    <!-- modals Tambah -->
    <div id="modalTambah" class="modal">
        <div class="modal-content">
            <h4>Tambah Data</h4>
            <div class="row">
                <form class="col s12" action="http://localhost/KEPINGAN/?c=dataHasilSusuController&f=addData" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="tanggal" name="tanggal" type="text" class="datepicker validate">
                            <label for="tanggal" class="active">Tanggal</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="idSapi">
                               <option value="" disabled selected>Pilih id Sapi</option>
                               <?php foreach ($dataSapi as $sapi) {
                                    echo "<option value=".$sapi['id'].">".$sapi['id']."</option>";
                               } ?>
                            </select>
                            <label>Id Sapi</label>
                        </div>
                        <div class="input-field col s12">
                          <input id="jumlah" name="jumlah" type="text" class="validate">
                          <label for="jumlah">Jumlah (Lt)</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Simpan
                      <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- modals edit -->
    <div id="modalEdit" class="modal">
        <div class="modal-content">
            <h4>Edit Data</h4>
            <div class="row">
                <form class="col s12" action="http://localhost/KEPINGAN/?c=dataHasilSusuController&f=editData" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="tanggalEdit" name="tanggal" type="text" class="datepicker validate">
                            <label id="labelTanggal" for="tanggalEdit" class="active">Tanggal</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="idSapi">
                               <option value="" disabled selected>Pilih id Sapi</option>
                               <?php foreach ($dataSapi as $sapi) {
                                    echo "<option value=".$sapi['id'].">".$sapi['id']."</option>";
                               } ?>
                            </select>
                            <label>Id Sapi</label>
                        </div>
                        <div class="input-field col s12">
                          <input id="jumlahEdit" name="jumlah" type="text" class="validate">
                          <label id="labelJumlah" for="jumlah">Jumlah (Lt)</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Simpan
                      <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- table -->
    <?php if ($data != 'kosong') { ?>
        <table class="highlight responsive-table">
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
                        <a href="#modalEdit" onclick="setData(<?php echo $single['id']  ?>)" class="btn waves-effect waves-light yellow accent-3 modal-trigger">
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

<footer class="page-footer blue" id="footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Tentang Kami - Kelompok J</h5>
                <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem
                    beatae, delectus impedit labore natus provident reprehenderit sapiente sint soluta, tempora, vero
                    voluptatibus voluptatum? Ea fugiat magnam provident soluta voluptates.</p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Support</h5>
                <ul>
                    <li><a class="white-text" href=""></a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Media</h5>
                <ul>
                    <li><a class="white-text" href=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy;<a class="white-text">KEPINGAN</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/init.js"></script>

<script type="text/javascript">
    function setData(id) {
        var idProduct = id;
        <?php
        $ModelHasilSusu = new ModelHasilSusu();
        $ModelHasilSusu = $ModelHasilSusu->getData();
        foreach ($ModelHasilSusu as $data) {
            echo "if (idProduct==$data[id]) {\$(\"#tanggalEdit\").val(\"$data[tanggal]\");\$(\"#jumlahEdit\").val(\"$data[jumlah]\");\$(\"#id\").val(\"$data[id]\");}";
        };
        ?>
        $("#labelTanggal").addClass("active");
        $("#labelJumlah").addClass("active");
    }
</script>

</body>
</html>
