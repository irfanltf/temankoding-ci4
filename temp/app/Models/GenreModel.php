<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table            = 'genre';
    protected $primarykey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowFields      = [];

    public function getAllData()
    {
        return $this->findAll();
    }
}
