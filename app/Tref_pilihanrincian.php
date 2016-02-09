<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tref_pilihanrincian extends Model
{
    //
    protected $fillable = ['name', 'value', 'tref_rincianizin_id'];

    function rincianizin()
    {
        return $this->belongsTo('App\Tref_rincianizin');
    }
}
