<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    public function index()
    {
        return view('petugas.index');
    }
}
