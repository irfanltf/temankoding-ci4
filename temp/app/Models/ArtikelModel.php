<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{

    protected $table            = 'artikel';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [];

    public function getArtikel()
    {
        $artikel = [
            [
                'id' => 1,
                'judul' => 'Contoh Artikel 1',
                'konten' => 'Ini adalah konten dari artikel 1.',
                'tanggal' => '2022-01-01'
            ],
            [
                'id' => 2,
                'judul' => 'Contoh Artikel 2',
                'konten' => 'Ini adalah konten dari artikel 2.',
                'tanggal' => '2022-02-02'
            ],
            [
                'id' => 3,
                'judul' => 'Contoh Artikel 3',
                'konten' => 'Ini adalah konten dari artikel 3.',
                'tanggal' => '2022-03-03'
            ]
        ];
    }

    public function getAllData()
    {
        return $this->findAll();
    }
    public function getDataByID($id)
    {
        return $this->find($id);
    }
    public function getDataBy($data)
    {
        return  $this->where('judul', $data)->findAll();
    }
    public function getOrderBy()
    {
        return  $this->orderBy('tanggal', 'desc')->findAll();
    }
    public function getLimit()
    {
        return $this->limit(10)->findAll();
    }

    public function getArtikelWithKategori()
    {
        $builder = $this->db->table('artikel');
        $builder->select('artikel.*, kategori.nama as nama_kategori');
        $builder->join('kategori', 'kategori.id = artikel.kategori_id', 'left');
        $query = $builder->get();

        return $query->getResult();
    }
}
