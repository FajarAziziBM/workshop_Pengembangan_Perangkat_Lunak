<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    function index()
    {
        $prodis = Prodi::all();
        // dd($prodis);
        return view('master.prodi')->with(compact('prodis'));
    }
}
