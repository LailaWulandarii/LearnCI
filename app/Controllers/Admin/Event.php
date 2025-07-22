<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Event extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/admin/event');
        echo view('layout/footer');
    }
}
