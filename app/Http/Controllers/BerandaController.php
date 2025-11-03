<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function berandaBackend()
    {
        // This will show your dashboard page
        return view('beranda.index', [
            'judul' => 'Beranda',
        ]);
    }
}
