<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    //
    function index()
    {
        return view('letters.surat-keluar');
    }
}
