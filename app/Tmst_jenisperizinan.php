<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tmst_jenisperizinan extends Model
{
    //
    protected $table = 'Tmst_jenisperizinans';

    function tref_aktifperizinan()
    {
        return $this->belongsTo('App\Tref_aktifperizinan');

    }
}
