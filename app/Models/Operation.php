<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable=['name'];

    public function immobiles()
    {
//        return $this->hasMany('App\Product');
        return $this->hasMany(Immobile::class);
    } 
}
