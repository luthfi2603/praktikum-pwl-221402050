<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model {
    use HasFactory;
    // relationship : jurusan -> fakultas
    public function fakultas(){
        return $this->belongsTo(Fakultas::class);
    }

    // relationship : jurusan->mahasiswa
    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class);
    }
}