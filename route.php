<?php
function call($controller, $action)
{
    require_once('web/controller/' . $controller . '.php');

    switch ($controller) {
        case 'halaman':
            require_once 'web/model/Peternakan.php';
            require_once 'web/model/ModelDataSapi.php';
            require_once 'web/model/ModelHasilSusu.php';
            require_once 'web/model/ModelPenjualan.php';
            $controller = new halaman();
            break;
        case 'penjualan':
            require_once 'web/model/Peternakan.php';
            $controller = new penjualan();
            break;
        default:
            //TODO: buat aksi bila jalur yang dituju tidak tersedia
            break;
    }
    $controller->{$action}();
}

call($controller, $action);

?>
