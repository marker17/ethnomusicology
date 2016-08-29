<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Accession;

use App\Http\Requests;

use App\Category;

use Session;

class CategoryController extends Controller
{   
    
    function __construct()
    {
        $this->middleware('auth');

    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $categories = Category::all();
        return view('categories.index')->withCategories($categories);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
         'category_name' => 'required|max:255'
         ));

        $category = Category::create($request->all());

        Session::flash('success', 'The new category has been saved!');

        return redirect()->route('categories.index', $category->id); //->withCategory($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /**
        $categories = Category::all();

        $accessions = Accession::where('category_id', '=', $category_id)->get();

        return view('categories.show')->withAccession($accessions);
    **/

        $categories = Category::all();
        

        return view('categories.show', compact('accessions', 'categories'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit')->withCategory($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category -> update($request->all());
        Session::flash('success', 'The category has been updated!');

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        
        //Session::flash('success', 'The category was successfully deleted.'); <--/commenting this out since sweetalert has confimation when deleted


        return redirect()->route('categories.index');

        
    }
}

