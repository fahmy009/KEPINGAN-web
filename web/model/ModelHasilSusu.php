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
                    'jumlah' => $item['jumlah']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function insertData($berat, $tanggalLahir)
    {
        $db = DB::getInstance();
        $result = $db->exec("INSERT INTO dataSapi VALUES(NULL,$berat,'$tanggalLahir')");
    }

    public static function deleteData($id)
    {
        $db = DB::getInstance();
        $result = $db->exec("DELETE FROM dataSapi WHERE id=$id");
    }

}
