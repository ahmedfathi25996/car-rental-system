<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table="comments";
    protected $fillable = [
        'id', 'blog_id', 'user_id', 'comment', 'created_at', 'updated_at',
    ];

    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
