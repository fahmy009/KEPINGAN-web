<?php

class ModelHasilSusu
{
    function __construct()
    {
    }

    public static function getData()
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT * FROM hasilSusu;");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'id' => $item['id'],
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

    public static function insertData($tanggal, $idSapi, $jumlah)
    {
        $db = DB::getInstance();
        echo "INSERT INTO hasilsusu VALUES(NULL, '$tanggal', $idSapi, $jumlah);";
        $result = $db->exec("INSERT INTO hasilSusu VALUES(NULL, '$tanggal', $idSapi, $jumlah);");
        if ($result > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public function updateData($id, $idSapi, $tanggal, $jumlah)
    {
        $db = DB::getInstance();
        $result = $db->exec("UPDATE hasilSusu SET idSapi=$idSapi,tanggal='$tanggal', jumlah=$jumlah WHERE id=$id");
    }

    public static function deleteData($id)
    {
        $db = DB::getInstance();
        $result = $db->exec("DELETE FROM hasilSusu WHERE id=$id;");
        if ($result > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

}
