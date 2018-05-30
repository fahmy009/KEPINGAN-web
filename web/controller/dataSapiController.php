<?php

class dataSapiController
{
    function __construct()
    {
    }

    public function addData()
    {
        $berat = $_POST['berat'];
        $tanggalLahir = $_POST['tanggalLahir'];
        $hasil = ModelDataSapi::insertData($berat,$tanggalLahir);
        header('Location: http://localhost/KEPINGAN/?c=halaman&f=dataSapi');
    }

    public function editData()
    {
        $id = $_POST['idSapiEdit'];
        $berat = $_POST['beratEdit'];
        $tanggalLahir = $_POST['tanggalEdit'];
        $hasil = ModelDataSapi::updateData($id, $berat, $tanggalLahir);
        header('Location: http://localhost/KEPINGAN/?c=halaman&f=dataSapi');
    }

    public function deleteData(){
        $id = $_GET['id'];
        $hasil = ModelDataSapi::deleteData($id);
        header('Location: http://localhost/KEPINGAN/?c=halaman&f=dataSapi');

    }
}
