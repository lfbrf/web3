<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Immobile extends Model
{
	use Searchable;
	
     protected $fillable=['title',	'state',	'city',	'neighborhood',	'cep',	'type',	'operation_id',	'bedroom'	, 'area',	'value', 'description',	'created_at	updated_at', 'immobile_id','image', 'number'];

 public function searchableAs()
    {
        return 'immobiles_index';
    }
      public function images()
    {
        return $this->hasMany(ImmobileImage::class);
    } 
    public function operation()
    {
        return $this->belongsTo(Operation::class);
    }
   
   
}
  