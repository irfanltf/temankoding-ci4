<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{


    public function getContact()
    {
        $contact = [
            [
                "nama"  => "irfan",
                "nohp"  => "085273434645"
            ],
            [
                "nama"  => "ropik",
                "nohp"  => "085956565656"
            ],
            [
                "nama"  => "indah",
                "nohp"  => "085656454654"
            ]
        ];
        return $contact;
    }
}
