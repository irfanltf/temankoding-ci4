<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// step 1
use App\Models\BuahModel;

class Buah extends BaseController
{
    //step 2
    protected $buah;

    //step 3
    public function __construct()
    {
        //step 4
        $this->buah = new BuahModel();
    }

    public function index()
    {
        $data['buahbuahan'] = $this->buah->getBuahBuahan();
        echo view("buah/buah_tampilan", $data);
    }
}
