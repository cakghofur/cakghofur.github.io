<?php

namespace App\Controllers;

class Contoh extends BaseController
{
    public function index()
    {
        echo "Selamat Datang di controller contoh index.";
    }

    public function about($nama = '', $berat = 0)
    {
        echo "Selamat Datang $nama, berat saya $berat kg.";
    }

    //--------------------------------------------------------------------

}
