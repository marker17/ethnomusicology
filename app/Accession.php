<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Accession extends Model
{
    

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * 
     */
    protected $dates = ['deleted_at'];

	

    //tell relationship that an accession belongs to a category
    
    public function category(){

    	return $this->belongsTo('App\Category');

    }


}
