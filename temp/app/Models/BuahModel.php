<?php

namespace App\Models;

use CodeIgniter\Model;

class BuahModel extends Model
{
    public function getBuahBuahan()
    {
        $data = [
            [
                "nama_buah" => "Apel",
                "warna_buah" => "Ijo",
                "jenis_tumbuhan" => "Dikotil"
            ],
            [
                "nama_buah" => "Nanas",
                "warna_buah" => "Kuning",
                "jenis_tumbuhan" => "Monokotil"
            ],
            [
                "nama_buah" => "Belimbing",
                "warna_buah" => "Kuning",
                "jenis_tumbuhan" => "Dikotil"
            ],
        ];

        return $data;
    }
}
