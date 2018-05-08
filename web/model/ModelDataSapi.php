<?php

class ModelDataSapi
{
    function __construct()
    {
    }

    public static function getData()
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT id, berat, tanggalLahir, TIMESTAMPDIFF(YEAR,tanggalLahir,CURDATE()) AS umur FROM dataSapi");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'id' => $item['id'],
                    'berat' => $item['berat'],
                    'tanggalLahir' => $item['tanggalLahir'],
                    'umur' => $item['umur']
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
        if ($result > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public function editData($id, $berat, $tanggalLahir)
    {
        $db = DB::getInstance();
        $result = $db->exec("UPDATE dataSapi berat=$berat,tanggalLahir='$tanggalLahir' WHERE id=$id)");
    }

    public static function deleteData($id)
    {
        $db = DB::getInstance();
        $result = $db->exec("DELETE FROM dataSapi WHERE id=$id");
        if ($result > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

}
