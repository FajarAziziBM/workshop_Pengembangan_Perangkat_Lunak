<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    //
    function index()
    {
        return view('letters.surat-masuk');
    }
}
