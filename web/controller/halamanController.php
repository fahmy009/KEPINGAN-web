<?php

class halamanController
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
    public function hasilSusuHarian()
    {
        $data = ModelHasilSusu::getData();
        $dataSapi = ModelDataSapi::getData();
        require 'web/view/hasilSusuHarian.php';
    }
    public function dataPenjualan()
    {
        $data = ModelPenjualan::getData(01);
        require 'web/view/dataPenjualan.php';
    }
    public function tentang()
    {
      require 'web/view/tentang.php';
    }
}
