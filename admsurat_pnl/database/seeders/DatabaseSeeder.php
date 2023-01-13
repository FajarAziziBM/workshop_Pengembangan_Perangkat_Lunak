<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TrTopUp;
use App\Models\Transaksi;
use App\Models\TrTransfer;
use App\Models\RiwayatSaldo;
use App\Models\JenisTransaksi;
use App\Models\rekening;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'testuser@example.com',
            'username' => 'admin',
            'password' => Hash::make(123123123),
            'role' => '1',
        ]);

    }
}
