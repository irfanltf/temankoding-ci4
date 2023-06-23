<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function __construct()
    {
        $this->artikel = new ArtikelModel();
    }
    public function index()
    {
        $data = [
            'artikels' => $this->artikel->getAllData()
        ];
        echo view("artikel/index", $data);
    }
}
