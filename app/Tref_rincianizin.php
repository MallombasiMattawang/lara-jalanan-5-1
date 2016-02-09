<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tref_rincianizin extends Model
{
    //
    //protected $table = 'tref_dataperusahaans';
    protected  $fillable = ['name','value'];

    function pilihanrincian()
    {
        return $this->hasMany('App\Tref_pilihanrincian');
    }
}
