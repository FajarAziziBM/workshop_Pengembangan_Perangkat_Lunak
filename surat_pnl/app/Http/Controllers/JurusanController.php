<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    //
    function index()
    {
        $jurusans = Jurusan::all();
        // dd($jurusans);
        return view('master.jurusan')->with(compact('jurusans'));
    }
}
