<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index() {
        $pelanggan = Pelanggan::get();
        $title = 'Kelola Pelanggan';
        return view('layouts.pelanggan', compact('pelanggan', 'title'));
    }
    //
}
