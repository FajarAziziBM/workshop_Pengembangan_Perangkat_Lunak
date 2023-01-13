<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardProfileController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.profile.index',
            [
                'jurusans' => Jurusan::all()
            ],
            [
                'prodis' => Prodi::all()
            ],
            [
                'mahasiswas' => Mahasiswa::all()
            ],
            [
                'users' => User::all()
            ],
        );
    }
}
