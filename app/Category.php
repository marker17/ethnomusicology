<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//tell laravel to use the categories model
    protected $table = 'categories';
    

    //this shows relationship that a category has many accessions
    
    public function posts(){

    	return $this->hasMany('App\Accession');
    }
}
