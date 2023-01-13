<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id');
    }
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id');
    }
}
