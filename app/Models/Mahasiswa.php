<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model{
    use HasFactory;
    // relationship : mahasiswa->fakultas
    public function fakultas(){
        return $this->belongsTo(Fakultas::class);
    }

    // relationship : mahasiswa->jurusan
    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
}