<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApproveController extends Controller
{
    //
    function index()
    {
        return view('letters.approve');
    }
}
