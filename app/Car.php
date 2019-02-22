<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table="cars";
    protected $fillable = [
        'id', 'model', 'price_per_day', 'image','descr','categ', 'created_at', 'updated_at',
    ];

    public function catego()
    {
        return $this->belongsTo('App\Catego','categ'); 
    }

   
}
