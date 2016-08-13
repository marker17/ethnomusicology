<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Accession;

use Session;

class AccessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessions = Accession::all();

        return view('accessions.index')->withAccessions($accessions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('accessions.create');
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
            'length' => 'numeric',
            'width' => 'numeric',
            'height' => 'numeric',
            'diameter' => 'numeric'

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



        return view('accessions.edit')->withAccession($accession);
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
       $this->validate($request, array(
            'length' => 'numeric',
            'width' => 'numeric',
            'height' => 'numeric',
            'diameter' => 'numeric'

        ));

        $accession = Accession::find($id);

        $accession->update($request->all());


        /*

        $accession->title = $request->input('title');
        $accession->category_id = $request->input('category_id');
        $accession->author = $request->input('author');
       
       */
       
        $accession->save();





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
