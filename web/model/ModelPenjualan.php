<?php

class ModelPenjualan
{
    function __construct()
    {
    }

    public static function getData()
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT tanggal, jumlahTerjual FROM penjualan");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'tanggal' => $item['tanggal'],
                    'jumlah'=> $item['jumlahTerjual']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

}
