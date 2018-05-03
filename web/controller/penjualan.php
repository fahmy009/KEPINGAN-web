<?php

class penjualan
{
    function __construct()
    {
    }

    public function addData()
    {
        $jumlah = $_POST['jumlah'];
        $hasil = Peternakan::addDataPenjualan($jumlah);
        echo $hasil;
    }
}