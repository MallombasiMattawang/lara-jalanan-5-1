<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tref_aktifperizinan extends Model
{
    //
    protected $table = 'Tref_aktifperizinans';
    function tmst_jenisperizinan()
    {
        return $this->hasMany('App\Tmst_jenisperizinan');
    }
}
