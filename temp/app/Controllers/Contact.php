<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    protected $contact;

    public function __construct()
    {
        // langkah untuk menginisiasikan sebuah class
        $this->contact = new ContactModel();
    }

    public function index()
    {
        $data['contact'] = $this->contact->getContact();
        echo view("contact/index", $data);
    }
}
