<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Home|Eventku'];
        return view('pages/admin/dashboard', $data);
    }
}
