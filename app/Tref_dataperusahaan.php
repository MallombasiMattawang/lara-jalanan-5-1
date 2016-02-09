<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tref_dataperusahaan extends Model
{
    //
    //protected $table = 'tref_dataperusahaans';
    protected  $fillable = ['name','value'];

    function pilihanperusahaan()
    {
        return $this->hasMany('App\Tref_pilihanperusahaan');
    }
}
