<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('admin/layouts/header');
        echo view('admin/layouts/navbar');
        echo view('admin/layouts/sidebar');
        echo view('admin/dashboard');
        echo view('admin/layouts/footer');
    }
}
