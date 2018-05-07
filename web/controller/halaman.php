<?php

class halaman
{
    function __construct()
    {
    }

    public function home()
    {
        require 'web/view/home.php';
    }

    public function penjualan()
    {
        $data = Peternakan::getDataPenjualan(date('m'));
        require 'web/view/penjualan.php';
    }
    public function dataSapi()
    {
        $data = ModelDataSapi::getData();
        require 'web/view/dataSapi.php';
    }
}
