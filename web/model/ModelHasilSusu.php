<?php

class ModelHasilSusu
{
    function __construct()
    {
    }

    public static function getData()
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT tanggal, idSapi, jumlah FROM hasilSusu");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'tanggal' => $item['tanggal'],
                    'idSapi' => $item['idSapi'],
                    'jumlah'=> $item['jumlah']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

}
