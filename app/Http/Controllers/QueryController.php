<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Accession;

use App\Category;

use DB;;

class QueryController extends Controller
{
    


    public function search(Request $request){

    	$categories = Category::all();


    	$find = $request->input('find'); 
	   

        $accessions = DB::table('accessions')
        	->leftJoin('categories', 'accessions.category_id', '=', 'categories.id')
        	->where('category_name','LIKE','%'.$find.'%')
        	->get();


        return view('queries.index')->withAccessions($accessions)->withCategories($categories);



    /*
        $accessions = DB::table('accessions')
            ->join('categories', 'accessions.category_id', '=', 'categories.id')
            ->where('category_name','LIKE','%'.$search.'%')->get();

            return view('accessions.index')->withAccessions($accessions)->withCategories($categories);

    */









	}
}
