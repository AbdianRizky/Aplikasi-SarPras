<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function angkatans()
    {
        return $this->belongsToMany(Angkatan::class);
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}