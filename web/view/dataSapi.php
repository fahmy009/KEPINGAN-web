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
<li><a href="#!">Data Penjualan</a></li>
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
            <li><a href="#">Hasil Susu Harian</a></li>
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
  <h1 class="orange-text" style="font-size:20pt">Data Sapi</h1>
  <a href="" class="btn waves-effect waves-light blue">Tambah</a>
  <a href="" class="btn waves-effect waves-light yellow accent-3">Edit</a>
  <a href="" class="btn waves-effect waves-light red accent-3">Hapus</a>
  <table class="highlight responsive-table">
    <thead>
      <tr>
        <th>id Sapi</th>
        <th>Berat (kg)</th>
        <th>Tanggal Lahir</th>
        <th>Umur (tahun)</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $single) { ?>
          <tr>
              <td><?php echo $single['id']; ?></td>
              <td><?php echo $single['berat']; ?></td>
              <td><?php echo $single['tanggalLahir']; ?></td>
              <td><?php echo $single['umur']; ?></td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
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

</body>
</html>
