<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'kategori',
        'nama_owner',
        'deskripsi',
        'foto_bukti_sumber',
        'foto_bukti_nama',
        'foto_bukti_tipe'
    ];

    
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
