<?php

namespace App\Controllers;

class App extends BaseController
{
    public function index()
    {
        echo view("app/index");
    }
}
