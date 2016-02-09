<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tref_pilihanperusahaan extends Model
{
    //
    protected $fillable = ['name', 'value', 'tref_dataperusahaan_id'];

    function dataperusahaan()
    {
        return $this->belongsTo('App\Tref_dataperusahaan');
    }
}
