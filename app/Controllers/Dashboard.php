<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter;

class Dashboard extends BaseController
{
public function index()
{
    $data = [
        'title' => 'Dashboard SIPERPUS-CI',
        'namaAplikasi' => 'SIPERPUS-CI',
        'totalBuku' => 150,
        'totalAnggota' => 75
    ];

    return view('dashboard/index', $data);
}
}