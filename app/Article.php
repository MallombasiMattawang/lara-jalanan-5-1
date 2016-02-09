<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title',
                            'subtitle',
                            'slug',
                            'content',
                            'meta_description',
                            'video',
                            'url',
                            'image',
                            'category_id',
                            'created_by'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function ownedBy(\App\User $user)
    {
        return $this->created_by == $user->id;
    }
}
