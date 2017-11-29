<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImmobileImage extends Model
{
	
    protected $guarded=[];
    public function article() {
    	return $this->belongsTo(Immobile::class); //  or whatever your namespace is
	}
}