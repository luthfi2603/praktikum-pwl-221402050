<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model {
    use HasFactory;
    // relationship : fakultas -> jurusan
    public function jurusan(){
        return $this->hasMany(Jurusan::class);
    }

    // relationship : fakultas -> mahasiswa
    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class);
    }
}