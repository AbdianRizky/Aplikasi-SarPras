<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jurusans()
    {
        return $this->belongsToMany(Jurusan::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
