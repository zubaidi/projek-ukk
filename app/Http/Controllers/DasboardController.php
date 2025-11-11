<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'jumlahKantin' => 5,
            'totalPendapatan' => 2500000,
            'menuTerlaris' => 'Es Teh Manis',
            'jumlahPemilik' => 3
        ]);
    }
}
