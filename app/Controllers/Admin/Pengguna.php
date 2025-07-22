<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pengguna extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/admin/pengguna');
        echo view('layout/footer');
    }
}
