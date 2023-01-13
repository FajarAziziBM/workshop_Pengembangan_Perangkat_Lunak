<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardStatistikSuratController extends Controller
{
    public function index()
    {
        return view('dashboard.statistik-surat.index');
    }
}
