<?php

class peramalanController
{
    function __construct()
    {
    }

    public function ramal()
    {
        $dataPenjualan = ModelPenjualan::getAllData();
        if ($dataPenjualan != 'kosong') {
            $nilaiX = 0;
            $nilaiA = 0;
            $nilaiB = 0;
            $jumlahY = 0;
            $jumlahXY = 0;
            $jumlahXX = 0;
            $dekremen = -1;

//            $penjualan[] = array();

            $hari = count($dataPenjualan);

            if ($hari % 2 == 1) {
                $nilaiX = (($hari - 1) / 2) * -1;
                $dekremen = 1;
            } else if ($hari % 2 == 0) {
                $nilaiX = ($hari - 1) * -1;
                $dekremen = 2;
            }
            $i = $nilaiX;
            foreach ($dataPenjualan as $item) {
                $penjualan[] = array(
                    'x' => $i,
                    'y' => $item['jumlah'],
                    'xy'=> $i * $item['jumlah'],
                    'xx' => $i * $i
                );
                $i += $dekremen;
            }

            foreach ($penjualan as $item) {
                $jumlahY += $item['y'];
                $jumlahXX += $item['xx'];
                $jumlahXY += $item['xy'];
            }
            $nilaiX = $i;

            $nilaiA = $jumlahY / count($penjualan);
            $nilaiB = $jumlahXY / $jumlahXX;

            /**
             * rumus
             * Y = a + bX
             * Y = nilaiA + nilaiB X
             * dimana X adalah variabel
             *
             */
        }

        require_once 'web/view/ramalanPenjualan.php';
    }
}

?>