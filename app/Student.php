<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'jurusan',
        'fakultas',
        'foto_nim_sumber',
        'foto_nim_nama',
        'foto_nim_tipe'
    ];

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
