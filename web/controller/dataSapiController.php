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
        $data = ModelDataSapi::getData();
        require 'web/view/dataSapi.php';
    }

    public function deleteData(){
        $id = $_GET['id'];
        ModelDataSapi::deleteData($id);
        $data = ModelDataSapi::getData();
        require 'web/view/dataSapi.php';
    }
}
