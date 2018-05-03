<?php

class Peternakan
{
    function __construct()
    {
    }

    public static function getDataPenjualan($bulan = '01')
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT Tanggal, JumlahTerjual FROM penjualan WHERE MONTH(Tanggal) = '$bulan'");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'Tanggal' => $item['Tanggal'],
                    'JumlahTerjual' => $item['JumlahTerjual']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function addDataPenjualan($jumlah)
    {
        $db = DB::getInstance();
        $result = $db->exec("INSERT INTO penjualan(Tanggal, JumlahTerjual) VALUES(CURDATE(), $jumlah)");
        if ($result > 0) {
            return true;
        } else {
            return false;
        }
    }
}