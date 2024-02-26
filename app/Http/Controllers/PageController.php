<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return ('Selamat datang');
    }

    public function about()
    {
        return ('MUHAMMAD IQBAL MUHTARAM & 2241720265');
    }

    public function articles($id)
    {
        return ('Halaman artikel dengan id ' . $id);
    }
}
