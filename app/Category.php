<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


	protected $fillable = [
       'category_name',
       'category_description',

    ];

	//tell laravel to use the categories model
    protected $table = 'categories';

    public $timestamps = false;

    

    //this shows relationship that a category has many accessions
    
    public function accessions(){

    	return $this->hasMany('App\Accession');
    }
}
