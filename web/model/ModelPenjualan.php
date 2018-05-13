<?php

class ModelPenjualan
{
    function __construct()
    {
    }

    public static function getData()
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT tanggal, jumlahTerjual, id FROM penjualan");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'tanggal' => $item['tanggal'],
                    'jumlah'=> $item['jumlahTerjual'],
                    'id' =>$item['id']
                );
            }
            return $output;
        } else {
            return 'kosong';
        }
    }

    public static function insertData($tanggal, $jumlahTerjual)
    {
        $db = DB::getInstance();
        $result = $db->exec("INSERT INTO penjualan VALUES(NULL, '$tanggal', $jumlahTerjual);");
        if ($result > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public function updateData($id, $tanggal, $jumlahTerjual)
    {
        $db = DB::getInstance();
        echo "UPDATE penjualan SET tanggal='$tanggal', jumlah=$jumlahTerjual WHERE id=$id";
        $result = $db->exec("UPDATE penjualan SET tanggal='$tanggal', jumlahTerjual=$jumlahTerjual WHERE id=$id");
    }

    public static function deleteData($id)
    {
        $db = DB::getInstance();
        $result = $db->exec("DELETE FROM penjualan WHERE id=$id");
        if ($result > 0) {
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

}
