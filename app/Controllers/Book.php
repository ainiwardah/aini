<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Book extends BaseController
{
   public function index()
{

    $data = [
        'title' => 'Data Buku',
    ];

    return view('buku/index', $data);
}

}