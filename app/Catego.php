<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catego extends Model
{
    protected $table="categories";
    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at',
    ];

    public function cars()
    {
        return $this->hasMany('App\Car');
    }
}
