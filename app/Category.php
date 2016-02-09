<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected  $fillable = ['title','subtitle'];

    function article()
    {
        return $this->hasMany('App\Article');
    }
}
