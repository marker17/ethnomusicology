<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Accession;

use Session;



use App\Category;

class AccessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessions = Accession::orderBy('id')->paginate(20);

        return view('accessions.index')->withAccessions($accessions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories=Category::all();

        return view('accessions.create')->withCategories($categories);
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
            'category_id'   => 'required|integer',
            'length'        => 'numeric',
            'width'         => 'numeric',
            'height'        => 'numeric',
            'diameter'      => 'numeric'

        ));

        
        
        $accession = Accession::create($request->all());
    
    
        Session::flash('success', 'The new accession was successfully saved!');


        return redirect()->route('accessions.show', $accession->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accession = Accession::find($id);


        


        return view('accessions.show')->withAccession($accession);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){



        $accession = Accession::find($id);

        $categories = Category::all();
        $cats = array();
        foreach($categories as $category){

            $cats[$category->id] = $category->name;
        }



        return view('accessions.edit')->withAccession($accession)->withCategories($cats);
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
        $accession = Accession::find($id);

        $this->validate($request, array(
            'category_id' =>'required|integer',
            'length' => 'numeric', 
            'width' => 'numeric',
            'height' => 'numeric',
            'diameter' => 'numeric'

        ));

        $accession = Accession::find($id);

        $accession->update($request->all());


        Session::flash('success', 'The accession was successfully changed!');

        return redirect()->route('accessions.show', $accession->id);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $accession = Accession::find($id);

        $accession->delete();

        Session::flash('success', 'The accession was successfully deleted.');


        return redirect()->route('accessions.index');
    }
}
