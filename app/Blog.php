<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blog";
    protected $fillable = [
        'id', 'title', 'body', 'likes', 'comments', 'created_at', 'updated_at',
    ];
    public function comment()
    {
        return $this->belongsTo('App\comment','blog_id');
    }
   
}
