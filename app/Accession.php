<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accession extends Model
{
    //tell relationship that an accession belongs to a category
    
    public function category(){

    	return $this->belongsTo('App\Category');

    }
}
