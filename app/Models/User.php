<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'angkatan_id',
        'jurusan_id',
        'kelas_id',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function angkatans()
    {
        return $this->belongsToMany(Angkatan::class);
    }
    public function jurusans()
    {
        return $this->belongsToMany(Jurusan::class);
    }
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class);
    }
}
