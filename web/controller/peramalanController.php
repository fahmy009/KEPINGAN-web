<?php

class peramalanController
{
    function __construct()
    {
    }

    public function halamanRamal()
    {
        require_once 'web/view/ramalanPenjualan.php';
    }

    public function ramal($awal, $akhir)
    {
        $dataPenjualan = ModelPenjualan::getDataAwalAkhir($awal, $akhir);
        if ($dataPenjualan != 'kosong') {
            $nilaiX = 0;
            $nilaiA = 0;
            $nilaiB = 0;
            $jumlahY = 0;
            $jumlahXY = 0;
            $jumlahXX = 0;
            $dekremen = -1;

            $selisih = count($dataPenjualan) - 5;
            $jumlahHariRamal = count($dataPenjualan) - $selisih;

            $hari = 5;

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
                    'xy' => $i * $item['jumlah'],
                    'xx' => $i * $i
                );
                $i += $dekremen;
                $hari--;
                if ($hari == 0) break;
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
            $totalRamal = 0;
            $totalAktual = 0;
            for ($i = 0; $i < $jumlahHariRamal; $i++) {
                $ramal = $nilaiA + ($nilaiB * $nilaiX);
                $totalRamal += $ramal;
                $totalAktual += $dataPenjualan[$i + 5]['jumlah'];
                $peramalan[] = array(
                    'ramal' => $ramal,
                    'aktual' => $dataPenjualan[$i + 5]['jumlah']
                );
                $nilaiX += $dekremen;
            }

            $diff = abs($totalAktual - $totalRamal);
            $MAD = $diff / $jumlahHariRamal;
            $MSE = ($diff*$diff) / $jumlahHariRamal;
            $MAPE = (($MAD / $totalAktual) / $jumlahHariRamal) * 100;

            echo $MAD;
            echo $MSE;
            echo $MAPE;
        }

//        require_once 'web/view/ramalanPenjualan.php';
    }
}

?>