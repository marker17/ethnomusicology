<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accession extends Model
{

	protected $fillable = [
        'title', 'category_id', 'author', 'groupcountry', 'year', 'description', 'notes',
        'picture', 'photodate', 'photographer', 'relatedimages', 'originalformat_type',
        'originalformat_description', 'eformat_type', 'eformat_description', 
        'original_location', 'elocation', 'provenance_notes', 'instrumentcatalog_no',
        'instrumentcategory_no', 'instrument_localname', 'instrument_englishname',
        'musicscore_catalogername', 'musicscore_instrumentation', 'musicscore_performances',
        'musicscore_category', 'length', 'width', 'height', 'diameter', 'no_of_pages',
        'original', 'repo', 'full_score',



    ];






    //tell relationship that an accession belongs to a category
    
    public function category(){

    	return $this->belongsTo('App\Category');

    }


}
