<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Accession;

class CollectionController extends Controller
{
    public function getIndex(){

    	$accessions = Accession::orderBy('id')->paginate(20);
    	return view('collections.index')->withAccessions($accessions);
    }

    public function getSingle($accession_no){
    	
    		//fetch from the DB based on slug then grab the first
		$accession = Accession::where('accession_no', '=', $accession_no)->first();
	
		//return the view and pass in the post object
		return view('collections.single')->withAccession($accession);




		
    }
	
}
